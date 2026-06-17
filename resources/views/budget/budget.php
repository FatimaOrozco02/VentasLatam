<div class="pe-5 ps-5">
    <div>
        <div>
            <div class="mt-4">
                <h1 class="title h3 fw-bold  mb-0">Presupuesto asesor <span class=" subtitle fs-5 fw-normal ms-2">Consulta los pronósticos anuales de venta del asesor</span></h1>
                <div class="border-bottom border-3 w-50"></div>
            </div>
            <div>
                <span>SalesCp <i class="fa-solid fa-circle-question" style="color: #050505;"></i></span>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5 mb-5 ">
        <div class="row align-items-center g-3">

            <div class="col-12 col-md-3">
                <div class="input-group border rounded-3 overflow-hidden bg-white">
                    <input type="text" class="form-control border-0 shadow-none py-2 text-secondary ps-3" placeholder="Registro por año">
                    <span class="input-group-text border-0 bg-transparent py-2 pe-3 text-primary">
                        <i class="fa-regular fa-calendar" style="color: #3e91ff;"></i>
                    </span>
                </div>
            </div>

            <div class="col d-none d-md-block"></div>

            <div class="col-12 col-md-auto d-flex justify-content-center gap-2">

                <button class="btn btn-primary rounded-circle d-flex align-items-center justify-content-center p-0 shadow-sm" style="width: 40px; height: 40px;" title="Enviar Reporte">
                    <i class="fa-solid fa-file-import" style="color: #ffff;"></i>
                </button>

                <button class="btn btn-primary rounded-circle d-flex align-items-center justify-content-center p-0 shadow-sm" style="width: 40px; height: 40px;" title="Facturadas">
                    <i class="fa-solid fa-file-lines" style="color: #ffff;"></i>
                </button>

                <button class="btn btn-primary rounded-circle d-flex align-items-center justify-content-center p-0 shadow-sm" style="width: 40px; height: 40px;" title="Adjudicadas">
                    <i class="fa-solid fa-file-invoice-dollar" style="color: #ffff;"></i>
                </button>
            </div>

            <div class="col-12 col-md-3">
                <div class="input-group border rounded-3 overflow-hidden bg-white">
                    <input type="text" class="form-control border-0 shadow-none py-2 text-dark ps-3 fw-medium" placeholder="GDC" value="GDC">
                    <button class="btn border-0 bg-transparent py-2 pe-3 text-primary d-flex align-items-center shadow-none" type="button" title="Refrescar">

                        <i class="fa-solid fa-arrows-rotate" style="color: #3e91ff;"></i>
                    </button>
                </div>
            </div>

        </div>
    </div>


    <div class="container-fluid py-3 mb-5">
        <div class="row g-3">

            <!-- META -->
            <div class="col-12 col-sm-6 col-md-4 col-xl">
                <div class="card stat-card bg-success overflow-hidden rounded-4 border-0" data-target="#metaTable" style="cursor: pointer;">
                    <div class="card-header-1 text-white border-0 py-2 px-3 rounded-top-">
                        <h5 class="mb-2 fs-6 fw-normal">Meta</h5>
                    </div>
                    <div class="card-body bg-body-inner p-3">
                        <div class="d-flex justify-content-between align-items-center border-bottom border-1 pb-2">
                            <span class="stat-number">200</span>
                            <span class="badge bg-success-subtle text-success">
                                +100%
                            </span>
                        </div>
                        <div class="pt-2">
                            <p class="card-text text-muted small mb-0">Monto de venta:<br><span class="diamond-amount">$33,139.16</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CLIENTES -->
            <div class="col-12 col-sm-6 col-md-4 col-xl">
                <div class="card stat-card bg-success overflow-hidden rounded-4 border-0" data-target="#custumerTable" style="cursor: pointer;">
                    <div class="card-header-2 text-white border-0 py-2 px-3 rounded-top-">
                        <h5 class="mb-2 fs-6 fw-normal">Clientes</h5>
                    </div>
                    <div class="card-body bg-body-inner p-3">
                        <div class="d-flex justify-content-between align-items-center border-bottom border-1 pb-2">
                            <span class="stat-number">6</span>
                            <span class="badge bg-success-subtle text-success">
                                +16.7%
                            </span>
                        </div>
                        <div class="pt-2">
                            <p class="card-text text-muted small mb-0">Monto de venta:<br><span class="diamond-amount">$10,000.00</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PRESUPUESTADOS -->
            <div class="col-12 col-sm-6 col-md-4 col-xl">
                <div class="card stat-card bg-success overflow-hidden rounded-4 border-0" data-target="#budgetTable" style="cursor: pointer;">
                    <div class="card-header-3 text-white border-0 py-2 px-3 rounded-top-">
                        <h5 class="mb-2 fs-6 fw-normal">Presupuestados</h5>
                    </div>
                    <div class="card-body bg-body-inner p-3">
                        <div class="d-flex justify-content-between align-items-center border-bottom border-1 pb-2">
                            <span class="stat-number">75</span>
                            <span class="badge bg-success-subtle text-success">
                                1250%
                            </span>
                        </div>
                        <div class="pt-2">
                            <p class="card-text text-muted small mb-0">Monto de venta:<br><span class="diamond-amount">$1,683,572.37</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- No presupuestado -->
            <div class="col-12 col-sm-6 col-md-4 col-xl">
                <div class="card stat-card bg-success overflow-hidden rounded-4 border-0" data-target="#noBudgetTable" style="cursor: pointer;">
                    <div class="card-header-4 text-white border-0 py-2 px-3 rounded-top-">
                        <h5 class="mb-2 fs-6 fw-normal">No presupuestado</h5>
                    </div>
                    <div class="card-body bg-body-inner p-3">
                        <div class="d-flex justify-content-between align-items-center border-bottom border-1 pb-2">
                            <span class="stat-number">2</span>
                            <span class="badge bg-success-subtle text-success">
                                33.3%
                            </span>
                        </div>
                        <div class="pt-2">
                            <p class="card-text text-muted small mb-0">Monto de venta:<br><span class="diamond-amount">$10,639.16</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Por facturar -->
            <div class="col-12 col-sm-6 col-md-4 col-xl">
                <div class="card stat-card bg-success overflow-hidden rounded-4 border-0" data-target="#invoiceTable" style="cursor: pointer;">
                    <div class="card-header-5 text-white border-0 py-2 px-3 rounded-top-">
                        <h5 class="mb-2 fs-6 fw-normal">Por facturar</h5>
                    </div>
                    <div class="card-body bg-body-inner p-3">
                        <div class="d-flex justify-content-between align-items-center border-bottom border-1 pb-2">
                            <span class="stat-number">3</span>
                            <span class="badge bg-danger-subtle text-danger">
                                50%
                            </span>
                        </div>
                        <div class="pt-2">
                            <p class="card-text text-muted small mb-0">Monto de venta:<br><span class="diamond-amount">$12,500.00</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- este mes -->
            <div class="col-12 col-sm-6 col-md-4 col-xl">
                <div class="card stat-card bg-success overflow-hidden rounded-4 border-0" data-target="#thisMonthTable" style="cursor: pointer;">
                    <div class="card-header-6 text-white border-0 py-2 px-3 rounded-top-">
                        <h5 class="mb-2 fs-6 fw-normal">Este mes</h5>
                    </div>
                    <div class="card-body bg-body-inner p-3">
                        <div class="d-flex justify-content-between align-items-center border-bottom border-1 pb-2">
                            <span class="stat-number">11</span>
                            <span class="badge bg-success-subtle text-success">>
                                14.1%
                            </span>
                        </div>
                        <div class="pt-2">
                            <p class="card-text text-muted small mb-0">Monto de venta:<br><span class="diamond-amount">$266,308.69</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="border-bottom border-3 mb-4">
        <h1 class="title h3 fw-bold  mb-0 d-flex justify-content-between ">Presupuesto de ventas - Meta <span class=" subtitle fs-5  ms-2">Monto de venta: $6,862,371.70</span></h1>
    </div>

    <div class="container-fluid mt-3">
        <div class="row align-items-center g-3">

            <div class="col-12 col-md-4 col-lg-3">
                <div class="input-group border rounded-1 bg-white">
                    <input type="text" class="form-control border-0 shadow-none py-1 ps-2 text-secondary" placeholder="Buscar por # de sistema, nombre, editorial o contacto">
                    <span class="input-group-text border-0 bg-transparent py-1 pe-2 text-dark">
                        <i class="fa-brands fa-sistrix"></i>
                    </span>
                </div>
            </div>

            <div class="col-12 col-md-3 col-lg-2">
                <div class="input-group border rounded-1 bg-white">
                    <input type="text" class="form-control border-0 shadow-none py-1 ps-2 text-secondary" placeholder="Filtrar por vendedor">
                    <span class="input-group-text border-0 bg-transparent py-1 pe-2 text-dark">
                        <i class="fa-solid fa-filter"></i>
                    </span>
                </div>
            </div>

            <div class="col-12 col-md-3 col-lg-2">
                <div class="input-group border rounded-1 bg-white">
                    <input type="text" class="form-control border-0 shadow-none py-1 ps-2 text-secondary" placeholder="Filtrar por reporte">
                    <span class="input-group-text border-0 bg-transparent py-1 pe-2 text-dark">
                        <i class="fa-solid fa-filter"></i>
                    </span>
                </div>
            </div>

            <div class="col d-flex justify-content-end">
                <button class="btn btn-primary btn-sm btn-responsivo border-0 text-white rounded-3 py-2 px-4">
                    Ver gráficas
                </button>
            </div>

        </div>
    </div>

    <div class="table-responsive tabla-dinamica">
        <table id="metaTable" class="table table-bordered table-striped align-middle mb-0 text-secondary ">

            <thead class="text-white" style="background-color: #3167a5">
                <tr>
                    <th scope="col" class="py-2 px-3 text-center" style="width: 160px;">País</th>
                    <th scope="col" class="py-2 px-3">Clientes</th>
                    <th scope="col" class="py-2 px-3">Venta</th>
                    <th scope="col" class="py-2 px-3">Presupuesto</th>
                    <th scope="col" class="py-2 px-3">Porcentaje</th>
                </tr>
            </thead>

            <tbody>
            </tbody>
        </table>
    </div>
    
    <div class="table-responsive tabla-dinamica d-none">
        <table id="custumerTable" class="table table-bordered table-striped align-middle mb-0 text-secondary ">

            <thead class="text-white" style="background-color: #3167a5">
                <tr>
                    <th scope="col" class="py-2 px-3 text-center" style="width: 160px;">País</th>
                    <th scope="col" class="py-2 px-3">Clientes</th>
                    <th scope="col" class="py-2 px-3">Venta</th>
                    <th scope="col" class="py-2 px-3">Presupuesto</th>
                    <th scope="col" class="py-2 px-3">Porcentaje</th>
                </tr>
            </thead>

            <tbody>
            </tbody>
        </table>
    </div>

    <div class="table-responsive tabla-dinamica d-none">
        <table id="budgetTable" class="table table-bordered table-striped align-middle mb-0 text-secondary ">

            <thead class="text-white" style="background-color: #3167a5">
                <tr>
                    <th scope="col" class="py-2 px-3 text-center" style="width: 160px;">País</th>
                    <th scope="col" class="py-2 px-3">Clientes</th>
                    <th scope="col" class="py-2 px-3">Venta</th>
                    <th scope="col" class="py-2 px-3">Presupuesto</th>
                    <th scope="col" class="py-2 px-3">Porcentaje</th>
                </tr>
            </thead>

            <tbody>
            </tbody>
        </table>
    </div>

    <div class="table-responsive tabla-dinamica d-none">
        <table id="noBudgetTable" class="table table-bordered table-striped align-middle mb-0 text-secondary ">

            <thead class="text-white" style="background-color: #3167a5">
                <tr>
                    <th scope="col" class="py-2 px-3 text-center" style="width: 160px;">País</th>
                    <th scope="col" class="py-2 px-3">Clientes</th>
                    <th scope="col" class="py-2 px-3">Venta</th>
                    <th scope="col" class="py-2 px-3">Presupuesto</th>
                    <th scope="col" class="py-2 px-3">Porcentaje</th>
                </tr>
            </thead>

            <tbody>
            </tbody>
        </table>
    </div>

    <div class="table-responsive tabla-dinamica d-none">
        <table id="invoiceTable" class="table table-bordered table-striped align-middle mb-0 text-secondary ">

            <thead class="text-white" style="background-color: #3167a5">
                <tr>
                    <th scope="col" class="py-2 px-3 text-center" style="width: 160px;">País</th>
                    <th scope="col" class="py-2 px-3">Clientes</th>
                    <th scope="col" class="py-2 px-3">Venta</th>
                    <th scope="col" class="py-2 px-3">Presupuesto</th>
                    <th scope="col" class="py-2 px-3">Porcentaje</th>
                </tr>
            </thead>

            <tbody>
            </tbody>
        </table>
    </div>

    <div class="table-responsive tabla-dinamica d-none">
        <table id="thisMonthTable" class="table table-bordered table-striped align-middle mb-0 text-secondary ">

            <thead class="text-white" style="background-color: #3167a5">
                <tr>
                    <th scope="col" class="py-2 px-3 text-center" style="width: 160px;">País</th>
                    <th scope="col" class="py-2 px-3">Clientes</th>
                    <th scope="col" class="py-2 px-3">Venta</th>
                    <th scope="col" class="py-2 px-3">Presupuesto</th>
                    <th scope="col" class="py-2 px-3">Porcentaje</th>
                </tr>
            </thead>

            <tbody>
            </tbody>
        </table>
    </div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSendReportAwards">
    Launch static backdrop modal
