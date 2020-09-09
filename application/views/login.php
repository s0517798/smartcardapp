<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
      integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc="
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?= base_url('asset/css/style.css') ?>" />
    <title>Document</title>
  </head>
  <body>
    <section id="tabs">
      <div class="container">
        <div class="row">
          <div class="col-6 text-center">
            <a href="<?= base_url('/')?>"><i class="fas fa-home"></i></a>
          </div>
          <div class="col-6 text-center">
            <a href="<?= base_url('/login')?>"><i class="fas fa-user"></i></a>
          </div>
        </div>
      </div>
    </section>
      <section id="main">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h1>Shopkeeper Login</h1>
              <img src="<?= base_url('asset/img/logo.png') ?>" alt="" class="img-fluid logo">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <form action="<?= base_url('/login-form')?>" method="post" style="margin: 5em auto;">
                <div class="form-group">
                    <label for="">User Id</label>
                    <input type="text" name="userid" class="form-control" id="" placeholder="Enter User Id">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" id="" placeholder="Enter Password">
                </div>
                <div class="form-group row">
                    <div class="col-6 offset-3">
                        <input type="submit" value="Login" class="btn btn-warning btn-block">
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>

    <script
      src="http://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script>
      $('#year').text(new date().getFullYear());
    </script>
  </body>
</html>
