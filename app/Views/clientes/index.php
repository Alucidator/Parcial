<!DOCTYPE html>
<html>
<head>
    <title>Lista de Clientes</title>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
</head>
<body>

<h2>Lista de Clientes</h2>

<a href="<?= base_url('clientes/create'); ?>">Crear nuevo cliente</a>

<table id="clientes" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de Nacimiento</th>
            <th>Fecha de Suscripción</th>
            <th>Correo Electrónico</th>
            <th>Teléfono Móvil</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($clientes as $cliente): ?>
            <tr>
                <td><?= $cliente['cliente_id']; ?></td>
                <td><?= $cliente['nombre']; ?></td>
                <td><?= $cliente['apellido']; ?></td>
                <td><?= $cliente['fecha_nacimiento']; ?></td>
                <td><?= $cliente['fecha_sucripcion']; ?></td>
                <td><?= $cliente['correo_electronico']; ?></td>
                <td><?= $cliente['telefono_movil']; ?></td>
                <td>
                    <a href="<?= base_url('clientes/edit/' . $cliente['cliente_id']); ?>">Editar</a> |
                    <a href="<?= base_url('clientes/delete/' . $cliente['cliente_id']); ?>" onclick="return confirm('¿Estás seguro de eliminar este cliente?')">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#clientes').DataTable();
    });
</script>

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
</style>

</body>
</html>

