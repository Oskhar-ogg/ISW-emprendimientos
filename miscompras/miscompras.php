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
                      <h1 class="mt-4">Mis Compras</h1>
                      <div class="row">
                          <div class="col-xl-4 col-md-6">
                              <div class="card bg-warning text-white mb-4">
                                  <div class="card-body">Canasto</div>
                                  <div class="card-footer d-flex align-items-center justify-content-between">
                                      <a class="small text-white stretched-link" href="#">View Details</a>
                                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-4 col-md-6">
                              <div class="card bg-success text-white mb-4">
                                  <div class="card-body">Compras Realizadas</div>
                                  <div class="card-footer d-flex align-items-center justify-content-between">
                                      <a class="small text-white stretched-link" href="#">View Details</a>
                                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-4 col-md-6">
                              <div class="card bg-danger text-white mb-4">
                                  <div class="card-body">Compras Anuladas</div>
                                  <div class="card-footer d-flex align-items-center justify-content-between">
                                      <a class="small text-white stretched-link" href="#">View Details</a>
                                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-xl-4">
                              <div class="card mb-4 ">
                                  <div class="card-header"><i class="fas fa-award mr-1"></i>Nivel de Perfil </div>
                                  <div class="card-body">
                                  <form name="formulario" method="post" action="/send.php">
                                  <i class="fas fa-arrow-circle-up mr-2"></i>   
                                  <!-- Medidor -->
                                      <meter min="0" max="100"
                                             low="25" high="75"
                                             optimum="0" value="80">
                                    </form>
                                    </div>
                              </div>
                          </div>
                          </div>  
                      </div>
                      <div class="card mb-4">
                          <div class="card-header"><i class="fas fa-table mr-1"></i>Historial de Compras</div>
                          <div class="card-body">
                              <div class="table-responsive">
                                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                      <thead>
                                          <tr>
                                              <th>Vendedor</th>
                                              <th>Producto</th>
                                              <th>Valor</th>
                                              <th>Fecha</th>
                                              <th>Necesitas mas info</th>
                                          </tr>
                                      </thead>
                                      <tfoot>
                                          <tr>
                                              <th>Vendedor</th>
                                              <th>Producto</th>
                                              <th>Valor</th>
                                              <th>Fecha</th>
                                              <th>Necesitas mas info</th>
                                          </tr>
                                      </tfoot>
                                      <tbody>
                                          <tr>
                                              <td>Tiger Nixon</td>
                                              <td>------------</td>
                                              <td>$320,800</td>
                                              <td>2011/04/25</td>
                                              <td><button type="button" class="btn btn-primary">Ver Compra</button></td>
                                          </tr>
                                          <tr>
                                              <td>Garrett Winters</td>
                                              <td>-----------</td>
                                              <td>$170,750</td>
                                              <td>2011/07/25</td>
                                              <td><button type="button" class="btn btn-primary">Ver Compra</button></td>
                                          </tr>
                                          <tr>
                                              <td>Ashton Cox</td>
                                              <td>-------------</td>
                                              <td>$86,000</td>
                                              <td>2009/01/12</td>
                                              <td><button type="button" class="btn btn-primary">Ver Compra</button></td>
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

<!-- Crear  Modal ver compra -->
<div class="modal fade" id="Ver Compra" tabindex="-1">
        <div class="modal-dialog modal-lg" style="max-width: 25%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ver Compra</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" enctype="multipart/form-data" action="../partes/insertar.php">
                    

                        <div class="row">
                            <div class="form-group col-3">
                                <input type="text" id="titulo" class="form-control" name="titulo" placeholder="Título" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="for-group col-10">
                                <label for="img">Selecciona una Imagen:</label>
                                <input type="file" accept="image/*" onchange="loadFile(event)" name="archivo" >
                                <img id="id_imagen" style="width:100%; margin-top:10px;"/>
                                <script>
                                    var loadFile = function(event) {
                                        var reader = new FileReader();
                                        reader.onload = function() {
                                            var output = document.getElementById('id_imagen');
                                            output.src = reader.result;
                                        };
                                        reader.readAsDataURL(event.target.files[0]);
                                    };
                                </script>
                            </div>
                        </div>
                        <br><br>

                        <div class="row">
                            <div class="form-group col-3">
                                <input type="text" id="info_post" class="form-control" name="info_post" placeholder="Descripción" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-3">
                                <input type="number" id="precio_post" class="form-control" name="precio_post" placeholder="Precio" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-3">
                                <input type="text" id="contacto" class="form-control" name="contacto" placeholder="Contacto" required>
                            </div>
                        </div>

                        <br><br>
                        <div class="offset-10">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                        
                    </form>
                </div>
            </div>
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
