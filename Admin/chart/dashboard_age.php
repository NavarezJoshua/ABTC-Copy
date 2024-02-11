<?php
include "connection/connection.php";

// Query for ages less than 15
$queryLessThan15 = "SELECT COUNT(*) AS total FROM patient_details WHERE age < 15";
$stmtLessThan15 = $conn->prepare($queryLessThan15);
$stmtLessThan15->execute();  
$resultLessThan15 = $stmtLessThan15->fetch(PDO::FETCH_ASSOC);
$totalAgeLessThan15 = $resultLessThan15['total'];

// Query for ages greater than 15
$queryGreaterThan15 = "SELECT COUNT(*) AS total FROM patient_details WHERE age > 15";
$stmtGreaterThan15 = $conn->prepare($queryGreaterThan15);
$stmtGreaterThan15->execute();  
$resultGreaterThan15 = $stmtGreaterThan15->fetch(PDO::FETCH_ASSOC);
$totalAgeGreaterThan15 = $resultGreaterThan15['total'];

// Prepare data for JavaScript
$labels = array();
$values = array();

$labels = array('Less than 15', 'Greater than 15');
$values = array($totalAgeLessThan15, $totalAgeGreaterThan15);

// Convert PHP arrays to JavaScript arrays
$labels_js = json_encode($labels);
$values_js = json_encode($values);
?>
<script>
    // Use Chart.js to create a column chart
    var ctx = document.getElementById('age').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: <?php echo $labels_js; ?>,
            datasets: [{
                label: 'Age Distribution',
                data: <?php echo $values_js; ?>,    
                backgroundColor: ['#5bd0ff','#ffb0d6'],
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top'
                },
                title: {
                    display: true,
                    text: 'Age Distribution',
                    font: {
                        size: '20px'
                    }
                },
            }
        }
    });
</script>