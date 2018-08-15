<!DOCTYPE html>
<html>

  	<head>
      
  		  <title>Absensi Siswa</title>

  	</head>

    <?php
      $this->load->view('assets/v_res'); 
      $this->load->view('assets/v_navbar');
      $this->load->view('assets/v_form_login');
      $this->load->view('assets/v_footer');
    ?>

      <body>saddas

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="<?php echo base_url('assets/64611323_p0.jpg') ?>?auto=yes&bg=666&fg=444" height="400px">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo base_url('assets/64270636_p0.png') ?>?auto=yes&bg=666&fg=444" height="400px">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo base_url('assets/64606548_p0.jpg') ?>?auto=yes&bg=666&fg=444" height="400px">
            </div>
          </div>
        </div>

        <script>
          $(document).ready(function(){
            $("#btn_login").click(function(){
              $("#lModal").modal('show');
            });
          });
        </script>

      </body>


</html>