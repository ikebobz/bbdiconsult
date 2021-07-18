<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Class Registration Portal</title>
  <script type = "text/javascript" src = "jquery.js"></script>
 <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-style-10">
<h1>Class Registration Portal<span>Login</span></h1>
<form id = "form1" method = "post" action = "">
    <div class="section"><span>1</span>UserName & Password</div>
    <div class="inner-wrap">
        <label>UserName <input type="text" name="uname" /></label>
        <label>Passphrase <input type="password" name="pass" /></label>
    </div>
   <div class="button-section">
     <input type="submit" name="Sign Up" id = "send" value = "Login" />
    </div>
</form>
</div>
<script>
$(document).ready(function(){
   //
  $('#send').click(function(){
  //alert('I love Halima');
  $.post('redirect.php',$('#form1').serialize(),function(result){
   if(result==1) window.location.href="register.php";
  else alert("Wrong username/password pair");   
  });
  return false;
  })
  });
</script>
</body>
</html>