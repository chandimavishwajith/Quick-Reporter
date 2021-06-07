

<?php

include_once "config.php";

//$report=$_REQUEST["report"];

 
 
 echo " <div id=\"piechart\"></div>

<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>

<script type=\"text/javascript\">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Task','Hours per Day'],";

    $sql = "SELECT EXTRACT(MONTH FROM `timeStamp`) AS month, count(*) AS num FROM accidentcase GROUP BY EXTRACT(MONTH FROM `timeStamp`)";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            
            $year=$row["month"];
            $num=$row["num"];
           
    
            echo "['$year',$num],";
    
           
          // $data="[".$caseId.",".$timeStamp.",".$type.",".$vehicleType.",".$vehicleNumber.",".$user.",".$lang.",".$lat.",".$status.",".$flag."]";
           
        }
    
    }

  
echo"
])
  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Accidents By Year', 'width':1050, 'height':600,'backgroundColor': 'transparent','is3D':true};

  // Display the chart inside the <div> element with id=\"piechart\"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

 
"; 
    

?>