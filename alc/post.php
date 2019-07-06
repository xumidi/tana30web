<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>第30回七夕祭 お問い合わせ受付完了</title>
		<script type="text/javascript">
		</script>
		<STYLE type="text/css">
			html,body{
				font-family: sans-serif;
			}

			*, *:before, *:after {
				box-sizing: border-box;
			}
			body{
				font-size:1.5em;
			}
			button{
				font-size:1.1em;
			}
		</STYLE>
	</head>
	<body>
	<DIV class="main">
		<?php
			function create_file($file_name, $file_data){
				// ファイル作成
				touch( $file_name );
				file_put_contents($file_name, $file_data);
				// ファイルのパーティションの変更
				chmod( $file_name, 0666 );
			}
			$s="";
			$hyouki=$_POST["gengo"][0];
			$seinen=intval($_POST["year"][0]);
			if($hyouki=="meiji"){
				$seinen+=1868;
			}else if($hyouki=="taisho"){
				$seinen+=1911;
			}else if($hyouki=="showa"){
				$seinen+=1925;
			}else if($hyouki=="heisei"){
				$seinen+=1988;
			}else if($hyouki=="reiwa"){
				$seinen+=2018;
			}
			$gatsu=intval($_POST["month"][0]);
			$nichi=intval($_POST["day"][0]);
			if(2019-$seinen>20 or (2019-$seinen==20 and $gatsu==7 and $nichi<=6) or (2019-$seinen==20 and $gatsu<7)){
				print("成人です。<BR>");
				$seijin=true;
			}else{
				print("未成年です。<BR>");
				$seijin=false;
			}
			$fn=$seinen."_".$gatsu."_".$nichi."_".$_POST["name"][0];
			if(!$seijin){
				print("アルコールリストバンドを発行できません。");
			}else if(file_exists($fn)){
				print("重複があるためアルコールリストバンドを発行できません。");
			}else{
				print("アルコールリストバンドを発行できます。手続きを行ってください。");
				create_file($fn,"");
			}
			
		?>
		<div>
			<button onclick="location.href='https://tanabata.sfc.keio.ac.jp/alc'">戻る</button>
		</div>
	</DIV>
	</body>
</html>
