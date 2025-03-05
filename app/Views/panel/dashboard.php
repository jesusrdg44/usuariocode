<!-- IMPORTAR LA PLANTILLA -->
<?= $this->extend('plantillas/panel_base') ?>

<!-- RENDER CSS CONTENT -->
<?= $this->section('css')?>
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url(RECURSO_PANEL_PLUGINS.'/daterangepicker/daterangepicker.css')?>">
<?= $this->endSection('')?>
<!-- RENDER CSS CONTENT -->

<!-- RENDER CONTENT -->
<?= $this->section('content')?>
<!-- CONTENIDO DENTRO DEL MAIN -->
 <h4>Holaaa</h4>
<?= $this->endSection('')?>
<!-- RENDER CONTENT -->

<!-- RENDER JS CONTENT -->
<?= $this->section('js')?>
  <!-- daterangepicker -->
  <script src="<?= base_url(RECURSO_PANEL_PLUGINS.'/moment/moment.min.js')?>"></script>
  <script src="<?= base_url(RECURSO_PANEL_PLUGINS.'/daterangepicker/daterangepicker.js')?>"></script>
<?= $this->endSection('')?>
<!-- RENDER JS CONTENT -->

