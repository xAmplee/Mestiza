<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">  
    <link rel="stylesheet" href="estilos/estiloaltacliente.css">
    <title>Meztiza || Alta Clientes</title>
</head>
<body>
<div class="container" style="background-color: red;">
    <div class="row justify-content-center form" style="background-color: blue;">
        <form class="">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nombre</label>
                    <input type="text" class="form-control" id="inputNombre">
                </div>
                <div class="form-group col-md-6">
                    <label>Apellidos</label>
                    <input type="text" class="form-control" id="inputApellidos">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="email" class="form-control" id="inputEmail">
                </div>
                <div class="form-group col-md-6">
                    <label>Password</label>
                    <input type="password" class="form-control" id="inputPass">
                </div>
            </div>
            <div class="form-group">
                <label>Direccion 1</label>
                <input type="text" class="form-control" id="inputDireccion1" placeholder="calle y numero">
            </div>
            <div class="form-group">
                <label>Direccion 2</label>
                <input type="text" class="form-control" id="inputDireccion2" placeholder="entre calles(calle y numero)">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Ciudad</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label>Estado</label>
                    <select id="inputState" class="form-control">
                        <option selected>Elegir...</option>
                        <option>Ciudad de México</option>
                        <option>Aguascalientes</option>
                        <option>Baja California</option>
                        <option>Baja California Sur</option>
                        <option>Campeche</option>
                        <option>chiapas</option>
                        <option>Chihuahua</option>
                        <option>Coahuila</option>
                        <option>Colima</option>
                        <option>Durango</option>
                        <option>Guanajato</option>
                        <option>Guerrero</option>
                        <option>Hidalgo</option>
                        <option>Jalisco</option>
                        <option>Zacatecas</option>
                        <option>Michoacán De Ocampo</option>
                        <option>Morelos</option>
                        <option>Nayarit</option>
                        <option>Nuevo Leon</option>
                        <option>Oaxaca</option>
                        <option>Puebla</option>
                        <option>Quintana Roo</option>
                        <option>San Luis Potosí</option>
                        <option>Sinaloa</option>
                        <option>Queretaro</option>
                        <option>Veracruz</option>
                        <option>Yucatan</option>
                        <option>Sonora</option>
                        <option>Queretaro De Artega</option>
                        <option>Tabasco</option>
                        <option>Tamaulipas</option>
                        <option>Tlaxcala</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label>C.P.</label>
                    <input type="text" class="form-control" id="inputCP">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="inputCheck">
                    <label class="form-check-label">
                        Acepto Terminos y Condiciónes
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" id="registrar">Registrarme</button>
        </form>
    </div>
</div>
<!---->
<script src="java/jquery.js"></script>
<script src="java/popper.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.js"></script>
<script src="java/altaclientes.js"></script>
<!---->
</body>
</html>