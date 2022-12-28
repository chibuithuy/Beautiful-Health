<?php
	session_start();

	if(isset($_SESSION['admin'])){
		unset($_SESSION['admin']);
	}
	;?>
	<script type="text/javascript">
		window.alert('Bạn đã đăng xuất thành công');
		window.location.href="index.php";
	</script>
