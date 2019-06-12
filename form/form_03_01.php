<!DOCTYPE html>
<html lang="ja">
	<head>
		<link rel="icon" type="image/png" href="https://tanabata.sfc.keio.ac.jp/img/favicon.png" sizes="32x32">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>第30回七夕祭 振込完了報告提出フォーム</title>
		<script type="text/javascript">
			var menuclosed=true;
			window.onload=function(){
				document.getElementById("hidden_bihin").innerHTML=document.getElementById("bihin").innerHTML.replace(/name/g,"class");
				document.getElementById("hidden_gas").innerHTML=document.getElementById("gas").innerHTML.replace(/name/g,"class");;
			}
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
			
			function show(b){
				document.getElementById("select_top").style.display="none";
				if(b=="both"){
					document.getElementById("bihin").style.transform="scale(1,1)";
					document.getElementById("gas").style.top="calc("+document.getElementById("hidden_bihin").getBoundingClientRect().height+"px + 1.1em)";
					document.getElementById("gas").style.transform="scale(1,1)";
					document.getElementById("shubetsuparent").style.height="calc("+(document.getElementById("hidden_gas").getBoundingClientRect().height+document.getElementById("hidden_bihin").getBoundingClientRect().height)+"px + 2.2em)";
				}else if(b!=""){
					var o=document.getElementsByClassName("shubetsu");
					document.getElementById("shubetsuparent").style.height=0;
					for(var i in o){
						if(o[i].style!=undefined){
							o[i].style.transform="scale(1,0)";
							o[i].style.top=0;
						}
					}
					document.getElementById(b).style.transform="scale(1,1)";
					document.getElementById("shubetsuparent").style.height="calc("+document.getElementById("hidden_"+b).getBoundingClientRect().height+"px + 1.1em)";
				}else{
					var o=document.getElementsByClassName("shubetsu");
					document.getElementById("shubetsuparent").style.height=0;
					for(var i in o){
						if(o[i].style!=undefined){
							o[i].style.transform="scale(1,0)";
							o[i].style.top=0;
						}
					}
				}
			}
			var bihincount=1;
			function addbihin(){
				bihincount++;
				var o=document.getElementById("bihin");
				var tmp_v=[];
				var b=document.getElementsByClassName("kyobi");
				for(var i in b){
					if(b[i].style!=undefined){
						tmp_v[i]=b[i].value;
					}else{
						tmp_v.push("");
					}
				}
				o.innerHTML+='<DIV class="danraku">('+bihincount+'個目)　備品名<INPUT name="kyoubi_bihin'+bihincount+'[]" style="width: 40%;" class="kyobi">&nbsp;<INPUT name="kyoubi_kosuu'+bihincount+'[]" type="number" style="width: 3.0em;" class="kyobi">個&nbsp;<INPUT name="kyoubi_kingaku'+bihincount+'[]" type="number" style="width: 5.0em;" class="kyobi">円　<button onclick="addbihin()" type="button">+</button></DIV>';
				document.getElementById("hidden_bihin").innerHTML=document.getElementById("bihin").innerHTML.replace(/name/g,"class");
				show(document.getElementById("sel").value);
				for(var i in b){
					if(b[i].style!=undefined){
						if(tmp_v[i]!=undefined){
							b[i].value=tmp_v[i];
						}
					}
				}
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
				src: url('https://tanabata.sfc.keio.ac.jp/fonts/LigatureSymbols-2.11.eot');
				src: url('https://tanabata.sfc.keio.ac.jp/fonts/LigatureSymbols-2.11.eot?#iefix') format('embedded-opentype'),
						 url('https://tanabata.sfc.keio.ac.jp/fonts/LigatureSymbols-2.11.woff') format('woff'),
						 url('https://tanabata.sfc.keio.ac.jp/fonts/LigatureSymbols-2.11.ttf') format('truetype'),
						 url('https://tanabata.sfc.keio.ac.jp/fonts/LigatureSymbols-2.11.svg#LigatureSymbols') format('svg');
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
			#shubetsuparent{
				position:relative;
				transition:300ms all 0s ease;
				height:0;
			}
			.shubetsu{
				transform-origin: top center;
				transform:scale(1,0);
				transition:300ms all 0s ease;
				position:absolute;
				top:0;
				left:0;
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
			.hidden{
				z-index:-999;
				position:absolute;
				top:0;
				left:50%;
				opacity:0;
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
			<A class="menuelem" href="https://tanabata.sfc.keio.ac.jp/"><span class="lsf">&#xE072;</span>TOP</A>
			<A class="menuelem" href="https://tanabata.sfc.keio.ac.jp/about.html"><span class="lsf">&#xE08d;</span>七夕祭について</A>
			<A class="menuelem" href="https://tanabata.sfc.keio.ac.jp/access.html"><span class="lsf">&#xE103;</span>アクセス</A>
			<A class="menuelem" href="https://tanabata.sfc.keio.ac.jp/announce.html"><span class="lsf">&#xE034;</span>注意事項</A>
			<A class="menuelem" href="https://tanabata.sfc.keio.ac.jp/booth/"><span class="lsf">&#xE073;</span>企画紹介</A>
			<A class="menuelem" href="https://tanabata.sfc.keio.ac.jp/tmu/"><span class="lsf">&#xE13e;</span>実行委員の活動</A>
			<A class="menuelem" href="https://tanabata.sfc.keio.ac.jp/form/"><span class="lsf">&#xE05c;</span>参加団体の方</A>
			<A class="menuelem" href="https://tanabata.sfc.keio.ac.jp/kyousan.html"><span class="lsf">&#xE014;</span>ご協賛のお願い</A>
			<A class="menuelem" href="https://tanabata.sfc.keio.ac.jp/contact.html"><span class="lsf">&#xE08a;</span>お問い合わせ</A>

		</DIV>
		<!-- END OF HEADER -->

		<H1>第30回七夕祭 振込完了報告提出フォーム</H1>
		<form action="post.php" method="post" enctype="multipart/form-data" name="consentform" onsubmit="return check()">
		<INPUT style="display: none;" name="formtype[]" value="form0301">
		<div>
			<!--<DIV class="description">
				<IMG src="img/furikomi_chuui01.png"><BR>
				<IMG src="img/furikomi_chuui02.png"><BR>
				<IMG src="img/furikomi_chuui03.png"><BR>
			</DIV>
			-->
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
					<INPUT name="kingaku[]" type="number" style="width: calc(100% - 3.0em);">円
				</DIV>
				<DIV class="smallsection">
					<SMALLSECTION-TITLE>振込日時 <small style="color: #ff0000;">[必須]</small></SMALLSECTION-TITLE>
					<INPUT name="jikan[]" type="datetime-local" value="2019-06-13T12:10">※正確な時間を記入してください。
				</DIV>
			</DIV>
			<DIV class="bigsection">
				<SMALLSECTION-TITLE>振込種別 <small style="color: #ff0000;">[必須]</small></SMALLSECTION-TITLE>
				<SELECT onchange="show(this.value)" id="sel">
					<OPTION value="" id="select_top">===選択してください===</OPTION>
					<OPTION value="bihin">生協備品</OPTION>
					<OPTION value="gas">ガス代</OPTION>
					<OPTION value="both">両方</OPTION>
				</SELECT>
			</DIV>
			<DIV id="shubetsuparent">
				<DIV class="bigsection shubetsu" id="bihin">
					<SMALLSECTION-TITLE>生協備品</SMALLSECTION-TITLE>
					<DIV class="danraku">(1個目)　備品名<INPUT name="kyoubi_bihin01[]" style="width: 40%;" class="kyobi">&nbsp;<INPUT name="kyoubi_kosuu01[]" type="number" style="width: 3.0em;" class="kyobi">個&nbsp;<INPUT name="kyoubi_kingaku01[]" type="number" style="width: 5.0em;" class="kyobi">円　<button onclick="addbihin()" type="button">+</button></DIV>
				</DIV>
				<DIV class="bigsection shubetsu" id="gas">
					<SMALLSECTION-TITLE>ガス代</SMALLSECTION-TITLE>
					<INPUT name="gas[]" type="number" style="width: calc(100% - 3.0em);">円
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
		<DIV id="hidden_bihin" class="hidden bigsection"></DIV>
		<DIV id="hidden_gas" class="hidden bigsection"></DIV>
		</DIV>
	</body>
</html>
