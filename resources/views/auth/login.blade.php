<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Plume d'Infos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.css">
        <link rel="stylesheet" href=" {{ asset('admin/src/dist/css/adminx.css') }}" media="screen" />
    
        <!--
          # Optional Resources
          Feel free to delete these if you don't need them in your project
        -->
      </head>
  <body>
    <div class="adminx-container d-flex justify-content-center align-items-center">
      <div class="page-login">
        <div class="text-center">
          <a class="navbar-brand mb-4 h1" href="login.html">
            <img src="../demo/img/logo.png" class="navbar-brand-image d-inline-block align-top mr-2" alt="">
            Plume d'info
          </a>
        </div>

        <div class="card mb-0">
          <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
              <div class="form-group">
                <label for="exampleDropdownFormEmail1" for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="exampleDropdownFormEmail1" placeholder="email@example.com" required>
              </div>
              <div class="form-group">
                <label for="exampleDropdownFormPassword1" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" name="password" id="exampleDropdownFormPassword1" placeholder="Mot de passe" required>
              </div>
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Remember me</label>
                </div>
              </div>
              <button type="submit" class="btn btn-sm btn-block btn-primary">Se connecter</button>
            </form>
          </div>
          <div class="card-footer text-center">
            <a href="#"><small>Mot de passe oublié?</small></a>
          </div>
        </div>
      </div>
    </div>

    <!-- If you prefer jQuery these are the required scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src=" {{ asset('admin/src/dist/js/vendor.js') }}"></script>
    <script src=" {{ asset('admin/src/dist/js/adminx.js') }}"></script>

    <!-- If you prefer vanilla JS these are the only required scripts -->
    <!-- script src="../dist/js/vendor.js"></script>
    <script src="../dist/js/adminx.vanilla.js"></script-->
  </body>
</html>