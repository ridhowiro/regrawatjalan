<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Parallax Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <link href="<?php echo base_url('asset/css/style.css')?>" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="container">
    <div class="section">
    <?php if(!isset($data->NO_RM)){
            $nik=NULL;
            $nama=NULL;
            $alamat=NULL;
            $notel=NULL;
            $status=null;
            $norm=null;
           }else{
            $nik=$data->NIK;
            $nama=$data->NAMA;
            $alamat=$data->ALAMAT;
            $notel=$data->NOTEL;
             $status="disabled";
             echo $norm="Nomor RM=".$data->NO_RM;
             }?>
    <div class="row">
        <form class="col s12"  method="post" accept-charset="utf-8" action="<?php echo base_url('/Pasien/savedata')?>">
          <div class="row">
            <div class="input-field col 12">
              <input placeholder="Placeholder" id="NIK" type="text" name="NIK" class="validate" value="<?php echo $nik?>"/>
              <label for="NIK">NIK</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col 12">
              <input placeholder="Placeholder" id="NAMA" type="text" name="NAMA" class="validate" value="<?php echo $nama?>">
              <label for="NAMA">NAMA</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col 12">
              <input placeholder="Placeholder" id="ALAMAT" type="text" name="ALAMAT" class="validate" value="<?php echo $alamat?>">
              <label for="ALAMAT">ALAMAT</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col 12">
              <input placeholder="Placeholder" id="NOTEL" type="text" name="NOTEL" class="validate" value="<?php echo $notel?>">
              <label for="NOTEL">NOTEL</label>
            </div>
          </div>
            <button class="btn waves-effect waves-light" type="submit" name="action" <?=$status?>>Submit
            <i class="material-icons right">send</i>
          </button>
        </form>
      </div>
    </div>
    </div>
    </div>



  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background3.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="<?php base_url('asset/js/init.js')?>"></script>

  </body>
</html>
