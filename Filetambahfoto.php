<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="container">
            <div class="header">
                <div style="float: left;">DAPOER SASAK LOMBOK</div>
                <div class ="Menu" style="float:right">
                    <a href="home.html">home</a>
                    <a href="Transaksi.html">Transaksi</a>
                    <a href="fileTambahFoto.html">Tambah Foto</a>
                </div>  
            </div>
            <div class="middle">
            <?php
                $target_path="uploads/";

                $target_path =$target_path . basename(
                $_FILES['uploadedfile']['name']);

                if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)){
                    echo "The File" . basename($_FILES['uploadedfile']['name']) ." has been uploaded";
                }else{
                    echo "there was an error uploading the file, please try again";
                }
            ?>
            </div>
            <div class="footer">
                <p href="copyright @ belajar CSS">Jl. Ketara Sengkol, Kecamatan Pujut, Kabupaten Lombok Tengah, Nusa Tenggara Barat. 83573 (087865863703)</p>
            </div>
        </div>
    </body>
</html>