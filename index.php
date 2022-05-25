<!doctype html>
<html lang="en">

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
        <label>Список:</label>
        <input type="text" name="city" id="search_city" placeholder="Type to search..." class="form-control">

      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(function() {
      $("#search_city").autocomplete({
        source: './load/autocomplete.php',
        delay: 500,
        select: function(e, ui) {
          if (ui.item.value === 'Нет совпадений') {
            ui.item.value = '';
          }
        },
      });
    });
  </script>

</body>

</html>