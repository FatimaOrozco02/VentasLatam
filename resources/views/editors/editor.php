<section>
   <div class="container">
      <div class="col-12 col-sm-12 col-md-12">

         <div class="row">
            <div class="col-12 col-sm-12 col-md-12">

               <div class="mt-4">
                  <h1 class="title h2 mb-0">Editor <span class=" subtitle fs-5 fw-normal ms-2">Consulta de datos editoriales</span></h1>
                  <div class="border-bottom border-3 w-25"></div>
               </div>
               <div class="mt-2 mb-4">
                  <p>SalesCP <i class="fa-solid fa-circle-question"></i></p>
               </div>

               <div class="mb-3">
                  <a type="button" class="btn btn-secondary btn-sm btn-responsivo border-0 text-white rounded-3 py-2 px-4" href="<?= $baseUrl ?>/editar/form">Crear</a>
               </div>

               <div class="row">
                  <div class="col-12 col-sm-12 col-md-7 mb-4">
                     <div class="row">
                        <div class="col-12 col-sm-6 col-md-8 mb-4">
                           <div class="input-group mb-3">
                              <input class="border-right-none form-control" type="search" id="searchEdit" placeholder="Buscar por # de sistema, nombre de cliente o producto">
                              <span class="input-group-text input-group-search" id="basic-addon2"><i class="fa-solid fa-magnifying-glass"></i></span>
                           </div>

                        </div>
                        <div class="col-12 col-sm-12 col-md-4">
                           <select class="form-select" aria-label="Default select example">
                              <option selected>Registro por año</option>
                              <option value="1">2015</option>
                              <option value="2">2016</option>
                              <option value="3">2017</option>
                           </select>
                        </div>
                     </div>
                  </div>

                  <div class="col-12 col-sm-5 col-md-5 mb-5">
                     <div class="row">
                        <div class="col-12 col-sm-2 col-md-6"></div>

                        <div class="col-12 col-sm-10 col-md-6">
                           <input type="text" class="form-control" id="enterprice" value="GDC">
                        </div>
                     </div>
                  </div>
               </div>

               <div class="table-responsive">
                  <table id="tableEdits" class="table table-striped table-hover">
                     <thead class="table-light text-dark fw-semibold" style="--bs-table-bg: #e9ecef;">
                        <tr>
                           <!-- columna 0  -->
                           <th>ID</th>
                           <!-- columna 1  -->
                           <th>Código</th>
                           <!-- columna 2 -->
                           <th>Clientes</th>
                           <!-- columna 3 -->
                           <th>Nombre o descripción</th>
                           <!-- columna 4 -->
                           <th>Presupuesto</th>
                           <!-- columna 5 -->
                           <th>Producto</th>
                           <!-- columna 6 -->
                           <th>Opciones</th>
                        </tr>
                     </thead>
                  </table>
               </div>

            </div>
         </div>

      </div>
   </div>
</section>