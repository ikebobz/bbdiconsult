<?php
if(isset($_POST['clid']) and isset($_POST['tit']))
{
include_once('settings.php');
$sql = "select classid,title,date,period,max_mem,description from classes c inner join venue v on c.venue=v.venueid where classid='".$_POST['clid']."' or title='".$_POST['tit']."'";
  $set = mysqli_query($connect,$sql) or die(mysqli_error($connect));
  if(mysqli_num_rows($set) > 0) 
  {
   $fields = array();
   while($row = mysqli_fetch_row($set))
  {
   array_push($fields,$row[0],$row[1],$row[2],$row[3],$row[4],$row[5]);
  }
  echo implode(";",$fields);
  }
  else echo "";
}//end of first test
 
if(isset($_POST['bname']))
{
include_once('settings.php');
$sql1 = "insert into companydetails values('".$_POST['bname']."','".$_POST['cper']."','".$_POST['badd']."','".$_POST['mobile']."','".$_POST['email']."','".$_POST['web']."','".$_POST['province']."','".$_POST['bdesc']."','".$_POST['bfield']."')";
if(mysqli_query($connect,$sql1))
echo "Registration successful";
else echo "error: ".mysqli_error($connect);	
}
if(isset($_POST['cid']))
{
include_once('settings.php');
$sql1 = "insert into classes values('".$_POST['cid']."','".$_POST['title']."','".$_POST['date']."','".$_POST['per']."',".$_POST['maxmem'].",'".$_POST['ven']."')";
if(mysqli_query($connect,$sql1))
echo "Class successfully saved";
else echo "error: ".mysqli_error($connect);	
}
if(isset($_POST['desc']) and $_POST['hide'] == 'add')
{
include_once('settings.php');
$sql1 = "insert into business_fields (DESCRIPTION) values('".$_POST['desc']."')";
if(mysqli_query($connect,$sql1))
echo "Business field successfully registered";
else echo "error: ".mysqli_error($connect);	
}
 if(isset($_POST['_uid']))
{
include_once('settings.php');
$sql1 = "insert into registration values('".$_POST['_uid']."','".$_POST['classid']."')";
if(mysqli_query($connect,$sql1))
echo "Registration Successful";
else echo "error: ".mysqli_error($connect);	
}
if(isset($_POST['desc']) and $_POST['hide'] == 'del')
{
include_once('settings.php');
$sql1 = "delete from business_fields where DESCRIPTION = '".$_POST['desc']."'";
if(mysqli_query($connect,$sql1))
echo "Purge Successful";
else echo "error: ".mysqli_error($connect);	
}
?>

	