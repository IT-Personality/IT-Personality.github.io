<?php include("likes.php") ?>
<?php
$file = "count.txt";
if (!is_file($file)) {
	$fh = fopen($file, 'w');
	fwrite($fh, 0);
	fclose($fh);
}
$data = (int)file_get_contents($file);
?>
<?php
$file = file("connect/view_count.txt");
$count = implode("", $file);
$count++;
$myfile = fopen("connect/view_count.txt", "w");
fputs($myfile, $count);
fclose($myfile);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>AIMP. Скачать</title>
    <meta charset="UTF-8">
    <meta property="og:image" content="https://klondikeitblogger.ga/moreprog/AIMP/img/aimp%20(1).png">
    <meta property="og:url" content="https://klondikeitblogger.ga/">
    <meta property="og:title" content="AIMP. Скачать">
    <meta property="og:description"
        content="Вы ищете хороший аудио плеер? AIMP Classic может быть хорошим выбором. Это не только хороший аудио плеер, но он также включает редактор тегов и поисковик текстов песен. ">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/favicon.png" rel="shortcut icon" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/mores.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="wow.min.js"></script>
    <script>
    new WOW().init();
    </script>

</head>

<body>
    <div class="hamburger-menu">
        <input id="menu__toggle" type="checkbox" />
        <label class="menu__btn" for="menu__toggle">
            <span></span>
        </label>
        <a class="site-logo wow animate__ animate__fadeIn animated" href="https://klondikeitblogger.ga/"
            style="visibility: visible; animation-name: fadeIn;">
            <img src="img/logo.png" alt="">
        </a>
        <ul class="menu__box">
            <a href="https://klondikeitblogger.ga/">Домашняя страница</a>
            <a href="https://klondikeitblogger.ga/program.html">Программы</a>
            <a href="https://klondikeitblogger.ga/program_android.html">Программы под Android</a>
            <a href="https://www.youtube.com/channel/UCUIvzn8IMJevEfua3OPD4mg">Наш YouTube</a>
            <a href="https://t.me/ait_bro01z">Наш Telegram</a>
        </ul>
    </div>
    <section class="page-section recent-game-page spad">
        <div class="container">
            <div class="photo">
                <div class="DriverTest">
                    <img src="img/aimp-logo (1).png" alt="">
                </div>
                <div class="iobith1">
                    <h1>AIMP</h1>
                </div>
            </div>

            <div class="static">
                <div><img class="view" src="img/view.png" alt=""><span class="vie">Просмотров: <?= $count ?></span>
                    <div>
                        <span id="like"><input type="button" id="link" value="Лайк!" /><img class="like"
                                src="img/like.png" alt=""></span>
                        <div class="counter">
                            <h6 id="counter"><?= $data ?></h6>
                        </div>
                        <script src="https://yastatic.net/share2/share.js"></script>
                        <div class="soch">
                            <div class="ya-share2" data-curtain data-size="l" data-shape="round"
                                data-services="vkontakte,facebook,odnoklassniki,telegram,twitter,linkedin"></div>
                        </div>
                    </div>


                    <div class="opis">
                        <p id="text21">
                            Вы ищете хороший аудио плеер? AIMP Classic может быть хорошим выбором. Это не только хороший
                            аудио плеер, но он также включает редактор тегов и поисковик текстов песен.
                            AIMP - это многофункциональный аудио центр. Благодаря встроенным утилитам, вы с легкостью
                            можете перекодировать музыку из одного формата в другой, записать звук с микрофона или
                            другого звукового устройства, отредактировать тэги MP3, OGG, WMA файлов, а так же группой
                            переименовать или отсортировать музыкальные файлы. Программа создавалась по замечаниям
                            пользователей других плееров, так что в нем сосредоточилось все самое лучшее и даже больше.
                            Работает со следующими форматами файлов аудио: wav; ogg; wma; cda; mp3; mp2; mp1; mtm; mod;
                            xm; it; aif; umx; s3m; mo3; и др. Данный список поддерживаемых форматов<br> можно пополнить
                            при помощи дополнительных плагинов.
                        </p>
                        <div class="vozv">
                            <h1>Возможности AIMP :</h1>
                        </div>
                        <div class="osob">
                            <li>Поддержка плагинов, с помощью которых можно расширить возможности программы:<br>
                                добавить новые утилиты и изменить уже имеющиеся!</li>
                            <li>Настройка глобальных и локальных горячих клавиш ( + шаблоны от WinAmp и WMP )</li>
                            <li>Аудио Конвертер позволяет конвертировать музыку из самых разных форматов в<br>
                                популярные wma, mp3, wav, ogg.</li>
                            <li>АудиоГраббер позволяет "грабить" AudioCD (CDA) в Mp3, OGG, WAV или WMA</li>
                        </div>
                        <div class="oper">
                            <h1>Операционные системы:</h1>
                        </div>
                        <div class="osob1">
                            <li>Windows 10 / 8.1 / 8 / 7 / Vista (32-bit и 64-bit)</li>
                        </div>
                    </div>
                </div>
                <a id="ifandonwlod" href="https://verstkag.github.io/filesprog/aimp_5.00.2344.exe">Скачать сейчас!</a>
                <div class="Driv1 wow animate__animated animate__fadeInRight">
                    <img src="img/aimp (1).png" alt="">
                </div>
                <div class="Driver2 wow animate__animated animate__fadeInRight">
                    <img src="img/aimp-1.png" alt="">
                </div>
    </section>

    <footer class="footer-section">
        <ul class="footer-menu">
            <li><a class="home" href="https://klondikeitblogger.ga/">Домашняя страница</a></li>
            <li><a class="youtube" href="https://www.youtube.com/channel/UCUIvzn8IMJevEfua3OPD4mg">Наш YouTube</a></li>
            <li><a class="telegram" href="https://t.me/ait_bro01z">Наш Telegram</a></li>
            <li><a class="prog" href="https://klondikeitblogger.ga/program.html">Программы</a></li>
            <li><a class="and_prog" href="https://klondikeitblogger.ga/program_android.html">Программы под Android</a>
        </ul>
        </ul>
        <h6>©2021-2022 Автор проекта - <a class="it-personality" href="https://klondikeitblogger.ga/it-personality/">
                IŦ-Personality</a></h6>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/mi7.js" type="text/javascript"></script>
</body>

</html>