<?php
   if(isset($_POST['SubmitButton'])){ 

    $jan = $_POST['jan']; // Get input text
    $feb = $_POST['feb']; // Get input text
    $mar = $_POST['mar']; // Get input text
    $apr = $_POST['apr']; // Get input text
    $may = $_POST['may']; // Get input text
    $jun = $_POST['jun']; // Get input text
    $jul = $_POST['jul']; // Get input text
    $aug = $_POST['aug']; // Get input text
    $sep = $_POST['sep']; // Get input text
    $oct = $_POST['oct']; // Get input text
    $nov = $_POST['nov']; // Get input text
    $dec = $_POST['dec']; // Get input text
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">

    <title>Charts</title>
  </head>
  <body>
    <h1 class="text-center">Charts</h1>
    <div class="row">
        <div class="col-lg-6">
            <h3>Enter Total Sales for year 2020</h3>
            <form action="#" method="post">
                <input type="text" name="jan" class="form-control" placeholder="Total Product Sale in January">
                <input type="text" name="feb" class="form-control" placeholder="Total Product Sale in February">
                <input type="text" name="mar" class="form-control" placeholder="Total Product Sale in March">
                <input type="text" name="apr" class="form-control" placeholder="Total Product Sale in April">
                <input type="text" name="may" class="form-control" placeholder="Total Product Sale in May">
                <input type="text" name="jun" class="form-control" placeholder="Total Product Sale in June">
                <input type="text" name="jul" class="form-control" placeholder="Total Product Sale in July">
                <input type="text" name="aug" class="form-control" placeholder="Total Product Sale in August">
                <input type="text" name="sep" class="form-control" placeholder="Total Product Sale in September">
                <input type="text" name="oct" class="form-control" placeholder="Total Product Sale in October">
                <input type="text" name="nov" class="form-control" placeholder="Total Product Sale in November">
                <input type="text" name="dec" class="form-control" placeholder="Total Product Sale in December">
                <button type="submit" class="btn btn-success btn-block" name="SubmitButton">Submit</button>
            </form>
        </div>
        <div class="col-lg-6">
            <div id="columnchart_values" style="width: 900px; height: 600px;"></div>
        </div>
    </div>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Product", "Sales", { role: "style" } ],
        ["Jav", <?php echo $jan;?>, ""],
        ["Feb", <?php echo $feb;?>, ""],
        ["Mar", <?php echo $mar;?>, ""],
        ["Apr", <?php echo $apr;?>, ""],
        ["May", <?php echo $may;?>, ""],
        ["Jun", <?php echo $jun;?>, ""],
        ["Jul", <?php echo $jul;?>, ""],
        ["Aug", <?php echo $aug;?>, ""],
        ["Sep", <?php echo $sep;?>, ""],
        ["Oct", <?php echo $oct;?>, ""],
        ["Nov", <?php echo $nov;?>, ""],
        ["Dec", <?php echo $dec;?>, ""]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Total Products Sale in 2020",
        width: 700,
        height: 500,
        bar: {groupWidth: "90%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>