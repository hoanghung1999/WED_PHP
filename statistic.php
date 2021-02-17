<?php
session_start();
include "admin.php";
?>
<div id="content">
  <div id="piechart"></div>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <script type="text/javascript">
    // Load google charts
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);
    <?php
    require_once "controller/userControl.php";
    $userControl = new userControl();
    $user_participant = $userControl->getAllUserParticaipant();
    $young = 0;
    $middle = 0;
    $old = 0;
    while ($user = $user_participant->fetch_assoc()) {
      $age = $user['age'];
      if ($age < 10) $young++;
      else if ($age <= 40) $middle++;
      else $old++;
    }
    ?>
    // Draw the chart and set the chart values
    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        <?php
        echo "['Trẻ Em'," . $young . "],";
        echo "[' Tuổi Teen'," . $middle . "],";
        echo "['Lớn Tuổi'," . $old . "]";
        ?>
      ]);

      // Optional; add a title and set the width and height of the chart
      var options = {
        'title': 'Khảo Sát Độ tuổi tham dự hôi thảo',
        is3D:true,
        'width': 1300,
        'height': 600
      };

      // Display the chart inside the <div> element with id="piechart"
      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      chart.draw(data, options);
    }
  </script>
</div>