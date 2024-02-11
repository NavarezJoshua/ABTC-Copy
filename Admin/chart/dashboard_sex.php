<?php
    // Query for Male count
    $queryMale = "SELECT COUNT(*) AS total FROM patient_details WHERE Sex = 'Male'";
    $stmtMale = $conn->prepare($queryMale);
    $stmtMale->execute();  
    $resultMale = $stmtMale->fetch(PDO::FETCH_ASSOC);
    $totalMale = $resultMale['total'];

    // Query for Female count
    $queryFemale = "SELECT COUNT(*) AS total FROM patient_details WHERE Sex = 'Female'";
    $stmtFemale = $conn->prepare($queryFemale);
    $stmtFemale->execute();  
    $resultFemale = $stmtFemale->fetch(PDO::FETCH_ASSOC);
    $totalFemale = $resultFemale['total'];
?>

<script>
    var ctx = document.getElementById('dash_sex').getContext('2d');
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Male', 'Female'],
            datasets: [{
                data: [<?php echo $totalMale; ?>, <?php echo $totalFemale; ?>],
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
                text: 'Distribution of Male and Female',
                    font: {
                        size: '20px'
                    }
                }
            }
        }
    });
</script>