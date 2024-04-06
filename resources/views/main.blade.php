<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abdulazizbek</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" href="{{asset('assets/imgs/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/loader.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animated.css')}}">

</head>
<body>
<div class="container1" id="loader">
    <div class="dash uno"></div>
    <div class="dash dos"></div>
    <div class="dash tres"></div>
    <div class="dash cuatro"></div>
</div>


<header id="header" class="wow animate__animated animate__slideInLeft">
    <div class="user">
        <img src="{{asset('assets/imgs/img.jpg')}}" alt="">
        <h3 class="name">Abdulazizbek</h3>
        <p class="post">Back end Developer</p>
    </div>
    <nav class="navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skill">My Skill</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</header>

<!--Home page start -->
<div id="menu" class="fa-solid fa-bars"></div>
<section class="home" id="home">
    <h3 class="wow animate__animated animate__slideInDown">HI THERE !</h3>
    <h1 class="wow animate__animated animate__fadeInLeftBig">I'M <span>ABDULAZIZBEK </span></h1>
    <p class="wow animate__animated animate__fadeInDown"> Men Mirzanematov Abdulaziz Muhammadjon o'g'ili 2005-yil 8-yanvarda tug'ilganman. Men hozirda Web daturlash
        sohasining Backend yo'nalishi bo'yicha tahsil olayapman. Hozirda Php dasturlash tilining eng mashhur
        <i>laravel</i> frameworkini o'rganmoqdaman. </p>
    <p class="wow animate__animated animate__fadeInDown">Bu mening ijtimoiy tarmoqlarim 👇👇</p>
    <div class="wrapper wow animate__animated animate__fadeInUpBig">
        <div class="button">
            <a target="_blank" href="https://www.facebook.com/p/Abdulaziz-Mirzanematov-61555604114994/?mibextid=ZbWKwL">
                <div class="icon"><i class="fab fa-facebook-f"></i></div>
            </a>
            <span>Facebook</span>
        </div>
        <div class="button">
            <a target="_blank"
               href="https://www.linkedin.com/in/abdulaziz-mirzanematov-34b5532b2?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                <div class="icon"><i class="fab fa-linkedin"></i></div>
            </a>
            <span>Linkedin</span>
        </div>
        <div class="button">
            <a target="_blank" href="https://t.me/abdulazizbekcoder">
                <div class="icon"><i class="fab fa-telegram"></i></div>
            </a>
            <span>Telegram</span>
        </div>
        <div class="button">
            <a target="_blank" href="https://www.instagram.com/abdulaziz.mirzanematov?igsh=NDc4YjFma3Byd254">
                <div class="icon"><i class="fab fa-instagram"></i></div>
            </a>
            <span>Instagram</span>
        </div>
        <div class="button">
            <a target="_blank" href="https://github.com/AbdulazizbekCoder">
                <div class="icon"><i class="fab fa-github"></i></div>
            </a>
            <span>GitHub</span>
        </div>
    </div>
    <a href="#about">
        <button class="btn wow animate__animated animate__fadeInUpBig">About me<i class="fa-solid fa-user"></i></button>
    </a>
</section>
<!--Home page end-->
<!--about page start-->

<section class="about" id="about">

    <h1 class="heading wow animate__animated animate__fadeInDownBig"><span>About</span> me </h1>
    <div class="row">
        <div class="info wow animate__animated animate__fadeInLeft">
            <h3><span>Name: </span>Abdulazizbek Mirzanematov</h3>
            <h3><span>age: </span> 19 </h3>
            <h3><span>qualification: </span> Junior </h3>
            <h3><span>job: </span> Backand developer </h3>
            <h3><span>language: </span> Uzbek </h3>
            <a href="{{asset("assets/documents/Abdulazizbek's Resume (1).pdf")}}">
                <button class="btn"> Downland CV <i class="fa-solid fa-download"></i></button>
            </a>
        </div>
        <div class="counter wow animate__animated animate__fadeInRight">
            <div class="box">
                <span>6+</span>
                <h3>month of experiance</h3>
            </div>
            <div class="box">
                <span>0</span>
                <h3>Project complete</h3>
            </div>
            <div class="box">
                <span>0</span>
                <h3>happy clients</h3>
            </div>
            <div class="box">
                <span>0</span>
                <h3>award won</h3>
            </div>
        </div>
    </div>

</section>


<section class="skills" id="skill">
    <h2 class="skill-header wow animate__animated animate__fadeInDown">My Top Skills</h2>

    <div class="skills-wrapper ">
        <div class="first wow animate__animated animate__fadeInDown">
            <img src="{{asset("assets/imgs/html.png")}}" alt="" loading="lazy" class="icon icon-card" />
            <img src="{{asset("assets/imgs/css.png")}}" alt="" loading="lazy" class="icon icon-card" />
            <img src="{{asset("assets/imgs/js.png")}}" alt="" loading="lazy" class="icon icon-card" />
        </div>

        <div class="secont wow animate__animated animate__fadeInUp">
            <img src="{{asset("assets/imgs/php.png")}}" alt="" loading="lazy" class="icon icon-card" />
            <img src="{{asset("assets/imgs/git.png")}}" alt="" loading="lazy" class="icon icon-card" />
            <img src="{{asset("assets/imgs/sql.png")}}" alt="" loading="lazy" class="icon icon-card" />
        </div>
    </div>
