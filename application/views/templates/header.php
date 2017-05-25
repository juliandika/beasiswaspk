<!DOCTYPE html>
<html>
  <head>
    <title>Registrasi Mahasiswa</title>
    <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">

    <script src="http://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
	  <script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
	  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url(); ?>admin/mahasiswa">Home</a>
        </div>
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url(); ?>admin/kriteria/view_kriteria">Kriteria</a>
        </div>
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url(); ?>admin/calculate/ranking">Ranking</a>
        </div>
        <div id="navbar">

          <ul class="nav navbar-nav navbar-right nav-list" id="navigasi">
            <li><a href="#register" data-toggle="modal" data-target="#register"><?php echo $this->session->userdata('username'); ?></a></li>
            <li><a href="<?php echo base_url(); ?>logout/index">Logout</a></li>
          </ul>

        </div>
      </div>
    </nav>

    <div class="container">
