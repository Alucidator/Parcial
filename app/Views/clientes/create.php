<!DOCTYPE html>
<html>
<head>
    <title>Crear Cliente</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('views/clientes/styles.css'); ?>">
</head>
<body>

<h2>Crear Cliente</h2>

<form action="<?= base_url('clientes/store') ?>" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required><br>

    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" required><br>

    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
    <input type="date" name="fecha_nacimiento" required><br>

    <label for="fecha_sucripcion">Fecha de Suscripción:</label>
    <input type="date" name="fecha_sucripcion" required><br>

    <label for="correo_electronico">Correo Electrónico:</label>
    <input type="email" name="correo_electronico" required><br>

    <label for="telefono_movil">Teléfono Móvil:</label>
    <input type="text" name="telefono_movil" required><br>

    <button type="submit">Guardar Cliente</button>
</form>

<a href="<?= base_url('clientes'); ?>">Volver a la lista</a>

<!-- Estilos CSS internos -->
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

h2 {
    text-align: center;
    color: #fff;
    background-color: #e74c3c; /* Rojo */
    padding: 10px;
    border-radius: 5px;
}

a {
    color: #e74c3c; /* Rojo */
    text-decoration: none; /* Sin subrayado */
}

a:hover {
    text-decoration: underline; /* Subrayado al pasar el ratón */
}

table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    background-color: #fff;
}

th, td {
    border: 1px solid #ccc;
    padding: 10px;
    text-align: left;
}

th {
    background-color: #e74c3c; /* Rojo */
    color: #fff;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

button {
    background-color: #e74c3c; /* Rojo */
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #c0392b; /* Rojo más oscuro */
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Añadir espacio entre el enlace y la tabla */
h2 + a {
    margin-bottom: 20px; /* Espacio debajo del enlace */
    display: inline-block; /* Asegura que el margen se aplique correctamente */
}

/* Añadir espacio entre la tabla y el buscador */
table {
    margin-top: 20px; /* Espacio arriba de la tabla */
}

/* Ajustar el margen del contenedor del buscador */
.dataTables_wrapper {
    margin-top: 20px; /* Espacio arriba del buscador */
}
/* Estilo general para los formularios */
form {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px; /* Espacio debajo del formulario */
}

/* Estilo para las etiquetas */
label {
    display: block; /* Hacer que cada etiqueta esté en su propia línea */
    margin-bottom: 5px; /* Espacio entre la etiqueta y el input */
    color: #333; /* Color del texto */
}

/* Estilo para los inputs */
input[type="text"],
input[type="email"],
input[type="date"] {
    width: 100%; /* Ancho completo */
    padding: 10px; /* Espaciado interno */
    margin-bottom: 15px; /* Espacio debajo de cada input */
    border: 1px solid #ccc; /* Borde gris */
    border-radius: 5px; /* Bordes redondeados */
    box-sizing: border-box; /* Asegura que el padding y el border no afecten el ancho total */
}

/* Estilo para el botón */
button {
    width: 100%; /* Ancho completo */
    background-color: #e74c3c; /* Rojo */
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px; /* Aumentar tamaño de fuente */
}

/* Hover para el botón */
button:hover {
    background-color: #c0392b; /* Rojo más oscuro */
}

</style>

</body>
</html>
