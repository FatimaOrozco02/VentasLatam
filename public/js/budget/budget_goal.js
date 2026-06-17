$(document).ready(function() {
    
    const datosEjemplo =[
        {
 
      "country": "Costa Rica",
      "custumer": "Instituto Tecnológico de Costa Rica",
      "sale": "0.00",
      "budget": "112,962.69",
      "percent": "-null%",
      "productos_hijos": [
        {
          "product": "Bibliotechnia",
          "advisor": "Melissa Loreño",
          "sale_2026": "0.00",
          "month_sale": "Enero",
          "budget_2026": "5,000",
          "month_budget": "Noviembre"
        },
        {
          "product": "Taylor eBooks",
          "advisor": "Melissa Loreño",
          "sale_2026": "0.00",
          "month_sale": "Enero",
          "budget_2026": "30,000",
          "month_budget": "Noviembre"
        }
    ]
},
{
    "country": "Perú",
      "custumer": "Instituto Tecnológico de Costa Rica",
      "sale": "0.00",
      "budget": "112,962.69",
      "percent": "-null%",
      "productos_hijos": [
        {
          "product": "Bibliotechnia",
          "advisor": "Melissa Loreño",
          "sale_2026": "0.00",
          "month_sale": "Enero",
          "budget_2026": "5,000",
          "month_budget": "Noviembre"
        },
        {
          "product": "Taylor eBooks",
          "advisor": "Melissa Loreño",
          "sale_2026": "0.00",
          "month_sale": "Enero",
          "budget_2026": "30,000",
          "month_budget": "Noviembre"
        }
    ]
},
{
    "country": "Ecuador",
      "custumer": "Instituto Tecnológico de Costa Rica",
      "sale": "0.00",
      "budget": "112,962.69",
      "percent": "-null%",
}

      
  ]

  
    
    // Escucha el evento click en todas las tarjetas que tienen data-target
    $('.card[data-target]').on('click', function() {
        // Obtiene el ID de la tabla destino (ej. #budgetTable)
        var targetTableId = $(this).data('target');
        
        
        $('.tabla-dinamica').addClass('d-none');
        
        
        $(targetTableId).closest('.tabla-dinamica').removeClass('d-none');
    });

    // para abrir el modal

     $("#btn-send, #bnt-awarded").on("click",  function() {
        $("#modalSendReportAwards2").modal("show");
    });






    // Para la tabla de Meta
    const metaTable2 = $("#metaTable2");

    const TableAdvisor2 = metaTable2.DataTable({
        layout: {
            topStart: 'pageLength',
            topEnd: '',
            bottomStart: 'paging',
            bottomEnd: ''
        },
        responsive: true,
        language: {
            "lengthMenu": "",
            "zeroRecords": "No se encontraron registros",
            "info": "",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search": "Buscar",
            "emptyTable": "No hay datos disponibles en la tabla",
            "paginate": {
                "first": "",
                "last": "",
                "next": " >>",
                "previous": "<< "
            }
        },
        // Clases de los componentes del DataTable
        initComplete: function() {
            $(`.dt-search`).addClass("d-flex align-items-center gap-3");
            $(`.dt-search input`).addClass("form-control me-1");
            $(`.dt-length label`).addClass("d-flex align-items-center gap-3");
            $(`.dt-length select`).addClass("form-select w-70px");
            $(`.dt-paging nav[aria-label='pagination']`).addClass("d-flex justify-content-end align-items-center gap-2");
            $(`.dt-paging-button`).addClass("p-0 rounded-2 fw-bold");
            $(`.dt-paging-button`).css("color","var(--color_light_blue)!important");
        },

        // ajax:{
        //     url:'',
        //     type:"GET",
        //     dataSrc:"data"
            data: datosEjemplo,
        // }
        "columns": [
            {
                "data": "country",
                "orderable": false,
                "className": "dt-control-custom py-2 px-3", 
                "render": function(data) {
                    
                    return `
                        <i class="fa-solid fa-square-plus" style="color: #3e91ff;"></i>
                        <span class="ms-1 align-middle">${data}</span>
                    `;
                }
            },
            { "data": "custumer", "orderable": false },
            { "data": "sale", "orderable": false },
            { "data": "budget", "orderable": false },
            { "data": "percent", "orderable": false }
        ],

    });

    // PARA VER LO DESPEGABLE DE CADA PAÍS
    $('#metaTable2 tbody').on('click', 'td.dt-control-custom', function () {
        const tr = $(this).closest('tr');
        const row = TableAdvisor2.row(tr);

        const icon = tr.find('td.dt-control-custom i');
        
        if (row.child.isShown()) {
            row.child.hide();
            tr.removeClass('shown');
            icon.removeClass('fa-square-minus').addClass('fa-square-plus').css("color", "#3e91ff");
        
        } else {
            
            const rowDate = row.data();
            
            row.child(generarSubtablaDinamica(rowDate.productos_hijos)).show();
            tr.addClass('shown');
            icon.removeClass('fa-square-plus').addClass('fa-square-minus').css("color", "#dc3545");
            
        }
    });


    // Función que lee el sub-arreglo del AJAX y fabrica las filas internas
    function generarSubtablaDinamica(product) {
        if (!product || product.length === 0) {
            return '<div class="p-3 text-muted text-center">No hay productos registrados para este cliente.</div>';
        }

        let htmlSubtabla = `
            <div class="p-3 bg-light border-start border-end">
                <table id="metaSubTable" class="table table-dark align-middle mb-0">
                    <thead>
                        <tr>
                            <th class="py-2 px-3 text-white">Productos</th>
                            <th class="py-2 px-3 text-white">Asesor comercial</th>
                            <th class="py-2 px-3 text-white">Venta 2026</th>
                            <th class="py-2 px-3 text-white">Mes</th>
                            <th class="py-2 px-3 text-white">Presupuesto 2026</th>
                            <th class="py-2 px-3 text-white">Mes</th>
                        </tr>
                    </thead>
                    <tbody>`;

        
        product.forEach(function(prod) {
            htmlSubtabla += `
                <tr>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.product}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.advisor}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.sale_2026}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.month_sale}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.budget_2026}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.month_budget}</td>
                </tr>`;
        });

        htmlSubtabla += `</tbody></table></div>`;
        return htmlSubtabla;
    }


    // Para la tabla de clientes
        const custumerTable2 = $("#custumerTable2");

    const TableAdvisorC2 = custumerTable2.DataTable({
        layout: {
            topStart: 'pageLength',
            topEnd: '',
            bottomStart: 'paging',
            bottomEnd: ''
        },
        responsive: true,
        language: {
            "lengthMenu": "",
            "zeroRecords": "No se encontraron registros",
            "info": "",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search": "Buscar",
            "emptyTable": "No hay datos disponibles en la tabla",
            "paginate": {
                "first": "",
                "last": "",
                "next": " >>",
                "previous": "<< "
            }
        },
        // Clases de los componentes del DataTable
        initComplete: function() {
            $(`.dt-search`).addClass("d-flex align-items-center gap-3");
            $(`.dt-search input`).addClass("form-control me-1");
            $(`.dt-length label`).addClass("d-flex align-items-center gap-3");
            $(`.dt-length select`).addClass("form-select w-70px");
            $(`.dt-paging nav[aria-label='pagination']`).addClass("d-flex justify-content-end align-items-center gap-2");
            $(`.dt-paging-button`).addClass("p-0 rounded-2 fw-bold");
            $(`.dt-paging-button`).css("color","var(--color_light_blue)!important");
        },

        // ajax:{
        //     url:'',
        //     type:"GET",
        //     dataSrc:"data"
            data: datosEjemplo,
        // }
        "columns": [
            {
                "data": "country",
                "orderable": false,
                "className": "dt-control-custom py-2 px-3", 
                "render": function(data) {
                    
                    return `
                        <i class="fa-solid fa-square-plus" style="color: #3e91ff;"></i>
                        <span class="ms-1 align-middle">${data}</span>
                    `;
                }
            },
            { "data": "custumer", "orderable": false },
            { "data": "sale", "orderable": false },
            { "data": "budget", "orderable": false },
            { "data": "percent", "orderable": false }
        ],

    });

    // PARA VER LO DESPEGABLE DE CADA PAÍS
    $('#custumerTable2 tbody').on('click', 'td.dt-control-custom', function () {
        const tr = $(this).closest('tr');
        const row = TableAdvisorC2.row(tr);

        const icon = tr.find('td.dt-control-custom i');
        
        if (row.child.isShown()) {
            row.child.hide();
            tr.removeClass('shown');
            icon.removeClass('fa-square-minus').addClass('fa-square-plus').css("color", "#3e91ff");
        
        } else {
            
            const rowDate = row.data();
            
            row.child(generarSubtablaDinamica(rowDate.productos_hijos)).show();
            tr.addClass('shown');
            icon.removeClass('fa-square-plus').addClass('fa-square-minus').css("color", "#dc3545");
            
        }
    });


    // Función que lee el sub-arreglo del AJAX y fabrica las filas internas
    function generarSubtablaDinamica(product) {
        if (!product || product.length === 0) {
            return '<div class="p-3 text-muted text-center">No hay productos registrados para este cliente.</div>';
        }

        let htmlSubtablaC = `
            <div class="p-3 bg-light border-start border-end">
                <table id="metaSubTable" class="table table-dark align-middle mb-0">
                    <thead>
                        <tr>
                            <th class="py-2 px-3 text-white">Productos</th>
                            <th class="py-2 px-3 text-white">Asesor comercial</th>
                            <th class="py-2 px-3 text-white">Venta 2026</th>
                            <th class="py-2 px-3 text-white">Mes</th>
                            <th class="py-2 px-3 text-white">Presupuesto 2026</th>
                            <th class="py-2 px-3 text-white">Mes</th>
                        </tr>
                    </thead>
                    <tbody>`;

        
        product.forEach(function(prod) {
            htmlSubtablaC += `
                <tr>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.product}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.advisor}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.sale_2026}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.month_sale}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.budget_2026}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.month_budget}</td>
                </tr>`;
        });

        htmlSubtablaC += `</tbody></table></div>`;
        return htmlSubtablaC;
    }


    // Para la tabla de presupuestos
        const budgetTable2 = $("#budgetTable2");

    const TableAdvisorP2 = budgetTable2.DataTable({
        layout: {
            topStart: 'pageLength',
            topEnd: '',
            bottomStart: 'paging',
            bottomEnd: ''
        },
        responsive: true,
        language: {
            "lengthMenu": "",
            "zeroRecords": "No se encontraron registros",
            "info": "",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search": "Buscar",
            "emptyTable": "No hay datos disponibles en la tabla",
            "paginate": {
                "first": "",
                "last": "",
                "next": " >>",
                "previous": "<< "
            }
        },
        // Clases de los componentes del DataTable
        initComplete: function() {
            $(`.dt-search`).addClass("d-flex align-items-center gap-3");
            $(`.dt-search input`).addClass("form-control me-1");
            $(`.dt-length label`).addClass("d-flex align-items-center gap-3");
            $(`.dt-length select`).addClass("form-select w-70px");
            $(`.dt-paging nav[aria-label='pagination']`).addClass("d-flex justify-content-end align-items-center gap-2");
            $(`.dt-paging-button`).addClass("p-0 rounded-2 fw-bold");
            $(`.dt-paging-button`).css("color","var(--color_light_blue)!important");
        },

        // ajax:{
        //     url:'',
        //     type:"GET",
        //     dataSrc:"data"
            data: datosEjemplo,
        // }
        "columns": [
            {
                "data": "country",
                "orderable": false,
                "className": "dt-control-custom py-2 px-3", 
                "render": function(data) {
                    
                    return `
                        <i class="fa-solid fa-square-plus" style="color: #3e91ff;"></i>
                        <span class="ms-1 align-middle">${data}</span>
                    `;
                }
            },
            { "data": "custumer", "orderable": false },
            { "data": "sale", "orderable": false },
            { "data": "budget", "orderable": false },
            { "data": "percent", "orderable": false }
        ],

    });

    // PARA VER LO DESPEGABLE DE CADA PAÍS
    $('#budgetTable2 tbody').on('click', 'td.dt-control-custom', function () {
        const tr = $(this).closest('tr');
        const row = TableAdvisorP2.row(tr);

        const icon = tr.find('td.dt-control-custom i');
        
        if (row.child.isShown()) {
            row.child.hide();
            tr.removeClass('shown');
            icon.removeClass('fa-square-minus').addClass('fa-square-plus').css("color", "#3e91ff");
        
        } else {
            
            const rowDate = row.data();
            
            row.child(generarSubtablaDinamica(rowDate.productos_hijos)).show();
            tr.addClass('shown');
            icon.removeClass('fa-square-plus').addClass('fa-square-minus').css("color", "#dc3545");
            
        }
    });


    // Función que lee el sub-arreglo del AJAX y fabrica las filas internas
    function generarSubtablaDinamica(product) {
        if (!product || product.length === 0) {
            return '<div class="p-3 text-muted text-center">No hay productos registrados para este cliente.</div>';
        }

        let htmlSubtablaP = `
            <div class="p-3 bg-light border-start border-end">
                <table id="metaSubTable" class="table table-dark align-middle mb-0">
                    <thead>
                        <tr>
                            <th class="py-2 px-3 text-white">Productos</th>
                            <th class="py-2 px-3 text-white">Asesor comercial</th>
                            <th class="py-2 px-3 text-white">Venta 2026</th>
                            <th class="py-2 px-3 text-white">Mes</th>
                            <th class="py-2 px-3 text-white">Presupuesto 2026</th>
                            <th class="py-2 px-3 text-white">Mes</th>
                        </tr>
                    </thead>
                    <tbody>`;

        
        product.forEach(function(prod) {
            htmlSubtablaP += `
                <tr>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.product}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.advisor}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.sale_2026}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.month_sale}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.budget_2026}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.month_budget}</td>
                </tr>`;
        });

        htmlSubtablaP += `</tbody></table></div>`;
        return htmlSubtablaP;
    }


    
    // Para la tabla de NO PRESUPUESTADOS
        const noBudgetTable2 = $("#noBudgetTable2");

    const TableAdvisorNP2 = noBudgetTable2.DataTable({
        layout: {
            topStart: 'pageLength',
            topEnd: '',
            bottomStart: 'paging',
            bottomEnd: ''
        },
        responsive: true,
        language: {
            "lengthMenu": "",
            "zeroRecords": "No se encontraron registros",
            "info": "",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search": "Buscar",
            "emptyTable": "No hay datos disponibles en la tabla",
            "paginate": {
                "first": "",
                "last": "",
                "next": " >>",
                "previous": "<< "
            }
        },
        // Clases de los componentes del DataTable
        initComplete: function() {
            $(`.dt-search`).addClass("d-flex align-items-center gap-3");
            $(`.dt-search input`).addClass("form-control me-1");
            $(`.dt-length label`).addClass("d-flex align-items-center gap-3");
            $(`.dt-length select`).addClass("form-select w-70px");
            $(`.dt-paging nav[aria-label='pagination']`).addClass("d-flex justify-content-end align-items-center gap-2");
            $(`.dt-paging-button`).addClass("p-0 rounded-2 fw-bold");
            $(`.dt-paging-button`).css("color","var(--color_light_blue)!important");
        },

        // ajax:{
        //     url:'',
        //     type:"GET",
        //     dataSrc:"data"
            data: datosEjemplo,
        // }
        "columns": [
            {
                "data": "country",
                "orderable": false,
                "className": "dt-control-custom py-2 px-3", 
                "render": function(data) {
                    
                    return `
                        <i class="fa-solid fa-square-plus" style="color: #3e91ff;"></i>
                        <span class="ms-1 align-middle">${data}</span>
                    `;
                }
            },
            { "data": "custumer", "orderable": false },
            { "data": "sale", "orderable": false },
            { "data": "budget", "orderable": false },
            { "data": "percent", "orderable": false }
        ],

    });

    // PARA VER LO DESPEGABLE DE CADA PAÍS
    $('#noBudgetTable2 tbody').on('click', 'td.dt-control-custom', function () {
        const tr = $(this).closest('tr');
        const row = TableAdvisorNP2.row(tr);

        const icon = tr.find('td.dt-control-custom i');
        
        if (row.child.isShown()) {
            row.child.hide();
            tr.removeClass('shown');
            icon.removeClass('fa-square-minus').addClass('fa-square-plus').css("color", "#3e91ff");
        
        } else {
            
            const rowDate = row.data();
            
            row.child(generarSubtablaDinamica(rowDate.productos_hijos)).show();
            tr.addClass('shown');
            icon.removeClass('fa-square-plus').addClass('fa-square-minus').css("color", "#dc3545");
            
        }
    });


    // Función que lee el sub-arreglo del AJAX y fabrica las filas internas
    function generarSubtablaDinamica(product) {
        if (!product || product.length === 0) {
            return '<div class="p-3 text-muted text-center">No hay productos registrados para este cliente.</div>';
        }

        let htmlSubtablaNP = `
            <div class="p-3 bg-light border-start border-end">
                <table id="metaSubTable" class="table table-dark align-middle mb-0">
                    <thead>
                        <tr>
                            <th class="py-2 px-3 text-white">Productos</th>
                            <th class="py-2 px-3 text-white">Asesor comercial</th>
                            <th class="py-2 px-3 text-white">Venta 2026</th>
                            <th class="py-2 px-3 text-white">Mes</th>
                            <th class="py-2 px-3 text-white">Presupuesto 2026</th>
                            <th class="py-2 px-3 text-white">Mes</th>
                        </tr>
                    </thead>
                    <tbody>`;

        
        product.forEach(function(prod) {
            htmlSubtablaNP += `
                <tr>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.product}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.advisor}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.sale_2026}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.month_sale}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.budget_2026}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.month_budget}</td>
                </tr>`;
        });

        htmlSubtablaNP += `</tbody></table></div>`;
        return htmlSubtablaNP;
    }


      // Para la tabla de POR FACTURAR
        const invoiceTable2 = $("#invoiceTable2");

    const TableAdvisorF2 = invoiceTable2.DataTable({
        layout: {
            topStart: 'pageLength',
            topEnd: '',
            bottomStart: 'paging',
            bottomEnd: ''
        },
        responsive: true,
        language: {
            "lengthMenu": "",
            "zeroRecords": "No se encontraron registros",
            "info": "",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search": "Buscar",
            "emptyTable": "No hay datos disponibles en la tabla",
            "paginate": {
                "first": "",
                "last": "",
                "next": " >>",
                "previous": "<< "
            }
        },
        // Clases de los componentes del DataTable
        initComplete: function() {
            $(`.dt-search`).addClass("d-flex align-items-center gap-3");
            $(`.dt-search input`).addClass("form-control me-1");
            $(`.dt-length label`).addClass("d-flex align-items-center gap-3");
            $(`.dt-length select`).addClass("form-select w-70px");
            $(`.dt-paging nav[aria-label='pagination']`).addClass("d-flex justify-content-end align-items-center gap-2");
            $(`.dt-paging-button`).addClass("p-0 rounded-2 fw-bold");
            $(`.dt-paging-button`).css("color","var(--color_light_blue)!important");
        },

        // ajax:{
        //     url:'',
        //     type:"GET",
        //     dataSrc:"data"
            data: datosEjemplo,
        // }
        "columns": [
            {
                "data": "country",
                "orderable": false,
                "className": "dt-control-custom py-2 px-3", 
                "render": function(data) {
                    
                    return `
                        <i class="fa-solid fa-square-plus" style="color: #3e91ff;"></i>
                        <span class="ms-1 align-middle">${data}</span>
                    `;
                }
            },
            { "data": "custumer", "orderable": false },
            { "data": "sale", "orderable": false },
            { "data": "budget", "orderable": false },
            { "data": "percent", "orderable": false }
        ],

    });

    // PARA VER LO DESPEGABLE DE CADA PAÍS
    $('#invoiceTable2 tbody').on('click', 'td.dt-control-custom', function () {
        const tr = $(this).closest('tr');
        const row = TableAdvisorF2.row(tr);

        const icon = tr.find('td.dt-control-custom i');
        
        if (row.child.isShown()) {
            row.child.hide();
            tr.removeClass('shown');
            icon.removeClass('fa-square-minus').addClass('fa-square-plus').css("color", "#3e91ff");
        
        } else {
            
            const rowDate = row.data();
            
            row.child(generarSubtablaDinamica(rowDate.productos_hijos)).show();
            tr.addClass('shown');
            icon.removeClass('fa-square-plus').addClass('fa-square-minus').css("color", "#dc3545");
            
        }
    });


    // Función que lee el sub-arreglo del AJAX y fabrica las filas internas
    function generarSubtablaDinamica(product) {
        if (!product || product.length === 0) {
            return '<div class="p-3 text-muted text-center">No hay productos registrados para este cliente.</div>';
        }

        let htmlSubtablaF = `
            <div class="p-3 bg-light border-start border-end">
                <table id="metaSubTable" class="table table-dark align-middle mb-0">
                    <thead>
                        <tr>
                            <th class="py-2 px-3 text-white">Productos</th>
                            <th class="py-2 px-3 text-white">Asesor comercial</th>
                            <th class="py-2 px-3 text-white">Venta 2026</th>
                            <th class="py-2 px-3 text-white">Mes</th>
                            <th class="py-2 px-3 text-white">Presupuesto 2026</th>
                            <th class="py-2 px-3 text-white">Mes</th>
                        </tr>
                    </thead>
                    <tbody>`;

        
        product.forEach(function(prod) {
            htmlSubtablaF += `
                <tr>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.product}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.advisor}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.sale_2026}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.month_sale}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.budget_2026}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.month_budget}</td>
                </tr>`;
        });

        htmlSubtablaF += `</tbody></table></div>`;
        return htmlSubtablaF;
    }



    
      // Para la tabla de ESTE MES
        const thisMonthTable2 = $("#thisMonthTable2");

    const TableAdvisorM2 = thisMonthTable2.DataTable({
        layout: {
            topStart: 'pageLength',
            topEnd: '',
            bottomStart: 'paging',
            bottomEnd: ''
        },
        responsive: true,
        language: {
            "lengthMenu": "",
            "zeroRecords": "No se encontraron registros",
            "info": "",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search": "Buscar",
            "emptyTable": "No hay datos disponibles en la tabla",
            "paginate": {
                "first": "",
                "last": "",
                "next": " >>",
                "previous": "<< "
            }
        },
        // Clases de los componentes del DataTable
        initComplete: function() {
            $(`.dt-search`).addClass("d-flex align-items-center gap-3");
            $(`.dt-search input`).addClass("form-control me-1");
            $(`.dt-length label`).addClass("d-flex align-items-center gap-3");
            $(`.dt-length select`).addClass("form-select w-70px");
            $(`.dt-paging nav[aria-label='pagination']`).addClass("d-flex justify-content-end align-items-center gap-2");
            $(`.dt-paging-button`).addClass("p-0 rounded-2 fw-bold");
            $(`.dt-paging-button`).css("color","var(--color_light_blue)!important");
        },

        // ajax:{
        //     url:'',
        //     type:"GET",
        //     dataSrc:"data"
            data: datosEjemplo,
        // }
        "columns": [
            {
                "data": "country",
                "orderable": false,
                "className": "dt-control-custom py-2 px-3", 
                "render": function(data) {
                    
                    return `
                        <i class="fa-solid fa-square-plus" style="color: #3e91ff;"></i>
                        <span class="ms-1 align-middle">${data}</span>
                    `;
                }
            },
            { "data": "custumer", "orderable": false },
            { "data": "sale", "orderable": false },
            { "data": "budget", "orderable": false },
            { "data": "percent", "orderable": false }
        ],

    });

    // PARA VER LO DESPEGABLE DE CADA PAÍS
    $('#thisMonthTable2 tbody').on('click', 'td.dt-control-custom', function () {
        const tr = $(this).closest('tr');
        const row = TableAdvisorM2.row(tr);

        const icon = tr.find('td.dt-control-custom i');
        
        if (row.child.isShown()) {
            row.child.hide();
            tr.removeClass('shown');
            icon.removeClass('fa-square-minus').addClass('fa-square-plus').css("color", "#3e91ff");
        
        } else {
            
            const rowDate = row.data();
            
            row.child(generarSubtablaDinamica(rowDate.productos_hijos)).show();
            tr.addClass('shown');
            icon.removeClass('fa-square-plus').addClass('fa-square-minus').css("color", "#dc3545");
            
        }
    });


    // Función que lee el sub-arreglo del AJAX y fabrica las filas internas
    function generarSubtablaDinamica(product) {
        if (!product || product.length === 0) {
            return '<div class="p-3 text-muted text-center">No hay productos registrados para este cliente.</div>';
        }

        let htmlSubtablaM = `
            <div class="p-3 bg-light border-start border-end">
                <table id="metaSubTable" class="table table-dark align-middle mb-0">
                    <thead>
                        <tr>
                            <th class="py-2 px-3 text-white">Productos</th>
                            <th class="py-2 px-3 text-white">Asesor comercial</th>
                            <th class="py-2 px-3 text-white">Venta 2026</th>
                            <th class="py-2 px-3 text-white">Mes</th>
                            <th class="py-2 px-3 text-white">Presupuesto 2026</th>
                            <th class="py-2 px-3 text-white">Mes</th>
                        </tr>
                    </thead>
                    <tbody>`;

        
        product.forEach(function(prod) {
            htmlSubtablaM += `
                <tr>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.product}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.advisor}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.sale_2026}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.month_sale}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.budget_2026}</td>
                    <td class="py-2 px-3 text-secondary bg-white">${prod.month_budget}</td>
                </tr>`;
        });

        htmlSubtablaM += `</tbody></table></div>`;
        return htmlSubtablaM;
    }


});


