<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <!-- CSS de Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>
    <body>

        <div>
            <div class="container">
                <form action=" <?php echo base_url(); ?>index.php/cPersona/guardarPersona" method="POST">
                    <div class="row">
                        <div class="col-xs-7  col-xs-offset-1">
                            <h4> Ingreso de usuarios </h4>
                            <div class="form-group">
                                <label for="name-persona">Nombre</label>
                                <input type="text" id="name-persona" name="name-persona" class="form-control" placeholder="Ingrese Nombre" />
                            </div>
                            <div class="form-group">
                                <label for="lastname-persona">Apellido</label>
                                <input type="text" id="lastname-persona" name="lastname-persona" class="form-control" placeholder="Ingrese Apellido" />
                            </div>
                            <div class="form-group">
                                <label for="pass-persona">Password</label>
                                <input type="text" id="pass-persona" name="pass-persona" class="form-control" placeholder="Ingrese PassWord" />
                            </div>
                            <div class="form-group">
                                <label for="email-persona">email</label>
                                <input type="text" id="email-persona" name="email-persona" class="form-control" placeholder="Ingrese Email" />
                            </div>
                            <div class="form-group">
                                <label for="Edad-persona">Edad</label>
                                <input type="text" id="Edad-persona" name="Edad-persona" class="form-control" placeholder="Ingrese Edad" />
                            </div>
                            <input type="submit" value="Guardar">
                            <a href="<?php echo base_url(); ?>cLogin/index">Loguearse </a>
                        </div>
                    </div>
                </form>

            </div>
        </div>

        <!-- JS de Bootstrap -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </body>
</html>