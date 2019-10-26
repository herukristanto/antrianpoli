<?php
include ("_session.php");
?>

<?php
include ("_atas.php");
?>

<?php
include ("_navbar.php");
?>

<?php
include ("_menu.php");
?>



<div class="page-content">
  <div class="row-fluid">
    <div class="span12">
      <!--PAGE CONTENT BEGINS-->

      <h5>Create Data Doctor</h5>

      <form class="form-horizontal" action="index.html" method="post">

        <div class="control-group">
          <label class="control-label" for="form-field-1">Dockter ID</label>
          <div class="controls">
            <input type="text" id="form-field-1" placeholder="Masukan ID Dokter">
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="form-field-1">Nama</label>
          <div class="controls">
            <input type="text" id="form-field-1" placeholder="Masukan Nama Dokter">
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="form-field-1">Status</label>
          <div class="controls">
            <input type="text" id="form-field-1">
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="form-field-1">Create By</label>
          <div class="controls">
            <input type="text" id="form-field-1" >
          </div>
        </div>

        <div class="control-group">
          <div class="controls">
            <button type="button" class="btn btn-primary" name="button">Simpan</button>

            <button type="button" class="btn btn-danger" name="button">Cencel</button>
          </div>

        </div>

      </form>
      <!--PAGE CONTENT ENDS-->
    </div><!--/.span-->
  </div><!--/.row-fluid-->
</div><!--/.page-content-->


<?php
include ("_bawah.php");
?>
