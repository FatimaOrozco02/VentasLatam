<aside id="sidebar" class="sidebar p-3 position-relative bg-light">

   <div class="sticky-nav bg-dark-blue mnh-100 mnw-103">
      <div class="card-body p-0 splitter">
         <nav class="nav flex-column gap-1 nav-list">
            <ul class="menu-lateral list-unstyled">
               <li>
                  <a href="<?= $baseUrl ?>/dashboard" class="menu-item">
                     <i class="fas fa-file-import"></i>
                     <span>Importar</span>
                  </a>
               </li>

               <li>

                  <a href="#" class="menu-item active" onclick="toggleSubmenu(event)">
                     <i class="fas fa-edit"></i>
                     <span>Editar</span>

                     <i class="fas fa-chevron-down ms-auto submenu-arrow"></i>
                  </a>

                  <ul id="submenu-editar" class="submenu list-unstyled">

                     <li><a href="#">Actualizar datos</a></li>
                     <li><a href="#">Editor</a></li>
                     <li><a href="#">Productos</a></li>
                     <li><a href="#">Asesor comercial</a></li>
                     <li><a href="#">Clientes</a></li>
                     <li><a href="#">País</a></li>
                     <li><a href="#">Región</a></li>
                     <li><a href="#">Estado</a></li>
                     <li><a href="#">Ciudad</a></li>

                  </ul>

               </li>

               <li>
                  <a href="#" class="menu-item">
                     <i class="fas fa-arrow-trend-up"></i>
                     <span>Presupuesto</span>
                  </a>
               </li>

               <li>
                  <a href="#" class="menu-item">
                     <i class="fas fa-chart-pie"></i>
                     <span>Estadísticas</span>
                  </a>
               </li>

               <li>
                  <a href="#" class="menu-item">
                     <i class="fas fa-users"></i>
                     <span>Usuarios</span>
                  </a>
               </li>
            </ul>
         </nav>
      </div>
   </div>

</aside>