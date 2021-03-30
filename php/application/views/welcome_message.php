<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
	<script src="/assets/js/jquery-3.6.0.min.js"></script>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="/assets/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
   
    <title>Hello, ISERL</title>
  </head>
  <script>
$(document).ready(function(){
  $("#btn1").click(function(){
    alert("Text: " + $("#test").text());
  });
  $("#btn2").click(function(){
    alert("HTML: " + $("#test").html());
  });
});
</script>
</head>
<body>
<h1><b>Hello, ISERL From Weerapong and Gino Wasu!!!</b></h1>
<p id="test">This is some <b>bold</b> text in a paragraph.</p>

<button id="btn1" type="button" class="btn btn-primary">Show ข้อความ</button>
<button id="btn2" type="button" class="btn btn-outline-success">Show HTML</button>


</body>
</html>