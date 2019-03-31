<?php
    $Start = $_POST["Start"]-1;
    $End = $_POST["End"];
    $Sheet = ceil( ($End - $Start) /10 );
    $Date  = $_POST["Date"];
    $character = 'A';
    $cnt = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print</title>
    <link rel="stylesheet" href="css/paper.css">
    <link rel = "stylesheet" href = "css/styleStruct.css">
    <link rel = "stylesheet" href = "css/stylecolor.css">

    <script src="js/PDFG.js"></script>
</head>
<body class = "A4" >
    <?php
        for($Isheet=0 ; $Isheet<$Sheet;$Isheet++)
        {
    ?>
    <div class = "sheet">
        <div class = "container">
            <div class = "grid">
            <?php
                for($number=$Start+$cnt ; $numer<=$End ; $number++)
                {
            ?>
                <div class = "coupon_body">
                    <div class = "content">
                        <h2>1000฿</h2><hr>
                        <div class = "coupon_bottom">
                            <div class = "name" >Arkom Sooksomboon</div>
                            <div class="tag">manager</div>
                        </div>
                    </div>
                    <div class = "content2">
                        <img src = "picture/logo.jpg">
                        <h4>
                            <?php
                            echo $number.$character;
                            ?>
                        </h4>
                        <div class = "date">
                            <?php
                            echo $Date;
                            ?>
                        </div>
                    </div>
                </div>
                <?php
                    if($cnt%10 == 0 && $cnt!=0) 
                    {
                        $cnt++; 
                        break;
                    }
                    else
                    {
                        $cnt++;
                    }
                }
                ?>
            </div>
        </div> 
    </div>
    <?php
        }
    ?>
</body>
</html>
<style>
    .container .grid .coupon_body{
    background: #444444;
}

</style>
