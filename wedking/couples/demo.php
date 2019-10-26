<?php session_start(); ?>
<?php include_once "../config/db.php"; ?>
<?php include_once "include/function.php"; ?>
    <html>
<head>
    <title></title>
</head>
<script type="text/javascript">
            function Copy() {
			  var Url = document.getElementById("url");
			  Url.innerHTML = window.location.href;
			  console.log(Url.innerHTML)
			  Url.select();
			  document.execCommand("copy");
			}
        </script>
<body>
<div>
  <input type="button" value="Copy Url" onclick="Copy();" />
  <!-- <br /> Paste: <textarea id="url" rows="1" cols="30"></textarea> -->


  <p class="text-primary" id="url">https://wedkings.in/couple/</p>
</div>
</body>
</html>