</section>

<!--education page start-->
<section class="education" id="education">
    <h1 class="heading wow animate__animated animate__fadeInDown">my<span> education</span></h1>
    <div class="box-container wow animate__animated animate__fadeInUp">
        <div class="box">
            <i class="fa-solid fa-graduation-cap"></i>
            <span>2021</span>
            <h3>frontend development</h3>
            <p>Men 2021- yil dusturlash sohasiga kirib kelganman. men 6 oy davomida web dasturlashning front end
                yo'nalishi bo'yicha tahsil olganman</p>
        </div>
        <div class="box">
            <i class="fa-solid fa-graduation-cap"></i>
            <span>2022</span>
            <h3>backend development</h3>
            <p>Front end yonalishini boshlang'ich bilim bilan tugatganimdan so'ng back end yonalishini boshlashga qaror
                qildim va 2022- yilda web dasturlashning back end yonalishiga kirib keldim</p>
        </div>
        <div class="box">
            <i class="fa-solid fa-graduation-cap"></i>
            <span>2023</span>
            <h3>backend development</h3>
            <p>2023- yil back end sohasini chuqurroq o'rganish maqsadida youtube ijtimoiy tarmog'idan darslar korib
                <u>IT Center</u>da o'rgangan bilimimni mustahkamlab bordim</p>
        </div>
        <div class="box">
            <i class="fa-solid fa-graduation-cap"></i>
            <span>2024</span>
            <h3>backend development</h3>
            <p>Men hozirda php dasturlash tilini <u>Laravel</u> frameworkini chuqurroq o'rganyapman va hozirda
                <u>IT Centerda</u> <a target="_blank" href="https://nurbek.uz">Nurbek makhmudov</a> tomonidan o'tilayotgan Laravel
                darslarida faol o'quvchiman </p>
        </div>
    </div>
</section>

<!--education page end-->

<!--portfolio page start-->

<section class="portfolio" id="portfolio">

    <h1 class="heading wow animate__animated animate__fadeInDown">my<span> Portfolio</span></h1>
    <h3 class="wow animate__animated animate__fadeInUp">I'm not a<span> Portfolio </span> 😢 </h3>
{{--   <div class="box-container wow animate__animated animate__fadeInUp">--}}
{{--       <div class="box">--}}
{{--           <img src="img/9.%20Пустыня.jpg" alt="">--}}
{{--       </div>--}}
{{--       <div class="box">--}}
{{--           <img src="img/10.%20Цветы.jpg" alt="">--}}
{{--       </div>--}}
{{--       <div class="box">--}}
{{--           <img src="img/11.%20Закат.jpg" alt="">--}}
{{--       </div>--}}
{{--       <div class="box">--}}
{{--           <img src="img/12.%20Вода.jpg" alt="">--}}
{{--       </div>--}}
{{--       <div class="box">--}}
{{--           <img src="img/13.%20Камни.jpg" alt="">--}}
{{--       </div>--}}
{{--       <div class="box">--}}
{{--           <img src="img/14.%20Листва.jpg" alt="">--}}
{{--       </div>--}}
{{--   </div>--}}

</section>
<!--portfolio page end-->

<!--contact page start-->
<section class="contact" id="contact">

    <h1 class="heading wow animate__animated animate__fadeInDown"><span>contact</span> me</h1>
    <div class="row">
        <div class="content wow animate__animated animate__fadeInLeft">
            <h3 class="title">contact info</h3>
            <div class="info">
                <h3><i class="fa-solid fa-envelope"></i><i></i> abdulazizbek.coder@gmail.com</h3>
                <h3><i class="fa-solid fa-phone"></i><i></i> +998 94 654 43 53</h3>
                <h3><i class="fa-solid fa-phone"></i><i></i> +998 94 442 08 75</h3>
                <h3><i class="fa-solid fa-map-marker-alt"></i><i></i> Fergana, Uzbekistan - 150318. </h3>
            </div>
        </div>

        <!--        <form action="">-->
        <!--            <input type="text" placeholder="name" class="box">-->
        <!--            <input type="email" placeholder="email" class="box">-->
        <!--            <input type="text" placeholder="project" class="box">-->
        <!--            <textarea name="" id="" cols="30" rows="10" class="box message" placeholder="message"></textarea>-->
        <!--            <button type="submit" class="btn"> send <i class="fa-solid fa-paper-plane"></i></button>-->
        <!--        </form>-->
    </div>
    <!--    <div class="telegram">-->
    <!--        <a class="btn btn-telegram"> Telegram </a>-->
    <!--    </div>-->

</section>

<!--contact page end-->
<a href="#home" class="top">
    <img src="{{asset("assets/imgs/top.png")}}" alt="">
</a>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/js/animated.js')}}"></script>
<script>
    wow = new WOW(
        {
            boxClass:     'wow',      // default
            animateClass: 'animated', // default
            offset:       0,          // default
            mobile:       true,       // default
            live:         true        // default
        }
    )
    wow.init();
</script>
</script>

</body>
</html>
