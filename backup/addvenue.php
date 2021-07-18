<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Class Registration Portal</title>
  <script type = "text/javascript" src = "jquery.js"></script>
 <link rel="stylesheet" href="style.css">
</head>
<ul class = "navbar">
<li class = "hide"><a href = "addvenue.php">Venue</a></li>
<li class = "hide"><a href = "addclass.php">Class</a></li>
<li class = "hide"><a href = "adduser.php">User </a></li>
<li class = "hide"><a href = "register.php">Registration</a></li>
<li><a href = "default.php">SignOut</a></li>
</ul>
<body>
<div class="form-style-10">
<h1>Class Registration Portal<span>New Venue Setup</span></h1>
<form id = "form1" method = "post" action = "">
    <div class="section"><span>1</span>Venue Details</div>
    <div class="inner-wrap">
        <label>VenueID <input type="text" name="code" /></label>
		        <label>Description <input type="text" name="desc" /></label>
        <label>Location <input type="text" name="loc" /></label>
        <label>Capacity <input type="text" name="sz" /></label>
 </div>
 
   <div class="button-section">
     <input type="submit" name="Sign Up" id = "send" value = "Add" />
    </div>
</form>
</div>
<script>
$(document).ready(function(){
   //
  $('#send').click(function(){
  //alert('I love Halima');
  $.post('access.php',$('#form1').serialize(),function(result){
   alert(result);   
  });
  return false;
  })
  });
</script>
</body>
</html>