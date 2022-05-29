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
        <label>Список1:</label>
        <input type="text" name="city" id="search_city" placeholder="Type to search..." class="form-control">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <label>Список2:</label>
        <input type="text" name="city" id="search_user" placeholder="Type to search..." class="form-control">
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(function() {
      $("#search_city").autocomplete({
        source: './load/search_user.php',
        delay: 500,
        select: function(e, ui) {
          if (ui.item.value === 'Нет совпадений') {
            ui.item.value = '';
          } else if (ui.item.value === "Введите минимум 3 символа") {
            ui.item.value = '';
          }
        },
      });

      $("#search_user").autocomplete({
        source: './load/search_pasport.php',
        delay: 500,
        select: function(e, ui) {
          if (ui.item.value === 'Нет совпадений') {
            ui.item.value = '';
          } else if (ui.item.value === "Введите минимум 2 символа") {
            ui.item.value = '';
          }
        },
      });
    });
  </script>

</body>

</html>