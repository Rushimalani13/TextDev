<?php
session_start();
if(!isset($_SESSION['log']) || $_SESSION['log']!=true)
{
  header("location: component/login.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<title>Word API</title>

<body>
    <?php
    include 'component/nav.php';
    ?>
    <div class="container my-4">
        <h2>Welcome to TextDev Dictionary</h2>
        <form class="d-flex">
            <input class="form-control me-2" type="text" id="myText" value="TextDev" placeholder="Search">
            <button type="button" class="btn btn-outline-success" onclick="myFunction()">Search</button>
        </form>

        <div class="col my-4">
            <div class="form-floating">
                <textarea class="form-control bg-success  text-dark fs-4 fw-bold" id="showResult" readonly="readonly" style="height: 200px;"></textarea>
                <label for="floatingTextarea2">Results:-</label>
                <h3><a id="playAudio" target="_blank">Listen Audio<a></h3>
            </div>
        </div>
    </div>
    </div>

    <script>
    function myFunction() {
        var x = document.getElementById("myText");
        var y = document.getElementById("showResult");
        var playAudio = document.getElementById("playAudio");
        var defaultVal = x.defaultValue;
        var currentVal = x.value;
        console.log(currentVal);
        fetch(`https://api.dictionaryapi.dev/api/v2/entries/en_US/${currentVal}`)
            .then(response => {
                return response.json();
            }).then(data => {
                // console.log(data[0]);
                // console.log(data[0].meanings);
                // console.log(data[0].meanings[0]);
                // console.log(data[0].meanings[0].definitions);
                // console.log(data[0].meanings[0].definitions[0]);
                // console.log("defination:", data[0].meanings[0].definitions[0].definition);
                var def = data[0].meanings[0].definitions[0].definition;
                // console.log("Example:", data[0].meanings[0].definitions[0].example);
                var ex = data[0].meanings[0].definitions[0].example;
                // console.log("synonyms:", data[0].meanings[0].definitions[0].synonyms);
                var syn = data[0].meanings[0].definitions[0].synonyms;
                // console.log(data[0].phonetics);
                // console.log("audio:", data[0].phonetics[0].audio);
                var audio = data[0].phonetics[0].audio;

                
                var infoWord = `~~Defination~~\n\t${def}\n~~Example~~\n\t${ex}\n~~Synonym~~\n\t${syn}\n`;
                // console.log(infoWord);
                y.value = infoWord;
                playAudio.setAttribute("href",audio);
                
            })
            .catch(err => {
                console.error(err);
            })
    }
    </script>
    <div class="cotainer" style="padding-bottom:370px;"></div>
    <?php include 'component/footer.php'; ?>
</body>

</html>