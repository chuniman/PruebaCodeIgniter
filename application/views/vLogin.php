<!DOCTYPE html>
<html>
    <head>
        <!-- CSS de Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <meta charset="UTF-8">

    </head>
    <body>
        <div class="container">
            <form action=" <?php echo base_url(); ?>index.php/cLogin/ingresar" method="POST">
                <div class="row">
                    <div class="col-xs-7  col-xs-offset-1">
                        <div class="form-group">
                            <label for="name-persona">Nombre</label>
                            <input type="text" id="name-persona" name="name-persona" class="form-control" placeholder="Ingrese Nombre" />
                        </div>
                        <div class="form-group">
                            <label for="pass-persona">Password</label>
                            <input type="text" id="pass-persona" name="pass-persona" class="form-control" placeholder="Ingrese password" />
                        </div>
                        <input type="submit" value="Ingresar">

                    </div>
                </div>
            </form>
        </div>


        <!-- JS de Bootstrap -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </body>
</html>
