<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>STUDENT SPACE | Lockscreen</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="jquery.pause.js" type="text/javascript"></script>
    <script src="jquery.easing.min.js" type="text/javascript"></script>
    <!--<script src="//rawgithub.com/aamirafridi/jQuery.Marquee/master/jquery.marquee.min.js?v=3" type="text/javascript"></script>-->
    <script src="jquery.marquee.js?v=3" type="text/javascript"></script>
    <style type="text/css">
        body {
            margin: 10px;
            font-family: 'Lato', sans-serif;
        }
        small {
            font-size: 14px;
        }
        h1 {
            margin-bottom: 20px;
            padding-bottom: 10px;
            text-align: center;
        }

        h2 {
            border-bottom: 1px dotted #ccc;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }

        .marquee,
        .marquee-with-options,
        .marquee-vert-before,
        .marquee-vert {
            width: 300px;
            overflow: hidden;
            border:1px solid #ccc;
        }
    </style>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="../../index2.html"><b>ESPACE ETUDIANT</b></a>
  </div>
  <!-- User name -->
  <div class="lockscreen-name">Bamba NDIAYE</div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="../../dist/img/avatar.png" alt="User Image">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials" action="accueilEspaceEtu.php" method="post">
      <div class="input-group">
        <input type="password" class="form-control" placeholder="password">

        <div class="input-group-btn">
          <button type="submit" class="btn" ><i class="fa fa-arrow-right text-muted"></i></button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
      <div data-speed="2000" data-direction="right" class='marquee'> Entrer votre mot de passe pour redemarrer votre session</div>

  </div>
    <div class="js-marquee" style="margin-right: 0px; float: none; margin-bottom: 20px;">Nascetur suscipit distinctio optio commodi repudiandae aut exercitationem mauris. Blanditiis conubia hic dolorum! Vitae varius adipisci facilisis.</div>
  <div class="text-center">
    <a href="login.html">Ou se connecter avec un autre compte different</a>
  </div>
  <div class="lockscreen-footer text-center">
    Copyright &copy; 2016 <b><a href="http://almsaeedstudio.com" class="text-black">Estim sa</a></b><br>
    All rights reserved
  </div>
</div>
<!-- /.center -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>

<script>
    $(function(){
        $('.marquee').marquee();
    });
</script>
<script>
$(function(){
$('.marquee').marquee({

//If you wish to always animate using jQuery
allowCss3Support: true,

//works when allowCss3Support is set to true - for full list see http://www.w3.org/TR/2013/WD-css3-transitions-20131119/#transition-timing-function
css3easing: 'linear',

//requires jQuery easing plugin. Default is 'linear'
easing: 'linear',

//pause time before the next animation turn in milliseconds
delayBeforeStart: 1000,
//'left', 'right', 'up' or 'down'
direction: 'left',

//true or false - should the marquee be duplicated to show an effect of continues flow
duplicated: false,

//speed in milliseconds of the marquee in milliseconds
duration: 5000,

//gap in pixels between the tickers
gap: 20,

//on cycle pause the marquee
pauseOnCycle: false,

//on hover pause the marquee - using jQuery plugin https://github.com/tobia/Pause
pauseOnHover: false,

//the marquee is visible initially positioned next to the border towards it will be moving
startVisible: false

});
});
</script>
<script>
    $(function(){
        var $mwo = $('.marquee-with-options');
        $('.marquee').marquee();
        $('.marquee-with-options').marquee({
            //speed in milliseconds of the marquee
            speed: 5000,
            //gap in pixels between the tickers
            gap: 50,
            //gap in pixels between the tickers
            delayBeforeStart: 0,
            //'left' or 'right'
            direction: 'left',
            //true or false - should the marquee be duplicated to show an effect of continues flow
            duplicated: true,
            //on hover pause the marquee - using jQuery plugin https://github.com/tobia/Pause
            pauseOnHover: true
        });

        //Direction upward
        $('.marquee-vert').marquee({
            direction: 'up',
            speed: 1500
        });

        //pause and resume links
        $('.pause').click(function(e){
            e.preventDefault();
            $mwo.trigger('pause');
        });
        $('.resume').click(function(e){
            e.preventDefault();
            $mwo.trigger('resume');
        });
        //toggle
        $('.toggle').hover(function(e){
            $mwo.trigger('pause');
        },function(){
            $mwo.trigger('resume');
        })
            .click(function(e){
                e.preventDefault();
            })
    });
</script>
</body>
</html>
<?php
/*header('Location: accueilEspaceEtu.php');
*/?>