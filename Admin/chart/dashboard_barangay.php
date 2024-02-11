<?php
include "connection/connection.php";

// Fetch data from the database
$query = "SELECT TOP 5 place_expo, COUNT(place_expo) AS exposure_count FROM patient_records GROUP BY place_expo ORDER BY exposure_count DESC";
$stmt = $conn->prepare($query);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Prepare data for JavaScript
$labels = array();
$values = array();

foreach ($data as $row) {
    $labels[] = $row['place_expo'];
    $values[] = $row['exposure_count'];
}

// Convert PHP arrays to JavaScript arrays
$labels_js = json_encode($labels);
$values_js = json_encode($values);
?>
<script>
    // Use Chart.js to create a column chart
    var ctx = document.getElementById('animalChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo $labels_js; ?>,
            datasets: [{
                label: 'Top 5 Barangay Animal Exposure',
                data: <?php echo $values_js; ?>,
                backgroundColor: '#EFA3C8'
            }]
        },
        scales: {
        y: {
          beginAtZero: true
        }
      },
        options: {
            plugins: {
                legend: {
                    position: 'top'
                },
                title: {
                    display: true,
                    text: 'Distribution of Barangay by Place of Exposure',
                    font: {
                        size: '20px'
                    }
                },
            }
        }
    });
</script>

