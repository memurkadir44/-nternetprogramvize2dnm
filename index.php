<?php
    include 'ayar.php';
    include 'func.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kadirin Paylaşımları</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="container">
        <div class="row">
            <div class="col-lg-6">
                <a href="" class="logo"><strong>Kadirin Paylaşımları</strong></a>
            </div>
            <div class="col-lg-6 text-right">
                <a href="" class="menu">Anasayfa</a>
                <a href="" class="menu">Hakkımızda</a>
                <a href="" class="menu">Blog</a>
                <a href="adminindex.php" class="menu">Admin Giriş</a>
            </div>
        </div>
    </header>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mt-5 mb-5">
                <h1><strong>İNTERNET PROGRAMCILIĞI İÇİN HAZIRLADIĞIM BLOG SİTEME HOŞGELDİNİZ.</strong></h1>
                <p>Sivrihisar Bilgisayar Programcılığı </p>
            </div>
        </div>
        <div class="row">
            <?php
                $veri = $db->prepare("SELECT * FROM yazilar ORDER BY yazi_id DESC");
                $veri->execute();
                $islem = $veri->fetchALL(PDO::FETCH_ASSOC);
                
                foreach($islem as $row){
                    echo '<div class="col-lg-4">
                        <div class="card">
                            <img src="'.$row["yazi_resim"].'" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">'.$row["yazi_baslik"].'</h5>
                            <p class="card-text">'.kisalt($row["yazi_aciklama"], 140).'</p>
                            <a href="yazi.php?link='.$row["yazi_link"].'" class="btn btn-dark">Devamını Oku</a>
                            </div>
                        </div>
                    </div>';
                }
            ?>
            
        </div>
    </div>
    
</body>
</html>