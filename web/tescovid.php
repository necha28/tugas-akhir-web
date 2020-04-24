<html>
<head>
    <title>Tes Covid</title>
    <link rel="icon" href="stethoscope.png" />
    <style type="text/css">
        #hasil
        {width:500px;margin:0 auto;padding:5px;font-weight:bold;color:#f00;}
        body
        {padding:0;margin:0;font-family:arial;font-size:12px;}
        #main-wrapper
        {border:3px double #faa800;padding:5px;width:550px;margin:20px auto 0;}
        #main
        {text-align:left;padding:5px;background:#e8eef0;}
        table
        {font-size:12px;width:450px;}
        #prn
        {border:1px solid #b3ccf7;background:#c3d9ff;cursor:pointer;padding:2px 24px;}
        h1
        {font-size:18px;font-weight:bold;padding:10px 0;text-align:center;}
        #efri
        {font-size:11px;padding:5px 0 0;color:#0000ff;text-align:center;}red{font-weight:bold;color:#f00;}
        body{
        background-image: url("bg.jpg");
        }
    </style>
</head>
<body>
    <div id="main-wrapper">
    <div id="main">
        <h1><b>Self CheckUp Corona Virus</b></h1>
        </br>

      <form action="hasilcheck.php" method="POST">
        <table>
                <tr>
                    Isi data diri Anda:
                    <td>Nama</td>
                    <td><input type="text" name="nama" required/></td>
                    </tr>
                    <td>Jenis Kelamin</td>
                        <td>
                            <input type="radio" name="gender" value="L">L
                            <input type="radio" name="gender" value="P">P
                            </td>
                            </tr>
                        <td>Tempat Tanggal Lahir</td>
                        <td><input type="date" name="tempattanggallahir" required/></td>
                        </tr>
                        <td>Usia</td>
                        <td><input type="text" name="usia" required/></td>
                        </tr>
                        <td>Alamat Lengkap</td>
                        <td><input type="text" name="alamat" required/></td>

                        </tr>
                        <td>Apakah Anda batuk?</td>
                        <td><input type="text" name="batuk" placeholder="Ya/Tidak" required/></td>
                        </tr>
                        <td>Apakah Anda demam?</td>
                        <td><input type="text" name="demam" placeholder="Ya/Tidak" required/></td>
                        </tr>
                        <td>Apakah Anda pusing?</td>
                        <td><input type="text" name="pusing" placeholder="Ya/Tidak" required/></td>
                        </tr>
                        <td>Apakah Anda merasa lemas?</td>
                        <td><input type="text" name="lemas" placeholder="Ya/Tidak" required/></td>
                        </tr>
                        <td>Apakah Anda merasa sesak napas?</td>
                        <td><input type="text" name="sesak" placeholder="Ya/Tidak" required/></td>
                        </tr>
                        <td>Suhu Tubuh : </td>
                        <td><input type="text" name="nilai" placeholder="derajat"> <br> <br>
                        <tr>
                        <td>
                        <label><br><br>
                            <input type="submit" name="Submit" value="Check" id="prn">
                        </label>
                        </script>
                  <div id="Submit">
            </div>
        </div>
    </div>
</body>
</html>
