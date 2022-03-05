<?php

  require_once 'user.php';
  require_once 'util.php';

  $user = new User;
  $util = new Util;

  // Manejar la petición Ajax de nuevo usuario
  if (isset($_POST['add'])) {
    $fname = $util->testInput($_POST['fname']);
    $lname = $util->testInput($_POST['lname']);
    $email = $util->testInput($_POST['email']);
    $phone = $util->testInput($_POST['phone']);

    if ($user->insert($fname, $lname, $email, $phone)) {
      echo $util->showMessage('success', 'Usuario insertado correctamente');
    } else {
      echo $util->showMessage('danger', 'Algo salió mal!');
    }
  }

  // Manejar la petición de Ajax para obtener todos los usuarios
  if (isset($_GET['read'])) {
    $users = $user->read();
    $index = 0;
    $output = '';
    if ($users) {
      foreach ($users as $row) {
        $index++;
        $output .= '<tr>
                      <td>' . $index . '</td>
                      <td>' . $row['first_name'] . '</td>
                      <td>' . $row['last_name'] . '</td>
                      <td>' . $row['email'] . '</td>
                      <td>' . $row['phone'] . '</td>
                      <td>
                        <a href="#" id="' . $row['id'] . '" class="btn btn-success btn-sm rounded py-0 editLink" data-bs-toggle="modal" data-bs-target="#editUserModal">Editar</a>

                        <a href="#" id="' . $row['id'] . '" class="btn btn-danger btn-sm rounded py-0 deleteLink">Eliminar</a>
                      </td>
                    </tr>';
      }
      echo $output;
    } else {
      echo '<tr>
              <td colspan="6">No se encontraron usuarios en la BD</td>
            </tr>';
    }
  }

  // Manejar la petición Ajax para editar usuario
  if (isset($_GET['edit'])) {
    $id = $_GET['id'];

    $user = $user->readOne($id);
    echo json_encode($user);
  }

  // Manejar la petición Ajax para actualizar los datos del usuario
  if (isset($_POST['update'])) {
    $id = $util->testInput($_POST['id']);
    $fname = $util->testInput($_POST['fname']);
    $lname = $util->testInput($_POST['lname']);
    $email = $util->testInput($_POST['email']);
    $phone = $util->testInput($_POST['phone']);

    if ($user->update($id, $fname, $lname, $email, $phone)) {
      echo $util->showMessage('success', 'Usuario actualizado correctamente');
    } else {
      echo $util->showMessage('danger', 'Algo salió mal!');
    }
  }

  // Manejar la petición Ajax para eliminar un usuario
  if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    if ($user->delete($id)) {
      echo $util->showMessage('info', 'Usuario eliminado satisfactoriamente');
    } else {
      echo $util->showMessage('danger', 'Algo salió mal!');
    }
  }

?>