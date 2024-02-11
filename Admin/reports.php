<div class="box-reports">
    <div class="box-combobox"> 
        <form method="post" action="">
            <label for="month">Choose Month:</label>
            <select name="month" id="month">
                <?php 
                    $selectedMonth = date('');
                    $months = [
                        '--SELECT MONTHS--','January', 'February', 'March', 'April', 'May', 'June', 
                        'July', 'August', 'September', 'October', 'November', 'December'
                    ];
                    
                    foreach ($months as $month) {
                        echo "<option value=\"$month\"";
                        echo ($selectedMonth == $month) ? ' selected' : '';
                        echo ">$month</option>";
                    }
                ?>
            </select>

            <button type="submit" name="selectmonth">Submit</button>
        </form>
    </div>

<?php
require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if (isset($_POST['selectmonth'])) {
    $selectedMonth = $_POST['month'];

    $monthDates = [
        "January" => ["start" => "2024-01-01", "end" => "2024-01-31"],
        "February" => ["start" => "2024-02-01", "end" => "2024-02-28"],
        "March" => ["start" => "2024-03-01", "end" => "2024-03-31"],
        "April" => ["start" => "2024-04-01", "end" => "2024-04-30"],
        "May" => ["start" => "2024-05-01", "end" => "2024-05-31"],
        "June" => ["start" => "2024-06-01", "end" => "2024-06-30"],
        "July" => ["start" => "2024-07-01", "end" => "2024-07-31"],
        "August" => ["start" => "2024-08-01", "end" => "2024-08-31"],
        "September" => ["start" => "2024-09-01", "end" => "2024-09-30"],
        "October" => ["start" => "2024-10-01", "end" => "2024-10-31"],
        "November" => ["start" => "2024-11-01", "end" => "2024-11-30"],
        "December" => ["start" => "2024-12-01", "end" => "2024-12-31"]
    ];

    if (!array_key_exists($selectedMonth, $monthDates)) {
        echo "<p>Please select a valid month.</p>";
    } else {
        $startDate = $monthDates[$selectedMonth]["start"];
        $endDate = $monthDates[$selectedMonth]["end"];

        include 'connection/connection.php';

        try {
            $sql = "
                SELECT 
                    place_expo,
                    SUM(CASE WHEN Sex = 'Male' THEN 1 ELSE 0 END) AS male,
                    SUM(CASE WHEN Sex = 'Female' THEN 1 ELSE 0 END) AS female,
                    SUM(CASE WHEN Age < 15 THEN 1 ELSE 0 END) AS age_lt_15,
                    SUM(CASE WHEN Age > 15 THEN 1 ELSE 0 END) AS age_gt_15,
                    SUM(CASE WHEN source_expo = 'Dog' THEN 1 ELSE 0 END) AS dog,
                    SUM(CASE WHEN source_expo = 'Stray Dog' THEN 1 ELSE 0 END) AS stray_dog,
                    SUM(CASE WHEN source_expo = 'Cat' THEN 1 ELSE 0 END) AS cat,
                    SUM(CASE WHEN source_expo = 'Stray Cat' THEN 1 ELSE 0 END) AS stray_cat,
                    SUM(CASE WHEN source_expo = 'Others' THEN 1 ELSE 0 END) AS others,
                    SUM(CASE WHEN cat_expo = 'I' THEN 1 ELSE 0 END) AS cat_i,
                    SUM(CASE WHEN cat_expo = 'II' THEN 1 ELSE 0 END) AS cat_ii,
                    SUM(CASE WHEN cat_expo = 'III' THEN 1 ELSE 0 END) AS cat_iii,
                    SUM(CASE WHEN cat_expo = 'N/C' THEN 1 ELSE 0 END) AS nc,
                    SUM(CASE WHEN post_expo = 'TCV' THEN 1 ELSE 0 END) AS tcv,
                    SUM(CASE WHEN post_expo = 'HRIG' THEN 1 ELSE 0 END) AS hrig,
                    SUM(CASE WHEN post_expo = 'ERIG' THEN 1 ELSE 0 END) AS erig
                FROM 
                    patient_records
                INNER JOIN 
                    patient_details ON patient_records.patient_detID = patient_details.patient_detID
                WHERE 
                    CAST(date_expo AS DATE) BETWEEN ? AND ?
                GROUP BY 
                    place_expo;
            ";

            $stmt = $conn->prepare($sql);
            $stmt->execute([$startDate, $endDate]);

            $totals = array_fill_keys(
                ['male', 'female', 'age_lt_15', 'age_gt_15', 'dog', 'stray_dog', 'cat', 'stray_cat', 'others', 'cat_i', 'cat_ii', 'cat_iii', 'nc', 'tcv', 'hrig', 'erig'],
                0
            );

            echo "<h2>Report for $selectedMonth</h2>";
            echo "<table>";
            echo "<tr>
                    <th>Province/Area</th>
                    <th>Male</th>
                    <th>Female</th>
                    <th>Age &lt; 15</th>
                    <th>Age &gt; 15</th>
                    <th>Dog</th>
                    <th>Stray Dog</th>
                    <th>Cat</th>
                    <th>Stray Cat</th>
                    <th>Others</th>
                    <th>Cat I</th>
                    <th>Cat II</th>
                    <th>Cat III</th>
                    <th>N/C</th>
                    <th>TCV</th>
                    <th>HRIG</th>
                    <th>ERIG</th>
                </tr>";

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>{$row['place_expo']}</td>";
                foreach ($totals as $key => $value) {
                    echo "<td>{$row[$key]}</td>";
                    $totals[$key] += $row[$key];
                }
                echo "</tr>";
            }

            echo "<tr><td>Total</td>";
            foreach ($totals as $total) {
                echo "<td>$total</td>";
            }
            echo "</tr>";

            echo "</table>";

            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();

            $columnHeaders = ['Province/Area', 'Male', 'Female', 'Age < 15', 'Age > 15', 'Dog', 'Stray Dog', 'Cat', 'Stray Cat', 'Others', 'Cat I', 'Cat II', 'Cat III', 'N/C', 'TCV', 'HRIG', 'ERIG'];
            $columnIndex = 1;
            foreach ($columnHeaders as $header) {
                $sheet->setCellValueByColumnAndRow($columnIndex++, 1, $header);
            }

            $rowIndex = 2;
            $stmt->execute([$startDate, $endDate]);
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $columnIndex = 1;
                foreach ($row as $value) {
                    $sheet->setCellValueByColumnAndRow($columnIndex++, $rowIndex, $value);
                }
                $rowIndex++;
            }

            $filename = 'report_' . $selectedMonth . '.xlsx';
            $writer = new Xlsx($spreadsheet);
            $writer->save($filename);
            echo "<a id='dlbtn' href='$filename' download>Download Excel</a>";

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }   
    }
}
?>
</div>
