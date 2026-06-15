<div class="pe-5 ps-5">
    <div>
        <div class="mt-4">
            <h1 class="title h3 fw-bold  mb-0">GDC <span class=" subtitle fs-5 fw-normal ms-2">Consulta el histórico de importaciones realizadas</span></h1>
            <div class="border-bottom border-3 w-25"></div>
        </div>
        <div>
            <span>SalesCp <i class="fa-solid fa-circle-question" style="color: #050505;"></i></span>
        </div>
    </div>


    <div class="mt-5 mb-3 d-flex justify-content-between align-items-center">
        <button id="importFile"class="btn btn-primary btn-sm btn-responsivo border-0 text-white rounded-3 py-2 px-4">Importar CSV</button>
    </div>

    <div class="mb-3" style="max-width: 130px;">
        <div class="input-group border rounded bg-white">
            <input type="text" class="form-control border-0 bg-transparent shadow-none py-1 ps-2" placeholder="Código" aria-label="Código">
            <span class="input-group-text border-0 bg-transparent py-1 pe-2">
                <i class="fa-solid fa-magnifying-glass" style="color: #050505;"></i>
            </span>
        </div>
    </div>

    <div class="table-responsive">

        <table id="historicalTable" class="table table-bordered table-striped align-middle mb-0 text-secondary">

            <thead class="table-light text-dark fw-semibold">
                <tr>
                    <th scope="col" class="py-2 px-3">Código</th>
                    <th scope="col" class="py-2 px-3">Usuario</th>
                    <th scope="col" class="py-2 px-3">Fecha y hora</th>
                    <th scope="col" class="py-2 px-3">Registros</th>
                    <th scope="col" class="py-2 px-3">Errores</th>
                    <th scope="col" class="py-2 px-3 text-center">Reporte</th>
                </tr>
            </thead>

            <tbody>
            </tbody>
        </table>
    </div>

</div>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalMatter">
    Launch static backdrop modal
</button> -->

<div class="modal fade" id="modalMatter" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalImportarCSVLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-custom-border rounded-5 p-4 border-4">
            
            <div class="modal-header border-0 pb-0 d-flex justify-content-between align-items-center border-bottom border-3">
                <h5 class="modal-title fw-bold text-dark fs-5 b-2" id="modalImportarCSVLabel">Importar CSV</h5>

                <button type="button" class="btn btn-close-custom d-flex align-items-center justify-content-center p-0 rounded-circle text-white" data-bs-dismiss="modal" aria-label="Close"> X

                </button>
            </div>
        
            <div class="modal-body pt-0 px-3 mt-4">
                <label for="formFileCustom" class="form-label text-dark fw-medium mb-3">Seleccionar archivo:</label>
                
                <div class="input-group border rounded-1 overflow-hidden">
                    <input type="file" class="form-control d-none" id="formFileCustom">
                    <label class="input-group-text bg-secondary text-white border-0 px-3 py-2 cursor-pointer" for="formFileCustom" style="cursor: pointer;">
                        Seleccionar archivo
                    </label>
                    <span class="form-control border-0 bg-white py-2 text-secondary" id="file-name-placeholder">
                        Ningún archivo seleccionado
                    </span>
                </div>
            </div>

            
            <div class="modal-footer border-0 d-flex justify-content-center gap-3 pt-3">
                <button type="button" class="btn btn-primary rounded-3 px-4 py-2 fw-medium">Descargar formato</button>
                <button type="button" class="btn btn-light rounded-3 px-4 py-2 text-dark border-0 fw-medium" data-bs-dismiss="modal" style="background-color: #e9ecef;">Cancelar</button>
            </div>

        </div>
    </div>
</div>