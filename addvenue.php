<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Register New Business Ctategory</title>
  <script type = "text/javascript" src = "jquery.js"></script>
  <script type = "text/javascript" src = "sweetalert2.min.js"></script>
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="sweetalert2.min.css">
</head>

<body>
<div class="form-style-10">
<h1>Black Business Initiative<span>New Category Setup</span></h1>
<form id = "form1" method = "post" action = "">
    <div class="section"><span>1</span>Category Details</div>
    <div class="inner-wrap">
		<label>Description <input type="text" name="desc" /></label>
 </div>
 
   <div class="button-section">
     <input type="submit" name="add" id = "send" value = "Add" />
	 <input type="submit" name="del" id = "delete" value = "Delete"/>
	 <input type = "hidden" name = "hide" id = "hide" value = "" />
	 </div>
</form>
</div>
<script>
$(document).ready(function(){
   //
   
  $('#send').click(function(){
  //alert('I love Halima');
   $('#hide').val("add");
  $.post('access.php',$('#form1').serialize(),function(result){
   Swal.fire({text:result,confirmButtonColor:'#2A88AD'});   
  });
  return false;
  });
  $('#delete').click(function(){
  //alert('I love Halima');
  $('#hide').val("del");
  $.post('access.php',$('#form1').serialize(),function(result){
   Swal.fire({text:result,confirmButtonColor:'#2A88AD'});   
  });
  return false;
  });
  });
</script>
</body>
</html>