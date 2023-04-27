<?php
include ('config/config.php');  
include ('config/db.php');

if(isset($_POST['submit'])){
$user = mysqli_real_escape_string($conn,$_POST['username']);
		$pass = mysqli_real_escape_string($conn,$_POST['password']);

		$query = "INSERT INTO accounts(username, password) VALUES('$user', '$pass')";

    $sql ="SELECT * FROM accounts";
            $result = mysqli_query($conn,$sql);
            while ($row = mysqli_fetch_array($result)) { 
               $user  = $row['username']  ;
               $pass = $row['password'];
               if($_POST['password']==$row['password'])
               {
echo "sdasdas";


               }
              }
              


		if(mysqli_query($conn, $query)){
      header('Location: '.ROOT_URL.'');
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
	}

?>
<?php include('inc/header.php'); ?>
  <br/>
  <div style="width:30%; margin: auto; text-align: center;">
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" class="form-signin">
      <img class="mb-4" src="img/bootstrap.svg" alt="" width="100" height="100">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Username</label>
      <input type="text" id="username" name="username" class="form-control" placeholder="Username" required="" autofocus="">
      <br/><label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button type="submit" name="submit" value="Submit" class="btn btn-lg btn-primary btn-block">Sign in</button>

    </form>
  </div>
<?php include('inc/footer.php'); ?>