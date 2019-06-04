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
			.main{
			}
			form{
				width: 100%;
			}
			
			a:link{color: #0000FF;}
			a:visited{color: #0000FF;}
			a:hover{
				color: #FF0000;
				text-decoration:none;
			}

			.applicationform{
			 	margin-bottom: 1.3em;
			 	display: block;
			 	width:40%;
			}
			.titles, .namesanddays{
				color: #004b00;
			}
			.articles{
				margin-bottom: 1.3em;
				background-color:#dfdfdf;
				border-radius: 10px;
				padding: 0.8em;
				width:40%;
				overflow-wrap : break-word;
			}
			.spbr{
				display:none;
			}
			@media screen and (max-width: 768px){
				.applicationform{
					width: 100%;
				}
				form{
					width:100%;
				}
				.articles{
					width:100%;
					padding:0.5em;
				}
				.articles{
					width:100%;
				}
				.spbr{
					display: inline;
				}
			}
			div{
				margin-bottom:1.0em;
			}
		</STYLE>
	</head>
	<body>
	<DIV class="main">
		<H1>第30回七夕祭 お問い合わせ受付完了</H1>
		<?php
			function create_file($file_name, $file_data){
				// ファイル作成
				touch( $file_name );
				file_put_contents($file_name, $file_data);
				// ファイルのパーティションの変更
				chmod( $file_name, 0666 );
			}
			$s="";
			foreach ($_POST as $key => $value) {
				$s.=$key;
				$s.=" : ";
				foreach( $_POST[$key] as $value_){
					$s.=$value_;
					$s.=",";
				}
				$s.="\n";
			}
			if($_POST["formtype"][0]=="mailform"){
				mb_language("Japanese");
				mb_internal_encoding("utf-8");
				$headers="Cc: aihara.kohei@keio.jp";
				if($_POST["mail"][0]!=""){$headers="From: ".$_POST["mail"][0].";\r\n".$headers;}
				if(mb_send_mail("tana30th_info@googlegroups.com","メールフォーム受信",$s,$headers)){
					print("<div>メールを送信しました。返信には数日を要する場合があります。</div>");
				}else{
					print("<div>送信に失敗しました。お手数ですがもう一度お試しください。</div>");
				}
			}
		?>
		<div>
			<button onclick="location.href='https://tanabata.sfc.keio.ac.jp/'">戻る</button>
		</div>
	</DIV>
	</body>
</html>
