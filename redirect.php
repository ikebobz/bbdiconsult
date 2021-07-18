 <?php
  session_start();
  include("settings.php"); 
  if(isset($_POST['uname'])){
  $sql = "select userid,login,password from users where login='".$_POST['uname']."' and password='".$_POST['pass']."'";
  $set = mysqli_query($connect,$sql) or die(mysqli_error($connect));
  if(mysqli_num_rows($set) > 0) {
  $row = mysqli_fetch_row($set);
  $_SESSION['uid']=$row[0];
  $_SESSION['uname'] = $_POST['uname'];
  echo 1;
  }
  else echo 2;
  /*$row = mysqli_fetch_row($set);
  if($row[0]==$_POST['user'] AND $row[1]==$_POST['pass']) echo 1;
  else  echo 2;
  {echo "<script>location.href='home.php';</script>";$_SESSION['name'] = getName($_POST['user']);
      $_SESSION['eid'] = getId($_POST['user']);*/
  }
  ?>