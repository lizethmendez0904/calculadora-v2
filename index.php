<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action= "./proceso.php" method="POST">
                            <div class="form-group mt-3">
                                <label for="">Operación</label>
                                <select name="operacion" id="" class=form-select required>
                                <option value=""  disabled selected>Seleccione operación</option>
                                <option value="suma">Suma</option>
                                <option value="resta">Resta</option>
                                <option value="multiplicacion">Multiplicación</option>
                                <option value="division">División</option>
                                </select>
                             </div>
                             <div class="form-group mt-3">
                                <label for="">Número 1</label>
                                <input type="text" name="numero_1" class="form-control" required>
                             </div>
                             <div class="form-group mt-3">
                                <label for="">Número 2</label>
                                <input type="text" name="numero_2" class="form-control" required>
                             </div>
                             <button class="btn btn-success  w-100 mt-3">Operar</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>