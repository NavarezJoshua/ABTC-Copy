<i class="fa-solid fa-users"></i>
    <?php
        if(!empty($user_acc)){
    ?>
    <h2><?php echo $user_acc['User_Counts'] ?></h2>
    <?php }  else {
        0;
    }?>
<p>Total User Accounts</p>