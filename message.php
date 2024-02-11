<?php 
    if(isset($_GET['update'])){
        ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Succesfully Updated',
                    showConfirmButton: false,
                    timer: 2000
                })
            </script>
        <?php
    }
?>

<?php 
    if(isset($_GET['insert'])){
        ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Succesfully Inserted',
                    showConfirmButton: false,
                    timer: 2000
                })
            </script>
        <?php
    }
?>

<?php 
    if(isset($_GET['insertap'])){
        ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Succesfully Inserted',
                    showConfirmButton: false,
                    timer: 2000
                });

                setTimeout(function() {
                    window.location.href = "menu.php#Appointment";
                }, 1000);
            </script>
        <?php
    }
?>

<?php 
    if(isset($_GET['delete'])){
        ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Succesfully Deleted',
                    showConfirmButton: false,
                    timer: 2000
                })
            </script>
        <?php
    }
?>

<?php
 if(isset($_GET['taken'])){
    ?>
        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Username Already Taken',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    <?php
 }
 ?>

 <?php
 if(isset($_GET['msg'])){
    ?>
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    <?php
 }
 ?>
                    
                    