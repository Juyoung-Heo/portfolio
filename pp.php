<!DOCTYPE html>
<html>
<head>
    <title>UNIVERSE</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <style type="text/css">
        body{margin:0;}
        a:link, a:hover, a:focus, a:active, a:visited{text-decoration:none;}
        div.section{height:100vh;}
        .container {padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; height:100%;}
        @media (min-width: 768px) {
            .container {width: 750px;}
        }
        @media (min-width: 992px) {
            .container {width: 970px;}
        }
        @media (min-width: 1200px) {
            .container {width: 1170px;}
        }
        
        /* md_header */
            #md_header{right:0; left:0; max-height: 50px; position:fixed; overflow:hidden; transition:.6s; z-index:1;}
            #md_header a{color:#f59497;}
            #navbar_header{float:left; height:50px;}
            .navbar_toggle {display: none; position: relative; float: right; padding: 9px 10px; margin-top: 8px; margin-right: 15px; margin-bottom: 8px; background-color: transparent; background-image: none; border: none;}
            .navbar_toggle:hover{}
            .navbar_toggle .icon-bar {background-color: #fff; display: block; width: 22px; height: 2px; border-radius: 1px;}
            .navbar_toggle .icon-bar+.icon-bar {margin-top: 4px;}
            .navbar-brand{float: left; padding: 15px 15px; font-size: 18px; line-height: 20px;}
            #navbar_body{float:right; height:50px; text-align:center;}
            #navbar_body ul{float:left; margin:0; padding:0; list-style: none;}
            #navbar_body ul>li{float:left;}
            #navbar_body ul>li>a{line-height:20px; position:relative; display:block; padding: 15px; color:white; cursor:pointer;}
            #navbar_body ul>li>a:hover{color:#f59497;}
            #navbar_body ul>.active>a, #navbar_body ul>.active>a:hover, #navbar_body ul>.active>a:focus{color: #facfd0;}
            @media (max-width: 992px){ /* 화면 작을때 */
                #navbar_header{float:none; margin-right: -15px; margin-left: -15px; border-bottom: 1px solid #3a3a3a;}
                .navbar_toggle{display:block;}
                #navbar_body ul{float:none; margin: 7.5px -15px;}
                #navbar_body ul>li{float:none; position:relative; display:block;}
                #navbar_body{float:none; height:initial;}
            }
        #main{}
        #main ._background{position:absolute; width:100%; height:45vh; background-color:black; overflow:hidden;}
        #main ._background img{position:relative; top:50%; transform:translateY(-50%); opacity:0.3; width:100%; filter: blur(5px); -webkit-filter: blur(6px); -moz-filter: blur(6px);-o-filter: blur(6px); -ms-filter: blur(6px);}
        @media (max-width: 992px){ /* 화면 작을때 */
            #main ._background img{width:992px;}
        }
        #main .container{}
        #main .container #name{position:relative; top:23%; transform:translateY(-50%); text-align:center; font-family:Courier New; font-size:40px; color:white; letter-spacing:2px;}
        #main .container #snsLink{position:relative; top:25%; transform:translateY(-50%); text-align:center; font-family:Courier New; font-size:40px; color:white; letter-spacing:2px;}
        #main .container #snsLink img.sns{-webkit-filter:grayscale(100%); filter:gray; width:50px; height:50px;}
        #main .container #snsLink img.sns:hover{-webkit-filter:grayscale(0%); filter:none; cursor:pointer;}
    </style>
</head>
<body>
    <div id="md_header">
        <div class="container">
            <div id="navbar_header">
                <button type="button" class="navbar_toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" id="md_logo">UNIVERSE</a>
            </div>
            <div id="navbar_body">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#main">Main</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#resume">Resume</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#works">Works</a></li>
                    <!--
                    <script>
                        if(localStorage.memberId==null){
                            document.write("<li><a onclick=\"navbarToggle(); openForm('login', 'member');\">LOG IN</a></li><li><a onclick=\"navbarToggle(); openForm('signup', 'member');\">SIGN UP</a></li>");
                        }else{
                            document.write("<li><a onclick=\"memberLogout();\">LOG OUT</a></li>");
                        }
                    </script>
                    -->
                </ul>
            </div>
        </div>
    </div>
    <div id="main" class="section">
        <div class="_background">
            <img src="./woojoo.jpg">
        </div>
        <div class="container">
            <div id="name">Heo Juyoung</div>
            <div id="snsLink">
                <a href="http://heojju.tistory.com/"><img src="./img/tistory_color.png" class="sns" title="tistory"></a>
                <a href="https://www.facebook.com/heojju0"><img src="./img/facebook_color.png" class="sns" title="facebook"></a>
                <a href="mailto:heojjuyoungg@gmail.com"><img src="./img/google_color.png" class="sns" title="google"></a>
            </div>
        </div>
    </div>
    <div id="about" class="section">
    </div>
    <div id="resume" class="section">
    </div>
    <div id="services" class="section">
    </div>
    <div id="works" class="section">
    </div>
    <div id="footer" class="section">
    </div>
</body>
<script>
$(document).ready(function(){
    function removeLiActive(){
        $("#navbar_body ul li").each(function(){
            $(this).removeClass("active");
        });
    }

    /* li active setting */
    removeLiActive();
    var hash = location.hash;
    if(hash==""){hash="#main";}
    $('html,body').stop().animate({
        scrollTop: $(hash).offset().top
    }, 1000);
    $("#navbar_body ul li").each(function(){
        if(this.childNodes[0].hash == hash){
            this.classList.add("active");
        }
    });
    
    /*scroll animate*/
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').stop().animate({
                    scrollTop: target.offset().top
                }, 1000);
            }
        }
        removeLiActive();
        this.parentNode.classList.add("active");
        navbarToggle();
        closeForm();
    });

    //section scroll
    $(".section").each(function(){
        $(this).on('mousewheel DOMMouseScroll', function(e){
            e.preventDefault();
            var E = e.originalEvent;
            delta = 0;
            var li_active;
            var up = 0;
            var down = $(".section").length-1;
            for(var i=0; i<$(".section").length; i++){
                if($(".section")[i].id == this.id){
                    if(i != up){
                        up = $("#"+$(".section")[i-1].id).offset().top;
                        up_id = "#"+$(".section")[i-1].id;
                    }else{
                        up_id = "#"+$(".section")[i].id;
                    }
                    if(i != down){
                        down = $("#"+$(".section")[i+1].id).offset().top;
                        down_id = "#"+$(".section")[i+1].id;
                    }else{
                        down = $("#"+$(".section")[i].id).offset().top;
                        down_id = "#"+$(".section")[i].id;
                    }
                }
            }
            if (E.detail) {
                delta = E.detail * -40;
                //$('span').text(delta);
            }else{
                delta = E.wheelDelta;
                //$('span').text(delta);
                if(delta == 120){
                    //wheel up
                    changeScrollTop(up);
                    li_active = up_id;
                }else if(delta == -120){
                    //wheel down
                    changeScrollTop(down);
                    li_active = down_id;
                }
            };
            removeLiActive();
            $("#navbar_body ul li").each(function(){
                if(li_active=="#contactUs" || li_active=="#footer"){li_active="#contact";}
                if(this.childNodes[0].hash == li_active){
                    this.classList.add("active");
                }
            });
            //location.hash = li_active;
        });
    });

    function changeScrollTop(height){
        $("html, body").stop().animate({ scrollTop: height}, 1000);
    }
});
    //mobile size navbar_toggle
    $(".navbar_toggle").click(function(){
        navbarToggle();
    });
    function navbarToggle(){
        if($("#md_header").css("maxHeight") == "50px"){
            $("#md_header").css("maxHeight","410px");
        }else{
            $("#md_header").css("maxHeight","50px");
        }
    }
</script>
<?php
?>
</html>