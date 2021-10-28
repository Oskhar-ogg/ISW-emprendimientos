 <!-- head -->
 <?php include('../partes/head.php')?>
 <!-- fin head -->
 
 <!-- conexion -->
 <?php include('../conexion/conexion.php') ?>
 <!-- fin conexion -->

<body>
 <div class="d-flex" id="content-wrapper">
 <!-- sideBar -->
 <?php include('../partes/sidebar.php') ?>
 <!-- fin sideBar -->

     <div class="w-100">

 <!-- Navbar -->
     <?php include('../partes/nav.php') ?>
 <!-- Fin Navbar -->
         <div id="layoutSidenav_content">
             <main>
                 <div class="container-fluid">
                     <h1 class="mt-4">Mis Ventas</h1>
                     <ol class="breadcrumb mb-4">
                         <li class="breadcrumb-item active">Información General</li>
                     </ol>
                     <div class="row">
                         <div class="col-xl-3 col-md-6">
                             <div class="card bg-primary text-white mb-4">
                                 <div class="card-body">Publicaciones activas</div>
                                 <div class="card-footer d-flex align-items-center justify-content-between">
                                     <a class="small text-white stretched-link" href="#">View Details</a>
                                     <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-xl-3 col-md-6">
                             <div class="card bg-warning text-white mb-4">
                                 <div class="card-body">Consultas Por Responder</div>
                                 <div class="card-footer d-flex align-items-center justify-content-between">
                                     <a class="small text-white stretched-link" href="#">View Details</a>
                                     <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-xl-3 col-md-6">
                             <div class="card bg-success text-white mb-4">
                                 <div class="card-body">Ventas Realizadas</div>
                                 <div class="card-footer d-flex align-items-center justify-content-between">
                                     <a class="small text-white stretched-link" href="#">View Details</a>
                                     <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-xl-3 col-md-6">
                             <div class="card bg-danger text-white mb-4">
                                 <div class="card-body">Ventas Canceladas</div>
                                 <div class="card-footer d-flex align-items-center justify-content-between">
                                     <a class="small text-white stretched-link" href="#">View Details</a>
                                     <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-xl-6">
                             <div class="card mb-3">
                                 <div class="card-header"><i class="fas fa-eye mr-1"></i>Cantidad de visitas</div>
                                 <div class=" card-body" id="sfc93383x7sas8g78t6h8azpwgrsnsrhpp9">
                                 <div id="sfcs1thyw3y5nu1jgjjhyrc3lzg48zl3dpe"></div>
                                 <script type="text/javascript" src="https://counter7.stat.ovh/private/counter.js?c=s1thyw3y5nu1jgjjhyrc3lzg48zl3dpe&down=async" async>
                                </script>
                                <noscript>
                                    <a href="https://www.contadorvisitasgratis.com" title="contadores de visitas">
                                    <img src="https://counter7.stat.ovh/private/contadorvisitasgratis.php?c=s1thyw3y5nu1jgjjhyrc3lzg48zl3dpe" border="0" title="contadores de visitas" alt="contadores de visitas"></a><i class="fas fa-globe mr-2"></i></noscript></div>
                             </div>
                         </div>
                         <div class="col-xl-6">
                             <div class="card mb-4">
                                 <div class="card-header"><i class="fas fa-star mr-1"></i>Reputación como vendedor</div>
                                 <div class="card-body"><i class="fas fa-star-half-alt"></i> 3.5/5</div>
                             </div>
                         </div>
                     </div>
                     <div class="card mb-4">
                         <div class="card-header"><i class="fas fa-table mr-1"></i>Historial de Ventas</div>
                         <div class="card-body">
                             <div class="table-responsive">
                                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                     <thead>
                                         <tr>
                                             <th>Comprador</th>
                                             <th>Producto</th>
                                             <th>Tipo Pago</th>
                                             <th>Cantidad</th>
                                             <th>Fecha</th>
                                             <th>Total</th>
                                         </tr>
                                     </thead>
                                     <tfoot>
                                         <tr>
                                             <th>Comprador</th>
                                             <th>Producto</th>
                                             <th>Tipo Pago</th>
                                             <th>Cantidad</th>
                                             <th>Fecha</th>
                                             <th>Total</th>
                                         </tr>
                                     </tfoot>
                                     <tbody>
                                         <tr>
                                             <td>Tiger Nixon</td>
                                             <td>ROPA</td>
                                             <td>Credito</td>
                                             <td>61</td>
                                             <td>2011/04/25</td>
                                             <td>$320,800</td>
                                         </tr>
                                         <tr>
                                             <td>Garrett Winters</td>
                                             <td>SILLAS</td>
                                             <td>Credito</td>
                                             <td>63</td>
                                             <td>2011/07/25</td>
                                             <td>$170,750</td>
                                         </tr>
                                         <tr>
                                             <td>Ashton Cox</td>
                                             <td>BOTELLAS</td>
                                             <td>Efectivo</td>
                                             <td>66</td>
                                             <td>2009/01/12</td>
                                             <td>$86,000</td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </main>
             <footer class="py-4 bg-light mt-auto">
                 <div class="container-fluid">
                     <div class="d-flex align-items-center justify-content-between small">
                         <div class="text-muted">Copyright &copy; team19 2021</div>
                         <div>
                             <a href="#">Politicas de privacidad</a>
                             &middot;
                             <a href="#">Terminos &amp; Condiciones</a>
                         </div>
                     </div>
                 </div>
             </footer>
         </div>
     </div>
     <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
     <script src="js/scripts.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
     <script src="assets/demo/chart-area-demo.js"></script>
     <script src="assets/demo/chart-bar-demo.js"></script>
     <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
     <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
     <script src="assets/demo/datatables-demo.js"></script>
</body>
