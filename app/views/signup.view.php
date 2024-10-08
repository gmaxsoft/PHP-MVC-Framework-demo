<!doctype html>
<html lang="pl">

<head>
  <base href="<?= ROOT ?>" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Register</title>


  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="assets/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin">
    <form method="post">

      <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
          <?= implode("<br>", $errors) ?>
        </div>
      <?php endif; ?>

      <h1 class="h3 mb-3 fw-normal">Create account</h1>

      <div class="form-floating">
        <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input name="terms" type="checkbox" value="1"> Accept terms
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Create</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2022-2024</p>
    </form>
  </main>



</body>

</html>