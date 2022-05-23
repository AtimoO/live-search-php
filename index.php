<!doctype html>
<html lang="ru">

<head>
  <!-- jQuery -->
  <script src="./js/jquery.min.js"></script>

  <!-- jQuery UI -->
  <script src="./js/jquery-ui.js"></script>
  <link rel="stylesheet" href="./css/jquery-ui.min.css" />

  <!-- Bootstrap CSS -->
  <link href="./css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <label>Список :</label>
        <input type="text" name="name" id="search_name" placeholder="Type to search..." class="form-control">

      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(function() {
      $("#search_name").autocomplete({
        source: 'autocomplete.php',
      });
    });
  </script>

</body>

</html>