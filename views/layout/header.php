
<!doctype html>
<html lang="en">

<head>

    <title><?php echo ($title)?$title :'Starsboard | Educator|Online Teacher|Student|Online class'?></title>
    <!--== META TAGS ==-->
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#76cef1"/>
    <meta property="og:image" content="images/home/7794124691logo-b.png"/>
    <meta name="description"
          content="">
    <meta name="keyword"
          content="">    <!--== FAV ICON(BROWSER TAB ICON) ==-->
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <!--== GOOGLE FONTS ==-->
    <link href="https://fonts.googleapis.com/css?family=Oswald:700|Source+Sans+Pro:300,400,600,700&display=swap" rel="stylesheet">
    <!--== WEB ICON FONTS ==-->
    <link rel="preload" as="font" href="css/icon.woff2" type="font/woff2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--== CSS FILES ==-->
    <link rel="stylesheet" href="<?=base_url('assets/public/css/jquery-ui.css');?>">
	
    <link rel="stylesheet" href="<?=base_url('assets/public/css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/public/css/style.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/public/css/fonts.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/public/css/app.min.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/public/css/animate.css');?>">

    <link rel="stylesheet" href="<?=base_url('assets/public/css/owl.theme.default.min.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/public/css/owl.carousel.min.css');?>">
    <link rel="shortcut icon" type="image/x-icon" href="https://starsboard.in/assets/public/images/favicon.jpg" />
   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="<?=base_url('assets/public/js/html5shiv.js');?>"></script>
    <script src="<?=base_url('assets/public/js/respond.min.js');?>"></script>
    <![endif]-->

    <!--    Google Analytics Code Starts-->
    <!--    Google Analytics Code Starts-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90614514-2"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-90614514-2');
    </script>
    <!--    Google Analytics Code Ends-->  
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7381950378620686"
     crossorigin="anonymous"></script>
     
   <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-178762842-3">
</script>
<script data-ad-client="ca-pub-7381950378620686" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-178762842-3');
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7381950378620686"
     crossorigin="anonymous"></script>
</head>
<style type="">
    .flip-card{
        background-color: transparent;
    width: 100%;
    padding-bottom:10px;
    height: 240px;
    perspective: 1000px;

}


.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  border-radius: 10px;
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  transition: all .5s ease;
    color: #000;
    background: #fff;
    text-align: center;
    padding: 25px 20px 27px 20px;
    box-shadow: 0px 0px 12px 2px rgb(0 0 0 / 7%);
    border-radius: 10px;
}

