<?php
session_start();
$psd = $_SESSION["psd"];
?>
<div>
    <h1 class="pt-5">La tua password è:
        <?php echo $psd ?>
    </h1>
</div>
<?php
?>

<a href="logout.php">torna alla index </a>