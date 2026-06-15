$(document).ready(function(){

    const historicalTable = $("#historicalTable");

    const datosEjemplo=[
        {
            "id":1,
            "user":"Administrador de sistema",
            "date_hour": "2018-01-04  21:41:49",
            "records":0,
            "error":0,
        },
         {
            "id":1,
            "user":"Administrador de sistema",
            "date_hour": "2018-01-04  21:41:49",
            "records":0,
            "error":0,
        },
         {
            "id":1,
            "user":"Administrador de sistema",
            "date_hour": "2018-01-04  21:41:49",
            "records":0,
            "error":0,
        },
         {
            "id":1,
            "user":"Administrador de sistema",
            "date_hour": "2018-01-04  21:41:49",
            "records":0,
            "error":0,
        },

    ]

    const tableH = historicalTable.DataTable({
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
        columns:[
            {data:"id", orderable:false},
            {data:"user", orderable:false},
            {data:"date_hour", orderable:false},
            {data:"records", orderable:false},
            {data:"error", orderable:false},
            {
                data:"id",
                orderable:false,
                render: function(data,){
                    return`
                    <div class="text-center">
                    <button class="btn border-0  btn-sm view-btn " data-id="${data}"title="Ver"> <i class="fa-solid fa-circle-exclamation" style="color: #3e91ff; font-size: 22px;"></i></button>
                    <button class="btn border-0  btn-sm delete-btn " data-id="${data}"title="información"> <i class="fa-solid fa-circle-question" style="color: #3e91ff; font-size: 22px;"></i></button>
                    </div>`;
                }

            }
        ],   
    });


    $("#importFile").on("click",  function() {
        $("#modalMatter").modal("show");
    });




})