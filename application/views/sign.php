<!DOCTYPE html>
<html>
<head>
  <title>Page d'inscription</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f4f4f4;
    }
    .register-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 40px;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 4px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      margin-top: 100px;
    }
    .register-container h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .register-container .form-control {
      margin-bottom: 20px;
    }
    .register-container .btn-register {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 4px;
    }
    .register-container .btn-register:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="register-container">
          <h2>Inscription</h2>
          <form action="<?php echo site_url('user/signin'); ?>" method="post">
            <div class="form-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required onchange="validatePassword()">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="confirmation" name="confirmation" placeholder="Confirmer le mot de passe" required onchange="validatePassword()">
            </div>
            <div class="alert alert-danger" style="display: none;" id="error"></div>
            <button type="submit" class="btn btn-register" id="submit" disabled>S'inscrire</button>
          </form>
          <p>Vous avez déjà un compte ? Connectez-vous <a href="<?php echo site_url('user/log') ?>">ici</a>.</p>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<script>
  function validatePassword() {
    var password = document.getElementById("password");
    var confirmation = document.getElementById("confirmation");
    var submit = document.getElementById("submit");
    if (password.value != confirmation.value) {
      submit.disabled = true;
    } else {
      submit.disabled = false;
    }
  }
</script>