<?php 
require_once '../controls/session.php';


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Gerenciador
 </title>
 <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
 <!--     Fonts and icons     -->
 <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
 <!-- CSS Files -->
 <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
 <link href="../assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
 <!-- CSS Just for demo purpose, don't include it in your project -->
 <link href="../assets/demo/demo.css" rel="stylesheet" />

 <!--Tabela.css-->
 <link rel="stylesheet" href="../css/table.css">

 <!--MODAL.css-->
 <link rel="stylesheet" href="../css/modal.css">

 <!--FORM-->
 <link rel="stylesheet" href="../css/form.css">
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
        </a>
        <a href="#" class="simple-text logo-normal">
          JPSystem
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="./dashboard.php">
              <i class="nc-icon nc-bank"></i>
              <p>HOME</p>
            </a>
          </li>
        
          <li>
            <a href="./map.php">
              <i class="nc-icon nc-pin-3"></i>
              <p>Maps</p>
            </a>
          </li>
          <li>
            <a href="./notifications.php">
              <i class="nc-icon nc-bell-55"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li>
            <a href="./user.php">
              <i class="nc-icon nc-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="./tables.php">
              <i class="nc-icon nc-tile-56"></i>
              <p>Table List</p>
            </a>
          </li>

          <!--<li class="active-pro">
            <a href="./upgrade.html">
              <i class="nc-icon nc-spaceship"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li>-->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">HOME</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="#pablo">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="../">
                  <i class="nc-icon nc-button-power"></i>
                  <p>
                    <span class="d-lg-none d-md-block">SAIR</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-lg">

  <canvas id="bigDashboardChart"></canvas>


</div> -->

<div class="container">
  <div class="row">

    <section class="content">

      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="pull-right">
              <div class="btn-group">
                <button type="button" class="btn btn-success btn-filter" data-target="pagado">Concluidos</button>
                <button type="button" class="btn btn-warning btn-filter" data-target="pendiente">Pendentes</button>
                <button type="button" class="btn btn-danger btn-filter" data-target="cancelado">Cancelado</button>
                <button type="button" class="btn btn-default btn-filter" data-target="all">Todos</button>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                  ADD
                </button>
              </div>
            </div>
            <div class="table-container">
              <table class="table table-filter">
                <tbody>
                  <tr data-status="pagado">
                    <td>
                      <div class="ckbox">
                        <input type="checkbox" id="checkbox1">
                        <label for="checkbox1"></label>
                      </div>
                    </td>
                    <td>
                      <a href="javascript:;" class="star">
                        <i class="glyphicon glyphicon-star"></i>
                      </a>
                    </td>
                    <td>
                      <div class="media">
                        <a href="#" class="pull-left">
                          <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                        </a>
                        <div class="media-body">
                          <span class="media-meta pull-right">Febrero 13, 2016</span>
                          <h4 class="title">
                            Lorem Impsum
                            <span class="pull-right pagado">(Concluido)</span>
                          </h4>
                          <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                        </div>
                      </div>
                    </td>
                  </tr>
                  
                  <tr data-status="pendiente">
                    <td>
                      <div class="ckbox">
                        <input type="checkbox" id="checkbox3">
                        <label for="checkbox3"></label>
                      </div>
                    </td>
                    <td>
                      <a href="javascript:;" class="star">
                        <i class="glyphicon glyphicon-star"></i>
                      </a>
                    </td>
                    <td>
                      <div class="media">
                        <a href="#" class="pull-left">
                          <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                        </a>
                        <div class="media-body">
                          <span class="media-meta pull-right">Febrero 13, 2016</span>
                          <h4 class="title">
                            Lorem Impsum
                            <span class="pull-right pendiente">(Pendente)</span>
                          </h4>
                          <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                        </div>
                      </div>
                    </td>
                  </tr>
                  
                  <tr data-status="cancelado">
                    <td>
                      <div class="ckbox">
                        <input type="checkbox" id="checkbox2">
                        <label for="checkbox2"></label>
                      </div>
                    </td>
                    <td>
                      <a href="javascript:;" class="star">
                        <i class="glyphicon glyphicon-star"></i>
                      </a>
                    </td>
                    
                    <td>
                      <div class="media">
                        <a href="#" class="pull-left">
                          <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                        </a>
                        <div class="media-body">
                          <span class="media-meta pull-right">Febrero 13, 2016</span>
                          <h4 class="title">
                            Lorem Impsum
                            <span class="pull-right cancelado">(Cancelado)</span>
                          </h4>
                          <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                        </div>
                      </div>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Cliente <i class="fa fa-help"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <section class="get-in-touch">

         <form class="contact-form row" action="../controls/home.php" method="POST">
          <div class="form-field col-lg-7">
           <input class="input-text js-input" type="text" name="codigo">
           <label class="label" for="codigo" >COD</label>
         </div>
          <div class="form-field col-lg-6">
           <input class="input-text js-input" type="text" name="nome"required>
           <label class="label" for="nome" >Nome</label>
         </div>
         <div class="form-field col-lg-6 ">
           <input class="input-text js-input" type="text" name="sobnome">
           <label class="label" for="sobnome" >Sobrenome</label>
         </div>
         <div class="form-field col-lg-6 ">
           <input class="input-text js-input" type="text" name="rua">
           <label class="label" for="rua" >Rua</label>
         </div>
         <div class="form-field col-lg-6 ">
           <input class="input-text js-input" type="text" name="numcasa">
           <label class="label" for="numcasa" >Numero</label>
         </div>
         <div class="form-field col-lg-6 ">
           <input class="input-text js-input" type="text" name="setor">
           <label class="label" for="setor" >Seto</label>
         </div>
         <div class="form-field col-lg-6 ">
           <input class="input-text js-input" type="text" name="tel">
           <label class="label" for="tel" >Telefone</label>
         </div>
         <div class="form-field col-lg-12">
           <input class="input-text js-input" type="text" name="obs">
           <label class="label" for="obs" >Obsevação</label>
         </div>
         <div class="form-field col-lg-6">
           <input class="submit-btn" type="submit" value="Enviar" name="btn-registro" onclick="msg()">
           
         </div>
         
       </form>
     </section>
   </div>
   
 </div>
</div>
</div>


<!--FOOTER-->
<footer class="footer footer-black  footer-white ">
  <div class="container-fluid">
    <div class="row">
      <nav class="footer-nav">
        <ul>
          <li>
            <a href="#" target="_blank">JPSystem</a>
          </li>
          <li>
            <a href="#" target="_blank">Blog</a>
          </li>
          <li>
            <a href="#" target="_blank">Licenses</a>
          </li>
        </ul>
      </nav>
      <div class="credits ml-auto">
        <span class="copyright">
          ©
          <script>
            document.write(new Date().getFullYear())
          </script>, made with <i class="fa fa-heart heart"></i> by JPSystem
        </span>
      </div>
    </div>
  </div>
</footer>
</div>
</div>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>
<script>
  $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>

  <script src="../js/table.js"></script>
</body>

</html>
