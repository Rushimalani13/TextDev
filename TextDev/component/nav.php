<?php  
if(isset($_SESSION['log']) && ($_SESSION['log']==true))
{
  $logdin=true;
}
else
{
    $logdin=false;
}

   echo '<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-dark" href="http://localhost:8080/TextDev/">🆃🅴🆇🆃 🅳🅴🆅</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost:8080/TextDev/">𝓗𝓸𝓶𝓮</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ♥ Fetures ♥
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="http://localhost:8080/TextDev/fancy.php">𝓕𝓪𝓷𝓬𝔂 𝓣𝓮𝔁𝓽</a></li>
                        <li>
                        <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="http://localhost:8080/TextDev/audiototxt.php">𝓐𝓾𝓭𝓲𝓸 𝓽𝓸 𝓽𝓮𝔁𝓽</a></li>
                            <li>
                            <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="http://localhost:8080/TextDev/TextInfo.php">𝓣𝓮𝔁𝓽 𝓘𝓷𝓯𝓸</a></li>
                            <li>
                            <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="http://localhost:8080/TextDev/wordinfo.php">𝓦𝓸𝓻𝓭 𝓓𝓲𝓬𝓽𝓲𝓸𝓷𝓪𝓻𝔂</a></li>
                            <li>
                            <hr class="dropdown-divider">
                            </li>
                            </ul>
                            </li>
                            ';
                            
                            echo '<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ᴜꜱᴇʀ ᴀᴄᴛɪᴏɴꜱ
                        </a>';
                    echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
                    if(!$logdin)
                    {

                        echo '<li><a class="dropdown-item" href="http://localhost:8080/TextDev/component/signup.php">ֆɨɢռ ʊք</a></li>
                        <li>
                        <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="http://localhost:8080/TextDev/component/login.php">𝓛𝓸𝓰𝓲𝓷</a></li>
                        <li>
                        </li></ul>';
                    }
                    if($logdin)
                    {

                        echo  '<li><a class="dropdown-item" href="http://localhost:8080/TextDev/component/logout.php">𝕷𝖔𝖌𝖔𝖚𝖙</a></li></ul>';
                        
                    }
                    echo' </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://localhost:8080/TextDev/component/contact.php">🅲🅾🅽🆃🅰🅲🆃</a>
                    </li>';
                    echo '<li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost:8080/TextDev/component/about.php">A͎b͎o͎u͎t͎ ͎U͎s͎</a>
                    </li>
                </ul>';

               echo '<form class="d-flex">';
                if(!$logdin)
                {
                    echo '<a class="btn btn-outline-light bg-success" href="http://localhost:8080/TextDev/component/signup.php">ֆɨɢռ ʊք</a>
                    <a class="btn btn-outline-light bg-success mx-2" href="http://localhost:8080/TextDev/component/login.php">𝓛𝓸𝓰𝓲𝓷</a>';
                }
                if($logdin)
                {
                    echo '<a class="btn btn-outline-light bg-success mx-2" href="http://localhost:8080/TextDev/component/logout.php">𝕷𝖔𝖌𝖔𝖚𝖙</a>';
                }
               echo'  </form>
            </div>
    </nav>';
?>