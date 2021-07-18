<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Class Registration Portal</title>
  <script type = "text/javascript" src = "jquery.js"></script>
  <script type = "text/javascript" src = "sweetalert2.min.js"></script>
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="sweetalert2.min.css">
  </head>
<body>
<div class="form-style-10">
<h1>Black Business Initiative<span>Business Registration</span></h1>
<form id = "form1" method = "post" action = "">
    <div class="section"><span>1</span>Please provide the following information</div>
    <div class="inner-wrap">
	 <label>Business Field<select name="bfield"  id = "bfield" >
	 <?php 
	   include_once('settings.php');
      $sql = "SELECT DESCRIPTION from business_fields";
      $set = mysqli_query($connect,$sql) or die(mysqli_error($connect));
     if(mysqli_num_rows($set) > 0) 
    {
   //$fields = array();
    while($row = mysqli_fetch_row($set))
    {
   $value = $row[0];
   echo "<option value='".$value."' id = '".$row[0]."'>".$row[0]."</option>";
    }
  //echo implode(";",$fields);
   }
  else echo "";
  ?>
	 </select></label>
        <label>Business Name <input type="text" name="bname" id = "bname"  /></label>
		<label>Contact Person<input type="text" name="cper" id = "cper"  /></label>
        <label>Business Address <input type="text" name="badd" id = "badd"  /></label>
        <label>Phone Number <input type="text" name="mobile" id = "mobile"  /></label>
        <label>Email <input type="email" name="email" id = "email"  /></label>
		<label>Website <input type="text" name="web" id = "web" /></label>
		<label>Business Description <textarea name="bdesc" id = "bdesc"></textarea></label>
		<label>Province <select id = "province" name = "province">
		 <?php 
	   include_once('settings.php');
      $sql = "SELECT * from Province";
      $set = mysqli_query($connect,$sql) or die(mysqli_error($connect));
     if(mysqli_num_rows($set) > 0) 
    {
   //$fields = array();
    while($row = mysqli_fetch_row($set))
    {
   $value = $row[1];
   echo "<option value='".$value."' id = '".$row[0]."'>".$row[1]."</option>";
    }
  //echo implode(";",$fields);
   }
  else echo "";
  ?>
		</select></label>
 </div>
 <div class="button-section">
     <input type="submit" name="Sign Up" id = "send" value = "Register" />
    </div>
</form>
</div>
<script>
$('#send').click(function(){
  //alert('I love Halima');
  $.post('access.php',$('#form1').serialize(),function(result){
   Swal.fire({text:result,confirmButtonColor:'#2A88AD'});
  });
  return false;
  });
</script>
</body>
</html>