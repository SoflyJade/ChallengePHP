<!DOCTYPE html>
<html>
<head>


  <!-- bootstrap -->

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">


  <meta charset="utf-8">
  <title>Challenge PHP</title>
</head>
<body>
  <h3>Afficher un tableau PHP en HTML</h3>



  <?php

  $game = array("Pokemon","The Legend of Zelda", "Assassin's Creed", "NFS", "Mario Kart");
  $compteur = count($game);
  function table($game){
    echo '<tr> <td>' .$game. '</td> </tr>';
  }
  ?>

  <table id="arrayGame" class="table table-striped display" width:"100%">
    <thead> <h3>Jeux Vidéo</h3>
      <tbody>

        <?php
        for ($i=0; $i<$compteur ; $i++) {
          table($game[$i]);
        }
        ?>

      </tbody>
    </thead>

  </table>



  <!-- JQuery -->

  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>

  <script type="text/javascript">
  $(document).ready(function() {
    $('#arrayGame').DataTable();
  } );
  </script>
</body>
</html>
