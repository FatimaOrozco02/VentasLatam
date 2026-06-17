<section>
   <div class="container">
      <div class="col-12 col-sm-12 col-md-12">

         <div class="row">
            <div class="col-12 col-sm-12 col-md-12">

               <div class="mt-4">
                  <h1 class="title h2 mb-0">Clientes <span class=" subtitle fs-5 fw-normal ms-2">Consulta y edita la información de los clientes
                     </span></h1>
                  <div class="border-bottom border-3 w-25"></div>
               </div>
               <div class="mt-2 mb-4">
                  <p>SalesCP <i class="fa-solid fa-circle-question"></i></p>
               </div>

               <div class="mb-3">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#clientModal">
                     Crear
                  </button>
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
                           <th>Nombre o descripción</th>
                           <!-- columna 2 -->
                           <th>Iniciales</th>
                           <!-- columna 3 -->
                           <th>Opciones</th>
                        </tr>
                     </thead>
                  </table>
               </div>

            </div>
         </div>

         <!-- Modal -->
         <div class="modal fade" id="clientModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="clientModalLabel">
            <div class="modal-dialog modal-dialog-centered">
               <div class="modal-content">
                  <div class="modal-header">
                     <h1 class="modal-title fs-5" id="clientModalLabel">Editar información</h1>
                     <button type="button" class="btn-close button-close-modal" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-circle-xmark fa-2x color-main"></i></button>
                  </div>
                  <div class="modal-body">
                     <form>
                        <div class="mb-3">
                           <label for="name" class="form-label">Cambiar nombre</label>
                           <input type="text" class="form-control" id="name" name="editorName">
                        </div>
                        <div class="mb-3">
                           <label for="initials" class="form-label">Iniciales</label>
                           <input type="password" class="form-control" id="initials" name="editorInitials">
                        </div>
                        <div class="mb-3">
                           <label for="email" class="form-label">Correo</label>
                           <input type="email" class="form-control" id="email" name="editorEmail">
                        </div>

                        <div class="text-center mt-4 mb-3">
                           <button type="submit" class="btn btn-primary">Guardar</button>
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        </div>

                     </form>
                  </div>

               </div>
            </div>
         </div>

      </div>
   </div>
</section>