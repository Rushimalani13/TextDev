<?php
session_start();
if(!isset($_SESSION['log']) || $_SESSION['log']!=true)
{
  header("location: component/login.php");
  exit;
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/standardcss.css">
    <title>TextDev</title>
</head>

<body>
    <?php
        include 'component/nav.php';
    ?>

<div class="cotainer my-4 mx-4">
    <h2>Text Info:</h2>
        <div class="row g-3">
            <div class="col">
                <div class="form-floating">
                    <textarea class="form-control" id="heading1"
                    ></textarea>
                    <label for="floatingTextarea2">Simple Text</label>
                </div>
            </div>
            <!-- <input type="text" class="form-control text-8" value="🐓 ⋆ 🐤  🎀  𝒫𝓇𝑒𝓋𝒾𝑒𝓌 𝒯𝑒𝓍𝓉  🎀  🐤 ⋆ 🐓" id="copy_7" readonly="readonly"> -->
            <div class="col">
                <div class="form-floating">
                    <textarea class="form-control" id="heading2"
                    readonly="readonly"></textarea>
                    <label for="floatingTextarea2">Formatted Text</label>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary my-2 col-1" id="headconvert">Get Info</button>
    </div>
</div>

    <div class="cotainer" style="padding-bottom:250px;"></div>
    <?php include 'component/footer.php'; ?>

</body>
<script src="js/standard.js"></script>
</html>