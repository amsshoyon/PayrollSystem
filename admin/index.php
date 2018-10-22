<?php
  session_start();
  if(isset($_SESSION['admin'])){
    header('location:home.php');
  }
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition ">



<div class="row" style="margin-top:60px">
    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4 shadow">
      <h2>Please Sign In</h2>
      <hr class="colorgraph">
      <form action="login.php" method="POST">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="username" placeholder="input Username" required autofocus>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="input Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
          <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
            </div>
          </div>
      </form>
      <hr class="colorgraph">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='callout callout-danger text-center mt20'>
              <p>".$_SESSION['error']."</p> 
            </div>
          ";
          unset($_SESSION['error']);
        }
      ?>
    </div>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>