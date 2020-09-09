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
    <div class="cstm-modal no-modal" id="mymodal">
        <i class="fas fa-times dismiss" id="close"></i>
        <div class="container" style="margin: 4em auto; text-align: center;">
            <div class="row">
                <div class="col-12" style="color: #000;">
                    <i class="far fa-check-circle fa-4x"></i>
                    <p style="margin: 1em auto;font-size:1.5em;">Activation Successfull</p>
                </div>
            </div>
        </div>
    </div>
        <section class="fixed-top" style="background:#ffc107; padding: 0.5em;">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="row">
                      <div class="col-2">
                          <a href="<?= base_url('/after-login')?>" class="navbar-brand text-dark"><i class="fas fa-caret-left"></i></a>
                        </div>
                        <div class="col-6">
                          <h2 style="font-size: 1.75em;">Back</h2>
                        </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
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
                  <div class="col-sm-12">
                      <div class="form-group" style="margin-top: 3em;">
                          <form action="<?= base_url('activate-card-form')?>" method="post">
                            <label for="">Customer Name</label>
                            <input type="text" name="custname" id="custname" class="form-control mb-2">
                            <label for="">Customer Mobile No</label>
                            <input type="number" name="custphno" id="custphno" class="form-control mb-2">
                            <label for="">Select Card</label>
                            <select name="cardid" id="cardid" class="form-control">
                                <option value="null" disabled selected>Crad ...</option>
                                <?php for($i = 0;$i < count($cards);$i++):?>
                                <option value="<?= $cards[$i]['id']?>"><?= $cards[$i]['cardno']?></option>
                                <?php endfor; ?>
                            </select>
                            <div class="offset-3 col-6 my-3">
                                <input type="submit" value="Activate" class="btn btn-block btn-warning" id="activate">
                            </div>
                          </form>
                      </div>
                  </div>
                </div>
              </div>
            </section>
    

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
    <script src="<?= base_url('asset/js/main.js'); ?>"></script>
    <script>
     
    </script>
  </body>
</html>
