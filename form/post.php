<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>第30回七夕祭 企画参加申込</title>
		<script type="text/javascript">
			function finish(){
				document.cookie="groupname=0; max-age=0";
				document.cookie="shokuhin=0; max-age=0";
				document.cookie="doui=0; max-age=0";
				document.cookie="alldone=true; max-age=40000";
				location.href="http://tanabata.sfc.keio.ac.jp/form/index.php";
			}
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
		<H1>第30回七夕祭 企画参加申込システム</H1>
		<?php
			function create_file($file_name, $file_data){
				// ファイル作成
				touch( $file_name );
				if(file_put_contents($file_name, $file_data)===false){
					print("サーバ内部のエラーにより、記録に失敗しました。お手数ですが再度お試しください。");
				}else{
					// ファイルのパーティションの変更
					chmod( $file_name, 0666 );
				}
			}
			$s="{\n";
			foreach ($_POST as $key => $value) {
				$s.="\t\"";
				$s.=$key;
				$s.="\":[";
				foreach( $_POST[$key] as $value_){
					$s.="\"";
					$s.=$value_;
					$s.="\",";
				}
				$s.="],\n";
			}
			$s.="}";
			
			$grflps="datas/".preg_replace('/\//', '', $_POST["groupname"][0]);
			if(file_exists($grflps)){
				
			}else{
				mkdir($grflps);
			}
			
			mb_internal_encoding("utf-8");
			$headers = 'From: "'.mb_encode_mimeheader("第30回七夕祭実行委員会").'" <sfc.tanabatasai@gmail.com>;\r\nReturn-Path: sfc.tanabatasai@gmail.com';
			if($_POST["formtype"][0]=="form1"){//参加申し込み
				mb_language("Japanese");
				mb_internal_encoding("UTF-8");
				if(mb_send_mail($_POST["tanabatatanto_mail"][0],"七夕祭団体情報登録完了のお知らせ",$_POST["groupname"][0]."代表者、七夕祭担当者様。\r\n\r\n第30回七夕祭実行委員会です。\r\n「企画参加申込書」の提出を確認いたしました。\r\n\r\n続いて「同意書」への入力をよろしくお願いいたします。\r\n\r\n============================================\r\nこのメールは自動送信です。\r\nお心当たりのない方は、他の方が誤ってあなたのメールアドレスを入力した可能性があります。その場合はお手数をおかけいたしますが、下記アドレスまでご連絡ください。\r\n七夕祭実行委員会お問い合わせメーリングリスト\r\ntana30th_info@googlegroups.com\r\n============================================",$headers)){
					print("<div>参加申込書を受け付けました。<BR>七夕祭担当者様に確認のメールを送信しましたのでご確認ください。<BR>メールを受信できなかった場合や内容に変更がある場合は速やかに七夕祭実行委員までご連絡ください。</div><div><B>この段階ではまだ参加登録は確定しておりません。引き続き規約同意書に記入をお願いします。</B></div>");
					if($_POST["re"][0]!="yes"){
						setcookie('groupname',$_POST["groupname"][0],time() + 2592000);
					}
				}else{
					print("<div>送信に失敗しました。お手数ですがもう一度お試しください。</div>");
				}
			}else if($_POST["formtype"][0]=="form3"){//規約同意
				mb_language("Japanese");
				mb_internal_encoding("UTF-8");
				if(mb_send_mail($_POST["consent_tanto_mail"][0],"七夕祭申込受付完了のお知らせ",$_POST["groupname"][0]."代表者、七夕祭担当者様。\r\n\r\n第30回七夕祭実行委員会です。\r\n「規約同意書」の提出を確認いたしました。\r\n\r\n食品を扱う団体の方は続いて「食品販売調査書」ならびに「食品販売調査チェック表」への入力をよろしくお願いいたします。\r\n\r\n============================================\r\nこのメールは自動送信です。\r\nお心当たりのない方は、他の方が誤ってあなたのメールアドレスを入力した可能性があります。その場合はお手数をおかけいたしますが、下記アドレスまでご連絡ください。\r\n七夕祭実行委員会お問い合わせメーリングリスト\r\ntana30th_info@googlegroups.com\r\n============================================",$headers)){
					print("<div>規約同意書を受け付けました。これで登録は完了になります。<BR>七夕祭担当者様に確認のメールを送信しましたのでご確認ください。<BR>メールを受信できなかった場合や内容に変更がある場合は速やかに七夕祭実行委員までご連絡ください。<BR><B>食品を扱う団体の方は、引き続き「食品販売調査書」ならびに「食品販売調査チェック表」に記入をお願いします。</B></div><div>必要書類は全て提出済みですか？<BR>＊ステージ企画参加団体は別途選考ビデオの提出が必要です。総会資料をご確認ください。</div>");
					setcookie('doui','done' , time()+ 2592000);
				}else{
					print("<div>送信に失敗しました。お手数ですがもう一度お試しください。</div>");
				}
			}else if($_POST["formtype"][0]=="formfood"){//食品
			
					//元ファイル名の先頭にアップロード日時を加える
					$newfilename = "formfood_".date("YmdHis").".zip";
					//ファイルの保存先
					$upload = $grflps."/".$newfilename;
					//サイズ
					if(strtoupper(substr($_FILES['food_file']['name'],-3,3))=="ZIP"){
						//アップロードが正しく完了したかチェック
						if(move_uploaded_file($_FILES['food_file']['tmp_name'], $upload)){
							mb_language("Japanese");
							mb_internal_encoding("UTF-8");
							if(mb_send_mail($_POST["food_tanto_mail"][0],"七夕祭食品販売調査書受付完了のお知らせ",$_POST["groupname"][0]."代表者、七夕祭担当者様。\r\n第30回七夕祭実行委員会です。\r\n「食品販売調査書」ならびに「食品販売調査チェック表」の提出を確認いたしました。\r\n\r\n参加申し込みは以上となります。ありがとうございました。\r\n\r\n============================================\r\nこのメールは自動送信です。\r\nお心当たりのない方は、他の方が誤ってあなたのメールアドレスを入力した可能性があります。その場合はお手数をおかけいたしますが、下記アドレスまでご連絡ください。\r\n\r\n七夕祭実行委員会お問い合わせメーリングリスト\r\ntana30th_info@googlegroups.com\r\n============================================",$headers)){
								print("<div>食品販売調査書の提出を受け付けました。<BR>七夕祭担当者様に確認のメールを送信しましたのでご確認ください。<BR>メールを受信できなかった場合や内容に変更がある場合は速やかに七夕祭実行委員までご連絡ください。</B></div><div>＊ステージ企画参加団体は別途選考ビデオの提出が必要です。総会資料をご確認ください。</div>");
								setcookie('groupname', '', time() - 1800);
								setcookie('doui', '', time() - 1800);
								setcookie('alldone', 'true', time()+ 2592000);
							}else{
								print("<div>送信に失敗しました。お手数ですがもう一度お試しください。</div>");
							}
						}else{
							print("<div>ファイルのアップロードに失敗しました。お手数ですがもう一度お試しください。何度試しても送信できない場合は、実行委員までお知らせください。</div>");
						}
					}else{
						print("<div>アップロードできるのはZIPファイルのみです。もう一度お試しください。</div>");
					}
			}else if($_POST["formtype"][0]=="form0201"){//エクセル
			
					//元ファイル名の先頭にアップロード日時を加える
					$newfilename = "formfood_".date("YmdHis").".xlsx";
					//ファイルの保存先
					$upload = $grflps."/".$newfilename;
					//サイズ
					if(strtoupper(substr($_FILES['food_file']['name'],-4,4))=="XLSX"){
						//アップロードが正しく完了したかチェック
						if(move_uploaded_file($_FILES['food_file']['tmp_name'], $upload)){
							mb_language("Japanese");
							mb_internal_encoding("UTF-8");
							if(mb_send_mail($_POST["food_tanto_mail"][0],"各種申請書受付完了のお知らせ",$_POST["groupname"][0]."代表者、七夕祭担当者様。\r\n第30回七夕祭実行委員会です。\r\n「食品販売調査書」ならびに「食品販売調査チェック表」の提出を確認いたしました。\r\n\r\n参加申し込みは以上となります。ありがとうございました。\r\n\r\n============================================\r\nこのメールは自動送信です。\r\nお心当たりのない方は、他の方が誤ってあなたのメールアドレスを入力した可能性があります。その場合はお手数をおかけいたしますが、下記アドレスまでご連絡ください。\r\n\r\n七夕祭実行委員会お問い合わせメーリングリスト\r\ntana30th_info@googlegroups.com\r\n============================================",$headers)){
								print("<div>各種申請書の提出を受け付けました。<BR>七夕祭担当者様に確認のメールを送信しましたのでご確認ください。</div>");
								setcookie('form0201', 'true', time()+ 2592000);
								setcookie('groupno', $_POST["groupno"][0], time()+ 2592000);
								setcookie('groupname', $_POST["groupname"][0], time()+ 2592000);
							}else{
								print("<div>送信に失敗しました。お手数ですがもう一度お試しください。</div>");
							}
						}else{
							print("<div>ファイルのアップロードに失敗しました。お手数ですがもう一度お試しください。何度試しても送信できない場合は、実行委員までお知らせください。</div>");
						}
					}else{
						print("<div>アップロードできるのはXLSXファイルのみです。もう一度お試しください。</div>");
					}
			}else if($_POST["formtype"][0]=="form0202"){//身分証明書
			
					//元ファイル名の先頭にアップロード日時を加える
					$newfilename = "formfood_".date("YmdHis").".xlsx";
					//ファイルの保存先
					$upload = $grflps."/".$newfilename;
					//サイズ
					if(strtoupper(substr($_FILES['food_file']['name'],-3,3))=="PDF"){
						//アップロードが正しく完了したかチェック
						if(move_uploaded_file($_FILES['food_file']['tmp_name'], $upload)){
							mb_language("Japanese");
							mb_internal_encoding("UTF-8");
							if(mb_send_mail($_POST["food_tanto_mail"][0],"七夕祭食品販売調査書受付完了のお知らせ",$_POST["groupname"][0]."代表者、七夕祭担当者様。\r\n第30回七夕祭実行委員会です。\r\n「食品販売調査書」ならびに「食品販売調査チェック表」の提出を確認いたしました。\r\n\r\n参加申し込みは以上となります。ありがとうございました。\r\n\r\n============================================\r\nこのメールは自動送信です。\r\nお心当たりのない方は、他の方が誤ってあなたのメールアドレスを入力した可能性があります。その場合はお手数をおかけいたしますが、下記アドレスまでご連絡ください。\r\n\r\n七夕祭実行委員会お問い合わせメーリングリスト\r\ntana30th_info@googlegroups.com\r\n============================================",$headers)){
								print("<div>身分証明書の提出を受け付けました。</div>");
								setcookie('form0202', 'true', time()+ 2592000);
								setcookie('groupno', $_POST["groupno"][0], time()+ 2592000);
								setcookie('groupname', $_POST["groupname"][0], time()+ 2592000);
							}else{
								print("<div>送信に失敗しました。お手数ですがもう一度お試しください。</div>");
							}
						}else{
							print("<div>ファイルのアップロードに失敗しました。お手数ですがもう一度お試しください。何度試しても送信できない場合は、実行委員までお知らせください。</div>");
						}
					}else{
						print("<div>アップロードできるのはXLSXファイルのみです。もう一度お試しください。</div>");
					}
			}else if($_POST["formtype"][0]=="form0203"){//パンフレット掲載用紹介文・アイコン画像
			
					//元ファイル名の先頭にアップロード日時を加える
					$newfilename = "formfood_".date("YmdHis").".xlsx";
					//ファイルの保存先
					$upload = $grflps."/".$newfilename;
					//サイズ
					if(strtoupper(substr($_FILES['food_file']['name'],-3,3))=="PDF"){
						//アップロードが正しく完了したかチェック
						if(move_uploaded_file($_FILES['food_file']['tmp_name'], $upload)){
							mb_language("Japanese");
							mb_internal_encoding("UTF-8");
							if(mb_send_mail($_POST["food_tanto_mail"][0],"七夕祭食品販売調査書受付完了のお知らせ",$_POST["groupname"][0]."代表者、七夕祭担当者様。\r\n第30回七夕祭実行委員会です。\r\n「食品販売調査書」ならびに「食品販売調査チェック表」の提出を確認いたしました。\r\n\r\n参加申し込みは以上となります。ありがとうございました。\r\n\r\n============================================\r\nこのメールは自動送信です。\r\nお心当たりのない方は、他の方が誤ってあなたのメールアドレスを入力した可能性があります。その場合はお手数をおかけいたしますが、下記アドレスまでご連絡ください。\r\n\r\n七夕祭実行委員会お問い合わせメーリングリスト\r\ntana30th_info@googlegroups.com\r\n============================================",$headers)){
								print("<div>食品販売調査書の提出を受け付けました。<BR>七夕祭担当者様に確認のメールを送信しましたのでご確認ください。<BR>メールを受信できなかった場合や内容に変更がある場合は速やかに七夕祭実行委員までご連絡ください。</B></div><div>＊ステージ企画参加団体は別途選考ビデオの提出が必要です。総会資料をご確認ください。</div>");
								setcookie('groupname', '', time() - 1800);
								setcookie('doui', '', time() - 1800);
								setcookie('alldone', 'true', time()+ 2592000);
							}else{
								print("<div>送信に失敗しました。お手数ですがもう一度お試しください。</div>");
							}
						}else{
							print("<div>ファイルのアップロードに失敗しました。お手数ですがもう一度お試しください。何度試しても送信できない場合は、実行委員までお知らせください。</div>");
						}
					}else{
						print("<div>アップロードできるのはXLSXファイルのみです。もう一度お試しください。</div>");
					}
			}else if($_POST["formtype"][0]=="form0204"){//振込完了報告
				mb_language("Japanese");
				mb_internal_encoding("UTF-8");
				if(mb_send_mail($_POST["food_tanto_mail"][0],"振込完了報告受付完了のお知らせ",$_POST["groupname"][0]."代表者、七夕祭担当者様。\r\n第30回七夕祭実行委員会です。\r\n「食品販売調査書」ならびに「食品販売調査チェック表」の提出を確認いたしました。\r\n\r\n参加申し込みは以上となります。ありがとうございました。\r\n\r\n============================================\r\nこのメールは自動送信です。\r\nお心当たりのない方は、他の方が誤ってあなたのメールアドレスを入力した可能性があります。その場合はお手数をおかけいたしますが、下記アドレスまでご連絡ください。\r\n\r\n七夕祭実行委員会お問い合わせメーリングリスト\r\ntana30th_info@googlegroups.com\r\n============================================",$headers)){
					print("<div>振込完了報告の提出を受け付けました。</div>");
					setcookie('form0204', 'true', time()+ 2592000);
					setcookie('groupno', $_POST["groupno"][0], time()+ 2592000);
					setcookie('groupname', $_POST["groupname"][0], time()+ 2592000);
				}else{
					print("<div>送信に失敗しました。お手数ですがもう一度お試しください。</div>");
				}
			}

			//print($s);
			if(isset($_POST["formtype"])){
				create_file($grflps."/".$_POST["formtype"][0]."_".date("YmdHis").".json",$s);
			}
		?>
		<div>
			<button onclick="location.href='http://tanabata.sfc.keio.ac.jp/form/form_top.php'">参加申込システムトップに戻る</button>
		</div>
	</DIV>
	</body>
</html>
