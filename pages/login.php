<?php
if ($_POST) {
  $sql ="
        select
          user_id
        from
          users
        where
          user_name = '".$_POST['user']."'
          and user_password = '".$_POST['password']."'
        ";
  $arr = Get2DAssoc($sql);

  echo $sql;
  echo $arr;
  if ($arr) {
    $_SESSION['user'] = $_POST['user'];
    header('Location: index.php');
  } else {
    echo "<script>alert('Invalid User Name or Password');</script>";
  }
}
?>

<form method="post">
  <div class="grid-x lgn_screen">
    <div class="cell small-8 medium-4 large-2">
      <div class="lgn_container">
        <div class="lgn_inputs">
          <label for="user">User Name</label>
          <input type="text" id="user" name="user">
          <label for="password">Password</label>
          <input type="password" id="password" name="password">
        </div>
        <input type="submit" class="lgn_button" value="login">
      </div>
    </div>
  </div>
</form>