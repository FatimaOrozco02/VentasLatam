<section>
   <div class="container">
      <div class="col-12 col-sm-12 col-md-12 mb-5">

         <div class="mt-4">
            <h1 class="title h2 mb-0">Agregar registro <span class=" subtitle fs-5 fw-normal ms-2">Formulario de nuevo registro</span></h1>
            <div class="border-bottom border-3 w-25"></div>
         </div>
         <div class="mt-2 mb-4">
            <p>SalesCP <i class="fa-solid fa-circle-question"></i></p>
         </div>

         <div class="mb-3">
            <a type="button" class="btn btn-secondary btn-sm btn-responsivo border-0 text-white rounded-3 py-2 px-4" href="<?= $baseUrl ?>/editar">Regresar</a>
         </div>

         <form id="formEdit">
            <div class="row">
               <div class="col-12 col-sm-8 col-md-6">
                  <div class="row">
                     <div class="col-12 col-sm-6 col-md-6">
                        <div class="mb-3">
                           <label for="salesDivision" class="form-label subtitle">División*</label>
                           <input type="text" class="form-control" id="salesDivision" name="division">
                        </div>
                     </div>
                     <div class="col-12 col-sm-6 col-md-6">
                        <div class="mb-3">
                           <label for="salesTerritory" class="form-label subtitle">Territorio*</label>
                           <input type="text" class="form-control" id="salesTerritory" name="territory">
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-12 col-sm-6 col-md-3">
                  <div class="mb-3">
                     <label for="salesCountry" class="form-label subtitle">País*</label>
                     <input type="text" class="form-control" id="salesCountry" name="country">
                  </div>
               </div>
               <div class="col-12 col-sm-6 col-md-3">
                  <div class="mb-3">
                     <label for="salesRegion" class="form-label subtitle">Región*</label>
                     <input type="text" class="form-control" id="salesRegion" name="region">
                  </div>
               </div>
               <div class="col-12 col-sm-6 col-md-3">
                  <div class="mb-3">
                     <label for="salesSatate" class="form-label subtitle">Estado*</label>
                     <input type="text" class="form-control" id="salesSatate" name="state">
                  </div>
               </div>
               <div class="col-12 col-sm-6 col-md-3">
                  <div class="mb-3">
                     <label for="salesCity" class="form-label subtitle">Ciudad*</label>
                     <input type="text" class="form-control" id="salesCity" name="city">
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-12 col-sm-6 col-md-3">
                  <div class="mb-3">
                     <label for="salesConsultant" class="form-label subtitle">Asesor comercial*</label>
                     <input type="text" class="form-control" id="salesConsultant" name="consultant">
                  </div>
               </div>
               <div class="col-12 col-sm-6 col-md-3">
                  <div class="mb-3">
                     <label for="salesConsultantAbbreviation" class="form-label subtitle">Abreviatura*</label>
                     <input type="text" class="form-control" id="salesConsultantAbbreviation" name="consultantAbbreviation">
                  </div>
               </div>
               <div class="col-12 col-sm-6 col-md-3">
                  <div class="mb-3">
                     <label for="salesClient" class="form-label subtitle">Cliente*</label>
                     <input type="text" class="form-control" id="salesClient" name="client">
                  </div>
               </div>
               <div class="col-12 col-sm-6 col-md-3">
                  <div class="mb-3">
                     <label for="salesClientAbbreviation" class="form-label subtitle">Abreviatura*</label>
                     <input type="text" class="form-control" id="salesClientAbbreviation" name="clientAbbreviation">
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-12 col-sm-6 col-md-3">
                  <div class="mb-3">
                     <label for="salesEditor" class="form-label subtitle">Editor*</label>
                     <input type="text" class="form-control" id="salesEditor" name="editor">
                  </div>
               </div>
               <div class="col-12 col-sm-6 col-md-3">
                  <div class="mb-3">
                     <label for="salesEditorAbbreviation" class="form-label subtitle">Abreviatura*</label>
                     <input type="text" class="form-control" id="salesEditorAbbreviation" name="editorAbbreviation">
                  </div>
               </div>
               <div class="col-12 col-sm-6 col-md-3">
                  <div class="mb-3">
                     <label for="salesProduct" class="form-label subtitle">Producto*</label>
                     <input type="text" class="form-control" id="salesProduct" name="product">
                  </div>
               </div>
               <div class="col-12 col-sm-6 col-md-3">
                  <div class="mb-3">
                     <label for="salesProductAbbreviation" class="form-label subtitle">Abreviatura*</label>
                     <input type="text" class="form-control" id="salesProductAbbreviation" name="productAbbreviation">
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-12 col-sm-8 col-md-6">
                  <div class="row">
                     <div class="col-12 col-sm-6 col-md-6">
                        <div class="mb-3">
                           <label for="salesTypeProduct" class="form-label subtitle">Tipo de producto*</label>
                           <select class="form-select" id="salesTypeProduct" name="typeProduct">
                              <option selected>Selecciona una opción</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-12 col-sm-6 col-md-6">
                        <div class="mb-3">
                           <label for="salesDate" class="form-label subtitle">Año *</label>
                           <input type="date" class="form-control" id="salesDate" name="date">
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="mt-3">
               <p><b>Presupuesto</b></p>
               <hr>

               <div class="row">
                  <div class="col-12 col-sm-6 col-md-3 mb-3">
                     <label for="salesEstimationDate" class="form-label subtitle">Fecha*</label>
                     <input type="text" class="form-control" id="salesEstimationDate" name="estimationDate">
                  </div>
                  <div class="col-12 col-sm-6 col-md-3 mb-3">
                     <label for="salesAmmountAdviser" class="form-label subtitle">Monto asesor*</label>
                     <input type="text" class="form-control" id="salesAmmountAdviser" name="ammountAdviser">
                  </div>
                  <div class="col-12 col-sm-6 col-md-3 mb-3">
                     <label for="salesAmountTarget" class="form-label subtitle">Monto meta*</label>
                     <input type="text" class="form-control" id="salesAmountTarget" name="amountTarget">
                  </div>
                  <div class="col-12 col-sm-6 col-md-3 mb-3">
                     <label for="salesEstimationStatus" class="form-label subtitle">Estado*</label>
                     <input type="text" class="form-control" id="salesEstimationStatus" name="estimationStatus">
                  </div>
               </div>
            </div>

            <div class="mt-3">
               <p><b>Venta</b></p>
               <hr>

               <div class="row">
                  <div class="col-12 col-sm-4 col-md-3 mb-3">
                     <label for="salesInDate" class="form-label subtitle">Fecha*</label>
                     <input type="text" class="form-control" id="salesInDate" name="inDate">
                  </div>
                  <div class="col-12 col-sm-4 col-md-3 mb-3">
                     <label for="salesInAmmount" class="form-label subtitle">Monto venta*</label>
                     <input type="text" class="form-control" id="salesInAmmount" name="inAmmount">
                  </div>
                  <div class="col-12 col-sm-4 col-md-3 mb-3">
                     <label for="salesInStatus" class="form-label subtitle">Estado*</label>
                     <input type="text" class="form-control" id="salesInStatus" name="inStatus">
                  </div>
               </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 text-center">
               <div class="mt-5 mb-5">
                  <button type="button" class="btn btn-primary">Guardar</button>
                  <button type="button" class="btn btn-secondary">Cancelar</button>
               </div>
            </div>

         </form>

      </div>
   </div>
</section>