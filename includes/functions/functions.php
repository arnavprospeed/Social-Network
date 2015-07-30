<?php function validate_user($username,$password){
  global $connection;
  $safe_username=mysqli_real_escape_string($connection,$username);
  $query="SELECT password FROM user_auth WHERE user_id = '{$username}' LIMIT 1";

  $password_set=mysqli_query($connection,$query);
  if($fetched_password=mysqli_fetch_assoc($password_set)){

  }
  if(isset($fetched_password))
  {
    if($password==$fetched_password["password"])
      return true;
    else {
       return false;
    }
  }
  else{
    return false;
  }
} ?>

<?php function check_available($username){
  global $connection;
  $safe_username=mysqli_real_escape_string($connection,$username);
  $query="SELECT user_id FROM user_auth WHERE user_id = '{$safe_username}'";
  $checkUserID=mysqli_query($connection,$query);
  if (mysqli_num_rows($checkUserID)>0){
    return false;
  }
  else{
    return true;
  }
} ?>

<?php function validateCred($username,$password){
  if(strlen($username)>6&&strlen($username)<=30&&strlen($password)>=8&&strlen($password)<=30)
  {
    return true;
  }
  else {
    return false;
  }

} ?>

<?php function createUser($username,$password,$name,$phone_no,$email){
  global $connection;
  $hashed_password=$password;
  $query="INSERT INTO ";
  $query.="user_auth (user_id,password) ";
  $query.="VALUES (";
  $query.=" '{$username}','{$hashed_password}'";
  $query.=")";
  //echo "$query";
  $result=mysqli_query($connection,$query);
  if(!$result)
    echo "Query failed";
  return $result;
} ?>
