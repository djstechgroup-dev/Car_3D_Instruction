<?php 
   session_start();
   
   if(empty($_SESSION)){
       header("Location: http://itsugestion.com/dev/car/login.php");
       die();
   }
   
   ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car design</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap');

    body {
        margin: 0;
        padding: 0;
        background: url(https://www.linkpicture.com/q/car_4.png) no-repeat top center;
        background-size: cover;
        font-family: 'Lato', sans-serif;
        overflow: hidden;
    }

    a {
        text-decoration: none;
    }

    ul {
        list-style: none;
        padding-left: 0;
    }

    /* top nav */
    .top-nav {
        display: flex;
        flex-direction: row;
        /* background: #232cb799; */
        margin: 0;
        padding: 0px 5%;
        z-index: 999;
        position: relative
    }

    .top-nav li {
        margin-right: 15px;
    }

    .top-nav li:last-child {
        margin-left: auto;
    }

    .top-nav li:last-child a {
        background: yellow;
        border-bottom: none;
        color: #000;
        margin-top: 8px;
    }

    .top-nav li:last-child a:hover {
        background: yellow;
        border-bottom: none;
        color: #000;
    }

    .top-nav li a {
        color: #fff;
        font-size: 16px;
        font-weight: 300;
        padding: 10px;
        display: inline-block;
        border-bottom: 2px solid transparent;
    }

    .top-nav li .active,
    .top-nav li a:hover {
        color: #fff;
        border-bottom: 2px solid yellow;
    }

    /* hotspots */
    .hotspot-nav {
        margin: 0;
        padding: 0px 5%;
        /* pointer-events: none; */
    }

    .hotspot-nav li {
        position: absolute;
        z-index: 4;
    }

    .steering-wheel-btn {
        top: 43%;
        left: 16%;
    }

    .radio-btn {
        top: 24%;
        left: 50%;
        transform: translateX(-50%);
    }

    .gear-shirt-btn {
        bottom: 26%;
        left: 50%;
        transform: translateX(-50%);
    }

    .hotspot-nav li a {
        background: #396aff;
        width: 22px;
        height: 22px;
        border-radius: 100%;
        display: inline-block;
    }

    .hotspot-nav li .active {
        background: #00b908;
    }

    .hotspot-nav li .purple {
        background: purple;
    }

    .hotspot-nav li .vistor {
        background: #b73eff;
    }

    .pop-up-box {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 1;
    }

    .box-blue {
        position: relative;
        z-index: 2;
        background: #232cb799;
        padding: 10px;
    }

    .interior-box {
        width: 200px;
        top: 53%;
        position: absolute;
        z-index: 3;
        left: 13%;
        visibility: hidden;
        opacity: 0;
        transition: visibility 0s, opacity 0.5s linear;
    }

    .showIn {
        visibility: visible;
        opacity: 1;
    }

    .interior-box h3 {
        /* background: #fff; */
        margin: 0 0 10px 0;
        font-size: 16px;
        font-weight: 500;
        padding: 4px 10px;
        color: #fff;
        text-transform: capitalize;
    }

    .interior-box ul {
        display: flex;
        flex-direction: column;
        margin: 0;
    }

    .interior-box ul li {
        width: 100%;
        display: block;
        margin-bottom: 10px;
    }

    .interior-box ul li a {
        width: 100%;
        display: block;
        color: #fff;
        font-size: 14px;
    }

    .interior-box ul li .active {
        color: #F76F40;
    }

    .bottom-center-message {
        position: absolute;
        bottom: 0;
        left: 59%;
        z-index: 3;
        transform: translateX(-50%);
    }

    .bottom-center-message li {
        background: #232cb799;
        padding: 10px;
        color: #fff;
        font-size: 14px;
        margin-bottom: 25px;
        position: relative;
    }

    .bottom-center-message li:first-child:after {
        left: -64px;
        top: 50%;
        border: solid transparent;
        content: "";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        border-color: rgba(213, 58, 58, 0);
        border-right-color: #F76F40;
        border-width: 10px;
        margin-top: -10px;
    }

    .bottom-center-message li:first-child::before {
        content: "";
        border-bottom: 4px solid #F76F40;
        width: 52px;
        height: 4px;
        position: absolute;
        left: -51px;
        bottom: 16px;
        transform: rotate(3deg);
    }

    .bottom-center-message li:first-child {
        bottom: 120px;
    }

    .bottom-center-message li:last-child {
        background: transparent;
        position: absolute;
        bottom: 0;
        left: -172px;
    }

    .arrow-box {
        width: 200px;
        height: 100px;
    }

    .arrow-box img {
        width: 100%;
    }

    /* .bottom-center-message li:last-child:after {
         left: -170px;
         bottom: -24px;
         border: solid transparent;
         content: "";
         height: 0;
         width: 0;
         position: absolute;
         pointer-events: none;
         border-color: rgba(213, 58, 58, 0);
         border-right-color: #F76F40;
         border-width: 10px;
         margin-top: -10px;
         transform: rotate(-10deg);
         }
         .bottom-center-message li:last-child::before {
         content: "";
         border-bottom: 4px solid #F76F40;
         width: 160px;
         height: 4px;
         position: absolute;
         left: -159px;
         bottom: 0;
         transform: rotate(-12deg);
         } */
    /*  .bottom-center-message li:first-child::after {
         content: "";
         border-bottom: 1px solid #fff;
         width: 56px;
         height: 1px;
         position: absolute;
         left: -56px;
         bottom: 16px;
         transform: rotate(3deg);
         }
         .bottom-center-message li:first-child::before {
         content: "";
         width: 15px;
         height: 15px;
         position: absolute;
         left: -65px;
         bottom: 10px;
         background: #fff;
         border-radius: 100%;
         }
         .bottom-center-message li:last-child::after {   
         content: "";
         border-bottom: 1px solid #fff;
         width: 160px;
         height: 1px;
         position: absolute;
         left: -159px;
         bottom: 0;
         transform: rotate(-12deg);
         }
         .bottom-center-message li:last-child::before {
         content: "";
         width: 15px;
         height: 15px;
         position: absolute;
         left: -159px;
         bottom: -22px;
         background: #fff;
         border-radius: 100%;
         } */
    .video-car {
        position: absolute;
        top: 26%;
        left: 28%;
        background: #000;
        z-index: 800;
        display: none;
        width: 298px;
        height: 155px;
        transform: translateX(-50%) translateY(-50%);
    }

    .video-car.show-small-video {
        display: block;
    }

    .video-car iframe {
        width: 100%;
        height: 155px;
        border: none;
    }

    .main-option {
        width: 200px;
        top: 14%;
        position: absolute;
        right: 23%;
        /* z-index: 5; */
        visibility: hidden;
        opacity: 0;
        transition: visibility 0s, opacity 0.5s linear;
    }

    .center-popup {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 36%;
        right: 0;
        z-index: 3;
        transform: rotate(14deg);
    }

    .blue-center-box {
        background: #232cb799;
        padding: 10px;
        position: relative;
        z-index: 4;
    }

    /* .main-option {
         visibility: visible;
         opacity: 1;
         } */
    .options-list h3 {
        color: #fff;
        margin: 0 0 10px 0;
        font-size: 16px;
        font-weight: 500;
        padding: 4px 10px;
        text-transform: capitalize;
        display: flex;
        align-items: center;
    }

    .list-numbers {
        display: flex;
        flex-direction: column;
        margin: 0;
        height: 150px;
        overflow-y: auto;
        overflow-x: hidden;
    }

    .list-numbers li {
        width: 100%;
        display: block;
        margin-bottom: 10px;
    }

    .list-numbers li a {
        width: 100%;
        display: block;
        color: #fff;
        font-size: 14px;
    }

    .list-numbers li .active,
    .list-numbers li a:hover {
        color: #F76F40;
    }

    .option-nav {
        margin: 0 0 10px 0;
        display: flex;
        justify-content: space-around;
    }

    .option-nav li {
        position: relative;
    }

    .option-nav li a {
        display: block;
        color: yellow;
        font-size: 14px;
        width: 25px;
        height: 25px;
        text-align: center;
        line-height: 25px;
        border-radius: 100%;
    }

    .rightbox-icon,
    .rightbox-icon img {
        width: 100%;
        height: 100%;
    }

    .option-nav li .active,
    .option-nav li a:hover {
        color: #fff;
        background: #232cb799;
    }

    .option-tools {
        position: absolute;
        right: -222px;
        width: 200px;
        top: -24px;
        margin-top: 0;
        z-index: 5;
        /* visibility: hidden; */
        /* opacity: 0; */
        /* transition: visibility 0s, opacity 0.5s linear; */
    }

    .four-boxs {
        position: fixed;
        right: 0;
        top: 2px;
        z-index: 3;
        left: 60%;
        transform: rotate(49deg);
        height: 1000px;
        width: 777px;
    }

    .option-tools ul {
        position: relative;
        z-index: 10;
    }

    /* .option-tools.show-tools {
         visibility: visible;
         opacity: 1;
         } */
    .option-tools li {
        background: #232cb799;
        padding: 10px;
        margin-bottom: 20px;
    }

    .option-tools .options-list li {
        background: transparent;
        padding: 0;
    }

    .option-tools .options-list .list-numbers {
        height: 60px;
    }

    .hide-box {
        display: none;
    }

    .show-box {
        visibility: visible;
        opacity: 1;
    }

    .popup-box {
        position: fixed;
        z-index: 100;
        background: #232cb799;
        width: 300px;
        text-align: center;
        padding: 30px;
        top: 50%;
        left: 50%;
        z-index: 5;
        transform: translateX(-50%) translateY(-50%);
        visibility: hidden;
        opacity: 0;
        transition: visibility 0s, opacity 0.5s linear;
    }

    .popup-box.show-popup {
        visibility: visible;
        opacity: 1;
    }

    .popup-box h1 {
        font-size: 20px;
        font-weight: 600;
        color: #fff;
        margin: 0 0 20px 0;
    }

    .butns-links-popup {
        position: relative;
    }

    .butns-links-popup a {
        background: #ffff00a6;
        color: #000;
        display: inline-block;
        padding: 10px 20px;
        font-size: 14px;
        text-transform: capitalize;
    }

    .close-btn {
        position: absolute;
        top: -130px;
        right: -36px;
        width: 30px;
        height: 30px;
        padding: 0 !important;
        border-radius: 100%;
        line-height: 30px;
        z-index: 101;
    }

    .rel {
        position: relative;
    }

    .close-btn2 {
        position: absolute;
        top: -11px;
        right: -8px;
        background: #000;
        color: yellow;
        width: 25px;
        height: 25px;
        line-height: 25px;
        text-align: center;
        border-radius: 100%;
        font-size: 14px;
    }

    .image-top {
        width: 30px;
    }

    .image-top img {
        width: 100%;
    }

    .bg-green {
        background: #006345bb;
    }

    .bg-orange {
        background: #ff60009c;
    }

    .bg-maroon {
        background: #81415b;
    }

    .bg-tools {
        background: #969f6d;
    }

    .bg-video {
        background: #927759;
    }

    .white-arrow {
        position: absolute;
        bottom: 27%;
        width: 140px;
        height: 140px;
        left: 32%;
    }

    .white-arrow ul {
        list-style: none;
        padding: 0;
        position: relative;
        width: 100%;
        height: 100%;
        margin: 0;
    }

    .white-arrow ul li {
        position: absolute;
    }

    .white-arrow ul li a {
        display: inline-block;
        width: 30px;
        height: 30px;
        border-radius: 100%;
        padding: 8px;
        background: rgba(255, 255, 255, 0.3);
    }

    .white-arrow ul li .active {
        background: rgba(255, 255, 255, 0.7);
    }

    .arrow-up {
        top: 0;
        left: 50%;
        transform: translateX(-50%);
    }

    .arrow-down {
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
    }

    .arrow-left {
        left: 0;
        top: 50%;
        transform: translateY(-50%);
    }

    .arrow-right {
        right: 0;
        top: 50%;
        transform: translateY(-50%);
    }

    .on-load {
        position: fixed;
        top: 14%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
        z-index: 100;
        display: flex;
        flex-direction: row
    }

    .on-load a {
        background: #232cb799;
        color: #fff;
        display: flex;
        align-items: center;
        padding: 10px 20px;
        font-size: 14px;
        text-transform: capitalize;
    }

    .on-load a:hover {
        background: #232cb7;
        color: #fff;
    }

    .load-icon {
        width: 30px;
        height: 30px;
        margin-right: 10px;
    }

    .load-icon img {
        width: 100%;
    }

    .me-2 {
        margin-right: 15px;
    }

    .select-drop-down {
        position: absolute;
        top: 23px;
        z-index: 200;
        background: #000000d6;
        min-width: 100px;
    }

    .select-drop-down li {
        display: block;
    }

    .select-drop-down li a {
        width: auto;
        text-align: left;
        border-radius: 0px;
        padding: 4px 10px;
        text-transform: capitalize;
        display: block;
    }

    .option-icon {
        width: 20px;
        height: 20px;
        display: inline-block;
        margin-right: 8px;
    }

    .option-icon img {
        width: 100%;
    }

    .small-close-btn {
        width: 100%;
    }

    .small-close-btn a {
        position: absolute;
        top: -24px;
        right: -22px;
        background: #232cb799;
        color: yellow;
        width: 30px;
        height: 30px;
        line-height: 30px;
        text-align: center;
        border-radius: 100%;
        font-size: 14px;
    }

    .full-bg-box {
        position: fixed;
        top: 0;
        bottom: 0px;
        left: 0px;
        right: 0px;
        z-index: 1;
        width: 100%;
    }

    .zoombig1 {
        transform: scale(1.1);
        transition: all 1s ease;
        height: 100vh;
    }

    .zoombig2 {
        transform: scale(1.2);
        transition: all 1s ease;
        height: 100vh;
    }

    html {
        transition: all 1s ease;
    }

    .zoombig1 .top-nav {
        margin-top: 54px;
        padding: 0 10%;
    }

    .zoombig1 .steering-wheel-btn {
        left: 21%;
    }

    .zoombig1 .radio-btn {
        top: 28%;
    }

    .zoombig1 .main-option {
        top: 18%;
        right: 26%;
    }

    .zoombig2 .top-nav {
        padding: 0px 11%;
        margin-top: 5%;
    }

    .zoombig2 .steering-wheel-btn {
        top: 43%;
        left: 22%;
    }

    .zoombig2 .radio-btn {
        top: 28%;
    }

    .zoombig2 .main-option {
        top: 20%;
        right: 29%;
    }
    </style>
</head>

<body>
    <!-- <img src="https://www.linkpicture.com/q/car_4.png" alt="image" class="full-bg-box"> -->
    <ul class="top-nav">
        <li>
            <a href="#">
                <div class="image-top">
                    <img src="https://www.linkpicture.com/q/select.png" alt="img-icon">
                </div>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" id="topListIcon">
                <div class="image-top">
                    <img src="https://www.linkpicture.com/q/list_2.png" alt="img-icon">
                </div>
            </a>
        </li>
        <li>
            <a href="https://www.google.com/" target="_blank">
                <div class="image-top">
                    <img src="https://www.linkpicture.com/q/map_7.png" alt="img-icon">
                </div>
            </a>
        </li>
        <li>
            <a href="https://www.google.com/" target="_blank">
                <div class="image-top">
                    <img src="https://www.linkpicture.com/q/resources.png" alt="img-icon">
                </div>
            </a>
        </li>
        <li id="zBox">
            <a href="javascript:void(0)" class="zoomin" onclick="return zoomincrease('1')">
                <div class="image-top">
                    <img src="https://www.linkpicture.com/q/ZOOMIN.png" alt="img-icon">
                </div>
            </a>
        </li>
        <li id="zIn">
            <a href="javascript:void(0)" class="unzoomin" onclick="return unzoom('1')">
                <div class="image-top">
                    <img src="https://www.linkpicture.com/q/ZOOMOUT.png" alt="img-icon">
                </div>
            </a>
        </li>

        <li>
            <a href="https://support.google.com/" target="_blank">
                <div class="image-top">
                    <img src="https://www.linkpicture.com/q/help_5.png" alt="img-icon">
                </div>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)">
                <div class="image-top">
                    <img src="https://www.linkpicture.com/q/icon-img2.png" alt="img-icon">
                </div>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" id="tryBtnTop">
                <div class="image-top">
                    <img src="https://www.linkpicture.com/q/icon-img3.png" alt="img-icon">
                </div>
            </a>
        </li>
        <li>
            <a href="#" id="tryBtn">
                <div class="image-top">
                    <img src="https://www.linkpicture.com/q/icon-img1.png" alt="img-icon">
                </div>
            </a>
        </li>
        <li>
            <a href="logout.php">
                <i class="fal fa-sign-out"></i> Logout
            </a>
        </li>
    </ul>
    <ul class="hotspot-nav">
        <li id="s-btn" class="steering-wheel-btn">
            <a href="#" class="firstr"></a>
        </li>
        <li id="r-btn" class="radio-btn">
            <a href="#" class="secondr"></a>
        </li>
        <li id="g-btn" class="gear-shirt-btn">
            <a href="#" class="thirdr"></a>
        </li>
    </ul>
    <div class="interior-box" id="inBox">
        <div class="pop-up-box">
        </div>
        <div class="box-blue">
            <div class="rel small-close-btn" id="inter"><a href="javascript:void(0)"><i class="fas fa-times"></i> </a>
            </div>
            <h3 class="bg-green">Interior Inspection</h3>
            <ul id="interior-links">
                <li><a href="javascript:void(0)" id="s-nav">1. Steering Wheel</a></li>
                <li><a href="javascript:void(0)" id="r-nav">2. Radio</a></li>
                <li><a href="javascript:void(0)" id="g-nav">3. Gear Shift</a></li>
            </ul>
        </div>
    </div>
    <!--1st-->
    <div class="main-option" id="s-box">
        <!-- <div class="center-popup">
        </div> -->
        <div class="blue-center-box">


            <div class="rel small-close-btn close-main-option"><a href="javascript:void(0)"><i class="fas fa-times"></i>
                </a>
            </div>
            <ul class="option-nav s">
                <li>
                    <a href="javascript:void(0)" id="list-Bs">
                        <div class="rightbox-icon">
                            <img src="https://www.linkpicture.com/q/list_2.png" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" id="dropdownStool">
                        <div class="rightbox-icon">
                            <img src="https://www.linkpicture.com/q/tools.png" alt="">
                        </div>
                    </a>
                    <ul class="select-drop-down" id="dropStool" style="display: none;">
                        <li>
                            <a href="javascript:void(0)" id="">Show me</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="">Let me try</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="">Verify</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" id="dropdownS">
                        <div class="rightbox-icon">
                            <img src="https://www.linkpicture.com/q/resources.png" alt="">
                        </div>
                    </a>
                    <ul class="select-drop-down" id="dropS" style="display: none;">
                        <li class="showAll">
                            <a href="javascript:void(0)" id="sLinkAll">Show all</a>
                        </li>
                        <li class="closeAll" style="display:none">
                            <a href="javascript:void(0)" id="sClose">Close all</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="sLink1">tools</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="sLink2">videos</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="sLink3">resources</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="sLink4">graphics</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" id="">
                        <div class="rightbox-icon">
                            <img src="https://www.linkpicture.com/q/back_10.png" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <div class="rightbox-icon">
                            <img src="https://www.linkpicture.com/q/current.png" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" id="next1">
                        <div class="rightbox-icon">
                            <img src="https://www.linkpicture.com/q/next_9.png" alt="">
                        </div>
                    </a>
                </li>
            </ul>
            <div class="options-list">
                <h3 class="bg-green">steering wheel</h3>
                <ul class="list-numbers">
                    <li><a href="#">Inspect steering wheel for cracks in the covering and test controls.</a></li>
                    <li><a href="#">Repair Steering Wheel.</a></li>
                    <li><a href="#">Test cruise control.</a></li>
                </ul>
            </div>
            <!---side options-->
            <div class="option-tools" id="tool-boxS" style="display:none">
                <!-- <div class="four-boxs"></div> -->
                <ul>
                    <li id="sTbox" class="hide-box">
                        <div class="rel small-close-btn" id="sTpopUp"><a href="javascript:void(0)"><i
                                    class="fas fa-times"></i>
                            </a>
                        </div>
                        <div class="options-list ">
                            <h3 class="bg-tools">
                                <span class="option-icon">
                                    <img src="https://www.linkpicture.com/q/tools.png" alt="image">
                                </span>
                                tools
                            </h3>
                            <ul class="list-numbers">
                                <li><a href="#">Strong Flashlight</a></li>
                            </ul>
                        </div>
                    </li>
                    <li id="sVbox" class="hide-box">
                        <div class="rel small-close-btn" id="sVpopUp"><a href="javascript:void(0)"><i
                                    class="fas fa-times"></i>
                            </a>
                        </div>
                        <div class="options-list">
                            <h3 class="bg-video">
                                <span class="option-icon">
                                    <img src="https://www.linkpicture.com/q/video.png" alt="image">
                                </span>
                                videos
                            </h3>
                            <ul class="list-numbers">
                                <li><a href="javascript:void(0)" id="video-linkS">Repair Steering wheel cracks</a></li>
                            </ul>
                        </div>
                    </li>
                    <li id="sRbox" class="hide-box">
                        <div class="rel small-close-btn" id="sRpopUp"><a href="javascript:void(0)"><i
                                    class="fas fa-times"></i>
                            </a>
                        </div>
                        <div class="options-list">
                            <h3 class="bg-maroon">
                                <span class="option-icon">
                                    <img src="https://www.linkpicture.com/q/resources.png" alt="image">
                                </span>
                                resources
                            </h3>
                            <ul class="list-numbers">
                                <li><a href="#">Owners Manual</a></li>
                            </ul>
                        </div>
                    </li>
                    <li id="sGbox" class="hide-box">
                        <div class="rel small-close-btn" id="sGpopUp"><a href="javascript:void(0)"><i
                                    class="fas fa-times"></i>
                            </a>
                        </div>
                        <div class="options-list">
                            <h3 class="bg-maroon">
                                <span class="option-icon">
                                    <img src="https://www.linkpicture.com/q/graphic.png" alt="image">
                                </span>
                                graphics
                            </h3>
                            <ul class="list-numbers">
                                <li><a href="#">Steering Wheel CAD</a></li>
                                <li><a href="#">Steering Wheel Animation</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <!---2nd-->

    <div class="main-option" id="r-box">
        <!-- <div class="center-popup">
        </div> -->
        <div class="blue-center-box">
            <div class="rel small-close-btn close-main-option"><a href="javascript:void(0)"><i class="fas fa-times"></i>
                </a>
            </div>
            <ul class="option-nav r">
                <li>
                    <a href="javascript:void(0)" id="list-Br">
                        <div class="rightbox-icon">
                            <img src="https://www.linkpicture.com/q/list_2.png" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" id="dropdownRtool">
                        <div class="rightbox-icon">
                            <img src="https://www.linkpicture.com/q/tools.png" alt="">
                        </div>
                    </a>
                    <ul class="select-drop-down" id="dropRtool" style="display: none;">
                        <li>
                            <a href="javascript:void(0)" id="">Show Me</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="">left me try</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="">Verify</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" id="dropdownR">
                        <div class="rightbox-icon">
                            <img src="https://www.linkpicture.com/q/resources.png" alt="">
                        </div>
                    </a>
                    <ul class="select-drop-down" id="dropR" style="display: none;">
                        <li class="showAll">
                            <a href="javascript:void(0)" id="rLinkAll">Show all</a>
                        </li>
                        <li class="closeAll" style="display:none">
                            <a href="javascript:void(0)" id="rClose">Close all</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="rLink1">tools</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="rLink2">videos</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="rLink3">resources</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="rLink4">graphics</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" id="prev1">
                        <div class="rightbox-icon">
                            <img src="https://www.linkpicture.com/q/back_10.png" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <div class="rightbox-icon">
                            <img src="https://www.linkpicture.com/q/current.png" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" id="next2">
                        <div class="rightbox-icon">
                            <img src="https://www.linkpicture.com/q/next_9.png" alt="">
                        </div>
                    </a>
                </li>
            </ul>
            <div class="options-list">
                <h3 class="bg-green">Radio</h3>
                <ul class="list-numbers">
                    <li><a href="#">Radio Link</a></li>
                    <li><a href="#">Radio Link</a></li>
                    <li><a href="#">Radio Link</a></li>
                    <li><a href="#">Radio Link</a></li>
                </ul>
            </div>
            <!--side options-->
            <div class="option-tools" id="tool-boxR" style="display:none">
                <!-- <div class="four-boxs"></div> -->
                <ul>
                    <li id="rTbox" class="hide-box">
                        <div class="rel small-close-btn" id="rTpopUp"><a href="javascript:void(0)"><i
                                    class="fas fa-times"></i>
                            </a>
                        </div>
                        <div class="options-list ">
                            <h3 class="bg-tools">
                                <span class="option-icon">
                                    <img src="https://www.linkpicture.com/q/tools.png" alt="image">
                                </span>
                                tools
                            </h3>
                            <ul class="list-numbers">
                                <li><a href="#">Strong Flashlight</a></li>
                            </ul>
                        </div>
                    </li>
                    <li id="rVbox" class="hide-box">
                        <div class="rel small-close-btn" id="rVpopUp"><a href="javascript:void(0)"><i
                                    class="fas fa-times"></i>
                            </a>
                        </div>
                        <div class="options-list">
                            <h3 class="bg-video">
                                <span class="option-icon">
                                    <img src="https://www.linkpicture.com/q/video.png" alt="image">
                                </span>
                                videos
                            </h3>
                            <ul class="list-numbers">
                                <li><a href="javascript:void(0)" id="video-linkR">Repair Radio</a></li>
                            </ul>
                        </div>
                    </li>
                    <li id="rRbox" class="hide-box">
                        <div class="rel small-close-btn" id="rRpopUp"><a href="javascript:void(0)"><i
                                    class="fas fa-times"></i>
                            </a>
                        </div>
                        <div class="options-list">
                            <h3 class="bg-maroon">
                                <span class="option-icon">
                                    <img src="https://www.linkpicture.com/q/resources.png" alt="image">
                                </span>
                                resources
                            </h3>
                            <ul class="list-numbers">
                                <li><a href="#">Owners Manual</a></li>
                            </ul>
                        </div>
                    </li>
                    <li id="rGbox" class="hide-box">
                        <div class="rel small-close-btn" id="rGpopUp"><a href="javascript:void(0)"><i
                                    class="fas fa-times"></i>
                            </a>
                        </div>
                        <div class="options-list">
                            <h3 class="bg-maroon">
                                <span class="option-icon">
                                    <img src="https://www.linkpicture.com/q/graphic.png" alt="image">
                                </span>
                                graphics
                            </h3>
                            <ul class="list-numbers">
                                <li><a href="#">Radio CAD</a></li>
                                <li><a href="#">Radio Animation</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <!---3rd-->
    <div class="main-option" id="g-box">
        <!-- <div class="center-popup">
        </div> -->
        <div class="blue-center-box">
            <div class="rel small-close-btn close-main-option"><a href="javascript:void(0)"><i class="fas fa-times"></i>
                </a>
            </div>
            <ul class="option-nav g">
                <li>
                    <a href="javascript:void(0)" id="list-Bg">
                        <div class="rightbox-icon">
                            <img src="https://www.linkpicture.com/q/list_2.png" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" id="dropdownGtool">
                        <div class="rightbox-icon">
                            <img src="https://www.linkpicture.com/q/tools.png" alt="">
                        </div>
                    </a>
                    <ul class="select-drop-down" id="dropGtool" style="display: none;">
                        <li>
                            <a href="javascript:void(0)" id="">Show Me</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="">Let me try</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="">Verify</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" id="dropdownG">
                        <div class="rightbox-icon">
                            <img src="https://www.linkpicture.com/q/resources.png" alt="">
                        </div>
                    </a>
                    <ul class="select-drop-down" id="dropG" style="display: none;">
                        <li class="showAll">
                            <a href="javascript:void(0)" id="gLinkAll">Show all</a>
                        </li>
                        <li class="closeAll" style="display:none">
                            <a href="javascript:void(0)" id="gClose">Close all</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="gLink1">tools</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="gLink2">videos</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="gLink3">resources</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="gLink4">graphics</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" id="prev2">
                        <div class="rightbox-icon">
                            <img src="https://www.linkpicture.com/q/back_10.png" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <div class="rightbox-icon">
                            <img src="https://www.linkpicture.com/q/current.png" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <div class="rightbox-icon">
                            <img src="https://www.linkpicture.com/q/next_9.png" alt="">
                        </div>
                    </a>
                </li>
            </ul>
            <div class="options-list">
                <h3 class="bg-green">Gear Shift</h3>
                <ul class="list-numbers">
                    <li><a href="#">Gear Shift Link</a></li>
                    <li><a href="#">Gear Shift Link</a></li>
                    <li><a href="#">Gear Shift Link</a></li>
                    <li><a href="#">Gear Shift Link</a></li>
                </ul>
            </div>
            <!--side options-->
            <div class="option-tools" id="tool-boxG" style="display:none">
                <!-- <div class="four-boxs"></div> -->
                <ul>
                    <li id="gTbox" class="hide-box">
                        <div class="rel small-close-btn" id="gTpopUp"><a href="javascript:void(0)"><i
                                    class="fas fa-times"></i>
                            </a>
                        </div>
                        <div class="options-list ">
                            <h3 class="bg-tools">
                                <span class="option-icon">
                                    <img src="https://www.linkpicture.com/q/tools.png" alt="image">
                                </span>
                                tools
                            </h3>
                            <ul class="list-numbers">
                                <li><a href="#">Strong Flashlight</a></li>
                            </ul>
                        </div>
                    </li>
                    <li id="gVbox" class="hide-box">
                        <div class="rel small-close-btn" id="gVpopUp"><a href="javascript:void(0)"><i
                                    class="fas fa-times"></i>
                            </a>
                        </div>
                        <div class="options-list">
                            <h3 class="bg-video">
                                <span class="option-icon">
                                    <img src="https://www.linkpicture.com/q/video.png" alt="image">
                                </span>
                                videos
                            </h3>
                            <ul class="list-numbers">
                                <li><a href="javascript:void(0)" id="video-linkG">Repair Gear Shifter cracks</a></li>
                            </ul>
                        </div>
                    </li>
                    <li id="gRbox" class="hide-box">
                        <div class="rel small-close-btn" id="gRpopUp"><a href="javascript:void(0)"><i
                                    class="fas fa-times"></i>
                            </a>
                        </div>
                        <div class="options-list">
                            <h3 class="bg-maroon">
                                <span class="option-icon">
                                    <img src="https://www.linkpicture.com/q/resources.png" alt="image">
                                </span>
                                resources
                            </h3>
                            <ul class="list-numbers">
                                <li><a href="#">Owners Manual</a></li>
                            </ul>
                        </div>
                    </li>
                    <li id="gGbox" class="hide-box">
                        <div class="rel small-close-btn" id="gGpopUp"><a href="javascript:void(0)"><i
                                    class="fas fa-times"></i>
                            </a>
                        </div>
                        <div class="options-list">
                            <h3 class="bg-maroon">
                                <span class="option-icon">
                                    <img src="https://www.linkpicture.com/q/graphic.png" alt="image">
                                </span>
                                graphics
                            </h3>
                            <ul class="list-numbers">
                                <li><a href="#">Gear Shifter CAD</a></li>
                                <li><a href="#">Gear Shifter Animation</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <ul class="bottom-center-message">
        <li>Gear Shifter</li>
        <li>
            <div class="arrow-box"><img src="https://www.linkpicture.com/q/arrow_8.png" alt="image"></div>
        </li>
    </ul>
    <!--pop up-->
    <div class="popup-box" id="popupS">
        <h1>Do you want this video to open on a small screen or a new browser tab</h1>
        <div class="butns-links-popup">
            <a href="javascript:void(0)" class="close-btn"><i class="fas fa-times"></i></a>
            <a href="javascript:void(0)" id="small-screenS" class="vPlay">Open Small Screen</a>
            <a id="newTapS"
                href="https://www.youtube.com/embed/XKfgdkcIUxw?title=0&portrait=0&byline=0&autoplay=1&loop=1&transparent=1"
                target="_blank">Open New tab</a>
        </div>
    </div>
    <div class="popup-box" id="popupG">
        <h1>Do you want this video to open on a small screen or a new browser tab</h1>
        <div class="butns-links-popup">
            <a href="javascript:void(0)" class="close-btn"><i class="fas fa-times"></i></a>
            <a href="javascript:void(0)" id="small-screenG" class="vPlay">Open Small Screen</a>
            <a id="newTapG"
                href="https://www.youtube.com/embed/SQIbeAk-bFA?title=0&portrait=0&byline=0&autoplay=1&loop=1&transparent=1"
                target="_blank">Open New tab</a>
        </div>
    </div>
    <div class="popup-box" id="popupR">
        <h1>Do you want this video to open on a small screen or a new browser tab</h1>
        <div class="butns-links-popup">
            <a href="javascript:void(0)" class="close-btn"><i class="fas fa-times"></i></a>
            <a href="javascript:void(0)" id="small-screenR" class="vPlay">Open Small Screen</a>
            <a id="newTapR"
                href="https://www.youtube.com/embed/zJFwOC_Bv4Y?title=0&portrait=0&byline=0&autoplay=1&loop=1&transparent=1"
                target="_blank">Open New tab</a>
        </div>
    </div>
    <!--small video box-->
    <div class="video-car" id="small-car-videoS">
        <div class="rel">
            <a href="javascript:void(0)" class="close-btn2"><i class="fas fa-times"></i></a>
            <iframe class="iframe-box" width="560" height="315" src="" title="YouTube video player" frameborder="0"
                allow="accelerometer;  clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>
    <div class="video-car" id="small-car-videoG">
        <div class="rel">
            <a href="javascript:void(0)" class="close-btn2"><i class="fas fa-times"></i></a>
            <iframe class="iframe-box" width="560" height="315" src="" title="YouTube video player" frameborder="0"
                allow="accelerometer;  clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>

        </div>
    </div>
    <div class="video-car" id="small-car-videoR">
        <div class="rel">
            <a href="javascript:void(0)" class="close-btn2"><i class="fas fa-times"></i></a>
            <iframe class="iframe-box" width="560" height="315" src="" title="YouTube video player" frameborder="0"
                allow="accelerometer;  clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>

        </div>
    </div>
    <!-- <div class="white-arrow">
         <ul>
             <li class="arrow-up">
                 <a href="#">
                     <div class="image-top"><img src="https://www.linkpicture.com/q/up-arrow_6.png" alt="image"></div>
         
                 </a>
             </li>
             <li class="arrow-down">
                 <a href="#">
                     <div class="image-top"><img src="https://www.linkpicture.com/q/down-arrow_1.png" alt="image"></div>
         
                 </a>
             </li>
             <li class="arrow-left">
                 <a href="#">
                     <div class="image-top"><img src="https://www.linkpicture.com/q/left-arrow_2.png" alt="image"></div>
         
                 </a>
             </li>
             <li class="arrow-right">
                 <a href="#">
                     <div class="image-top"><img src="https://www.linkpicture.com/q/right-arrow_4.png" alt="image"></div>
         
                 </a>
             </li>
         
         </ul>
         </div> -->
    <!-- <div class="on-load">
        <a href="javascript:void(0)" class="open-btn">
            <div class="load-icon">
                <img src="https://www.linkpicture.com/q/icon-img2.png" alt="image">
            </div>
            <span>Show Me</span>
        </a>
        <a href="javascript:void(0)" class="open-btn" id="tryBtn">
            <div class="load-icon">
                <img src="https://www.linkpicture.com/q/icon-img3.png" alt="image">
            </div>
            <span>Let Me
                try</span>
        </a>
        <a href="javascript:void(0)" class="open-btn">
            <div class="load-icon">
                <img src="https://www.linkpicture.com/q/icon-img1.png" alt="image">
            </div>
            <span>Verify</span>
        </a>
    </div> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <input type="hidden" id="zoomIn1" value="0">
    <input type="hidden" id="zoomIn2" value="0">
    <!-- <input type="hidden" id="zoomOut1" value="0">
    <input type="hidden" id="zoomOut2" value="0"> -->
    <script>
    $(document).ready(function() {
        $("#small-screenS").click(function() {
            // Change src attribute of image
            $("#small-car-videoS iframe").attr("src",
                "https://www.youtube.com/embed/XKfgdkcIUxw?title=0&portrait=0&byline=0&loop=0&transparent=1&autoplay=1"
            );
        });
        $("#small-screenG").click(function() {
            // Change src attribute of image
            $("#small-car-videoG iframe").attr("src",
                "https://www.youtube.com/embed/SQIbeAk-bFA?title=0&portrait=0&byline=0&loop=1&transparent=1&autoplay=1"
            );
        });
        $("#small-screenR").click(function() {
            // Change src attribute of image
            $("#small-car-videoR iframe").attr("src",
                "https://www.youtube.com/embed/zJFwOC_Bv4Y?title=0&portrait=0&byline=0&loop=1&transparent=1&autoplay=1"
            );
        });
    });
    $(".close-btn2").click(function() {
        $(".iframe-box").attr("src",
            ""
        );
    });
    </script>
    <script>
    function zoomincrease(id) {
        if (id == 1) {
            $('.zoomin').attr("onclick", "zoomincrease('2')");
            $("html").addClass('zoombig1');
        }
        if (id == 2) {
            $("html").removeClass('zoombig1');
            $("html").addClass('zoombig2');
        }
    }

    function unzoom(id) {
        if (id == 1) {
            $('.unzoomin').attr("onclick", "unzoom('2')");
            $("html").addClass('zoombig1');
            $("html").removeClass('zoombig2');
        }
        if (id == 2) {
            $("html").removeClass('zoombig1');
        }
    }

    $(document).ready(function() {
        // $("#zBox").click(function() {
        //     var checkvl1 = $('#zoomIn1').val();
        //     if(checkvl1 != "1"){
        //         var first = $('#zoomIn1').val(1);
        //         $("html").removeClass('zoombig1');
        //         $("html").addClass('zoombig2');
        //     } 
        //     if(checkvl1 != "2"){
        //         var first2 = $('#zoomIn1').val(2);
        //         $("html").addClass('zoombig1');
        //         $("html").removeClass('zoombig2');
        //     }

        //     // // var second = $('#zoomIn2').val();
        //     // if(first == 1){
        //     //     $("html").addClass('zoombig1');
        //     // }
        //     // if(first == 2){
        //     //     $("html").addClass('zoombig2');
        //     //     $("html").removeClass('zoombig1');
        //     // }
        //     // $("html").addClass('zoombig');
        //     // $('#inspection1').val('1');
        //     // var second = $('#inspection2').val();
        //     // var third = $('#inspection3').val();
        //     // if(third == 1){
        //     //     $('.thirdr').addClass("purple");
        //     // }
        //     // if(second == 1){
        //     //     $('.secondr').addClass("purple");
        //     // }
        //     // $(this).hide('');
        //     // $('#zIn').show('');

        //     // $("body").removeClass('zoombig');

        // });
        // $("#zIn").click(function() {
        //     $("html").removeClass('zoombig');
        //     // $(this).hide('');
        //     // $('#zBox').show('');
        // });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('.pop-up-box').on('click', function(e) {
            e.preventDefault();

            $("#inBox").removeClass('showIn');
        });
        $('.center-popup').on('click', function(e) {
            e.preventDefault();
            $(".main-option").removeClass('show-box');
            $(".main-option").addClass('hide-box');
        });
        $('.four-boxs').on('click', function(e) {
            e.preventDefault();
            $('.option-tools').css('display',
                'none');
        });

    });
    </script>


    <script>
    $(document).ready(function() {
        $('#dropdownStool, #dropdownRtool, #dropdownGtool').click(function() {
            $("#dropS, #dropR, #dropG").css("display", "none");
        });
        $('#dropdownS, #dropdownR, #dropdownG').click(function() {
            $("#dropStool, #dropRtool, #dropGtool").css("display", "none");
        });
        $('#inter').click(function() {
            $(".interior-box").removeClass("showIn");
        });
        $('.close-main-option').click(function() {
            $(".main-option").addClass("hide-box");
            $(".main-option").removeClass("show-box");
        });
        // close buttons right handside 

        $('#sTpopUp, #rTpopUp, #gTpopUp').click(function() {
            $("#sTbox, #rTbox, #gTbox").addClass("hide-box");
            $("#sTbox, #rTbox, #gTbox").removeClass("show-box");
        });
        $('#sVpopUp, #rVpopUp, #gVpopUp').click(function() {
            $("#sVbox, #rVbox, #gVbox").addClass("hide-box");
            $("#sVbox, #rVbox, #gVbox").removeClass("show-box");
        });
        $('#sRpopUp, #rRpopUp, #gRpopUp').click(function() {
            $("#sRbox, #rRbox, #gRbox").addClass("hide-box");
            $("#sRbox, #rRbox, #gRbox").removeClass("show-box");
        });
        $('#sGpopUp, #rGpopUp, #gGpopUp').click(function() {
            $("#sGbox, #rGbox, #gGbox").addClass("hide-box");
            $("#sGbox, #rGbox, #gGbox").removeClass("show-box");
        });

    });
    </script>
    <script>
    $(document).ready(function() {
        $('#sLinkAll').click(function() {
            $("#tool-boxS").css("display", "block");
            $("#sTbox, #sVbox, #sRbox, #sGbox").addClass("show-box");
            $("#sTbox, #sVbox, #sRbox, #sGbox").removeClass("hide-box");
        });
        $('#gLinkAll').click(function() {
            $("#tool-boxG").css("display", "block");
            $("#gTbox, #gVbox, #gRbox, #gGbox").addClass("show-box");
            $("#gTbox, #gVbox, #gRbox, #gGbox").removeClass("hide-box");
        });
        $('#rLinkAll').click(function() {
            $("#tool-boxR").css("display", "block");
            $("#rTbox, #rVbox, #rRbox, #rGbox").addClass("show-box");
            $("#rTbox, #rVbox, #rRbox, #rGbox").removeClass("hide-box");
        });

        //close all boxs

        $('#sClose').click(function() {
            $("#tool-boxS").css("display", "none");
            $(".option-tools ul li").addClass("hide-box");
            $(".option-tools ul li").removeClass("show-box");
        });
        $('#rClose').click(function() {
            $("#tool-boxR").css("display", "none");
            $(".option-tools ul li").addClass("hide-box");
            $(".option-tools ul li").removeClass("show-box");
        });
        $('#gClose').click(function() {
            $("#tool-boxG").css("display", "none");
            $(".option-tools ul li").addClass("hide-box");
            $(".option-tools ul li").removeClass("show-box");
        });

        /// show all to close all
        $('#sLinkAll, #rLinkAll, #gLinkAll').click(function() {
            $(".showAll").css("display", "none");
            $(".closeAll").css("display", "block");
        });
        $('#sClose, #rClose, #gClose').click(function() {
            $(".showAll").css("display", "block");
            $(".closeAll").css("display", "none");
        });



        //Rsources drop down
        $('#dropdownS').click(function() {
            // $("#sTbox, #sVbox, #sRbox, #sGbox").addClass("hide-box");
        });
        $('#dropdownR').click(function() {
            // $("#rTbox, #rVbox, #rRbox, #rGbox").addClass("hide-box");
        });
        $('#dropdownG').click(function() {
            // $("#gTbox, #gVbox, #gRbox, #gGbox").addClass("hide-box");
        });

    });
    </script>
    <script>
    $(document).ready(function() {
        $('#sLink1, #rLink1, #gLink1').click(function() {
            $("#tool-boxS, #tool-boxR, #tool-boxG").css("display", "block");
            $("#sTbox, #rTbox, #gTbox").addClass("show-box");
            $("#sTbox, #rTbox, #gTbox").removeClass("hide-box");
            // $("#sVbox, #rVbox, #gVbox, #sRbox, #rRbox, #gRbox, #sGbox, #rGbox, #gGbox").addClass(
            //     "hide-box");
            // $("#sVbox, #rVbox, #gVbox, #sRbox, #rRbox, #gRbox, #sGbox, #rGbox, #gGbox").removeClass(
            //     "show-box");
        });
        $('#sLink2, #rLink2, #gLink2').click(function() {
            $("#tool-boxS, #tool-boxR, #tool-boxG").css("display", "block");
            $("#sVbox, #rVbox, #gVbox").addClass("show-box");
            $("#sVbox, #rVbox, #gVbox").removeClass("hide-box");
            // $("#sRbox, #rRbox, #gRbox, #sGbox, #rGbox, #gGbox, #sTbox, #rTbox, #gTbox").addClass(
            //     "hide-box");
            // $("#sRbox, #rRbox, #gRbox, #sGbox, #rGbox, #gGbox, #sTbox, #rTbox, #gTbox").removeClass(
            //     "show-box");
        });
        $('#sLink3, #rLink3, #gLink3').click(function() {
            $("#tool-boxS, #tool-boxR, #tool-boxG").css("display", "block");
            $("#sRbox, #rRbox, #gRbox").addClass("show-box");
            $("#sRbox, #rRbox, #gRbox").removeClass("hide-box");
            // $("#sGbox, #rGbox, #gGbox, #sTbox, #rTbox, #gTbox, #sVbox, #rVbox, #gVbox").addClass(
            //     "hide-box");
            // $("#sGbox, #rGbox, #gGbox, #sTbox, #rTbox, #gTbox, #sVbox, #rVbox, #gVbox").removeClass(
            //     "show-box");
        });
        $('#sLink4, #rLink4, #gLink4').click(function() {
            $("#tool-boxS, #tool-boxR, #tool-boxG").css("display", "block");
            $("#sGbox, #rGbox, #gGbox").addClass("show-box");
            $("#sGbox, #rGbox, #gGbox").removeClass("hide-box");
            // $("#sTbox, #rTbox, #gTbox, #sVbox, #rVbox, #gVbox, #sRbox, #rRbox, #gRbox").addClass(
            //     "hide-box");
            // $("#sTbox, #rTbox, #gTbox, #sVbox, #rVbox, #gVbox, #sRbox, #rRbox, #gRbox").removeClass(
            //     "show-box");
        });
    });
    </script>
    <script>
    $('#dropdownStool').click(function() {
        $("#dropStool").toggle();
        $("#tool-boxS, #tool-boxR, #tool-boxG").css("display", "none");
    });
    $('#dropdownRtool').click(function() {
        $("#dropRtool").toggle();
        $("#tool-boxS, #tool-boxR, #tool-boxG").css("display", "none");
    });
    $('#dropdownGtool').click(function() {
        $("#dropGtool").toggle();
        $("#tool-boxS, #tool-boxR, #tool-boxG").css("display", "none");
    });
    </script>
    <script>
    $(document).ready(function() {


        $('.select-drop-down a').click(function() {
            //    $('#sLinkAll, #gLinkAll, #rLinkAll').click(function() {

            $("#dropS, #dropG, #dropR").css("display", "none");
            // $("#tool-boxS").css("display", "none");

        });
        $('#dropdownS').click(function() {
            $("#dropS").toggle();
            // $("#tool-boxS").css("display", "none");

        });
        $('#dropdownG').click(function() {
            $("#dropG").toggle();
            // $("#tool-boxG").css("display", "none");
        });
        $('#dropdownR').click(function() {
            $("#dropR").toggle();
            // $("#tool-boxR").css("display", "none");
        });
        //small dropdown link
        // $('#sLink1, #rLink1, #gLink1').click(function() {
        //     $("#tool-boxS, #tool-boxR, #tool-boxG").css("display", "block");
        //     $('#sTbox, #rTbox, #gTbox').addClass("show-box");
        //     $('#sGbox, #rGbox, #gGbox').removeClass("show-box");
        //     $('#sTbox, #rTbox, #gTbox').removeClass("hide-box");
        //     $('#sVbox, #sGbox, #sRbox, #rVbox, #rGbox, #rRbox, #gVbox, #gGbox, #gRbox').addClass(
        //         "hide-box");
        // });
        // $('#sLink2, #rLink2, #gLink2').click(function() {
        //     $("#tool-boxS, #tool-boxR, #tool-boxG").css("display", "block");
        //     $('#sVbox, #rVbox, #gVbox').addClass("show-box");
        //     $('#sVbox, #rVbox, #gVbox').removeClass("hide-box");
        //     $('#sTbox').removeClass("show-box");
        //     $('#sTbox, #sGbox, #sRbox, #rTbox, #rGbox, #rRbox, #gTbox, #gGbox, #gRbox').addClass(
        //         "hide-box");
        // });
        // $('#sLink3, #rLink3, #gLink3').click(function() {
        //     $("#tool-boxS, #tool-boxR, #tool-boxG").css("display", "block");
        //     $('#sRbox, #rRbox, #gRbox').addClass("show-box");
        //     $('#sRbox, #rRbox, #gRbox').removeClass("hide-box");
        //     $('#sVbox, #rVbox, #gVbox').removeClass("show-box");
        //     $('#sVbox, #sGbox, #sTbox, #rVbox, #rGbox, #rTbox, #gVbox, #gGbox, #gTbox').addClass(
        //         "hide-box");
        // });
        // $('#sLink4, #rLink4, #gLink4').click(function() {
        //     $("#tool-boxS, #tool-boxR, #tool-boxG").css("display", "block");
        //     $('#sRbox, #rRbox, #gRbox').removeClass("show-box");
        //     $('#sGbox, #rGbox, #gGbox').removeClass("hide-box");
        //     $('#sGbox, #rGbox, #gGbox').addClass("show-box");
        //     $('#sVbox, #sRbox, #sTbox, #rVbox, #rRbox, #rTbox, #gVbox, #gRbox, #gTbox').addClass(
        //         "hide-box");
        // });
    });
    </script>
    <script>
    $(document).ready(function() {
        $("#toolS").click(function() {
            $("#tool-boxS").toggle();
            $('#sVbox, #sRbox, #sTbox, #sGbox').addClass("show-box");
            $('#sVbox, #sRbox, #sTbox, #sGbox').removeClass("hide-box");
        });
        $("#toolR").click(function() {
            $("#tool-boxR").toggle();
            $('#rVbox, #rRbox, #rTbox, #rGbox').addClass("show-box");
            $('#rVbox, #rRbox, #rTbox, #rGbox').removeClass("hide-box");
        });
        $("#toolG").click(function() {
            $("#tool-boxG").toggle();
            $('#gVbox, #gRbox, #gTbox, #gGbox').addClass("show-box");
            $('#gVbox, #gRbox, #gTbox, #gGbox').removeClass("hide-box");
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $('#tryBtn, #tryBtnTop').click(function() {
            $('#inBox').toggleClass("showIn");
            // $('.hotspot-nav').css('pointer-events', 'auto');
            $('.on-load').hide();
        });
        $('#topListIcon, #list-Bs, #list-Bg, #list-Br').click(function() {
            $('#inBox').toggleClass("showIn");
        });
    });
    </script>
    <!-- All Active link-->
    <script>
    $(document).ready(function() {
        $('.top-nav a').click(function() {
            $('.top-nav a').removeClass("active");
            $(this).addClass("active");
        });
        $('.list-numbers a').click(function() {
            $('.list-numbers a').removeClass("active");
            $(this).addClass("active");
        });
        $('.option-nav a').click(function() {
            $('.option-nav a').removeClass("active");
            $(this).addClass("active");
        });
        $('.white-arrow a').click(function() {
            $('.white-arrow a').removeClass("active");
            $(this).addClass("active");
        });
    });
    </script>

    <!-- left side main navbar -->
    <input type="hidden" id="inspection1" value="0">
    <input type="hidden" id="inspection2" value="0">
    <input type="hidden" id="inspection3" value="0">




    <script>
    $(document).ready(function() {

        $('#s-nav').click(function() {
            // $('#options-list-box').addClass("show-options-listbox");
            $('#s-box').addClass("show-box");
            $('#s-box').removeClass("hide-box");
            $('#g-box').addClass("hide-box");
            $('#r-box').addClass("hide-box");
            $('#g-box').removeClass("show-box");
            $('#r-box').removeClass("show-box");
            $('.firstr').addClass("active");
            $('.firstr').removeClass("purple");
            $('.secondr').removeClass("active");
            $('.thirdr').removeClass("active");
            $('#inspection1').val('1');
            var second = $('#inspection2').val();
            var third = $('#inspection3').val();
            if (third == 1) {
                $('.thirdr').addClass("purple");
            }
            if (second == 1) {
                $('.secondr').addClass("purple");
            }

            $('.select-drop-down').css("display", "none");
        });
        $('#r-nav').click(function() {
            // $('#options-list-box').addClass("show-options-listbox");
            $('#r-box').addClass("show-box");
            $('#r-box').removeClass("hide-box");
            $('#s-box').addClass("hide-box");
            $('#g-box').addClass("hide-box");
            $('#s-box').removeClass("show-box");
            $('#g-box').removeClass("show-box");
            $('.firstr').removeClass("active");
            $('.secondr').removeClass("purple");
            $('.secondr').addClass("active");
            $('.thirdr').removeClass("active");
            $('#inspection2').val('1');
            var first = $('#inspection1').val();
            var third = $('#inspection3').val();
            if (third == 1) {
                $('.thirdr').addClass("purple");
            }
            if (first == 1) {
                $('.firstr').addClass("purple");
            }
            $('.select-drop-down').css("display", "none");
        });
        $('#g-nav').click(function() {
            // $('#options-list-box').addClass("show-options-listbox");
            $('#g-box').addClass("show-box");
            $('#g-box').removeClass("hide-box");
            $('#r-box').addClass("hide-box");
            $('#s-box').addClass("hide-box");
            $('#r-box').removeClass("show-box");
            $('#s-box').removeClass("show-box");
            $('.firstr').removeClass("active");
            $('.secondr').removeClass("active");
            $('.thirdr').removeClass("purple");
            $('.thirdr').addClass("active");
            $('#inspection3').val('1');
            var first = $('#inspection1').val();
            var second = $('#inspection2').val();
            if (first == 1) {
                $('.secondr').addClass("purple");
            }
            if (second == 1) {
                $('.firstr').addClass("purple");
            }
            $('.select-drop-down').css("display", "none");
        });
    });
    </script>
    <!-- tools , pop up, vide pop up  -->
    <script>
    $(document).ready(function() {
        //video 1st pop up
        $('#video-linkS').click(function() {
            $('#popupS').toggleClass("show-popup");
        });
        $('#video-linkG').click(function() {
            $('#popupG').toggleClass("show-popup");
        });
        $('#video-linkR').click(function() {
            $('#popupR').toggleClass("show-popup");
        });
        //small Screen
        $('#small-screenS').click(function() {
            $('#popupS').removeClass("show-popup");
            $('#small-car-videoS').addClass('show-small-video')
        });
        $('#small-screenG').click(function() {
            $('#popupG').removeClass("show-popup");
            $('#small-car-videoG').addClass('show-small-video')
        });
        $('#small-screenR').click(function() {
            $('#popupR').removeClass("show-popup");
            $('#small-car-videoR').addClass('show-small-video')
        });
        // open New Screen
        $('#newTapS').click(function() {
            $('#popupS').removeClass("show-popup");
        });
        $('#newTapG').click(function() {
            $('#popupG').removeClass("show-popup");
        });
        $('#newTapR').click(function() {
            $('#popupR').removeClass("show-popup");
        });
        //close pop up
        $('.close-btn').click(function() {
            $('#popupS').removeClass("show-popup");
        });
        $('.close-btn').click(function() {
            $('#popupG').removeClass("show-popup");
        });
        $('.close-btn').click(function() {
            $('#popupR').removeClass("show-popup");
        });
        //close small screen pop up
        $('.close-btn2').click(function() {
            $('#small-car-videoS').removeClass('show-small-video')
        });
        $('.close-btn2').click(function() {
            $('#small-car-videoG').removeClass('show-small-video')
        });
        $('.close-btn2').click(function() {
            $('#small-car-videoR').removeClass('show-small-video')
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $("#s-nav").click(function() {
            $(this).addClass("active");
            $('#r-nav').removeClass("active");
            $('#g-nav').removeClass("active");
        });
        $("#r-nav").click(function() {
            $(this).addClass("active");
            $('#s-nav').removeClass("active");
            $('#g-nav').removeClass("active");
        });
        $("#g-nav").click(function() {
            $(this).addClass("active");
            $('#s-nav').removeClass("active");
            $('#r-nav').removeClass("active");
        });

    });
    </script>
    <script>
    $(document).ready(function() {
        $("#next1").click(function() {
            $('#r-box').addClass("show-box");
            $('#r-box').removeClass("hide-box");
            $('#r-nav').addClass("active");
            $('#s-nav, #g-nav').removeClass("active");
            $('#s-box, #g-box').addClass("hide-box");
            $('.select-drop-down').css("display", "none");


        });
        $("#next2").click(function() {
            $('#g-box').addClass("show-box");
            $('#g-box').removeClass("hide-box");
            $('#g-nav').addClass("active");
            $('#r-nav, #s-nav').removeClass("active");
            $('#s-box, #r-box').addClass("hide-box");
            $('.select-drop-down').css("display", "none");
        });
        $("#prev2").click(function() {
            $('#r-box').addClass("show-box");
            $('#r-box').removeClass("hide-box");
            $('#r-nav').addClass("active");
            $('#g-nav, #s-nav').removeClass("active");
            $('#s-box, #g-box').addClass("hide-box");
            $('.select-drop-down').css("display", "none");
        });
        $("#prev1").click(function() {
            $('#s-box').addClass("show-box");
            $('#s-box').removeClass("hide-box");
            $('#s-nav').addClass("active");
            $('#g-nav, #r-nav').removeClass("active");
            $('#r-box, #g-box').addClass("hide-box");
            $('.select-drop-down').css("display", "none");
        });

    });
    </script>
    <!-- hotspot link buttons -->
    <script>
    $(document).ready(function() {
        $("#s-btn a").click(function() {
            $(this).addClass("active");
            $('#s-box').addClass("show-box");
            $('#s-box').removeClass("hide-box");
            $('#g-box').removeClass("show-box");
            $('#r-box').removeClass("show-box");
            $('.firstr').addClass("active");
            $('.firstr').removeClass("purple");
            $('.secondr').removeClass("active");
            $('.thirdr').removeClass("active");
            $('#inspection1').val('1');
            var second = $('#inspection2').val();
            var third = $('#inspection3').val();
            if (third == 1) {
                $('.thirdr').addClass("purple");
            }
            if (second == 1) {
                $('.secondr').addClass("purple");
            }
        });
        $("#r-btn a").click(function() {
            $(this).addClass("active");
            $('#r-box').addClass("show-box");
            $('#r-box').removeClass("hide-box");
            $('#s-box').removeClass("show-box");
            $('#g-box').removeClass("show-box");
            $('.firstr').removeClass("active");
            $('.secondr').removeClass("purple");
            $('.secondr').addClass("active");
            $('.thirdr').removeClass("active");
            $('#inspection2').val('1');
            var first = $('#inspection1').val();
            var third = $('#inspection3').val();
            if (third == 1) {
                $('.thirdr').addClass("purple");
            }
            if (first == 1) {
                $('.firstr').addClass("purple");
            }
        });
        $("#g-btn a").click(function() {
            $(this).addClass("active");
            $('#g-box').addClass("show-box");
            $('#g-box').removeClass("hide-box");
            $('#r-box').removeClass("show-box");
            $('#s-box').removeClass("show-box");
            $('.firstr').removeClass("active");
            $('.secondr').removeClass("active");
            $('.thirdr').removeClass("purple");
            $('.thirdr').addClass("active");
            $('#inspection3').val('1');
            var first = $('#inspection1').val();
            var second = $('#inspection2').val();
            if (first == 1) {
                $('.secondr').addClass("purple");
            }
            if (second == 1) {
                $('.firstr').addClass("purple");
            }

        });
    });
    </script>
</body>

</html>