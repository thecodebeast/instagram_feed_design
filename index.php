<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Instagram Feed Design, Similar to Victoria Secret Pink Design</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
   <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300|Changa+One:400,400italic' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      #theContainer{
        margin-top: 80px;
      }
      h1{
        font-family: 'Raleway', sans-serif;
        font-weight: 300;
      }
      .instaImg img{
        width: 20%;
      }
      .center{
        text-align: center;
      }
      .instagramFollow{
        background-color: #f39c12;
        padding-top: 5px;
        padding-bottom: 5px;
        border-bottom-left-radius: 0.5em;
        border-bottom-right-radius: 0.5em;
      }
      .instagramFollow h3{
        font-family: 'Changa One', cursive;
        text-transform: uppercase;
        margin-top: 8px;
        color: #ecf0f1;
      }
      .instagramFollow a{
        color: #ecf0f1;
      }
      .followIcon{
        float: right;
        padding-right: 10px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      
      <div class="col-md-12" id="theContainer">
        <h1 class="center">Instagram Feed Similar to Victoria Secret Design</h1>
        <div id="instafeed"></div>
        <div class="instagramFollow">
          <h3 class="center"><a href="http://instagram.com/houzz" target="_blank">FOLLOW @houzz </a><span class="followIcon"><a href=""><i class="fa fa-instagram"></i></a></span></h3>
        </div>
      </div>
    </div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="instafeed.min.js"></script>
    <script type="text/javascript">
      var feed = new Instafeed({
          get: 'user',
          userId: 597729935,
          resolution: 'standard_resolution',
          limit: 5,
          template: '<a href="{{link}}" class="instaImg" target="_blank"><img src="{{image}}" /></a>',
          accessToken: '30880231.1fb234f.e94546af9e7348578c3b3ed7ba26cd44 '
      });
      feed.run();
    </script>
  </body>
</html>