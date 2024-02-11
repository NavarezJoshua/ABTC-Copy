<?php
    try {
        // Fetch data for different exposures
        $queryDog = "SELECT COUNT(*) as total_count_Dog FROM patient_records WHERE source_expo = 'Dog'";
        $stmt = $conn->prepare($queryDog);
        $stmt->execute();
        $totalDog = $stmt->fetch(PDO::FETCH_ASSOC)['total_count_Dog'];

        $queryStrayDog = "SELECT COUNT(*) as total_count_Straydog FROM patient_records WHERE source_expo = 'Stray Dog'";
        $stmt = $conn->prepare($queryStrayDog);
        $stmt->execute();
        $totalStrayDog = $stmt->fetch(PDO::FETCH_ASSOC)['total_count_Straydog'];

        $queryCat = "SELECT COUNT(*) as total_count_Cat FROM patient_records WHERE source_expo = 'Cat'";
        $stmt = $conn->prepare($queryCat);
        $stmt->execute();
        $totalCat = $stmt->fetch(PDO::FETCH_ASSOC)['total_count_Cat'];

        $queryStrayCat = "SELECT COUNT(*) as total_count_StrayCat FROM patient_records WHERE source_expo = 'Stray Cat'";
        $stmt = $conn->prepare($queryStrayCat);
        $stmt->execute();
        $totalStrayCat = $stmt->fetch(PDO::FETCH_ASSOC)['total_count_StrayCat'];

        // Use fetched data to populate JavaScript variables
        echo "<script>";
        echo "var totalDogs = $totalDog;";
        echo "var totalCats = $totalCat;";
        echo "var totalStrayDogs = $totalStrayDog;";
        echo "var totalStrayCats = $totalStrayCat;";
        echo "</script>";

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>

<script>
    // Draw the bar chart using Chart.js
    var ctx = document.getElementById('exposureChart').getContext('2d');
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Pet Dog', 'Pet Cat', 'Stray Dog', 'Stray Cat'],
            datasets: [{
                label: ['Exposure Count'],
                data: [totalDogs, totalCats, totalStrayDogs, totalStrayCats],
                backgroundColor: ['#0081B4', '#FAD3E7', '#EFA3C8', '#F4D9E7'],
                borderColor: ['#0081B4', '#FAD3E7', '#EFA3C8', '#F4D9E7'],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            indexAxis: 'y',
            plugins: {
                title: {
                    display: true,
                    text: 'Distribution of Patient Records by Source of Exposure',
                    font: {
                        size: '20px',
                    }
                }
                
            }
        }
    });
</script>