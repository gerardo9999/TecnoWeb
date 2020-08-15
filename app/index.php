<!DOCTYPE html>
<html>
<?php include_once '../app/views/plantilla/head.php';



?>


  <body class="skin-green sidebar-mini">
    <div class="wrapper">

          <?php 
          include_once '../app/views/plantilla/header.php'?>
          
          
          <aside class="main-sidebar">
            <?php include_once '../app/views/plantilla/sidebar.php'?>
          </aside>
        
        
        
        <div class="content-wrapper" style="min-height: 787px;">

          <section class="content-header">
              
              <h1>
                Panel de Control
                <small>Version 7.0</small>
              </h1>
              <ol class="breadcrumb">
                <li class="active"><i class="fa fa-dashboard"></i>Inicio</li>
              </ol>

          </section>
            
        </div>
    </div>

    <?php include_once '../app/views/plantilla/footer.php'?>
    <?php include_once '../app/views/plantilla/script.php'?>
  </body>
</html>