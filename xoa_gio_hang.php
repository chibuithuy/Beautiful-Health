<?php require_once(__DIR__ . '/autoload/autoload.php'); ?>
<?php
    $id = intval(isset($_GET['id']) ? $_GET['id'] : '');

    unset($_SESSION['gio_hang'][$id]);

    echo "
        <script type='text/javascript'>
            window.location.href='./gio_hang.php';
        </script>
    ";
?>