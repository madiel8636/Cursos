<?php
if (isset($_SESSION['user_id'])) {
    $id = $_SESSION['user_id'];
    $result = mysqli_query($conn, 'SELECT * FROM usuarios WHERE id = '.$id.'');
    $results = mysqli_fetch_assoc($result);
    $user = null;
    if (count($results) > 0) {
      $user = $results;
    }
  } else {
    header('Location: /cursos');
  }
?>