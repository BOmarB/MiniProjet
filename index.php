<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <nav class="container navbar navbar-expand-md navbar-dark bg-dark">
    <a href="#" class="ms-3 navbar-brand">TodoList</a>
  </nav>
  <div class="container mt-4">
    <form class="form-inline" action="index.php" method="post">
      <div class="form-group">
        <input class="form-control mr-2" type="text" placeholder="Title" required>
      </div>
      <input class="btn btn-primary mt-2" type="button" value="Add">
    </form>
  </div>
  <div class="container mt-4">
    <ul class="list-group">
      <?php
      if (!empty($taches)) {
        foreach ($taches as $tache) {
          $class = $tache['done'] ? 'list-group-item-success' : 'list-group-item-warning';
          echo "<li class='list-group-item $class'>" . $tache['title'] . "</li>";
        }
      } else {
        echo "<li class='list-group-item'>Aucune tâche trouvée.</li>";
      }
      ?>
    </ul>
  </div>
</body>

</html>