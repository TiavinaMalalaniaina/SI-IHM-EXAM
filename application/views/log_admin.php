<!DOCTYPE html>
<html>
<head>
  <title>Page de connexion</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f4f4f4;
    }
    .login-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 40px;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 4px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      margin-top: 100px;
    }
    .login-container h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .login-container .form-control {
      margin-bottom: 20px;
    }
    .login-container .btn-login {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 4px;
    }
    .login-container .btn-login:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="login-container">
          <h2>Connexion</h2>
          <form method="post" action="<?php echo site_url('admin/login') ?>">
            <div class="form-group">
              <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
            </div>
            <?php if (!empty($error_message)) : ?>
            <div class="alert alert-danger"><?php echo $error_message; ?></div>
            <?php endif; ?>
            <button type="submit" class="btn btn-login">Se connecter</button>
          </form>
          <p>Don't have an account? Sign <a href="<?php echo site_url('user/sign') ?>">Here</a></p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>