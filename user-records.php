<?php
    include "Admin/connection/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./user-css/user-records.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <title>Document</title>
</head>
<body>
    <?php include 'navbar.php' ?>
    <?php include 'userphp/showrecords.php' ?>
    <main>
        <div class="box-content">
        <i class="fa-solid fa-circle-xmark" id="close-mark"></i>
            <?php
                if($rows){
                    foreach($rows as $row){
            ?>
            <form action="" method="post">
                <div class="form-label">
                    <label for="e-date">Date of Exposure</label>
                    <input type="date" value="<?php echo $row['date_expo'] ?>" disabled>
                </div>
                
                <div class="form-label">
                    <label for="">Place of Exposure</label>
                    <input type="text" value="<?php echo $row['place_expo'] ?>" disabled>
                </div>

                <div class="form-label">
                    <label for="">Type of Exposure</label>
                    <input type="text" name="t-expo" value="<?= $row['type_expo'] ?>" disabled>
                </div>

                <div class="form-label">
                    <label for="s-expo">Source of Exposure</label>
                    <input type="text" name="" value="<?= $row['source_expo'] ?>" disabled>
                </div>

                <div class="form-label">
                    <label for="c-expo">Category of Exposure</label>
                    <input type="text" name="" value="<?= $row['cat_expo'] ?>" disabled>
                </div>

                <div class="form-label">
                    <label for="post-expo">Post Exposure Prophylaxis</label>
                    <input type="text" name="post-expo" value="<?= $row['post_expo'] ?>" disabled>
                </div>

                <div class="form-label">
                    <label for="washing-bite">Washing of Bite Wound</label>
                    <input type="text" name="" value="<?= $row['washing_bite'] ?>" disabled>
                </div>

                <div class="form-label">
                    <label for="d-rig">Date RIG Given</label>
                    <input type="date" value="<?= $row['date_rig'] ?>" disabled>
                </div>

                <h2>Anti-Rabies Vaccine</h2>
                    
                <div class="form-label">
                    <label for="generic-name">Generic Name</label>
                    <input type="text" name="" value="<?= $row['gen_name'] ?>" disabled>
                </div>
            
                <div class="form-label">
                    <label for="brand-name">Brand Name</label>
                    <input type="text" name="" value="<?= $row['brand_name'] ?>" disabled>
                </div>

                <div class="form-label">
                    <label for="route">Route</label>
                    <input type="text" name="" value="<?= $row['route'] ?>" disabled>
                </div>

                <div class="form-label">                      
                    <label for="d-3">Day 3</label>
                    <input type="text" name="" value="<?= $row['day3'] ?>" disabled>
                </div>

                <div class="form-label">
                    <label for="d-7">Day 7</label>
                    <input type="text" name="" value="<?= $row['day7'] ?>" disabled>
                </div>

                <div class="form-label">        
                    <label for="d-14">Day 14 (IM)</label>
                    <input type="text" name="" value="<?= $row['day14_IM'] ?>" disabled>
                </div>

                <div class="form-label">
                    <label for="d-28"><span>*</span>Day 28/30<span>*</span></label>
                    <input type="text" name="" value="<?= $row['day28_30'] ?>" disabled>
                    <p><span>*</span>Proceed with day 28/30 if dog is not alive after 14 days of observation</p>
                </div>
                  
                <div class="form-label">
                    <label for="staus-animal">Status Animal after D14 of Exposure</label>
                    <input type="text" name="" value="<?= $row['Status'] ?>" disabled>
                </div>

                <div class="form-label">
                    <label for="remarks">Remarks</label>
                    <textarea name="remarks" id="" cols="40" rows="3" disabled><?= $row['remark']?></textarea>
                </div>

                <div class="form-label">   
                    <label for="doc">Doctor</label>
                    <input type="text" name="" value="<?= $row['Doctor'] ?>" disabled>
                </div>
            </form>
            <?php } }?>
        </div>
    </main> 
    <script>
        const close = document.querySelector('#close-mark');

        close.addEventListener('click', () => {
            window.location.href="Menu.php#Records";
        })
    </script>   
</body>
</html>