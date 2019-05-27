<!DOCTYPE html>
<html lang="ja">
	<head>
		<link rel="icon" type="image/png" href="../img/favicon.png" sizes="32x32">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>第30回七夕祭 第2回総会書類提出システム</title>
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
			function finish(){
				document.cookie="groupname=0; max-age=0";
				document.cookie="shokuhin=0; max-age=0";
				document.cookie="doui=0; max-age=0";
				document.cookie="alldone=true; max-age=2592000";
				location.href=location.href;
			}
			function restart(){
				document.cookie="form0201=true; max-age=0";
				document.cookie="form0202=true; max-age=0";
				document.cookie="form0203=true; max-age=0";
				document.cookie="form0204=true; max-age=0";
				document.cookie="groupname=true; max-age=0";
				document.cookie="groupno=true; max-age=0";
				location.href=location.href;
			}
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
			<A class="menuelem" href="http://tanabata.sfc.keio.ac.jp/announce.html"><span class="lsf">&#xE034;</span>注意事項</A>
			<A class="menuelem" href="http://tanabata.sfc.keio.ac.jp/booth/"><span class="lsf">&#xE073;</span>企画紹介</A>
			<A class="menuelem" href="http://tanabata.sfc.keio.ac.jp/tmu/"><span class="lsf">&#xE13e;</span>実行委員の活動</A>
			<A class="menuelem" href="http://tanabata.sfc.keio.ac.jp/form/"><span class="lsf">&#xE05c;</span>参加団体の方</A>
			<A class="menuelem" href="http://tanabata.sfc.keio.ac.jp/kyousan.html"><span class="lsf">&#xE014;</span>ご協賛のお願い</A>
			<A class="menuelem" href="http://tanabata.sfc.keio.ac.jp/contact.html"><span class="lsf">&#xE08a;</span>お問い合わせ</A>

		</DIV>
		<!-- END OF HEADER -->

		<P><A HREF="http://tanabata.sfc.keio.ac.jp/form/">参加団体の方へ</A> > <A HREF="http://tanabata.sfc.keio.ac.jp/form/form_top.php">第30回七夕祭 企画参加申込システム</A> > <B>第30回七夕祭 第2回総会書類提出システム</B></P>
		<H1>第30回七夕祭 第2回総会書類提出システム</H1>
		<div>
			<ul>
				<li>七夕祭への参加は第2回総会への参加が必要です。参加ができない場合実行委員会までご連絡ください。</li>
			</ul>
				<hr>
			<div>
				<div>1. <A HREF="form_02_01.php">各種申請書提出</A><?php
				if(isset($_COOKIE["form0201"])){print(" - 提出済");}
				?></div>
				<div>2. <A HREF="form_02_02.php">身分証明書データ提出</A><?php
				if(isset($_COOKIE["form0202"])){print(" - 提出済");}
				?></div>
				<div>3. <A HREF="form_02_03.php">パンフレット掲載用紹介文・アイコン画像提出</A><?php
				if(isset($_COOKIE["form0203"])){print(" - 提出済");}
				?></div>
				<div>4. <A HREF="form_02_04.php">振込完了報告</A><?php
				if(isset($_COOKIE["form0204"])){print(" - 提出済");}
				?></div>
				<?php
					if(isset($_COOKIE["form0201"]) && isset($_COOKIE["form0202"]) && isset($_COOKIE["form0203"]) &&isset($_COOKIE["form0204"])){
						print('<HR><div>全項目の入力が完了しています。<A href="javascript:restart()">別の団体として再度登録を行う</A></div>');
					}
					
				?>
				<!--
				<?php
					if(isset($_COOKIE["groupname"])){
						print($_COOKIE["groupname"].'様</div><div>');
						if(isset($_COOKIE["doui"])){
							print('1. 企画参加申込書の記入 - 入力完了 <A href="form1.php?re">修正</A></div><div>2. 同意書の記入 - 入力完了</div><div>3. <A HREF="form_food.php">食品販売調査書の提出</A> (食品販売を行う団体のみ)</div><div style="margin-top:0.8em;"><A href="javascript:finish()">食品を扱う団体ではないので申込を完了する</A></div><div style="margin-top:0.8em;">食品調査書は後日の提出も可能です。後日の提出を予定されている方は、申込完了を押さないでください。');
						}else{
							print('1. 企画参加申込書の記入 - 入力完了 <A href="form1.php?re">修正</A></div><div>2. <a href="form3.php"><B>同意書の記入</B></a></div><div>3. 食品販売調査書の提出 (食品販売を行う団体のみ)</div><div style="margin-top:0.8em;color:#ff0000;font-weight:bold;">まだ申し込み手続は完了していません。同意書の提出をもって手続完了となります。');
						
						}
					}else if(isset($_COOKIE["alldone"])){
							print('1. 企画参加申込書の記入 - 入力完了</div><div>2. 同意書の記入 - 入力完了</div><div>3. 食品販売調査書の提出 (食品販売を行う団体のみ) - 入力完了</div><div style="margin-top:0.8em;">全項目の入力が完了しています。<A href="javascript:restart()">別の団体として再度登録を行う</A></div><hr><div>情報を既に登録済みの方で修正を希望される場合は<A HREF="form1.php?re">こちら</A></div><div><A href="../">第30回七夕祭 トップページ</A>');
					}else{
						print('1. <a href="form1.php">企画参加申込書の記入</a></div><div>2. 同意書の記入</div><div>3. 食品販売調査書の提出</div><hr><div>情報を既に登録済みの方で修正を希望される場合は<A HREF="form1.php?re">こちら</A></div><div>情報を既に登録済みの方で食品販売調査書の提出を希望される場合は<A HREF="form_food.php?re">こちら</A>');
					}
					print("</div>")
				?>
				-->
			</div>
		</div>
	</body>
</html>
