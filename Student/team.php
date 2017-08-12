<?php
define('TITLE', "Team | Fanklin's fine dining");
include('include/header.php');
?>

<div id="team-members" class="cf">
    <h1>Our Team at Franklin's</h1>
    <p>Small but mighty family run business of three who serve you<strong> the best food you hve ever had</strong></p>

    <hr>

    <?php
        foreach ($teamMembers as $member) {

            ?>

            <div class="member">
                <img src="img/<?php echo $member["img"]; ?>.png" alt="<?php echo $member["name"]; ?>">
                <h2><?php echo $member["name"]; ?></h2>
                <p><?php echo $member["bio"]; ?></p>
            </div><!-- member -->


            <?php
        }
    ?>
</div><!-- team-members -->

<hr>


<?php include('include/footer.php') ?>