.flip-card-back {
background: linear-gradient(to top left,#db49ff,#2879fe)!important;
    color: white;
    transform: translate3d(0,0,-1px) rotateY( 
180deg
 );
    padding: 3.4rem 1rem 0.1rem;
    border-radius: 10px;
    box-shadow: 0 5px 50px 0 rgb(0 0 0 / 10%);
    text-align: center;
    font-size:17px;
}
.flip-card-front h4{
    margin-bottom: 32px;
    margin-top: 32px;
    font-size: 19px;
}
.flip-card-front a{
    padding: 4px 7px;
    border-radius: 30px;
    font-size: 13px;
    border: 1px dashed #fff;
    box-shadow: 0 0 0 3px #151f31;
    background-color: #3f4550;
    color: #fff;
}
.animation-jump {
    position: relative;
    -webkit-animation: animation-jump 2s ease-in-out infinite;
    animation: animation-jump 2s ease-in-out infinite;
}

@-webkit-keyframes animation-jump {
    0% {
        top: 10px;
    }
    50% {
        top: -10px;
    }
    100% {
        top: 10px;
    }
}

@keyframes animation-jump {
    0% {
        top: 10px;
    }
    50% {
        top: -10px;
    }
    100% {
        top: 10px;
    }
}
.hom2-hom-ban1:before {
    background-image: linear-gradient(to top left,#db49ff,#2879fe)!important;
}
.hom2-hom-ban a{
    background: linear-gradient(75deg, #9c27b0 25%, #0343ec 75%)!important;
    color: #fff!important;
    padding: 10px 20px!important;
    border-radius: 5px!important;
    display: inline-block!important;
    cursor: pointer!important;
    font-size: 13px!important;
    font-weight: 900!important;
}
.hom-nav .bl li:last-child a {
    background: linear-gradient(
75deg
, #9c27b0 25%, #0343ec 75%)!important;
    color: #fff;
    padding: 10px 30px 10px 30px;
    border-radius: 5px;
    margin-left: 10px;
}

.hom2-hom-ban-main{
    padding-bottom: 0px !important
}
.land-pack-grid-btn:hover {
    transform: scale3d(1.02, 1.02, 1.02);
    border-bottom:5px solid #9c27b0;
}
.land-pack-grid-img{
    height: 170px !important;
}
.land-pack .more{
        background: linear-gradient( 
75deg
 , #9c27b0 25%, #0343ec 75%)!important;
    color: #fff!important;
    padding: 10px 20px!important;
    border-radius: 5px!important;
    display: inline-block!important;
    cursor: pointer!important;
    font-size: 13px!important;
    font-weight: 900!important;
    display: table !important;
}
figure {
    width: 300px;
    height: 200px;
    margin: 0;
    padding: 0;
    background: #fff;
    overflow: hidden;
}
figure:hover+span {
    bottom: -36px;
    opacity: 1;
}
/* Circle */
.hover15 figure {
    position: relative;
}
.hover15 figure::before {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 2;
    display: block;
    content: '';
    width: 0;
    height: 0;
    background: rgba(255,255,255,.2);
    border-radius: 100%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    opacity: 0;
}
.hover15 figure:hover::before {
    -webkit-animation: circle .75s;
    animation: circle .75s;
}
ul.bl.right-btn {
    margin: 0 47px;
    float: left;
    width: 20%;
    right: 0;
    display:block;
}

@media screen and (max-width: 992px) {
.bl.right-btn {
    display: none !important;
}}
@-webkit-keyframes circle {
    0% {
        opacity: 1;
    }
    40% {
        opacity: 1;
    }
    100% {
        width: 200%;
        height: 200%;
        opacity: 0;
    }
}
@keyframes circle {
    0% {
        opacity: 1;
    }
    40% {
        opacity: 1;
    }
    100% {
        width: 200%;
        height: 200%;
        opacity: 0;
    }
}
.hom-col-req button{
    background: linear-gradient( 
75deg
 , #9c27b0 25%, #0343ec 75%)!important;
    color: #fff!important;
    padding: 10px 20px!important;
    border-radius: 5px!important;
    display: inline-block!important;
    cursor: pointer!important;
    font-size: 13px!important;
    font-weight: 900!important;
    border: none!important;
}
.btn-ser-need-ani {
    background: linear-gradient(
75deg
, #9c27b0 25%, #0343ec 75%)!important;
}
.hom-cre-acc-left ul li{
  background: rgba(170, 170, 170, 0.15);
    border-left: 0;
    color: rgba(85, 94, 106, 0.8);
    padding: 26px;
    position: relative;
    border-radius: 5px;
    box-shadow: 0 3px 0 rgb(182 196 209 / 30%);
    margin-bottom: 20px;
}
.bg_tb{
        background-image: url(https://starsboard.in/assets/public/images/bg_new.jpg);
    background-color: #f1eeee;
    background-blend-mode: overlay;
    height: 533px;
    background-position: inherit;
}
.hom-col-req {
    background: rgb(120 120 120 / 50%);
    /* padding: 40px; */
    margin: 20px 20px;
    border-radius: 10px;
    margin-top: 19px;
}
.menu_social{
    transition: width 3s, height 3s, transform 3s!important;
}
.menu_social:hover {
    transform: rotate(360deg) !important;
}
.how-wrks-inn ul li div {
    border: 1px solid #548aff !important;
}
.bot-book{
    background:linear-gradient(75deg, #9c27b0 25%, #0343ec 75%)!important;
}
.bb-link a {
    background: linear-gradient(75deg, #5979d0 25%, #9c27b0 75%)!important;
}
.dir-home-nav-bot ul li a {
    background: linear-gradient(75deg, #9c27b0 25%, #0343ec 75%)!important;
}
.ban-search ul li input[type="submit"]{background:linear-gradient(75deg, #9c27b0 25%, #0343ec 75%)!important
}
.ro-txt p{
font-size: 14px;
}
.ro-txt h2{
    font-family: 'Poppins',sans-serif;
    font-size: 20px;
    padding-bottom: 5px;
    margin-top: 20px;
}
.room-suite .item_1 {
    -webkit-transition: all 300ms linear 0s;
    transition: all 300ms linear 0s;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}
.room-suite-htwo .item_1 .ro-img {
    border-bottom: 0px solid transparent;
}
.room-suite .item_1 .ro-img {
    position: relative;
    border-bottom: 2px solid #0343ec;
    text-align: center;
    z-index: 0;
    overflow: hidden;

}
.room-suite .item_1 .ro-img:before {
    position: absolute;
    background-color: rgb(3 67 236 / 25%);
    content: "";
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: block;
    -webkit-transform: scale(0.2);
    -ms-transform: scale(0.2);
    transform: scale(0.2);
    -webkit-transition: all 300ms;
    transition: all 300ms;
    opacity: 0;
}
.room-suite-htwo .item_1 .ro-txt {
    background: transparent;
    border-left: 1px solid transparent;
    border-right: 1px solid transparent;
    border-bottom: 1px solid transparent;
    padding: 0;
}
.room-suite .item_1 .ro-txt {
   background: #f7f7f7;
    /* border-left: 1px solid #e6e1e1; */
    /* border-right: 1px solid #e6e1e1; */
    /* border-bottom: 1px solid #e6e1e1; */
    overflow: hidden;
    padding: 0 1em;
    background: white;
    box-shadow: 1px 1px 4px 2px #ccc;
    height: 200px;
}
.room-suite {
    position: relative;
    width: 100%;
    padding-bottom:10px;
    
}
.ro-txt{
    background: #f7f7f7;
    overflow: hidden;
    padding: 0 1em;
    background: white;
    box-shadow: 1px 1px 4px 2px #ccc;
    height: 200px;
}
.ho-popu-bod div {
    float: left;
    padding-bottom: 10px;
}
.ro-img img{
    width: 100% !important;
    object-fit: cover;
}
.room-suite .item_1:hover .ro-img:before {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    opacity: 1;
    z-index: 1;
}
.room-suite .item_1 .ro-img:before {
    position: absolute;
    background-color: rgb(3 67 236 / 25%);
    content: "";
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: block;
    -webkit-transform: scale(0.2);
    -ms-transform: scale(0.2);
    transform: scale(0.2);
    -webkit-transition: all 300ms;
    transition: all 300ms;
    opacity: 0;
}
.owl-carousel{
    display: block !important;
}
.nasir-welboxes .single_wel_cont {
    padding: 15px;
}
.wel-box {
    display: block;
    height: 170px;
    padding-bottom: 0;
}

.wel-box {
    box-shadow: 0 5px 50px 0 rgb(0 0 0 / 10%);
    background: #fff;
    padding: 2em 0 3em;
    position: relative;
}
.wel-box:before {
    content: '';
    position: absolute;
    border: 1px dashed #d9d9d9;
    top: 7px;
    left: 10px;
    right: 10px;
    bottom: 7px;
}
.wel-box .icon-box {
    text-align: center;
}
.wel-box h4 {
    color: #0e1322;
    text-align: center;
    font: 400 1.57em/1.4em 'PT Serif', serif;
    font-style: italic;
    margin: 0.5em 0 0;
    padding: 0;
}
.wel-box .overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background:linear-gradient(75deg, #9c27b0 25%, #0343ec 75%)!important;
    padding: 10px;
    transform: scale(0, 0);
    -webkit-transform: scale(0, 0);
    -moz-transform: scale(0, 0);
    -ms-transform: scale(0, 0);
    -o-transform: scale(0, 0);
}
.transition3s {
    -webkit-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
.wel-box .overlay .icon_position_table {
    border: 1px dashed rgba(236, 236, 236, 0.5);
    display: -webkit-flex;
    display: flex;
    height: 100%;
    align-items: center;
    -webkit-align-items: center;
    justify-content: center;
    -webkit-justify-content: center;
}
.wel-box{
    width:100%;
}
.icon-box img{
    width: 50px;
    border-radius: 50%;
    position: absolute;
    left: 39%;
}
.wel-box .overlay .icon_position_table .icon_container {
    text-align: center;
    padding: 0 1.5em;
}
.wel-box .overlay .icon_position_table .icon_container h2 {
    text-align: center;
    font-size:15px;
    color: #fff;
    margin: 0;
    padding: 0 0 0.5em;
    font-style: italic;
}
.wel-box .overlay .icon_position_table .icon_container p {
    text-align: center;
    color: #fffefe;
    font-size:12px;
    margin: 0;
    padding: 0;
}
.single_wel_cont:hover .overlay, .single_wel_cont:focus .overlay {
    transform: scale(1, 1);
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
}
.wel-box .overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: #85ab00;
    padding: 10px;
    transform: scale(0, 0);
    -webkit-transform: scale(0, 0);
    -moz-transform: scale(0, 0);
    -ms-transform: scale(0, 0);
    -o-transform: scale(0, 0);
}
.about_img img{
    width: 446px;
    border-radius: 10px;
    height: 400px;
    object-fit: cover;
}
.box{
 box-shadow: -2px 3px 20px 0px rgb(39 3 9 / 10%);
    padding: 4rem;
    background: #fff;
    border-radius: 10px;
    width: 1142px;
    height: 269px;
}
 .eapp-popup-content-blocks-container-free-link{
    display:none;
}
.hom-nav .bla li:last-child a {
    background: linear-gradient(
75deg
, #9c27b0 25%, #0343ec 75%)!important;
    color: #fff;
    padding: 10px 30px 10px 30px;
    border-radius: 5px;
    margin-left: 10px;
}
</style>

<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>


<?php if($this->session->userdata('isUserLoggedIn')): ?>

        <section>
            <div class="str">
              <?php if (!$this->uri->segment(1)): ?>
            <div  class="hom-head" style=" background-image: url('assets/public/images/banner.jpg');" >
                <?php else: ?>
                    <div>
                <?php endif; ?>

                    <div class="hom-top">
                        <div class="container">
                            <div class="row">
                                <div class="hom-nav  db-open "><!--MOBILE MENU-->
                                    <a href="<?php echo base_url();?>" class="top-log"><img src="<?php echo base_url('assets/public/images/logo.png');?>" alt="" class="ic-logo"></a>
                                    <div class="menu">
                                    <img src="<?php echo base_url('assets/public/images/menu.jpg');?> " style="width: 25px;">
                                    </div>
                                    <div class="pop-menu">
                                        <div class="container">
                                            <div class="row">
                                                <i class="material-icons clopme">close</i>
                                                <div class="pmenu-spri">
                                                   <ul>
                                                    <li><a href="<?=base_url('educator/educator');?>" class="act"><img src="<?=base_url('assets/public/images/navigation/all.png');?>">All Educator</a></li>
                                                    <li><a href="<?=base_url('educator/academic');?>"><img src="<?=base_url('assets/public/images/navigation/academic.png');?>">Academic</a></li>
                                                    <li><a href="<?=base_url('educator/counselling');?>"><img src="<?=base_url('assets/public/images/navigation/couselling.png');?>">Counselling</a></li>
                                                    <li><a href="<?=base_url('educator/exam');?>"><img src="<?=base_url('assets/public/images/navigation/exam.png');?>">Exam</a></li>
                                                    <li><a href="<?=base_url('educator/training');?>"><img src="<?=base_url('assets/public/images/navigation/professionals.png');?>">Professional training</a></li>
                                                    <li><a href="<?=base_url('blog');?>"><img src="<?=base_url('assets/public/images/header/blog1.png');?>">Blogs</a></li>
                                                    <li><a href="<?=base_url('community');?>"><img src="<?=base_url('assets/public/images/header/11.png');?>">Community</a></li>
                                                 </ul>
                                                </div>
                                                <div class="pmenu-cat">
                                                    <h4>All Categories</h4>
                                                    <input type="text" id="pg-sear" placeholder="Search category">
                                                   <ul id="pg-resu">
                                                    <li><a href="<?php echo base_url('educator/study');?>">Study abroad</a></li>
													<li><a href="<?php echo base_url('educator/math');?>">Math</a></li>
													<li><a href="<?php echo base_url('educator/kids');?>">Kids Coding</a></li>
													<li><a href="<?php echo base_url('educator/acting');?>">Acting</a></li>
													<li><a href="<?php echo base_url('educator/cpl');?>">CPL</a></li>
													<li><a href="<?php echo base_url('educator/banking');?>">Career in Banking</a></li>
													<li><a href="<?php echo base_url('educator/commerce');?>">Commerce</a></li>
													<li><a href="<?php echo base_url('educator/digital');?>">Digital Marketing</a></li>
													<li><a href="<?php echo base_url('educator/music');?>">Music</a></li>
													<li><a href="<?php echo base_url('educator/jee');?>">JEE (Main)</a></li>
													<li><a href="<?php echo base_url('educator/government');?>">Career in Government Jobs</a></li>
													<li><a href="<?php echo base_url('educator/law');?>">Law</a></li>
													<li><a href="<?php echo base_url('educator/sql');?>">SQL</a></li>
													<li><a href="<?php echo base_url('educator/photography');?>">Photography</a></li>
													<li><a href="<?php echo base_url('educator/upsc');?>">UPSC</a></li>
													<li><a href="<?php echo base_url('educator/export');?>">Career In Import Export</a></li>
													<li><a href="<?php echo base_url('educator/management');?>">Management</a></li>
													<li><a href="<?php echo base_url('educator/foreign');?>">Foreign Languages</a></li>
													<li><a href="<?php echo base_url('educator/dancing');?>">Dancing</a></li>
													<li><a href="<?php echo base_url('educator/neet');?>">NEET</a></li>
                                                   </ul>
												  
                                                                           
                                                </div>
                                                <div class="dir-home-nav-bot">
                                                    <ul>
                                                        <li>A few reasons you’ll love Online educator search<span>Call us on: 8108000821</span> </li>
                                                    <li><a href="<?= base_url('feedback');?>" class="waves-effect waves-light btn-large"><i class="material-icons">font_download</i> Advertise with us</a>
                                                    </li>
                                                   <li><a href="<?= base_url('become-educator');?>" class="waves-effect waves-light btn-large"> <i class="material-icons">store</i> Become Educator</a>
                                                    </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--END MOBILE MENU-->

                                    <div class="top-ser">
                                       <form name="filter_form" id="filter_form" class="filter_form " method="post" >
                                            <ul>
                                                <li class="sr-sea">
                                                    <input type="text" autocomplete="off" id="searchBoxhead" value="" placeholder="Search ...">
                                                    <ul id="tser-res1" class="tser-res tser-res2">
                                                        
                                                        
                                            <li>
                                                <div>
                                                    <h4>Academic Educator</h4>
                                                    <span>Class I to XII | Hindi | English | Competetive Exams | Undergraduate | Postgraduate</span>
                                                    <a href="<?php echo base_url('educator/academic');?>"></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h4>Career Counselling Educator</h4>
                                                    <span>Career in Banking | Career In corporates | Career In Defence | Career in Engineering | Career in Government Jobs</span>
                                                    <a href="<?php echo base_url('educator/career-counselling');?>"></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h4>Professional Educator</h4>
                                                    <span>Kids Coding | Digital Marketing | Accounting | Website  Development | Graphic Desgning</span>
                                                    <a href="<?php echo base_url('educator/professional-educator');?>"></a>
                                                </div>
                                            </li>
                                                    </ul>
                                                </li>

                                                <li class="sbtn">
                                                    <button type="button"  id=""><i class=" submitHeadSearch large material-icons">search</i></button>
                                                </li>
                                                
                                            </ul>
                                        </form>
                                        
                                    </div>
                               <!--<ul class="bla" >-->
                               <!--     <li><a href="https://starsboard.in/become-educator">Become Educator</a></li>-->
                               <!-- </ul>-->
                               <?php
                                    if( (isset($user_data))&& ($user_data[0]->user_type == 'educator')){
                                                    ?>
                                            
                                            
                                            <ul class="bl right-btn"><li style="
"><a href="https://starsboard.in/become-educator" style="
    margin: 0 auto;
">Become Educator</a></li></ul>
                                                    <?php }?>
                               
                                    <div class="al">
                                    
                                        <div class="head-pro">
                                            <img
                                                src="" alt="" onerror="this.onerror=null;this.src='<?php echo base_url('assets/public/images/no-image.jpg');?>';">
                                            <b>Profile by</b><br>
                                            <h4><?php echo $this->session->userdata('username');?></h4>
                                            <a  href="" class="fclick"></a>
                                        </div>
                                        <div class="db-menu">
                                            <ul>
                                            <!-- <?php  
                                                // error_log("in sidebar".json_encode($user_data[0]->user_type));
                                                if((isset($user_data)) && ($user_data[0]->user_type == 'learner')){
                                                    ?>
                                            
                                            <li>
                                                    <a href="<?php echo base_url('learner_dashboard');?>" class="db-lact"><img src="<?php echo base_url('assets/public/images/navigation/dbl1.png');?>" alt=""/> My Learner's Dashboard</a></li>
                                                <li>
                                                    <?php }else{?>
                                                        <li>
                                                    <a href="<?php echo base_url('dashboard');?>" class="db-lact"><img src="<?php echo base_url('assets/public/images/navigation/dbl1.png');?>" alt=""/> My Dashboard</a></li>
                                                <li>
                                                        <?php  }?> -->
                                                <li>
                                                    <a href="<?php echo base_url('dashboard');?>" class="db-lact"><img src="<?php echo base_url('assets/public/images/navigation/dbl1.png');?>" alt=""/> My Dashboard</a></li>
                                                <li>
                                                <li>
                                                    <a href="<?php echo base_url('Lead');?>"><img src="<?php echo base_url('assets/public/images/navigation/dbl14.png');?>" alt=""/>Lead enquiry</a>
                                                </li>
                                               
                                                <li>
                                                    <a href="<?php echo base_url('my-blog');?>"><img src="<?php echo base_url('assets/public/images/navigation/dbl10.png');?>" alt=""/>Blog posts</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url('review');?>"><img src="<?php echo base_url('assets/public/images/navigation/dbl13.png');?>" alt=""/>Reviews</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url('profile');?>"><img src="<?php echo base_url('assets/public/images/navigation/dbl6.png');?>" alt=""/> My Profile</a>
                                                </li>
												<li>
                                                    <a href="<?php echo base_url('login/logout');?>"><img src="<?php echo base_url('assets/public/images/navigation/dbl12.png');?>" alt=""/> Logout</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--MOBILE MENU-->
                                    <div class="mob-menu">
                                        <div class="mob-me-ic"><i class="material-icons">menu</i></div>
                                        <div class="mob-me-all">
                                            <div class="mob-me-clo"><i class="material-icons">close</i></div>
                                            <div class="mv-pro ud-lhs-s1">
                                                <img
                                                    src="" alt="">
                                                <h4></h4>
                                                <b>Join on <?php echo $this->session->userdata('usercreated');?></b>
                                            </div>
                                            <div class="mv-pro-menu ud-lhs-s2">
                                                <ul>
                                               <li>
                                                    <a href="<?php echo base_url('dashboard');?>" class="db-lact"><img src="<?php echo base_url('assets/public/images/navigation/dbl1.png');?>" alt=""/> My Dashboard</a></li>
                                                <li>
                                                
                                                <li>
                                                    <a href="<?php echo base_url('become_educator');?>" class="tz-lma"><img src="<?php echo base_url('assets/public/images/navigation/dbl3.png');?>" alt=""/> Become Educator</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url('Lead');?>"><img src="<?php echo base_url('assets/public/images/navigation/dbl14.png');?>" alt=""/>Lead enquiry</a>
                                                </li>
                                               
                                                <li>
                                                    <a href="<?php echo base_url('my-blog');?>"><img src="<?php echo base_url('assets/public/images/navigation/dbl10.png');?>" alt=""/>Blog posts</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url('review');?>"><img src="<?php echo base_url('assets/public/images/navigation/dbl13.png');?>" alt=""/>Reviews</a>
                                                </li>
												
                                                <li>
                                                    <a href="<?php echo base_url('profile');?>"><img src="<?php echo base_url('assets/public/images/navigation/dbl6.png');?>" alt=""/> My Profile</a>
                                                </li>
												<li>
                                                    <a href="<?php echo base_url('login/logout');?>"><img src="<?php echo base_url('assets/public/images/navigation/dbl12.png');?>" alt=""/> Logout</a>
                                                </li>
                                                </ul>
                                            </div>
                                            <div class="mv-cate">
                                                <h4>All Categories</h4>
                                                <ul>
                                                    
                                                   <li><a href="<?php echo base_url('educator/study-abroad');?>">Study abroad</a></li>
													<li><a href="<?php echo base_url('educator/math');?>">Math</a></li>
													<li><a href="<?php echo base_url('educator/kids');?>">Kids Coding</a></li>
													<li><a href="<?php echo base_url('educator/acting');?>">Acting</a></li>
													<li><a href="<?php echo base_url('educator/cpl');?>">CPL</a></li>
													<li><a href="<?php echo base_url('educator/banking');?>">Career in Banking</a></li>
													<li><a href="<?php echo base_url('educator/commerce');?>">Commerce</a></li>
													<li><a href="<?php echo base_url('educator/digital');?>">Digital Marketing</a></li>
													<li><a href="<?php echo base_url('educator/music');?>">Music</a></li>
													<li><a href="<?php echo base_url('educator/jee');?>">JEE (Main)</a></li>
													<li><a href="<?php echo base_url('educator/government');?>">Career in Government Jobs</a></li>
													<li><a href="<?php echo base_url('educator/law');?>">Law</a></li>
													<li><a href="<?php echo base_url('educator/sql');?>">SQL</a></li>
													<li><a href="<?php echo base_url('educator/photography');?>">Photography</a></li>
													<li><a href="<?php echo base_url('educator/upsc');?>">UPSC</a></li>
													<li><a href="<?php echo base_url('educator/export');?>">Career In Import Export</a></li>
													<li><a href="<?php echo base_url('educator/management');?>">Management</a></li>
													<li><a href="<?php echo base_url('educator/foreign');?>">Foreign Languages</a></li>
													<li><a href="<?php echo base_url('educator/dancing');?>">Dancing</a></li>
													<li><a href="<?php echo base_url('educator/neet');?>">NEET</a></li>
                                                  
                                                   
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--END MOBILE MENU-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if (!$this->uri->segment(1)): ?>
                <div class="container">
                    <div class="row">
                        <div class="ban-tit">
                            <h1>
                                <!--<b>Connect with the right<br>Education Experts</b>                                                             </h1>-->
                        </div>
                        <div class="ban-search">
                            <form name="filter_form21"  class="filter_form" method="get" action="javascript://" onsubmit="return validateSearch();">
                                <ul>
                                    <li class="sr-cit">
                                        <input type="text" id="select-city" name="select-city" class="autocomplete" placeholder="City">
                                    </li>
                                    <li class="sr-sea">
                                        <input type="text" autocomplete="off" id="searchBox" value="" name="searchBox" placeholder="search educator..." class="search-field">
                                        <ul id="tser-res" class="tser-res tser-res1">

                                            <li>
                                                <div>
                                                    <h4>Academic Educator</h4>
                                                    <span>Class I to XII | Hindi | English | Competetive Exams | Undergraduate | Postgraduate</span>
                                                    <a href="<?php echo base_url('educator/academic');?>"></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h4>Career Counselling Educator</h4>
                                                    <span>Career in Banking | Career In corporates | Career In Defence | Career in Engineering | Career in Government Jobs</span>
                                                    <a href="<?php echo base_url('educator/career-counselling');?>"></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h4>Professional Educator</h4>
                                                    <span>Kids Coding | Digital Marketing | Accounting | Website  Development | Graphic Desgning</span>
                                                    <a href="<?php echo base_url('educator/professional-educator');?>"></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sr-btn">
                                        <input type="submit"  name="filter_submit"  value="Search" class="filter_submit">
                                    </li>
                                </ul>
                            </form>
                        </div>
                                <div class="ban-ql">
                             <div class="row">
                                <div class="col-md-3">
                                    <div class="flip-card">
                                      <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                          <img src="<?=base_url('assets/public/images/landing/1.png');?>" alt=""class="animation-jump heading">
                                          <h4>25,000 Educators</h4>
                                          <a href="">Explore Now</a>
                                        </div>
                                        <div class="flip-card-back">
                                          <p>Choose from vast array of experianced educators</p>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="flip-card">
                                      <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                          <img src="<?=base_url('assets/public/images/landing/2.png');?>" alt=""class="animation-jump heading">
                                          <h4> Courses offered</h4>
                                          <a href="">Explore Now</a>
                                        </div>
                                        <div class="flip-card-back">
                                          <p>over 100 different education services offered</p>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="flip-card">
                                      <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                          <img src="<?=base_url('assets/public/images/landing/3.png');?>" alt=""class="animation-jump heading">
                                          <h4>Peaking traffic</h4>
                                          <a href="">Explore Now</a>
                                        </div>
                                        <div class="flip-card-back">
                                          <p>5000 visitors visit us everyday and the number is increasing</p>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="flip-card">
                                      <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                          <img src="<?=base_url('assets/public/images/landing/4.png');?>" alt=""class="animation-jump heading">
                                          <h4>10,000 Students</h4>
                                          <a href="">Explore Now</a>
                                        </div>
                                        <div class="flip-card-back">
                                          <p>10,000 Students have trusted us to get found </p>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                           <!--  <ul>
                                <li>
                                    <div>
                                        <img src="<?=base_url('assets/public/images/landing/1.png');?>" alt="">
                                        <h4>10k Educators</h4>
                                        <p>Choose from vast array of experianced educators</p>
                                        <a href="">Explore Now</a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <img src="<?=base_url('assets/public/images/landing/2.png');?>" alt="">
                                        <h4> Courses offered</h4>
                                        <p>over 100 different education services offered</p>
                                        <a href="">Explore Now</a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <img src="<?=base_url('assets/public/images/landing/3.png');?>" alt="">
                                        <h4>Peaking traffic</h4>
                                        <p>5000 visitors visit us everyday and the number is increasing</p>
                                        <a href="">Explore Now</a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <img src="<?=base_url('assets/public/images/landing/4.png');?>" alt="">
                                        <h4>2k+ Premium Users</h4>
                                        <p>2k+ Premium Educators have trusted us to get found </p>
                                        <a href="">Explore Now</a>
                                    </div>
                                </li>

                            </ul> -->

                        </div>
                        

                    </div>
                </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
  <?php else: ?>

    <section>
        <div class="str">
            <?php if (!$this->uri->segment(1)): ?>
            <div  class="hom-head" style=" background-image: url(assets/public/images/banner.jpg);" >
                <?php else: ?>
                    <div>
                <?php endif; ?>
                <div class="hom-top">
                    <div class="container">
                        <div class="row">
                            <div class="hom-nav "><!--MOBILE MENU-->
                                <a href="<?php echo base_url();?>" class="top-log"><img src="<?php echo base_url('assets/public/images/logo.png');?>" alt="" class="ic-logo"></a>
                                <div class="menu">
                                     <img src="<?php echo base_url('assets/public/images/menu.jpg');?>" style="width: 25px;" title="Menu">
                                </div>
                                <div class="pop-menu">
                                    <div class="container">
                                        <div class="row">
                                            <i class="material-icons clopme">close</i>
                                            <div class="pmenu-spri">
                                                <ul>
												  <li><a href="<?=base_url('educator/educator');?>" class="act"><img src="<?=base_url('assets/public/images/navigation/all.png');?>">All Educator</a></li>
                                                    <li><a href="<?=base_url('educator/academic');?>"><img src="<?=base_url('assets/public/images/navigation/academic.png');?>">Academic</a></li>
                                                    <li><a href="<?=base_url('educator/counselling');?>"><img src="<?=base_url('assets/public/images/navigation/couselling.png');?>">Counselling</a></li>
                                                    <li><a href="<?=base_url('educator/exam');?>"><img src="<?=base_url('assets/public/images/navigation/exam.png');?>">Exam</a></li>
                                                    <li><a href="<?=base_url('educator/training');?>"><img src="<?=base_url('assets/public/images/navigation/professionals.png');?>">Professional traning</a></li>
                                                    <li><a href="<?=base_url('blog');?>"><img src="<?=base_url('assets/public/images/header/blog1.png');?>">Blogs</a></li>
                                                    <li><a href="<?=base_url('community');?>"><img src="<?=base_url('assets/public/images/header/11.png');?>">Community</a></li>
                                                  </ul>
                                            </div>
                                            <div class="pmenu-cat">
                                                <h4>All Categories</h4>
                                                <input type="text" id="pg-sear" placeholder="Search category">
                                                <ul id="pg-resu">
                                                    <li><a href="<?php echo base_url('educator/study');?>">Study abroad</a></li>
													<li><a href="<?php echo base_url('educator/math');?>">Math</a></li>
													<li><a href="<?php echo base_url('educator/kids');?>">Kids Coding</a></li>
													<li><a href="<?php echo base_url('educator/acting');?>">Acting</a></li>
													<li><a href="<?php echo base_url('educator/cpl');?>">CPL</a></li>
													<li><a href="<?php echo base_url('educator/banking');?>">Career in Banking</a></li>
													<li><a href="<?php echo base_url('educator/commerce');?>">Commerce</a></li>
													<li><a href="<?php echo base_url('educator/digital');?>">Digital Marketing</a></li>
													<li><a href="<?php echo base_url('educator/music');?>">Music</a></li>
													<li><a href="<?php echo base_url('educator/jee');?>">JEE (Main)</a></li>
													<li><a href="<?php echo base_url('educator/government');?>">Career in Government Jobs</a></li>
													<li><a href="<?php echo base_url('educator/law');?>">Law</a></li>
													<li><a href="<?php echo base_url('educator/sql');?>">SQL</a></li>
													<li><a href="<?php echo base_url('educator/photography');?>">Photography</a></li>
													<li><a href="<?php echo base_url('educator/upsc');?>">UPSC</a></li>
													<li><a href="<?php echo base_url('educator/export');?>">Career In Import Export</a></li>
													<li><a href="<?php echo base_url('educator/management');?>">Management</a></li>
													<li><a href="<?php echo base_url('educator/foreign');?>">Foreign Languages</a></li>
													<li><a href="<?php echo base_url('educator/dancing');?>">Dancing</a></li>
													<li><a href="<?php echo base_url('educator/neet');?>">NEET</a></li>
                                                   </ul>
                                            </div>
                                            <div class="dir-home-nav-bot">
                                                <ul>
                                                    <li>A few reasons you’ll love Online educator search<span>Call us on: 98924 60821</span> </li>
                                                    <li><a href="<?= base_url('feedback');?>" class="waves-effect waves-light btn-large"><i class="material-icons">font_download</i> Advertise with us</a>
                                                     </li>
                                                    <li><a href="<?= base_url('become-educator');?>" class="waves-effect waves-light btn-large"> <i class="material-icons">store</i> Become Educator</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--END MOBILE MENU-->

                                <div class="top-ser">
                                        <form name="filter_form333" id="filter_form" class="filter_form " method="post" >
                                            <ul>
                                                <li class="sr-sea">
                                                    <input type="text" autocomplete="off" id="searchBoxhead" name="searchBoxhead"  value="" placeholder="Search ...">
                                                    <ul id="tser-res1" class="tser-res tser-res2">
                                                        
                                                        
                                            <li>
                                                <div>
                                                    <h4>Academic Educator</h4>
                                                    <span>Class I to XII | Hindi | English | Competetive Exams | Undergraduate | Postgraduate</span>
                                                    <a href="<?php echo base_url('educator/academic');?>"></a>	
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h4>Career Counselling Educator</h4>
                                                    <span>Career in Banking | Career In corporates | Career In Defence | Career in Engineering | Career in Government Jobs</span>
                                                    <a href="<?php echo base_url('educator/career-counselling');?>"></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h4>Professional Educator</h4>
                                                    <span>Kids Coding | Digital Marketing | Accounting | Website  Development | Graphic Desgning</span>
                                                    <a href="<?php echo base_url('educator/professional-educator');?>"></a>
                                                </div>
                                            </li>
                                                    </ul>
                                                </li>

                                                <li class="sbtn">
                                                    <button type="button"  id=""><i class=" submitHeadSearch large material-icons">search</i></button>
                                                </li>
                                            </ul>
                                        </form>
                                </div>
                                <ul class="bl">
                                    <li><a href="<?php echo base_url('registration');?>">Create an account</a></li>
                                    
                                    <li><a href="<?php echo base_url('login');?>">Sign in</a></li>
                                    <?php
                                    if(isset($user_data))
                                    {
                                        if($user_data[0]->user_type == 'educator'){
                                                    ?>
                                            <li>
                                            <li><a href="<?= base_url('become-educator');?>">Become Educator</a></li>
                                                <li>
                                        <?php }else{
                                            
                                            ?>
                                            <li>
                                            
                                       <?php  
                                    }}else{?>
                                                        <li>
                                            <!-- <li><a href="<?= base_url('become-educator');?>">Become Educator</a></li>
                                                <li> -->
                                                <?php }?>

                                </ul>
                                <!--MOBILE MENU-->
                                <div class="mob-menu">
                                    <div class="mob-me-ic"><i class="material-icons">menu</i></div>
                                    <div class="mob-me-all">
                                        <div class="mob-me-clo"><i class="material-icons">close</i></div>
                                        <div class="mv-bus">
                                            <h4></h4>
                                            <ul>
                                                <li><a href="<?= base_url('become-educator');?>">Beccome Educator</a></li>
                                                <li><a href="<?php echo base_url('login');?>">Sign in</a></li>
                                                <li><a href="<?php echo base_url('registration');?>">Create an account</a></li>
                                            </ul>
                                        </div>
                                        <div class="mv-cate">
                                            <h4>All Categories</h4>
                                            <ul>
												  <li><a href="<?=base_url('educator/educator');?>" class="act"><img  height="50" width="50" src="<?=base_url('assets/public/images/navigation/all.png');?>">All Educator</a></li>
                                                    <li><a href="<?=base_url('educator/academic');?>"><img height="50" width="50" src="<?=base_url('assets/public/images/navigation/academic.png');?>">Academic</a></li>
                                                    <li><a href="<?=base_url('educator/couselling');?>"><img height="50" width="50" src="<?=base_url('assets/public/images/navigation/couselling.png');?>">Counselling</a></li>
                                                    <li><a href="<?=base_url('educator/exam');?>"><img height="50" width="50" src="<?=base_url('assets/public/images/navigation/exam.png');?>">Exam</a></li>
                                                    <li><a href="<?=base_url('educator/professional');?>"><img height="50" width="50" src="<?=base_url('assets/public/images/navigation/professionals.png');?>">Professional</a></li>
                                                    <li><a href="<?=base_url('blog');?>"><img src="<?=base_url('assets/public/images/header/blog1.png');?>">Blogs</a></li>
                                                    <li><a href="<?=base_url('community');?>"><img src="<?=base_url('assets/public/images/header/11.png');?>">Community</a></li>
                                                  </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--END MOBILE MENU-->
                            </div>
                        </div>
                    </div>
                </div>
               <?php if (!$this->uri->segment(1)): ?>
                <div class="container">
                    <div class="row">
                        <div class="ban-tit">
                            <h1>
                                <!--<b>Connect with the right<br>Education Experts</b>                                                             </h1>-->
                        </div>
                        <div class="ban-search">
                            <form name="filter_form21"  class="filter_form" method="get" action="javascript://" onsubmit="return validateSearch();">
                                <ul>
                                    <li class="sr-cit">
                                        <input type="text" id="select-city" name="select-city" class="autocomplete" placeholder="City">
                                    </li>
                                    <li class="sr-sea">
                                        <input type="text" autocomplete="off" id="searchBox" value="" name="searchBox" placeholder="search educator..." class="search-field">
                                        <ul id="tser-res" class="tser-res tser-res1">

                                            <li>
                                                <div>
                                                    <h4>Academic Educator</h4>
                                                    <span>Class I to XII | Hindi | English | Competetive Exams | Undergraduate | Postgraduate</span>
                                                    <a href="<?php echo base_url('educator/academic');?>"></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h4>Career Counselling Educator</h4>
                                                    <span>Career in Banking | Career In corporates | Career In Defence | Career in Engineering | Career in Government Jobs</span>
                                                    <a href="<?php echo base_url('educator/career-counselling');?>"></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h4>Professional Educator</h4>
                                                    <span>Kids Coding | Digital Marketing | Accounting | Website  Development | Graphic Desgning</span>
                                                    <a href="<?php echo base_url('educator/professional-educator');?>"></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sr-btn">
                                        <input type="submit"  name="filter_submit"  value="Search" class="filter_submit">
                                    </li>
                                </ul>
                            </form>
                        </div>
                        <div class="ban-ql">
                             <div class="row">
                                <div class="col-md-3">
                                    <div class="flip-card">
                                      <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                          <img src="<?=base_url('assets/public/images/landing/1.png');?>" alt=""class="animation-jump heading">
                                          <h4>300k Educators</h4>
                                          <a href="">Explore Now</a>
                                        </div>
                                        <div class="flip-card-back">
                                          <p>Choose from vast array of experianced educators</p>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="flip-card">
                                      <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                          <img src="<?=base_url('assets/public/images/landing/2.png');?>" alt=""class="animation-jump heading">
                                          <h4> Courses offered</h4>
                                          <a href="">Explore Now</a>
                                        </div>
                                        <div class="flip-card-back">
                                          <p>over 100 different education services offered</p>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="flip-card">
                                      <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                          <img src="<?=base_url('assets/public/images/landing/3.png');?>" alt=""class="animation-jump heading">
                                          <h4>Peaking traffic</h4>
                                          <a href="">Explore Now</a>
                                        </div>
                                        <div class="flip-card-back">
                                          <p>5000 visitors visit us everyday and the number is increasing</p>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="flip-card">
                                      <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                          <img src="<?=base_url('assets/public/images/landing/4.png');?>" alt=""class="animation-jump heading">
                                          <h4>10,000 Students</h4>
                                          <a href="">Explore Now</a>
                                        </div>
                                        <div class="flip-card-back">
                                          <p>10,000 Students have trusted us to get found </p>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                           <!--  <ul>
                                <li>
                                    <div>
                                        <img src="<?=base_url('assets/public/images/landing/1.png');?>" alt="">
                                        <h4>10k Educators</h4>
                                        <p>Choose from vast array of experianced educators</p>
                                        <a href="">Explore Now</a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <img src="<?=base_url('assets/public/images/landing/2.png');?>" alt="">
                                        <h4> Courses offered</h4>
                                        <p>over 100 different education services offered</p>
                                        <a href="">Explore Now</a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <img src="<?=base_url('assets/public/images/landing/3.png');?>" alt="">
                                        <h4>Peaking traffic</h4>
                                        <p>5000 visitors visit us everyday and the number is increasing</p>
                                        <a href="">Explore Now</a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <img src="<?=base_url('assets/public/images/landing/4.png');?>" alt="">
                                        <h4>2k+ Premium Users</h4>
                                        <p>2k+ Premium Educators have trusted us to get found </p>
                                        <a href="">Explore Now</a>
                                    </div>
                                </li>

                            </ul> -->

                        </div>
                        

                    </div>
                </div>
                    <?php endif; ?>
            </div>
        </div>
    </section>

<?php endif; ?>

