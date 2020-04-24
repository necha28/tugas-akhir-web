<link rel="icon" href="stethoscope.png" />
<style type="text/css">
        #hasil
        {width:500px;margin:0 auto;padding:5px;font-weight:bold;color:#fff;}
        body
        {padding:0;margin:0;font-family:arial;font-size:28px;}
        #main-wrapper
        {border:3px double #faa800;padding:5px;width:550px;margin:20px auto 0;}
        #main
        {text-align:center;padding:5px;background:#e8eef0;}
        table
        {font-size:12px;width:450px;}
        #prn
        {border:1px solid #b3ccf7;background:#c3d9ff;cursor:pointer;padding:2px 24px;}
        h1
        {font-size:18px;font-weight:bold;padding:10px 0;text-align:center;}
        #efri
        {font-size:11px;padding:5px 0 0;color:#0000ff;text-align:center;}red{font-weight:bold;color:#fff;}
        body{
        background:#3ba4ac;
        }
    </style>

      <div class="left">
        <h1>
          Check Results
        </h1>   
        <img src="doctor.png">
      </div>
       
<?php

    if(isset($_POST['nilai'])) {
      $nama = $_POST['nama'];
      $nilai = $_POST['nilai'];
  
      if ($nilai >= 37 ){
        echo $nama.", anda kemungkinan POSITIF CORONA, suhu tubuh anda tinggi $nilai derajat. Segera periksakan diri anda sebelum terlambat.";
      }else{
        echo $nama.", anda NEGATIF CORONA, suhu tubuh anda normal $nilai derajat. Tetap jaga kesehatan dan istirahat yang cukup.";
      }
      }
    ?>
     <p>
            <br><a href = "https://sites.google.com/view/nechasyifa/halaman-muka" class = "btn btn-primary">Pelajari info covid lebih lanjut</a><br>
        </p>

