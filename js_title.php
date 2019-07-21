<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>
	<!--ｊｓとPHPで表示するので記述なし-->
	</title>
</head>
<!--onload時に関数を実行-->
<body>	

	<form action="" method ="post">
		<input type = "text" name="txt" value="<?php echo $_POST["txt"];?>">
		<input type ="submit" value="送信">
	</form>
	
	<?php 
	//$title = "test1234567890dbから取得でもok"; 
	$title = $_POST["txt"]; 
	?>
	
	<script>
	//phpからの変数を取得
	 var php_title = <?php echo json_encode($title);?>;
	 console.log(php_title);
	//ロード時に関数を実行 
	 window.onload = function () {
		title_start();
	 }
	 function title_start(){
		 if(php_title===null){
		 document.title = '初期test';
		 }else{
		 document.title = php_title;
		 }
	  };
	</script>	

</body>
</html>