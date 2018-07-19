<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <!-- Styles -->
<style>
    
    body {
            background-image: url(img/1.jpg);
            background-position: top center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            padding: 10px;
        }
        .main {
            margin-top: 100px;
            text-align: center;
        }
        .banner {
            margin: 0px;
            padding: 0px;
            text-align: center;
        }
        .banner h2 {
            margin-top:150px;
            font-size: 75px;
            letter-spacing: 20px;
            color: #fff;
        }
        span {
            color: aqua;
        }
        h1 {
            color: white;
            font-size: 20px;
            font-weight: bold;
        }
        h4 {
            margin: auto;
            font-size: 30px;
            /*letter-spacing: 20px;*/
            color: #fff;
        }
        .mainpage {
            text-align: center;
            width: 70%;
            margin-top: 40px;
            color: white;
        }
        .banner >a {
            text-decoration: none;
            list-style-type: none;
            color: aqua;
        }
        .border {
            width: 50%;
            padding: 10px;
            color: #fff;
            outline: none;
            border: 1px solid aqua;
            background: none;
            border-radius: 50px;
        }
        .border2 {
            width: 20%;
            padding: 10px;
            margin-left: 10px;
            outline: none;
            border: 1px solid aqua;
            background: aqua;
            border-radius: 50px;
        }
        .border2:hover {
            background-color: inherit;
            color: white;
        }
        .input-group {
            margin-top: 60px;
        }
        .container a {
            color: white;
            margin: 0px 20px;
        }
        .mainpage a {
            color: aqua;
        }
        .input {
            margin : 50px 0px 0px 0px;
        }
        ul {
            list-style-type: none;
            margin: 100px 0px 0px 0px;
            padding: 0px;
        }
        li {
            display: inline-block;
        }
        ul li a {
            font-size: 20px;
        }
        li a:hover {
            text-decoration: none;
            list-style-type: none;
            color : aqua;
            cursor: pointer;
            background-color: inherit;
        }
        #menu {
            margin: 50px auto;
            background-color: inherit;
            display :block;
        }
        #menu li a {
            margin: 10px 5px;
            padding: 10px;
            /*background-color:aqua;*/
            background-color:inherit;
            color:gray;
            opacity:0.1;
        }
        #menu li a:hover {
            background-color: inherit;
            color : aqua;
            opacity:1;
        }
        .nav-justified {
            width: 50%;
        }
        .edit {
            float: left;
        }
        .edit2 {
            float: right;
        }
        .footer {
            margin: 75px 0px 0px 0px;
            padding: 0px;
            color: white;
            text-align: center;
        }

        @media only screen and (max-width: 991px) {
        .main {
        margin-top: 90px;
        }
        .banner h2 {
            font-size: 50px;
        }
        .inpu1 {
            padding: 0px;
        }
        .inpu2 {
            padding: 15px 0 0 0;
        }
        .edit {
            float: none;
        }
        .edit2 {
            float: none;
        }
        }

        @media only screen and (max-width: 900px) {
        .main {
        margin-top: 85px;
        }        
        .banner h2 {
            font-size: 40px;
        }
        .inpu1 {
            padding: 0px;
        }
        .inpu2 {
            padding: 15px 0 0 0;
        }
        .edit {
            float: none;
        }
        .edit2 {
            float: none;
        }
        }

        @media only screen and (max-width: 736px) {
        .main {
        margin-top: 80px;
        }    
        .banner h2 {
            font-size: 30px;
        }
        .inpu1 {
            padding: 0px;
        }
        .inpu2 {
            padding: 15px 0 0 0;
        }
        .edit {
            float: none;
        }
        .edit2 {
            float: none;
        }
        }

        @media only screen and (max-width: 667px) {
        .main {
        margin-top: 70px;
        }
        .banner h2 {
            font-size: 25px;
        }
        .inpu1 {
            padding: 0px;
        }
        .inpu2 {
            padding: 15px 0 0 0;
        }
        .edit {
            float: none;
        }
        .edit2 {
            float: none;
        }
        }

        @media only screen and (max-width: 480px) {
        .main {
        margin-top: 65px;
        }
        .banner h2 {
            font-size: 25px;
        }
        .inpu1 {
            padding: 0px;
        }
        .inpu2 {
            padding: 15px 0 0 0;
        }
        .edit {
            float: none;
        }
        .edit2 {
            float: none;
        }
        }

        @media only screen and (max-width: 414px) {
        .main {
        margin-top: 60px;
        }
        .banner h2 {
            font-size: 25px;
        }
        .inpu1 {
            padding: 0px;
        }
        .inpu2 {
            padding: 15px 0 0 0;
        }
        .edit {
            float: none;
        }
        .edit2 {
            float: none;
        }
        }

        @media only screen and (max-width:375px) {
        .main {
        margin-top: 45px;
        }
        .banner h2 {
            font-size: 20px;
        }
        .inpu1 {
            padding: 0px;
        }
        .inpu2 {
            padding: 15px 0 0 0;
        }
        .edit {
            float: none;
        }
        .edit2 {
            float: none;
        }
        }

        @media only screen and (max-width:320px) {
        .main {
        margin-top: 40px;
        }
        .banner h2 {
            font-size: 20px;
        }
        .inpu1 {
            padding: 0px;
        }
        .inpu2 {
            padding: 15px 0 0 0;
        }
        .edit {
            float: none;
        }
        .edit2 {
            float: none;
        }
        }

        @media only screen and (max-width:320px) {
        .main {
        margin-top: 30px;
        }
        .banner h2 {
            font-size: 20px;
        }
        .inpu1 {
            padding: 0px;
        }
        .inpu2 {
            padding: 15px 0 0 0;
        }
        .edit {
            float: none;
        }
        .edit2 {
            float: none;
        } 
        }

        @media only screen and (max-width:280px) {

        .banner h2 {
            font-size: 20px;
            text-align: center;
        }
        .inpu1 {
            padding: 0px;
        }
        .inpu2 {
            padding: 15px 0 0 0;
        }
        .edit {
            float: none;
        }
        .edit2 {
            float: none;
        }
        }

        @media only screen and (max-width:235px) {

        .banner h2 {
            font-size: 20px;
        }
        .inpu1 {
            padding: 0px;
        }
        .inpu2 {
            padding: 15px 0 0 0;
        }
        .edit {
            float: none;
        }
        .edit2 {
            float: none;
        }
        }
    </style>
