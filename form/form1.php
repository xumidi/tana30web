<!DOCTYPE html>
<html lang="ja">
	<head>
		<link rel="icon" type="image/png" href="http://tanabata.sfc.keio.ac.jp/img/favicon.png" sizes="32x32">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>第30回七夕祭 企画参加申込フォーム</title>
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
			var el=[[],[],[],[]];
			

			window.onload=function(){
				if(location.search=="?re"){document.getElementsByName("re[]")[0].value="yes";}
				var tbl=document.getElementsByTagName("table")[0];
				var ths=tbl.getElementsByTagName("th");
				var tds=tbl.getElementsByTagName("td");
				el=[[ths[0]],[ths[1]],[ths[2]],[ths[3]]];
				for(var i=0; i<tds.length; i++){ //>
					if(tds[i].innerHTML.indexOf("mogi")!=-1){
						el[0].push(tds[i]);
						eval('tds[i].addEventListener("mouseover",function(){changecolor(0,'+(el[0].length-1)+')})');
						tds[i].addEventListener("mouseout",function(){backcolor(0)});
					}else if(tds[i].innerHTML.indexOf("classroom")!=-1){
						el[1].push(tds[i]);
						eval('tds[i].addEventListener("mouseover",function(){changecolor(1,'+(el[1].length-1)+')})');
						tds[i].addEventListener("mouseout",function(){backcolor(1)});
					}else if(tds[i].innerHTML.indexOf("outside")!=-1){
						el[2].push(tds[i]);
						eval('tds[i].addEventListener("mouseover",function(){changecolor(2,'+(el[2].length-1)+')})');
						tds[i].addEventListener("mouseout",function(){backcolor(2)});
					}else if(tds[i].innerHTML.indexOf("stage")!=-1){
						el[3].push(tds[i]);
						eval('tds[i].addEventListener("mouseover",function(){changecolor(3,'+(el[3].length-1)+')})');
						tds[i].addEventListener("mouseout",function(){backcolor(3)});
					}
				}
			}
			function changecolor(x,e){
				for(var i=0;i<el[x].length;i++){ //>
					el[x][i].style.backgroundColor="#d6ece6"
				}
				el[x][e].style.backgroundColor="#5ed7c4";
			}
			function backcolor(x){
				for(var i=0;i<el[x].length;i++){ //>
					el[x][i].style.backgroundColor="";
				}
			}

			var howmanyform={
				mogi:1,
				classroom:1
			}
			var tb_code={
				mogi:0,
				classroom:100
			}
			function addform(x){
				var t=document.getElementsByName(x+"_goods[]");
				var u=document.getElementsByName(x+"_price[]");
				var tmp1=[];var tmp2=[];
				for(var i=0; i<howmanyform[x]; i++){ //>
					tmp1.push(t[i].value);
					tmp2.push(u[i].value);
				}
				howmanyform[x]++;
				document.getElementById("form_goods_"+x).innerHTML+='<DIV>'+howmanyform[x]+'. <INPUT name="'+x+'_goods[]" tabindex="'+(tb_code[x]+howmanyform[x]*2-1)+'" onkeydown="if(event.keyCode==13){return false;}"></DIV>';
				document.getElementById("form_price_"+x).innerHTML+='<DIV><INPUT name="'+x+'_price[]" style="width: 50% !important;" type="number" tabindex="'+(tb_code[x]+howmanyform[x]*2)+'" onkeydown="if(event.keyCode==13){addform(\''+x+'\');return false;}">円</DIV>';
				var t=document.getElementsByName(x+"_goods[]");
				var u=document.getElementsByName(x+"_price[]");
				for(var i=0; i<howmanyform[x]-1; i++){ //>
					t[i].value=tmp1[i];
					u[i].value=tmp2[i];
				}
				document.getElementsByName(x+"_goods[]")[howmanyform[x]-1].focus();
			}
			function check(){
				//if(location.search!="?re"){
					var inpute=document.getElementsByTagName("input");
					for(var i=1;i<15;i++){ //>
						if(inpute[i].value==""){
							alert("入力内容に不備があります。もう一度ご確認ください。");
							return false;
						}
					}
				//}
				window.removeEventListener('beforeunload', unloaded, false);
				return true;
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
			.main{
				padding:1.0em;
				padding-top:0.3em;
				width:1000px;
				background-color:#ffffff;
				margin:0 auto;
			}
			a:link{color: #0000FF;}
			a:visited{color: #0000FF;}
			a:hover{
				color: #FF0000;
				text-decoration:none;
			}
			
			@media screen and (max-width: 1000px){
				.main{
					width:98%;
				}
			
			}
			form{
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

			.bigsection input:not([type="checkbox"]):not([type="radio"]):not([type="time"]){
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
    			width:120em;
			}
			tr{
				transition: 150ms all 0s ease;
			}
			td,th{
				border: solid 1px #7d7d7d;
				padding:0.6em;
				transition: 150ms all 0s ease;
			}
			tr td:nth-child(1), tr td:nth-child(6){
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
			<A class="menuelem" href="http://tanabata.sfc.keio.ac.jp/kyousan.html"><span class="lsf">&#xE014;</span>ご協賛のお願い</A>
			<A class="menuelem" href="http://tanabata.sfc.keio.ac.jp/contact.html"><span class="lsf">&#xE08a;</span>お問い合わせ</A>

		</DIV>
		<!-- END OF HEADER -->

		<H1>第30回七夕祭 企画参加申込フォーム</H1>
		<SCRIPT type="text/JavaScript">
			if(location.search=="?re"){document.write("<div style='margin-bottom: 0.7em;'><B style='color: #ff0000;'>※確認のため、修正の場合も連絡先の入力をお願いしております。</B></div>");}
		</SCRIPT>
		<form action="post.php" method="post" enctype="multipart/form-data" onsubmit="return check()">
		<INPUT style="display: none;" name="formtype[]" value="form1">
		<div>
			<DIV class="bigsection">
				<BIGSECTION-TITLE>参加団体名 <small style="color: #ff0000;font-weight:lighter;">[必須]</small></BIGSECTION-TITLE>
					<?php
						print('<INPUT name="groupname[]" value="'.$_COOKIE["groupname"].'">');
					?>
			</DIV>
			<DIV class="bigsection">
				<BIGSECTION-TITLE>参加区分 <small style="color: #ff0000;font-weight:lighter;">[必須]</small></BIGSECTION-TITLE>
				<SELECT id="grouptype">
					<OPTION value="privately">個人</OPTION>
					<OPTION value="authorizated">公認団体</OPTION>
					<OPTION value="unauthorizated">非公認団体</OPTION>
					<OPTION value="etc">その他</OPTION>
				</SELECT>
			</DIV>
			<DIV class="bigsection">
				<BIGSECTION-TITLE>参加企画 <small style="color: #ff0000;font-weight:lighter;">[必須]</small></BIGSECTION-TITLE>
				<label><INPUT type="checkbox" name="kikaku[]" value="mogi">模擬店</label>
				<label><INPUT type="checkbox" name="kikaku[]" value="classroom">教室</label>
				<label><INPUT type="checkbox" name="kikaku[]" value="outside">屋外</label>
				<label><INPUT type="checkbox" name="kikaku[]" value="stage">ステージ</label>
			</DIV>
			<DIV class="description">
				<DIV>＊団体代表者と七夕祭担当者を告知用メーリングリストに登録します。</DIV>
				<DIV>＊大変重要な連絡となりますので、最も連絡のとりやすいメールアドレスを登録してください。</DIV>
			</DIV>
			<DIV class="bigsection">
				<BIGSECTION-TITLE>団体代表者</BIGSECTION-TITLE>
				<DIV class="smallsection">
					<SMALLSECTION-TITLE>氏名 <small style="color: #ff0000;">[必須]</small></SMALLSECTION-TITLE>
					<INPUT name="groupleader_name[]">
				</DIV>
				<DIV class="smallsection">
					<SMALLSECTION-TITLE>メールアドレス <small style="color: #ff0000;">[必須]</small></SMALLSECTION-TITLE>
					<INPUT name="groupleader_mail[]" type="email">
				</DIV>
				<DIV class="smallsection">
					<SMALLSECTION-TITLE>電話番号 <small style="color: #ff0000;">[必須]</small></SMALLSECTION-TITLE>
					<INPUT name="groupleader_tel[]" type="tel">
				</DIV>
			</DIV>
			<DIV class="bigsection">
				<BIGSECTION-TITLE>七夕祭担当者</BIGSECTION-TITLE>
				<DIV class="smallsection">
					<SMALLSECTION-TITLE>氏名 <small style="color: #ff0000;">[必須]</small></SMALLSECTION-TITLE>
					<INPUT name="tanabatatanto_name[]">
				</DIV>
				<DIV class="smallsection">
					<SMALLSECTION-TITLE>メールアドレス <small style="color: #ff0000;">[必須]</small></SMALLSECTION-TITLE>
					<INPUT name="tanabatatanto_mail[]" type="email">
				</DIV>
				<DIV class="smallsection">
					<SMALLSECTION-TITLE>電話番号 <small style="color: #ff0000;">[必須]</small></SMALLSECTION-TITLE>
					<INPUT name="tanabatatanto_tel[]" type="tel">
				</DIV>
			</DIV>
			<DIV class="bigsection">
				<BIGSECTION-TITLE>緊急連絡先</BIGSECTION-TITLE>
				<DIV class="smallsection">
					<SMALLSECTION-TITLE>氏名 <small style="color: #ff0000;">[必須]</small></SMALLSECTION-TITLE>
					<INPUT name="emargency_name[]">
				</DIV>
				<DIV class="smallsection">
					<SMALLSECTION-TITLE>メールアドレス <small style="color: #ff0000;">[必須]</small></SMALLSECTION-TITLE>
					<INPUT name="emargency_mail[]" type="email">
				</DIV>
				<DIV class="smallsection">
					<SMALLSECTION-TITLE>電話番号 <small style="color: #ff0000;">[必須]</small></SMALLSECTION-TITLE>
					<INPUT name="emargency_tel[]" type="tel">
				</DIV>
			</DIV>
			<DIV class="description">
				<DIV>＊出展される企画について、以下の表の必要な項目を埋めてください。</DIV>
				<DIV>＊表は「模擬店企画」「教室企画」「屋外企画」「ステージ企画」の4行になっています。表の右側が隠れていることがありますので、スクロールしてご確認ください。</DIV>
				<SCRIPT type="text/JavaScript">
					if(location.search=="?re"){document.write("<div><B>※以下の内容については修正する箇所のみの入力で構いません。</B></div>");}
				</SCRIPT>
			</DIV>
			<DIV class="bigsection" style="width: 100%; overflow:auto;">
				<TABLE>
					<TR>
						<TD></TD>
						<TH onmouseover="changecolor(0,0)" onmouseout="backcolor(0)">模擬店企画<!-- mogi --></TH>
						<TH onmouseover="changecolor(1,0)" onmouseout="backcolor(1)">教室企画<!-- classroom --></TH>
						<TH onmouseover="changecolor(2,0)" onmouseout="backcolor(2)">屋外企画<!-- outside --></TH>
						<TH onmouseover="changecolor(3,0)" onmouseout="backcolor(3)">ステージ企画<!-- stage --></TH>
						<TD></TD>
					</TR>
					<TR>
						<TD>1. 電力使用の有無</TD>
						<TD class="cnt"><label><INPUT type="radio" name="mogi_elec[]" value="yes">あり</OPTION></LABEL><label><INPUT type="radio" name="mogi_elec[]" value="no" checked>なし</OPTION></LABEL></TD>
						<TD class="cnt"><label><INPUT type="radio" name="classroom_elec[]" value="yes">あり</OPTION></LABEL><label><INPUT type="radio" name="classroom_elec[]" value="no" checked>なし</OPTION></LABEL></TD>
						<TD class="cnt"><label><INPUT type="radio" name="outside_elec[]" value="yes">あり</OPTION></LABEL><label><INPUT type="radio" name="outside_elec[]" value="no" checked>なし</OPTION></LABEL></TD>
						<TD class="top"><!-- stage --></TD>
						<TD>1. 電力使用の有無</TD>
					</TR>
					<TR>
						<TD>2. 食品販売の有無</TD>
						<TD class="cnt"><label><INPUT type="radio" name="mogi_food[]" value="yes">あり</OPTION></LABEL><label><INPUT type="radio" name="mogi_food[]" value="no" checked>なし</OPTION></LABEL></TD>
						<TD class="cnt"><label><INPUT type="radio" name="classroom_food[]" value="yes">あり</OPTION></LABEL><label><INPUT type="radio" name="classroom_food[]" value="no" checked>なし</OPTION></LABEL></TD>
						<TD class="top"><!-- outside --></TD>
						<TD class="mid"><!-- stage --></TD>
						<TD>2. 食品販売の有無</TD>
					</TR>
					<TR>
						<TD>3. 物品販売の有無</TD>
						<TD class="cnt"><label><INPUT type="radio" name="mogi_thing[]" value="yes">あり</OPTION></LABEL><label><INPUT type="radio" name="mogi_thing[]" value="no" checked>なし</OPTION></LABEL></TD>
						<TD class="cnt"><label><INPUT type="radio" name="classroom_thing[]" value="yes">あり</OPTION></LABEL><label><INPUT type="radio" name="classroom_thing[]" value="no" checked>なし</OPTION></LABEL></TD>
						<TD class="mid"><!-- outside --></TD>
						<TD class="mid"><!-- stage --></TD>
						<TD>3. 物品販売の有無</TD>
					</TR>
					<TR>
						<TD>4. 販売品目と価格<BR><SMALL>(2,3で「あり」を選択した方のみ</SMALL></TD>
						<TD class="cnt" style="vertical-align: top;"><DIV class="flextd"><DIV style="width: 80%;" id="form_goods_mogi"><DIV>販売品目</DIV>1. <INPUT name="mogi_goods[]" tabindex="1" onkeydown="if(event.keyCode==13){return false}"></DIV><DIV id="form_price_mogi"><DIV>暫定価格</DIV><INPUT name="mogi_price[]" style="width: 50% !important;" type="number" tabindex="2" onkeydown="if(event.keyCode==13){addform('mogi');return false;}">円</DIV></DIV><DIV style="margin-top: 0.6em;"><BUTTON onclick="addform('mogi')" type="button">追加</BUTTON></DIV></TD>
						<TD class="cnt" style="vertical-align: top;"><DIV class="flextd"><DIV style="width: 80%;" id="form_goods_classroom"><DIV>販売品目</DIV>1. <INPUT name="classroom_goods[]" tabindex="101" onkeydown="if(event.keyCode==13){return false}"></DIV><DIV id="form_price_classroom"><DIV>暫定価格</DIV><INPUT name="classroom_price[]" style="width: 50% !important;" type="number" tabindex="102" onkeydown="if(event.keyCode==13){addform('classroom');return false;}">円</DIV></DIV><DIV style="margin-top: 0.6em;"><BUTTON onclick="addform('classroom')" type="button">追加</BUTTON></DIV></TD>
						<TD class="bot"><!-- outside --></TD>
						<TD class="mid"><!-- stage --></TD>
						<TD>4. 販売品目と価格<BR><SMALL>(2,3で「あり」を選択した方のみ)</SMALL></TD>
					</TR>
					<TR>
						<TD>5-1. 希望場所</SMALL></TD>
						<TD class="top cnt">模擬店企画の場所の希望はできません<!-- mogi --></TD>
						<TD class="cnt"><DIV>&lt;第1希望&gt; <INPUT name="classroom_location_1[]"></DIV><DIV>&lt;第2希望&gt; <INPUT name="classroom_location_2[]"></DIV><DIV>&lt;第3希望&gt; <INPUT name="classroom_location_3"></DIV></TD>
						<TD class="cnt"><DIV>&lt;第1希望&gt; <INPUT name="outside_location_1[]"></DIV><DIV>&lt;第2希望&gt; <INPUT name="outside_location_2[]"></DIV><DIV>&lt;第3希望&gt; <INPUT name="outside_location_3[]"></DIV></TD>
						<TD class="mid"><!-- stage --></TD>
						<TD>5-1. 希望場所</SMALL></TD>
					</TR>
					<TR>
						<TD>5-2. 希望理由</SMALL></TD>
						<TD class="bot"><!-- mogi --></TD>
						<TD><TEXTAREA name="classroom_location_reson[]" rows="5" cols="40"></TEXTAREA></TD>
						<TD><TEXTAREA name="outside_location_reson[]" rows="5" cols="40"></TEXTAREA></TD>
						<TD class="mid"><!-- stage --></TD>
						<TD>5-2. 希望理由</SMALL></TD>
					</TR>
					<TR>
						<TD>6. その他・備考</SMALL></TD>
						<TD><TEXTAREA name="mogi_etc[]" rows="5" cols="40"></TEXTAREA></TD>
						<TD><TEXTAREA name="classroom_etc[]" rows="5" cols="40"></TEXTAREA></TD>
						<TD><TEXTAREA name="outside_etc[]" rows="5" cols="40"></TEXTAREA></TD>
						<TD class="bot"><!-- stage --></TD>
						<TD>6. その他・備考</SMALL></TD>
					</TR>
					<TR>
						<TD>7. 企画内容</TD>
						<TD style="vertical-align: top;" class="cnt top">模擬店企画の入力内容は以上です。<!-- mogi --></TD>
						<TD><DIV>暫定企画名称 <INPUT name="classroom_title[]"></DIV><DIV><DIV>企画概要</DIV><DIV><TEXTAREA name="classroom_about[]" rows="7" cols="40"></TEXTAREA></DIV></DIV></TD>
						<TD><DIV>暫定企画名称 <INPUT name="outide_title[]"></DIV><DIV><DIV>企画概要</DIV><DIV><TEXTAREA name="outside_about[]" rows="5" cols="40"></TEXTAREA></DIV></DIV><DIV>時間帯 <INPUT name="outide_time[]"></DIV><DIV><DIV></TD>
						<TD><DIV>暫定企画名称 <INPUT name="stage_title[]"></DIV><DIV><DIV>企画概要</DIV><DIV><TEXTAREA name="stage_about[]" rows="7" cols="40"></TEXTAREA></DIV></DIV></TD>
						<TD>7. 企画内容</TD>
					</TR>
					<TR>
						<TD>8. 参加ステージ</TD>
						<TD class="mid"><!-- mogi --></TD>
						<TD style="vertical-align: top;" class="cnt top">教室企画の入力内容は以上です。<!-- classroom --></TD>
						<TD style="vertical-align: top;" class="cnt top">屋外企画の入力内容は以上です。<!-- outside --></TD>
						<TD class="cnt"><LABEL><INPUT type="radio" name="stage_stage[]" value="1">第1ステージ</OPTION></LABEL><LABEL><INPUT type="radio" name="stage_stage[]" value="2">第2ステージ</OPTION></LABEL><LABEL><INPUT type="radio" name="stage_stage[]" value="th">θ館</OPTION></LABEL></TD>
						<TD>8. 参加ステージ</TD>
					</TR>
					<TR>
						<TD>9. 希望演技時間(撤収時間含めず)</TD>
						<TD class="mid"><!-- mogi --></TD>
						<TD class="mid"><!-- classroom --></TD>
						<TD class="mid"><!-- outside --></TD>
						<TD class="cnt"><SCRIPT type="text/JavaScript">
							var slc='<SELECT name="stage_time[]">';
							slc+='<OPTION value="-">--</OPTION>'
							for(var i=1;i<=60;i++){	//>
								slc+='<OPTION value="'+i+'">'+i+'</OPTION>'
							}
							slc+='</SELECT>';
							document.write(slc);
						</SCRIPT>分</TD>
						<TD>9. 希望演技時間(撤収時間含めず)</TD>
					</TR>
					<TR>
						<TD>10. 希望時間帯<BR><SMALL>(11:30～19:10)</SMALL></TD>
						<TD class="mid"><!-- mogi --></TD>
						<TD class="mid"><!-- classroom --></TD>
						<TD class="mid"><!-- outside --></TD>
						<TD class="cnt"><DIV>&lt;第1希望&gt; <INPUT name="stage_dia_1_s[]" type="time" min="11:30" max="19:10">～<INPUT name="stage_dia_1_e[]" type="time" min="11:30" max="19:10"></DIV><DIV>&lt;第2希望&gt; <INPUT name="stage_dia_2_s[]" type="time" min="11:30" max="19:10">～<INPUT name="stage_dia_2_e[]" type="time" min="11:30" max="19:10"></DIV></TD>
						<TD>10. 希望時間帯<BR><SMALL>(11:30～19:10)</SMALL></TD>
					</TR>
					<TR>
						<TD>11. その他・備考</TD>
						<TD class="bot"><!-- mogi --></TD>
						<TD class="bot"><!-- classroom --></TD>
						<TD class="bot"><!-- outside --></TD>
						<TD><TEXTAREA name="stage_etc[]" rows="5" cols="40"></TEXTAREA></TD>
						<TD>11. その他・備考</TD>
					</TR>
				</TABLE>
			</DIV>
			<DIV class="description">
				こちらに記入して頂いた個人情報に関しては、実行委員会が責任を持って管理いたします。ご協力ありがとうございます。
			</DIV>
			<DIV class="description">
				<BUTTON type="submit">送信</BUTTON>
			</DIV>
		</div>
		<INPUT style="display: none;" name="re[]" value="">
		</form>
	</body>
</html>
