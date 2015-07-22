<!DOCTYPE html>
<html>

<head>
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=us-ascii">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Play Paddock Wood">
  <meta name="author" content="PPW"/>
  <meta property="og:title" content="Play Paddock Wood"/>
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="http://www.abdnpir.co.uk"/>
  <meta property="og:image" content="http://www.abdnpir.co.uk/logos/logo2.png"/>
  <meta property="og:description" content="The homepage of Aberdeen University's only PIR Society. Non-partisan. Totally political."/>
  <meta property="fb:admins" content="jonathan.kerr"/>

  <title><?php echo $pageTitle ?> </title>

   <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../../dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../dist/css/main.css?v=1.5">
    <link href="../dist/css/jquery.mmenu.css" type="text/css" rel="stylesheet" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <script src="../../dist/js/jquery.js"></script>
    <script src="../../dist/js/bootstrap.js"></script>
    <script src="../../dist/js/jquery.mmenu.min.js" type="text/javascript"></script>



    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-37670365-4', 'auto');
    ga('send', 'pageview');

    </script>

    <script>
    $(function(){
      $("#header").load("../header/menu.php");
    });
    </script>

    <script>
    $(document).ready(function() {
      $("#my-menu").mmenu({
        // Options
      });
      var API = $("#my-menu").data( "mmenu" );

      $("#my-button").click(function() {
        API.open();
      });
    });
    </script>

</head>
<body>
  <div>