</head>
<body>
<div class="row" >
  <div class="col-lg-12">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="main">
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
              <div class="banner container" style="margin:auto;">
                <h2>THIS IS <span>PAGE</span> ABOUT</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12" >
              <h1 class="banner container"  style="margin:auto;">This is my product simple with Laravel</h1></h1>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" >
                <h4 class=" banner container mainpage" style="font-size: 0.9em;color: #fff;line-height: 1.8em;font-weight: 400;width: 65%;text-transform: capitalize;margin: 1.5em auto 2.5em;">
                  This is trial product about way use route , view , controller in <a href='https://laravel.com/' style='text-decoration: none;list-style-type: none;color : aqua;cursor: pointer; margin:0;padding:0;'>Laravel</a>
                </h4>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
              <div  align='center'>
                <ul class="navbar-nav" id="menu">
                  <li><a href="welcome" class='nav-item btn btn-light'>Home</a></li>
                  <li><a href="about" class='nav-item btn btn-light'>About</a></li>
                  <li><a href="profile" class='nav-item btn btn-light'>Profile</a></li>
                  <li><a href="contact" class='nav-item btn btn-light'>Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
            <div class="footer container"  style="margin: auto;">&copy; 2018 Bài thi Bootstrap . Aptech 2018 | Design by Lê Huy</div>
          </div>
        </div>	
      </div>
    </div>
  </div>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>
