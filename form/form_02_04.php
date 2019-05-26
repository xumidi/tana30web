<!DOCTYPE html>
<html lang="ja">
	<head>
		<link rel="icon" type="image/png" href="http://tanabata.sfc.keio.ac.jp/img/favicon.png" sizes="32x32">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>第30回七夕祭 振込完了報告提出フォーム</title>
		<script type="text/javascript">
			var menuclosed=true;
			var ln=[function(){location.href="../"},function(){window.scrollTo(0,0);location.hash="#"}];
			function openclosemenu(){
				if(menuclosed){
					document.getElementById("sidemenu").style.left="0";
					document.getElementById("headmenubutton").classList.add('sidemenuclosebutton');
					menuclosed=false;
				}else{
					document.getElementById("sidemenu").style.left="100%";
					document.getElementById("headmenubutton").classList.remove('sidemenuclosebutton');
					menuclosed=true;
				}
			}
			function check(){
				if(document.getElementsByName("groupname[]")[0].value!="" && document.getElementsByName("groupno[]")[0].value!="" && document.getElementsByName("kouzameigi[]")[0].value!="" && document.getElementsByName("kingaku[]")[0].value!="" && document.getElementsByName("jikan[]")[0].value!=""){
					window.removeEventListener('beforeunload', unloaded, false);
					return true;
				}else{
					alert("入力内容に不備があります。もう一度ご確認ください。");
					return false;
				}
			}
			var unloaded = function (e) {
				var confirmMessage = '変更は保存されていません。ページを離脱しますか？';
				e.returnValue = confirmMessage;
				return confirmMessage;
			};
			// beforeunloadイベントの登録
			window.addEventListener('beforeunload', unloaded, false);
		</script>
		<STYLE type="text/css">
			html,body{
				font-family: sans-serif;
			}
			*, *:before, *:after {
				box-sizing: border-box;
			}
			@font-face {
				font-family: 'LigatureSymbols';
				src: url('http://tanabata.sfc.keio.ac.jp/fonts/LigatureSymbols-2.11.eot');
				src: url('http://tanabata.sfc.keio.ac.jp/fonts/LigatureSymbols-2.11.eot?#iefix') format('embedded-opentype'),
						 url('http://tanabata.sfc.keio.ac.jp/fonts/LigatureSymbols-2.11.woff') format('woff'),
						 url('http://tanabata.sfc.keio.ac.jp/fonts/LigatureSymbols-2.11.ttf') format('truetype'),
						 url('http://tanabata.sfc.keio.ac.jp/fonts/LigatureSymbols-2.11.svg#LigatureSymbols') format('svg');
				font-weight: normal;
				font-style: normal;
			}
			.lsf {
				font-family: 'LigatureSymbols';
				-webkit-text-rendering: optimizeLegibility;
				-moz-text-rendering: optimizeLegibility;
				-ms-text-rendering: optimizeLegibility;
				-o-text-rendering: optimizeLegibility;
				text-rendering: optimizeLegibility;
				-webkit-font-smoothing: antialiased;
				-moz-font-smoothing: antialiased;
				-ms-font-smoothing: antialiased;
				-o-font-smoothing: antialiased;
				font-smoothing: antialiased;
				-webkit-font-feature-settings: "liga" 1, "dlig" 1;
				-moz-font-feature-settings: "liga=1, dlig=1";
				-ms-font-feature-settings: "liga" 1, "dlig" 1;
				-o-font-feature-settings: "liga" 1, "dlig" 1;
				font-feature-settings: "liga" 1, "dlig" 1;
				margin-right:0.5em;
				font-size:1.3em;
			}

			body{
				margin-top:3.5em;
				background-color:#eeeeee;
			}
			a:link{color: #0000FF;}
			a:visited{color: #0000FF;}
			a:hover{
				color: #FF0000;
				text-decoration:none;
			}
			.main{
				padding:1.0em;
				padding-top:0.3em;
				width:1000px;
				background-color:#ffffff;
				margin:0 auto;
			}
			
			@media screen and (max-width: 1000px){
				.main{
					width:98%;
				}
			
			}			form{
				width: 100%;
			}
			.applicationform{
			 	margin-bottom: 1.3em;
			 	display: block;
			 	width:40%;
			}
			.titles, .namesanddays{
				color: #004b00;
			}
			.spbr{
				display:none;
			}
			.thumbnail img{
				width:30%;
			}

			/* HEADER */
			#header{
				display: block;
				margin:0;
				background-color:rgba(60,168,161, 0.8);
				width:100%;
				position:fixed;
				top:0;left:0;
				z-index:999;
				text-align:center;
				padding:0em;
				transition: all 300ms 0s ease;
				overflow:hidden;
				height:3.5em !important;
			}
			#header a{
				display:inline-block;
				padding:1.0em;
			}
			#header img{
				height:1.5em;
			}
			#headmenubutton{
				position:absolute;
				top:0;right:0;
				height:100%;
				padding:1.0em;
				cursor:pointer;
				overflow:hidden;
			}
			#headmenubutton div{
				background-color:#ffffff;
				height:2px;
				width:1.6em;
				margin-bottom:0.5em;
				transition: all 240ms 0s ease;
			}
			.sidemenuclosebutton div:nth-child(1){
				transform:rotate(-45deg) translate(-9px,5px);
			}
			.sidemenuclosebutton div:nth-child(2){
				opacity:0;
			}
			.sidemenuclosebutton div:nth-child(3){
				transform:rotate(45deg) translate(-9px,-5px);
			}

			#sidemenu{
				width:100%;
				height:100%;
				position:fixed;
				left:100%;
				top:0;
				padding:3.5em;
				background-color:rgba(0,0,0, 0.8);
				transition: all 240ms 0s ease;
				z-index:998;
				text-align:center;
				overflow:auto;
			}
			#sidemenu a{
				display:block;
				margin:1.5em;
				color:#ffffff !important;
				padding:1.5em;
				background-color:rgba(140, 140, 140, 0.8);
				text-decoration:none;
				cursor:pointer;
				transition: all 300ms 0s ease;
				z-index:500;
			}
			#sidemenu a:hover{
				background-color:rgba(99,199,193, 1) !important;
			}

			@media screen and (max-width: 768px){
				.spbr{
					display: inline;
				}
				#header{
					padding:0 !important;
					height: 3.5em;
				}
				#header a{
					padding:auto !important;
				}
				#header img{
					width:60%;
					height:auto !important;
				}
				#sidemenu{
					padding-left:1em !important;
					padding-right:1em !important;
				}
				.bigsection{
					width:100% !important;
				}
				
				div.description img{
					margin-bottom:1.3em;
					width:100% !important;
				}
			}
			.bigsection{
				background-color:#ededed;
				border-radius:10px;
				padding:0.7em;
				margin-bottom:1.3em;
				width:700px;
			}
			.bigsection input, textarea, select{
				font-size:1.1em;
			}

			.bigsection input:not([type="checkbox"]):not([type="radio"]):not([type="datetime-local"]){
				width:100%;
			}
			select{
				cursor:pointer;
			}
			.smallsection{
				padding:0.4em;
			}
			bigsection-title,th{
				font-weight:bold;
				font-size:1.1em;
				color:#28524b;
			}
			bigsection-title,smallsection-title{
				display:block;
			}
			div.description{
				margin-bottom:1.3em;
			}
			div.description img{
				margin-bottom:1.3em;
				width:60%;
			}
			label{
				margin-right:1.0em;
				cursor:pointer;
			}
			td label:last-child{
				margin-right:0.2em;
			}
			table{
    			border-collapse: collapse;
    			background-color:#ffffff;
    			width:100em;
			}
			tr{
				transition: 150ms all 0s ease;
			}
			td,th{
				border: solid 1px #7d7d7d;
				padding:0.6em;
				transition: 150ms all 0s ease;
			}
			tr td:nth-child(1){
				width:20em;
			}
			td.cnt{
				text-align:center;
			}
			td .flextd{
				display:flex;
			}
			td .flextd div input{
				width:75% !important;
			}
			td.top{
				border-bottom:none;
			}
			td.mid{
				border-top:none;
				border-bottom:none;
			}
			td.bot{
				border-top:none;
			}
			tr:hover{
				background-color:#d6ece6;
			}
		</STYLE>
	</head>
	<body>
	<DIV class="main">
		<!-- HEADER -->
		<DIV id="header">
			<A HREF="../"><IMG src="../img/title.png" alt="慶應義塾大学七夕祭"></A>
			<DIV id="headmenubutton" onclick="openclosemenu()">
				<DIV></DIV>
				<DIV></DIV>
				<DIV></DIV>
			</DIV>
		</DIV>
		<DIV id="sidemenu" onclick="openclosemenu()">
			<A class="menuelem" href="http://tanabata.sfc.keio.ac.jp/"><span class="lsf">&#xE072;</span>TOP</A>
			<A class="menuelem" href="http://tanabata.sfc.keio.ac.jp/about.html"><span class="lsf">&#xE08d;</span>七夕祭について</A>
			<A class="menuelem" href="http://tanabata.sfc.keio.ac.jp/access.html"><span class="lsf">&#xE103;</span>アクセス</A>
			<A class="menuelem" href="http://tanabata.sfc.keio.ac.jp/announce.html"><span class="lsf">&#xE097;</span>注意事項</A>
			<A class="menuelem" href="http://tanabata.sfc.keio.ac.jp/tmu/"><span class="lsf">&#xE13e;</span>実行委員の活動</A>
			<A class="menuelem" href="http://tanabata.sfc.keio.ac.jp/form/"><span class="lsf">&#xE05c;</span>参加団体の方</A>
			<A class="menuelem" href="http://tanabata.sfc.keio.ac.jp/kyousan.html"><span class="lsf">&#xE06F;</span>ご協賛のお願い</A>
			<A class="menuelem" href="http://tanabata.sfc.keio.ac.jp/contact.html"><span class="lsf">&#xE08a;</span>お問い合わせ</A>

		</DIV>
		<!-- END OF HEADER -->

		<H1>第30回七夕祭 振込完了報告提出フォーム</H1>
		<form action="post.php" method="post" enctype="multipart/form-data" name="consentform" onsubmit="return check()">
		<INPUT style="display: none;" name="formtype[]" value="form0204">
		<div>
			<DIV class="description">
				<IMG src="img/furikomi_chuui01.png"><BR>
				<IMG src="img/furikomi_chuui02.png"><BR>
				<IMG src="img/furikomi_chuui03.png"><BR>
			</DIV>
			<DIV class="bigsection">
				<DIV class="smallsection">
					<SMALLSECTION-TITLE>団体番号 <small style="color: #ff0000;">[必須]</small></SMALLSECTION-TITLE>
					<?php
						print('<INPUT name="groupno[]" value="'.$_COOKIE["groupno"].'">');
					?>
				</DIV>
				<DIV class="smallsection">
					<SMALLSECTION-TITLE>団体名 <small style="color: #ff0000;">[必須]</small></SMALLSECTION-TITLE>
					<?php
						print('<INPUT name="groupname[]" value="'.$_COOKIE["groupname"].'">');
					?>
				</DIV>
				<DIV class="smallsection">
					<SMALLSECTION-TITLE>担当者メールアドレス <small style="color: #ff0000;">[必須]</small></SMALLSECTION-TITLE>
					<INPUT name="food_tanto_mail[]" type="mail">
				</DIV>
				<DIV class="smallsection">
					<SMALLSECTION-TITLE>振込人名義 <small style="color: #ff0000;">[必須]</small></SMALLSECTION-TITLE>
					<INPUT name="kouzameigi[]">
				</DIV>
				<DIV class="smallsection">
					<SMALLSECTION-TITLE>振込金額 <small style="color: #ff0000;">[必須]</small></SMALLSECTION-TITLE>
					<INPUT name="kingaku[]" type="number">
				</DIV>
				<DIV class="smallsection">
					<SMALLSECTION-TITLE>振込日時 <small style="color: #ff0000;">[必須]</small></SMALLSECTION-TITLE>
					<INPUT name="jikan[]" type="datetime-local" value="2019-05-15T18:10">※正確な時間を記入してください。
				</DIV>
			</DIV>
			<DIV class="description">
				こちらに記入して頂いた個人情報に関しては、実行委員会が責任を持って管理いたします。ご協力ありがとうございます。
			</DIV>
			<DIV class="description">
				<BUTTON type="submit">送信</BUTTON>
			</DIV>
		</div>
		</form>
	</body>
</html>
