<?php
session_start();
if(!isset($_SESSION['log']) || $_SESSION['log']!=true)
{
//   header("location: login.php");
//   exit;
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/style2.css"> -->
    
    <link rel="stylesheet" href="css/homedesign.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
    </script>
    <title>TextDev</title>
</head>

<body>
    <?php
        include 'component/nav.php';
    ?>
    <div class="container-fluid mx-0 px-0 row" id="main">
        <?php 
            echo '<h1 class="text-center py-2"><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <div class="typewriter" id="myTypewriter">
            <h1>(っ◔◡◔)っ ♥ Welcome To The Text Dev ♥</h1>
            </div></h1>';  
        ?>

        <div class="card mx-4 my-4 bg-warning" style="width: 18rem;">
            <img class="card-img-top py-2" src="img/fanycard1.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Fancy Text Generator</h5>
                <p class="card-text">This tool is used for to convert the simple text to fancy font text. <br><b>Exmple:-</b>Text Dev to <br>("🆃🅴🆇🆃 🅳🅴🆅 "," ⋆･ﾟ  🎀  𝒯𝑒𝓍𝓉 𝒟𝑒𝓋  🎀  ﾟ･⋆")</p>
                <a href="http://localhost:8080/TextDev/fancy.php" class="btn btn-primary">Fancy Text Genrator</a>
            </div>

        </div>
        <div class="card mx-4 my-4 bg-info" style="width: 18rem;">
            <img class="card-img-top py-2" src="img/fanycard2.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Audio to Text</h5>
                <p class="card-text">This tools is used for convert the audio to text file. Either you choose english or Hindi.<br><b>Option Available:-</b><br>Download as word<br>copy<br>send Email</p>
                <a href="http://localhost:8080/TextDev/audiototxt.php" class="btn btn-primary">Audio to Text
                    Converter</a>
            </div>
        </div>
        <div class="card mx-4 my-4 bg-warning" style="width: 18rem;">
            <img class="card-img-top py-2" src="img/TextInfo.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Get the Info of Text</h5>
                <p class="card-text">This is Option give you the All type of information about the Text or String. <br><b>Like:-</b>Length<br>Characters in Text<br>Words in Text<br>Logest or Shortest Word</p>
                <a href="http://localhost:8080/TextDev/TextInfo.php" class="btn btn-primary">Get Text-Info</a>
            </div>
        </div>
        <div class="card mx-4 my-4 bg-info" style="width: 18rem;">
            <img class="card-img-top py-2" src="img/Dictionary.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Word Dictionary</h5>
                <p class="card-text">Thi Option Provide you to the Meaning or Defination of Word, Example Sentence, Synonyms and Audio.<br><b>Fetures:-</b><br>Defination<br>pronunciation<br>Synonyms<br>Example</p>
                <a href="http://localhost:8080/TextDev/wordinfo.php" class="btn btn-primary">Word Dictionary</a>
            </div>
        </div>
    </div>


    <div id="particles-js"></div>

    <?php include 'component/footer.php'; ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

</body>
<script src="particles.js"></script>
<script src="js/app.js"></script>
<script src="js/homework.js"></script>

</html>