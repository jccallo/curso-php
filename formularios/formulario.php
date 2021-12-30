<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- formulario -->
    <form action="procesar.php" method="POST" enctype="multipart/form-data"> 
        <!-- tipo text -->
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name"><br>
        <label for="edad">Edad</label>
        <input type="number" name="edad" id="edad"><br>

        <!-- tipo radio, el name es el mismo -->
        <p>Genero:</p>
        <input type="radio" id="male" name="genero" value="Masculino">
        <label for="male">Masculino</label><br>
        <input type="radio" id="female" name="genero" value="Femenino">
        <label for="female">Femenino</label><br>
        
        <!-- tipo select -->
        <p>Estado civil:</p>
        <select name="estado">
            <option value="Soltero">Soltero</option>
            <option value="Casado">Casado</option>
        </select>

        <!-- tipo checkbox, el name es el mismo pero se agrega los corchetes -->
        <p>Roles:</p>
        <input type="checkbox" id="administrador" name="roles[]" value="Administrador">
        <label for="administrador">Administrador</label><br>
        <input type="checkbox" id="editor" name="roles[]" value="Editor">
        <label for="editor">Editor</label><br>
        <input type="checkbox" id="moderador" name="roles[]" value="Moderador">
        <label for="moderador">Moderador</label><br>

        <!-- tipo textarea -->
        <p>Mensaje:</p>
        <textarea name="mensaje" rows="3" cols="30"></textarea><br>

        <!-- tipo files, para enviar imagen -->
        <!-- para enviar imagenes es obligatorio: method="POST" enctype="multipart/form-data" -->
        <p>Imagen:</p>
        <input type="file" name="imagen"><br><br>

        <!-- tipo sumit, envia el formulario -->
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