</button>

<!-- MODAL PRINCIPAL COMPLETO -->
<div class="modal fade" id="modalSendReportAwards" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalPresupuestoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content modal-custom-border rounded-5 p-4 border-4">

            <div class="modal-header border-0 pb-0 d-flex justify-content-end align-items-end">    
                <button type="button" class="btn btn-close-custom  p-0 rounded-circle text-white" data-bs-dismiss="modal" aria-label="Close">
                X
                </button>
            </div>    

            <div class="modal-body p-0">
                <div class="container-fluid px-0">

                    
                    <div class="row g-4 mb-4">

                        <!-- BLOQUE IZQUIERDO -->
                        <div class="col-12 col-md-6">
                            <h6 class="text-dark fw-bold mb-3 d-flex align-items-center gap-2">
                                Enviar estado del presupuesto asesor
                                <i class="fa-regular fa-paper-plane" style="color: #3e91ff;"></i>
                            </h6>
                            <div class="card border border-secondary border-opacity-25 rounded-3 p-3 h-100 bg-white">
                                <div class="row g-3">
                                    <div class="col-6 d-flex flex-column gap-3">
                                        <div class="form-check custom-checkbox-card">
                                            <input class="form-check-input chk-blue" type="checkbox" id="chkCortar" checked>
                                            <label class="form-check-label small text-secondary" for="chkCortar">Cortar al mes actual</label>
                                        </div>
                                        <div class="form-check custom-checkbox-card">
                                            <input class="form-check-input chk-gray" type="checkbox" id="chkMes">
                                            <label class="form-check-label small text-secondary" for="chkMes">Mes actual en adelante</label>
                                        </div>
                                        <div class="form-check custom-checkbox-card">
                                            <input class="form-check-input chk-gray" type="checkbox" id="chkAño">
                                            <label class="form-check-label small text-secondary" for="chkAño">Incluir todo el año</label>
                                        </div>
                                        <div class="form-check custom-checkbox-card">
                                            <input class="form-check-input chk-gray" type="checkbox" id="chkSoloPres">
                                            <label class="form-check-label small text-secondary" for="chkSoloPres">Solo presupuesto</label>
                                        </div>
                                        <div class="form-check custom-checkbox-card">
                                            <input class="form-check-input chk-gray" type="checkbox" id="chkSoloVent">
                                            <label class="form-check-label small text-secondary" for="chkSoloVent">Solo ventas</label>
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex flex-column gap-3">
                                        <div class="form-check custom-checkbox-card">
                                            <input class="form-check-input chk-blue" type="checkbox" id="chkPresVent" checked>
                                            <label class="form-check-label small text-secondary" for="chkPresVent">Presupuesto y ventas</label>
                                        </div>
                                        <div class="form-check custom-checkbox-card">
                                            <input class="form-check-input chk-blue" type="checkbox" id="chkOrdMes" checked>
                                            <label class="form-check-label small text-secondary" for="chkOrdMes">Ordenar por mes</label>
                                        </div>
                                        <div class="form-check custom-checkbox-card">
                                            <input class="form-check-input chk-gray" type="checkbox" id="chkOrdCli">
                                            <label class="form-check-label small text-secondary" for="chkOrdCli">Ordenar por cliente</label>
                                        </div>
                                        <div class="form-check custom-checkbox-card">
                                            <input class="form-check-input chk-blue" type="checkbox" id="chkOrdProd" checked>
                                            <label class="form-check-label small text-secondary" for="chkOrdProd">Ordenar por producto</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- BLOQUE DERECHO -->
                        <div class="col-12 col-md-6">
                            <h6 class="text-dark fw-bold mb-3 d-flex align-items-center gap-2">
                                Destinatarios
                                <i class="fa-regular fa-address-book" style="color: #3e91ff;"></i>
                            </h6>
                            <div class="card border border-secondary border-opacity-25 rounded-3 p-3 h-100 bg-white">
                                <div class="row g-3">
                                    <div class="col-6 d-flex flex-column gap-3">
                                        <div class="form-check custom-checkbox-card">
                                            <input class="form-check-input chk-blue" type="checkbox" id="chkVerioska" checked>
                                            <label class="form-check-label small text-secondary" for="chkVerioska">Verioska Pozo</label>
                                        </div>
                                        <div class="form-check custom-checkbox-card">
                                            <input class="form-check-input chk-gray" type="checkbox" id="chkBarbara">
                                            <label class="form-check-label small text-secondary" for="chkBarbara">Bárbara Villalobos</label>
                                        </div>
                                        <div class="form-check custom-checkbox-card">
                                            <input class="form-check-input chk-gray" type="checkbox" id="chkMelissa">
                                            <label class="form-check-label small text-secondary" for="chkMelissa">Melissa Loreño</label>
                                        </div>
                                        <div class="form-check custom-checkbox-card">
                                            <input class="form-check-input chk-gray" type="checkbox" id="chkCarolina">
                                            <label class="form-check-label small text-secondary" for="chkCarolina">Carolina Castro</label>
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex flex-column gap-3">
                                        <div class="form-check custom-checkbox-card">
                                            <input class="form-check-input chk-blue" type="checkbox" id="chkLola" checked>
                                            <label class="form-check-label small text-secondary" for="chkLola">Lola Bedón</label>
                                        </div>
                                        <div class="form-check custom-checkbox-card">
                                            <input class="form-check-input chk-blue" type="checkbox" id="chkCarla" checked>
                                            <label class="form-check-label small text-secondary" for="chkCarla">Carla Alvarado</label>
                                        </div>
                                        <div class="form-check custom-checkbox-card">
                                            <input class="form-check-input chk-gray" type="checkbox" id="chkFernanda">
                                            <label class="form-check-label small text-secondary" for="chkFernanda">Fernanda Gutiérrez</label>
                                        </div>
                                        <div class="form-check custom-checkbox-card">
                                            <input class="form-check-input chk-blue" type="checkbox" id="chkDiana" checked>
                                            <label class="form-check-label small text-secondary" for="chkDiana">Diana Chávez</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="mb-4 mt-5">
                        <h6 class="text-dark fw-bold mb-2 d-flex align-items-center gap-2">
                            Correo
                            <i class="fa-regular fa-envelope" style="color: #3e91ff;"></i>
                        </h6>
                        <textarea class="form-control border border-secondary border-opacity-25 rounded-2 p-3 text-secondary" id="txtCuerpoMensaje" rows="5" placeholder="Cuerpo del mensaje"></textarea>
                    </div>
                    <div class="modal-footer border-0 d-flex justify-content-center gap-3 pt-3">
                        <button type="button" class="btn btn-primary rounded-3 px-4 py-2 fw-medium">Generar Excel</button>
                        <button type="button" class="btn btn-primary rounded-3 px-4 py-2 fw-medium">Guardar</button>
                        <button type="button" class="btn btn-light rounded-3 px-4 py-2 text-dark border-0 fw-medium" data-bs-dismiss="modal" style="background-color: #e9ecef;">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
