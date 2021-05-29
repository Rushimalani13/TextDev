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

    <title>TextDev</title>
</head>

<body>
    <?php
  include 'component/nav.php';
  ?>
    <div class="etool-title">
        <link href="https://docs.google.com/uc?export=download&id=1ZVFfFPy_Ry6S0kUo5U8NzoaHqW2MWRVr" rel="stylesheet"
            type="text/css">
        </link>
        <h3>
            Voice Typing Tool</h3>
    </div>
    <div class="etool-wrapper" style="border: 1px solid #a9a9a9;">
        <div id="info" style="color: red; font-size: 16px; padding: 3px 6px;">
            <div id="info_start">
                Click on the microphone icon and start speaking.
            </div>
            <div id="info_speak_now" style="display: none;">
                Speak now || बोलना शुरू करें !
            </div>
            <div id="info_no_speech" style="display: none;">
                No speech was detected. adjust your microphone settings.
            </div>
            <div id="info_no_microphone" style="display: none;">
                No microphone.! Ensure that a microphone configured correctly.
            </div>
            <div id="info_allow" style="display: none;">
                Click the "Allow" button above to enable your microphone.
            </div>
            <div id="info_denied" style="display: none;">
                Permission to use microphone was denied.
            </div>
            <div id="info_blocked" style="display: none;">
                Permission to use microphone is blocked. To change, go to
                chrome://settings/contentExceptions#media-stream
            </div>
            <div id="info_upgrade" style="display: none;">
                This facility is not supported by your browser. Upgrade to <a href="https://www.google.com/chrome"
                    target="_blank">Chrome</a>.
            </div>
        </div>
        <div class="flex-box">
            <select id="select_language" onchange="updateCountry()" style="margin: 1px 0px; padding: 0px;"></select>
            <select id="select_dialect" style="margin: 1px 0px; padding: 0px;"></select>
            <button id="start_button" onclick="startButton(event)" style="background: #fff; padding: 0;"
                title="Click and Start Speaking"><img alt="Start" height="30" id="start_img"
                    src="https://www.google.com/intl/en/chrome/assets/common/images/content/mic.gif"
                    width="64" /></button>
        </div>
        <div id="results"
            style="background: #fff; border: 1px solid skyblue; margin: 5px; min-height: 180px; padding: 5px; text-align: left;">
            <span class="final" id="final_span" style="color: blue; padding-right: 3px;"></span> <span class="interim"
                id="interim_span" style="color: red;"></span>
        </div>
        <div class="etool-button-wrapper flex-box">
            <button class="etool-button" id="button1" onclick="CopyToClipboard('results')" title="Copy Text"><i
                    aria-hidden="true" class="fa fa-files-o"></i> Copy</button>
            <button class="etool-button" id="email_button" onclick="emailButton()" title="Send through Email"><i
                    aria-hidden="true" class="fa fa-envelope"></i> Send Email</button>
            <button class="etool-button" name="download" onclick="saveTextAsUnicode();" title="Download Text"><i
                    aria-hidden="true" class="fa fa-download"></i> Download Text</button>
        </div>
        <script src="https://dl.dropbox.com/s/07a7qmtn09z2luo/Voice-Typing_API.js"></script>

    </div>
    </div>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <div class="cotainer" style="padding-bottom:250px;"></div>
    <?php include 'component/footer.php'; ?>

</body>

</html>