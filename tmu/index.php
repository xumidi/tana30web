<?php
	session_start();
	ini_set('mbstring.internal_encoding' , 'UTF-8');
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta property="og:title" content="実行委員会の活動 - 第30回七夕祭">
		<meta property="og:type" content="website">
		<meta property="og:image" content="https://tanabata.sfc.keio.ac.jp/img/card.png">
		<meta property="og:url" content="https://tanabata.sfc.keio.ac.jp/">
		<meta property="og:locate" content="ja_JP">
		<meta property="og:locale" content="en_US">
		<meta property="og:street-address" content="遠藤5322 λ19">
		<meta property="og:locality" content="藤沢市">
		<meta property="og:region" content="神奈川県">
		<meta property="og:postal-code" content="252-0816郵便番号">
		<meta property="og:country-name" content="Japan" />
		<meta name="twitter:site" content="@tanabatasai_19">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:image" content="https://tanabata.sfc.keio.ac.jp/img/card_twitter.png">
		<meta property="fb:admins" content="204536572914412">
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="description" content="SFCで7月6日に開催される慶應唯一の夏祭り、『七夕祭』実行委員会の紹介です。">
		<link rel="icon" type="image/png" href="https://tanabata.sfc.keio.ac.jp/img/favicon.png" sizes="32x32">
		<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1" />
		<meta name="theme-color" content="#3ca8a1">

		<title>実行委員会の活動 - 第30回七夕祭</title>
		<link rel="stylesheet" href="https://tanabata.sfc.keio.ac.jp/css.css">
		<script type="text/javascript" src="https://tanabata.sfc.keio.ac.jp/js.js"></script>
		<script type="text/javascript">
			function opendialog(x){
				document.getElementById("cover").style.display="block";
				//document.getElementById(x).style.display="block";
				var y=function(){
					document.getElementById("cover").style.opacity="0.5";
					document.getElementById(x).style.opacity=1;
					document.getElementById(x).style.transform="translate(-50%,-50%) scale(1)";
				}
				setTimeout(y,10);
			}
			function closedialog(){
				var d=document.getElementsByTagName("dialog");
				for(var i=0;i<d.length;i++){//>
					d[i].style.transform="translate(-50%,-50%) scale(0.2,0)";
					d[i].style.opacity=0;
				}
				document.getElementById("cover").style.opacity="0";
				var y=function(){
					document.getElementById("cover").style.display="none";
				}
				setTimeout(y,290);
			}
		</script>
		<STYLE type="text/css">
			html{
				scroll-behavior:smooth;
			}

			.anc{
				
				position:relative;top:-4.5em;display: block;

			}
			/* ダイアログ関係 */
			dialog{
				display:block;
				background-color:#ffffff;
				position:fixed;
				width:800px;
				top:45%;
				left:50%;
				height:330px;
				padding:1.3em;
				border-width:1px;
				border-color:#216087;
				border-radius:10px;
				z-index:888;
				overflow:hidden;
				transform:translate(-50%,-50%) scale(0.2,0);
				transition: 290ms all 0s ease;
				margin:0;
			}
			dialog .dialog_article{
				height: calc(100% - 2.5em);
				overflow:auto;
			}
			dialog .dialog_article p{
				margin-top:0;
				margin-bottom:1em;
			}
			dialog .dialog_article p:last-child{
				margin-bottom:0;
			}
			#cover{
				width:100%;
				height:100%;
				opacity:0;
				background-color:#000000;
				top:0;
				left:0;
				position:fixed;
				display:none;
				z-index:500;
				transition: 290ms all 0s ease;
			}
			dialog h3{
				margin-top:0;
				border-radius: 5px 0 0 0;
			}
			dialog h3 a{
				text-decoration:none;
			}
			dialog .logo{
				display:block;
				margin-right:0.8em;
				float:left;
				width:35%;
			}
			/* 組織図 */
			.soshikizu{
				display:flex;
				width:100%;
			}
			.soshikizu div{
				width:33%;
				margin:0.6em;
				cursor:pointer;
			}
			.kanbu{
				width:100%;
				transition:150ms all 0s ease;
			}
			.kanbu:hover{
				filter: brightness(110%);
			}
			
			/* かもいけめん */
			.flexbox{
				display:flex;
			}
			.ikemen{
				order:2;
				margin-left:1.0em;
			}
			.ikemen img{
				height: 300px;
			}
			.kamoikemen{
				display: inline-block;
				position: fixed;
				bottom:3.0em;
				left:3.0em;
				height: 12em;
				z-index:0;
				transition:500ms all 0s ease;
			}
			.kamoikemen:hover{
				transform:scale(1.1);
			}
			.a{
				opacity:0;
				position: absolute;
				bottom:13em;
				left:0;
				transition:800ms all 300ms ease;
				width:20em;
				text-decoration:none;
				color:#000;
				background-color:#ffd56d;
				padding:0.5em;
				border-radius:10px;
				text-align:left;
			}
			.kamoikemen:hover > .a{
				opacity:1;
			}
			
			
			.titles, .namesanddays{
				color: #004b00;
				font-size:1.2em;
			}
			.articles{
				margin-bottom: 1.7em;
				background-color:#ebebeb;
				border-radius: 10px;
				padding: 0.8em;
				width:600px;
				overflow-wrap : break-word;
				font-size:0.8em;
				line-height:1.7em;
			}
			.articles img{
				max-width:60%;
				border-radius:5px;
				margin: 0.5em auto;
				transform-origin:center;
				transition:300ms transform 0s ease;
			}
			.articles img:hover{
				transform:scale(1.04);
			}
			.head_menu a:nth-child(6){
				background-color:#fff;
				color:#000;
				border-top: solid 5px #26acc7;
			}
			@media screen and (max-width: 1100px){
				.kamoikemen{
					display:none;
				}
			}
			@media screen and (max-width: 768px){
				dialog{
					width:90%;
					top:50%;
					margin:auto;
					max-height:60%;
				}
				dialog .logo{
					width:70%;
					float:none;
					margin-right:0;
					margin:0 auto;
					margin-bottom:0.5em;
				}
				dialog .dialog_article{
					max-height: 100%;
					overflow:auto;
				}
				.soshikizu:last-child{
					display:block;
					width:100%;
				}
				.soshikizu div{
					width:50%;
					margin:0.3em;
					cursor:pointer;
				}
				.soshikizu:last-child div{
					display:inline-block;
					margin:0;
					width:48%;
				}
				.kanbu{
					width:100%;
				}
				.kamoikemen{
					display:none;
				}
				.flexbox{
					display:block;
				}
				.flexbox div:last-child{
					width:100%;
				}
				.ikemen{
					width:40%;
					height: auto;
				}
				.ikemen img{
					width:100%;
					height:auto;
				}
				
				.articles{
					width:100%;
				}
				.articles img{
					max-width:100%;
				}
			}
			.head_menu a:nth-child(6){
				background-color:#fff;
				color:#000;
				border-top: solid 5px #26acc7;
			}
		</STYLE>
	</head>
	<body>
		<DIV style="" id="cover" onclick="closedialog()"></DIV>
		<DIV class="head">
			<DIV class="head_menu">
				<A class="menuelem" href="https://tanabata.sfc.keio.ac.jp/">TOP</A>
				<A class="menuelem" href="https://tanabata.sfc.keio.ac.jp/about.html">七夕祭について</A>
				<A class="menuelem" href="https://tanabata.sfc.keio.ac.jp/access.html">アクセス</A>
				<A class="menuelem" href="https://tanabata.sfc.keio.ac.jp/announce.html">注意事項</A>
				<A class="menuelem" href="https://tanabata.sfc.keio.ac.jp/booth/">企画紹介</A>
				<A class="menuelem" href="https://tanabata.sfc.keio.ac.jp/tmu/">実行委員の活動</A>
				<A class="menuelem" href="https://tanabata.sfc.keio.ac.jp/form/">参加団体の方</A>
				<A class="menuelem" href="https://tanabata.sfc.keio.ac.jp/kyousan.html">ご協賛のお願い</A>
				<A class="menuelem" href="https://tanabata.sfc.keio.ac.jp/contact.html">お問い合わせ</A>

			</DIV>
		</DIV>
		<!-- HEADER -->
		<DIV id="header">
			<A HREF="../"><IMG src="https://tanabata.sfc.keio.ac.jp/img/title.png" alt="慶應義塾大学七夕祭"></A>
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
		
		<DIV class="main">
			<DIV>
				<H1><SPAN class="lsf">&#xE13e;</SPAN>実行委員会の活動</H1>
				<P style="margin-top:0;">このページでは、第30回七夕祭を成功させるために日々活動している私たち「第30回七夕祭実行委員会」の活動を紹介していきます！</P>
				<DIV class="section mokuji">
					<ul>
						<li><A href="blogs/">実行委員公式ブログ</A></li>
						<li><A href="#firework">花火募金</A></li>
						<li><A href="#executive">幹部・局紹介</A></li>
						<li><A href="#kamoikemen">公式キャラクター</A></li>
					</ul>
				</DIV>
				<DIV class="section"><A id="blogs" class="anc"></A>
					<H2><SPAN class="lsf" style="font-weight: normal;margin-right:0.2em;">&#xE002;</SPAN><A href="blogs/">実行委員公式ブログ</A></H2>
					<DIV class="section">
						<P>実行委員が更新するブログです！日々の活動報告などを行っています！</P>
						<P>↓最新の記事はこちら↓</P>
						<?php
							$path="/pub/WWW/tanabata/tmu/blogs/db";
							foreach(scandir($path) as $file){
								if($file!="." and $file!=".." and $file!=".htaccess"){
									$currenta=file_get_contents ($path."/".$file);
								}
							}
							$currenta=mb_convert_encoding($currenta,"utf-8","sjis"); 
							print($currenta);
						?>
						<P>その他の記事はこちら→<A href="blogs/" style="font-size: 1.3em;">>>実行委員公式ブログ</A></P>
						<P>ちなみに、諸事情あって普通のブログサービスを利用することができなかったので、仕方なく実行委員が1から手作りでブログのプログラムを書いています。</P>
					</DIV>
				</DIV>
				<DIV class="section"><A id="firework" class="anc"></A>
					<H2>花火募金</H2>
					<DIV class="section">
						<P>七夕祭実行委員会では例年、七夕祭当日に打ち上げる花火の費用を募金で募っています。</P>
						<P>今年度も生協前にて、5月7日から5月10日まで第1回花火募金を行いました。今回は<B>75241円</B>を集めることができました。ご協力ありがとうございました。</P>
					</DIV>
				</DIV>
				<DIV class="section"><A id="executive" class="anc"></A>
					<H2>幹部・局紹介</H2>
					<P>七夕祭実行委員会は5つの局と1つの隊に分かれており、各自がそれぞれの役目を背負って活動しています。</P>
					<DIV class="soshikizu">
						<DIV style="cursor: default;"></DIV>
						<DIV onclick="opendialog('daihyo')"><IMG src="01yaeta.png" class="kanbu" alt="代表 八重田広大"></DIV>
						<DIV style="cursor: default;"></DIV>
					</DIV>
					<DIV class="soshikizu">
						<DIV onclick="opendialog('shift')"><IMG src="03kazuho.png" class="kanbu" alt="シフト担当 足利和保"></DIV>
						<DIV onclick="opendialog('fuku')"><IMG src="02sari.png" class="kanbu" alt="副代表 石川咲里"></DIV>
						<DIV onclick="opendialog('kaikei')"><IMG src="04beck.png" class="kanbu" alt="会計 別宮 広朗"></DIV>
					</DIV>
					<DIV class="soshikizu">
						<DIV onclick="opendialog('unei')"><IMG src="51ueno.png" class="kanbu" alt="運営局 局長 上野 颯希"></DIV>
						<DIV onclick="opendialog('kikaku')"><IMG src="54koichiro.png" class="kanbu" alt="企画局 局長 小川 紘一郎"></DIV>
						<DIV onclick="opendialog('koho')"><IMG src="55nakamu.png" class="kanbu" alt="広報局 局長 中村 優花"></DIV>
						<DIV onclick="opendialog('shogai')"><IMG src="53akebono.png" class="kanbu" alt="渉外局 局長 佐伯 皇徳"></DIV>
						<DIV onclick="opendialog('soshoku')"><IMG src="52ayaka.png" class="kanbu" alt="装飾局 局長 大庭 彩香"></DIV>
						<DIV onclick="opendialog('denryoku')"><IMG src="56yuichiro.png" class="kanbu" alt="電力隊 隊長 中山 優一郎"></DIV>
					</DIV>
				</DIV>
				<DIV class="section kamoike"><A id="kamoikemen" class="anc"></A>
					<H2>七夕祭公式キャラクター「鴨イケメン」</H2>
					<P>鴨イケメン公式Twitter始めました！フォローしてね！<BR><a href="https://twitter.com/kamoikemen?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @kamoikemen</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></p>
					<DIV class="flexbox">
						<DIV class="ikemen">
							<IMG src="kamoikemen.png" alt="鴨イケメン">
							<IMG src="kamoikemen_photo.png" alt="鴨イケメン">
						</DIV>
						<DIV>
							<blockquote class="twitter-tweet" data-lang="ja"><p lang="ja" dir="ltr">七夕祭公式キャラクター「鴨イケメン」(右)が長後まつりにて華々しくデビューしました！ <a href="https://t.co/fNSxaSPYSi">pic.twitter.com/fNSxaSPYSi</a></p>&mdash; 第30回七夕祭実行委員会 (@tanabatasai_19) <a href="https://twitter.com/tanabatasai_19/status/1129971279346319360?ref_src=twsrc%5Etfw">2019年5月19日</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</DIV>
					</DIV>
					<DIV style="">
						<P>彗星の如くSFCに現れたイケメン。そのスタイルの良さとインパクト、カリスマ性で他を寄せ付けない孤高の存在。</P>
						<P>彼によってSFCの秩序と平和が守られていることは言うまでもない。</P>
						<P>2019年5月19日、長後で行われた「長後まつり」にて、華々しくデビューした。</P>
						<P>七夕祭当日、SFCをパトロールしているよ。見かけたら話しかけてみてね！</P>
					</DIV>
				</DIV>
				<DIV class="section">
					<H2>その他</H2>
					<DIV class="section">
						<H3>準備中</H3>
					</DIV>
				</DIV>
			</DIV>
			
		</div>
		
		<!-- FOOTER -->
		<div class="footer">
			<DIV style="margin-bottom: 1.0em;">
				<DIV style="font-size: 1.3em;"><A style="text-decoration: none;color:#fff;" href="https://tanabata.sfc.keio.ac.jp/">慶應義塾大学 第30回七夕祭</A></DIV>
				<DIV style="margin-bottom: 1.0em;">2019/07/06 (土) @湘南藤沢キャンパス</DIV>
				<DIV>〒252-0882 神奈川県藤沢市遠藤5322 慶應義塾大学湘南藤沢キャンパス λ館19号室</DIV>
			</DIV>
			<DIV style="margin-bottom: 1.0em;">
				<A class="menuelem" href="https://tanabata.sfc.keio.ac.jp/">TOP</A>
				<A class="menuelem" href="https://tanabata.sfc.keio.ac.jp/about.html">七夕祭について</A>
				<A class="menuelem" href="https://tanabata.sfc.keio.ac.jp/access.html">アクセス</A>
				<A class="menuelem" href="https://tanabata.sfc.keio.ac.jp/announce.html">注意事項</A>
				<A class="menuelem" href="https://tanabata.sfc.keio.ac.jp/booth/">企画紹介</A>
				<A class="menuelem" href="https://tanabata.sfc.keio.ac.jp/tmu/">実行委員の活動</A>
				<A class="menuelem" href="https://tanabata.sfc.keio.ac.jp/form/">参加団体の方</A>
				<A class="menuelem" href="https://tanabata.sfc.keio.ac.jp/kyousan.html">ご協賛のお願い</A>
				<A class="menuelem" href="https://tanabata.sfc.keio.ac.jp/contact.html">お問い合わせ</A>

			</DIV>
			<DIV style="margin: 1.5em auto;">
				<a href="https://twitter.com/tanabatasai_19?size=large&ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @tanabatasai_19</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				<SCRIPT type="text/JavaScript">
					document.write("<a href=\"https://twitter.com/intent/tweet?text="+encodeURI(document.title)+"%0a"+location.href+"&size=large&ref_src=twsrc%5Etfw\" class=\"twitter-hashtag-button\" data-show-count=\"false\" data-via=\"tanabatasai_19\">Tweet #tweet</a>"+"<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"><\/script>");
				</script>
			</DIV>
			<DIV style="margin-bottom: 1.0em;font-size:0.8em;">&copy 2019 慶應義塾大学湘南藤沢キャンパス 第30回七夕祭実行委員会</DIV>
		</div>
		<!-- END OF FOOTER -->
<DIV class="kamoikemen"><A href="#kamoikemen"><IMG src="kamoikemen.png" style="height: 100%;"></A><div class="a">ぼくは、鴨イケメン。七夕祭のキャラクターなんだ。詳しくはぼくをクリックしてね！</div></div>
				<!-- DIALOGS -->
					<DIALOG id="kikaku">
						<H3>企画局<A href="javascript:closedialog()" style="float: right;">×</A></H3>
						<DIV class="dialog_article">
							<IMG src="94kikaku.png" alt="企画局 ロゴ" class="logo">
							<P>来場者を楽しませるための本部企画を利益度外視で行っています。一日中楽しめるように豊富で分厚い企画を目指しています。</P>
							<P>ロゴにはSFCのシンボルである鴨池と企画局の大仕事である花火をデザインしました。</P>
						</DIV>
					</DIALOG>
					<DIALOG id="unei">
						<H3>運営局<A href="javascript:closedialog()" style="float: right;">×</A></H3>
						<DIV class="dialog_article">
							<IMG src="91unei.png" alt="運営局 ロゴ" class="logo">
							<P>七夕祭を開催するにあたって必要な準備や書類などを整備します。</P>
							<P>ロゴには運営局員が七夕祭当日の連絡に使用するトランシーバをデザインしました。</P>
						</DIV>
					</DIALOG>
					<DIALOG id="soshoku">
						<H3>装飾局<A href="javascript:closedialog()" style="float: right;">×</A></H3>
						<DIV class="dialog_article">
							<IMG src="92soshoku.png" alt="装飾局 ロゴ" class="logo">
							<P>キャンパスを夏祭りらしい雰囲気にするために無機質なキャンパスを装飾します。</P>
							<P>ロゴには色鉛筆から描き出されるΩ館をデザインし、キャンパスを彩り上げていくことを表現しました。</P>
						</DIV>
					</DIALOG>
					<DIALOG id="koho">
						<H3>広報局<A href="javascript:closedialog()" style="float: right;">×</A></H3>
						<DIV class="dialog_article">
							<IMG src="95koho.png" alt="広報局 ロゴ" class="logo">
							<P>Webやパンフレットなど、七夕祭を外部にPRする役割です。</P>
							<P>世間に声を発信するメガホンと、PRのアルファベットをロゴにデザインしました。</P>
						</DIV>
					</DIALOG>
					<DIALOG id="shogai">
						<H3>渉外局<A href="javascript:closedialog()" style="float: right;">×</A></H3>
						<DIV class="dialog_article">
							<IMG src="93shogai.png" alt="渉外局 ロゴ" class="logo">
							<P>七夕祭運営資金を集めるため、協賛を募ります。七夕祭は大学から一切の資金を受けていないため、重要な仕事です。</P>
							<P>ロゴには私たち七夕祭実行委員の気持ちを乗せて飛んでいく紙飛行機をデザインしました。</P>
						</DIV>
					</DIALOG>
					<DIALOG id="denryoku">
						<H3>電力隊<A href="javascript:closedialog()" style="float: right;">×</A></H3>
						<DIV class="dialog_article">
							<IMG src="96denryoku.png" alt="電力隊 ロゴ" class="logo">
							<P>電力隊は、出店団体への配電、キャンパス内の電飾の配電を主に行なっております。</P>
							<P>浮かない仕事ではございますが、これがなければ七夕祭は回らず、また夜に綺麗にもなってくれないでしょう。ライトアップや提灯など目にされたとき、頭の片隅で思い出していただけると幸いです。</P>
							<P>電力隊長としてできることには限界もありましたが、ご来場の皆様に少しでも七夕祭を楽しんでいただければなによりでございます。</P>
							<P>ロゴには電力の命であるプラグをデザインしました。</P>
						</DIV>
					</DIALOG>
		
					<DIALOG id="daihyo">
						<H3>代表 八重田広大<A href="javascript:closedialog()" style="float: right;">×</A></H3>
						<DIV class="dialog_article">
							<IMG src="21yaeta.png" alt="代表 八重田広大" class="logo">
							第30回七夕祭実行委員会の代表です。
						</DIV>
					</DIALOG>
		
					<DIALOG id="fuku">
						<H3>副代表 石川咲里<A href="javascript:closedialog()" style="float: right;">×</A></H3>
						<DIV class="dialog_article">
							<IMG src="22sari.png" alt="副代表 石川咲里" class="logo">
							第30回七夕祭実行委員会の副代表です。
						</DIV>
					</DIALOG>
		
					<DIALOG id="shift">
						<H3>シフト担当 足利和保<A href="javascript:closedialog()" style="float: right;">×</A></H3>
						<DIV class="dialog_article">
							<IMG src="23kazuho.png" alt="シフト担当 足利和保" class="logo">
							七夕祭実行委員のシフトを組みます。
						</DIV>
					</DIALOG>
					
					<DIALOG id="kaikei">
						<H3>会計 別宮広朗<A href="javascript:closedialog()" style="float: right;">×</A></H3>
						<DIV class="dialog_article">
							<IMG src="24beck.png" alt="会計 別宮広朗" class="logo">
							七夕祭の会計を担当しています。
						</DIV>
					</DIALOG>
	</body>
</html>
