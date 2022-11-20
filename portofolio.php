<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mico Portofolio</title>
    <link href ="portofolio.css?" rel ="stylesheet" type = "text/css"></link>
</head>
<body>
    <?php
        $logo = "MICXO.";
        $home = "Home";
        $abt = "About";
        $projek = "Project";
        $chat = "Contact Me";
        $greet = "Hi! I Am";
        $job = "Front End Dev";
        $nama = "Mico Febrian";
        $experience = "Developing Front end Site for 1 year";
        $school = "SMKN 4 Bandung Student";
        $hire = "Hire Me";
        $projects = "Projects ➡";
        $work = "5";
        $wrkCapt = "Projects on work";
        $finish = "+20";
        $fnshCapt= "Projects Done";
        $time = "On Last 3 Month";
        $contact = "Contact";
        $email = "@sutanmico@gmail.com";
        $bisnis = "Create your site with";
        $or = "or";
        $code1 = "HTML CSS";
        $code2 = "Javascript";
        $code3 = "Bootstrap";
        $sosial = "Social Media";
        $projek = "Recent Project ➡"
    ?>
    <nav>
        <p><?= $logo ?><br> </p>
    <div class="navLinks">
        <a href="#">
            <?= $home ?><br>
        </a>
        <a href="#">
            <?= $abt ?><br>
        </a>
        <a href="#">
            <?= $projek ?><br>
        </a>
    </div>
    <button>
            <?= $chat ?><br>
    </button>
    </nav>

    <div class="line"></div>
    <main>
        <section class="right">
            <div class="name">
                <h1> <?= $greet ?> <span><?=$job?></span>
                </h1> 
                <h1><?=$nama?></h1>
            </div>
            <div class="experience">
                <p><?= $experience?></p>
                <p><?= $school?></p>
            </div>
            <div class="right-btn">
                <a href="#"><button class="hire"><?=$hire?></button></a>
                <a href="#"><button class="project-btn"><?=$projects?></button></a>
            </div>
            <div class="projects">
                <h1><?=$work?></h1>
                <p><?=$wrkCapt?></p>
                <div class="finish-wrap">
                    <div class="finish">
                        <h1><?=$finish?></h1>
                        <p><?=$fnshCapt?></p>
                        <p><?=$time?></p>
                    </div>
                    <div class="contact">
                        <h1><?=$contact?></h1>
                        <p><?=$email?></p>
                    </div>
                </div>
                <div class="right-footer">
                    <!-- <img src="media/top-social-media-tips-trends-1-1024x685-removebg-preview.png    " alt=""> -->
                    <h1><?=$sosial?></h1>
                    <div class="sosmed-wrap">
                        <a href="#"><i class="fa-brands fa-instagram"></i></a> 
                        <a href="#"><i class="fa-brands fa-github"></i> </a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                   </div>
                </div>
            </div>
        </section>
        <section class="left">
            <h1><?=$bisnis?> <span><?=$code1?></span></h1>
            <h1><?=$code2?> <span><?=$or?></span> <?=$code3?></h1>  
            <h1><?=$projek?></h1>
            <div class="projek-wrap">
                <img src="media/genshin.png" alt="">
                <img src="media/lang.png" alt="">
                <img src="media/manga.png" alt="">
                <img src="media/shuita.png" alt="">
            </div>
        </section>
    </main>

    <script src="https://kit.fontawesome.com/411962fcb9.js" crossorigin="anonymous"></script>
</body>
</html>