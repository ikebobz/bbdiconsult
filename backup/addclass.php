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
<h1>Class Registration Portal<span>New Class Setup</span></h1>
<form id = "form1" method = "post" action = "">
    <div class="section"><span>1</span>Class Details</div>
    <div class="inner-wrap">
        <label>ClassID <input type="text" name="cid" id = "cid" /></label>
        <label>Topic <input type="text" name="title" id = "title" /></label>
        <label>Date <input type="text" name="date" id = "date" /></label>
        <label>Period <input type="text" name="per" id = "per" /></label>
        <label>Member Limit <input type="text" name="maxmem" id = "maxmem" /></label>
        <label><input type="text" name="venue" id = "venue" /></label>
		<select id = "ven" name = "ven" onchange = "itemSelected()">
		<?php 
	  include_once('settings.php');
      $sql = "select venueid,description,size,location from venue";
      $set = mysqli_query($connect,$sql) or die(mysqli_error($connect));
     if(mysqli_num_rows($set) > 0) 
    {
   //$fields = array();
		
    while($row = mysqli_fetch_row($set))
    {
   echo "<option value = '".$row[0]."' name = '0".$row[2]."' id = '".$row[0]."'>".$row[1]."@".$row[3]."</option>";
    }
  //echo implode(";",$fields);
   }
  else echo "";
  ?>
		</select>
 </div>
 
   <div class="button-section">
     <input type="submit" name="Sign Up" id = "send" value = "Add" /> <input type="submit" name="Sign Up" id = "del" value = "Delete" />
</div>
	<div class="section" style = "margin-top:15px"><span>2</span>Find Class</div>
    <div class="inner-wrap">
        <label>Search by ClassID <input type="text" name="clid" id = "clid" /></label>
        <label>Search by Topic <input type="text" name="tit" id = "tit" /></label>
 </div>
 <div class="button-section">
     <input type="submit" name="Sign Up" id = "search" value = "Search" />
    </div>
</form>
</div>
<script>
  $(document).ready(function(){
   
  $('#search').click(function(){
  $.post('access.php',{"clid":$('#clid').val(),"tit":$('#tit').val()},function(result){
  if(!result||0===result.length||!result.trim()) return;
  var vals = result.split(";");
  $('#cid').val(vals[0]);
  $('#title').val(vals[1]);
  $('#date').val(vals[2]);
  $('#per').val(vals[3]);
  $('#maxmem').val(vals[4]);
  $('#venue').val(vals[5]);
  
 });
 //alert("hello");
  return false;
  });//end of event handler attachment
  $('#send').click(function(){
  //alert('I love Halima');
  $.post('access.php',$('#form1').serialize(),function(result){
   alert(result);
  });
  return false;
  });
  $('#del').click(function(){
  $.post('access.php',{"class_id":$('#cid').val()},function(result){
   alert(result);
   });
 //alert("hello");
  return false;
  });
});
  </script>
<script>
function itemSelected()
  {
  var id = $('#ven').val();
  $('#maxmem').val($("#"+id).attr('name'));
  }</script>
</body>
</html>