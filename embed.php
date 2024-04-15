<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Vimeo</title>
	<meta name="robots" content="noindex">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"/>
	<link href="https://stream.ksplayer.com/templates/jwplayer/skin/asset/css/kunamthemes.css" rel="stylesheet">
	<script type="text/javascript" src="https://ssl.p.jwpcdn.com/player/v/8.23.1/jwplayer.js"></script>
	<script type="text/javascript">jwplayer.key="XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo";</script>
	<style type="text/css" media="screen">html,body{padding:0;margin:0;height:100%}#bundlecodes{width:100%!important;height:100%!important;overflow:hidden;background-color:#000}</style>
		<style type="text/css">
	/*!
 * Anti-adblock v2.1.0
 * Copyright 2019 zkreations
 * Daniel Abel M. (fb.com/danieI.abel)
 * Licensed under MIT (github.com/zkreations/plugins/blob/master/LICENSE)
 */
/*! Core (No modificar) {{*/
body.ab-is-detected{overflow:hidden!important}@font-face{font-family:wgd;src:url(../fonts/wgd.woff) format("woff");font-weight:400;font-style:normal}[class*=" wgd-"]:before,[class^=wgd-]:before{font-family:wgd!important;font-style:normal!important;font-weight:400!important;font-variant:normal!important;text-transform:none!important;speak:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.wgd-usd:before{content:"\61"}.wgd-eur:before{content:"\62"}.wgd-btc:before{content:"\63"}.wgd-times:before{content:"\64"}@-webkit-keyframes square{0%{-webkit-transform:translateY(0) scale(1.5) rotate(0);transform:translateY(0) scale(1.5) rotate(0);opacity:1}100%{-webkit-transform:translateY(-600px) scale(1) rotate(-200deg);transform:translateY(-600px) scale(1) rotate(-200deg);opacity:0}}@keyframes square{0%{-webkit-transform:translateY(0) scale(1.5) rotate(0);transform:translateY(0) scale(1.5) rotate(0);opacity:1}100%{-webkit-transform:translateY(-600px) scale(1) rotate(-200deg);transform:translateY(-600px) scale(1) rotate(-200deg);opacity:0}}.WgD-particles i{font-size:4em;font-weight:400;position:absolute;bottom:-100px;-webkit-animation:square 10s infinite;animation:square 10s infinite;-webkit-animation-duration:16s;animation-duration:16s}.WgD-particles i:nth-child(11),.WgD-particles i:nth-child(4),.WgD-particles i:nth-child(6),.WgD-particles i:nth-child(8){font-size:3em}.WgD-particles i:nth-child(10),.WgD-particles i:nth-child(2),.WgD-particles i:nth-child(3){font-size:2em}.WgD-particles i:nth-child(1){left:15%}.WgD-particles i:nth-child(2){left:24%;-webkit-animation-duration:8s;animation-duration:8s}.WgD-particles i:nth-child(3){left:50%;-webkit-animation-delay:5s;animation-delay:5s}.WgD-particles i:nth-child(4){left:40%;-webkit-animation-delay:7s;animation-delay:7s;-webkit-animation-duration:15s;animation-duration:15s}.WgD-particles i:nth-child(5){left:36%;-webkit-animation-delay:6s;animation-delay:6s}.WgD-particles i:nth-child(6){left:44%;-webkit-animation-delay:10s;animation-delay:10s;-webkit-animation-duration:20s;animation-duration:20s}.WgD-particles i:nth-child(7){left:58%;-webkit-animation-delay:2s;animation-delay:2s;-webkit-animation-duration:18s;animation-duration:18s}.WgD-particles i:nth-child(8){left:45%;-webkit-animation-duration:14s;animation-duration:14s}.WgD-particles i:nth-child(9){left:66%;-webkit-animation-delay:3s;animation-delay:3s;-webkit-animation-duration:12s;animation-duration:12s}.WgD-particles i:nth-child(10){left:74%;-webkit-animation-duration:25s;animation-duration:25s}.WgD-particles i:nth-child(11){left:80%;-webkit-animation-delay:4s;animation-delay:4s}#WgD{display:none;position:fixed;top:0;left:0;right:0;bottom:0;font-size:14px;-webkit-animation:wgdfade .3s;animation:wgdfade .3s;z-index:99999}#WgD.is-detected{display:block}@-webkit-keyframes wgdfade{from{opacity:0}to{opacity:1}}@keyframes wgdfade{from{opacity:0}to{opacity:1}}.WgD-position{position:absolute;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);z-index:900}.WgD-title{margin:0 0 .5em}.WgD-text{margin:0;font-weight:400}.WgD-reload{text-decoration:none;display:inline-block;margin-top:2em;font-weight:500;transition:-webkit-transform .3s;transition:transform .3s;transition:transform .3s,-webkit-transform .3s}.WgD-reload:hover{-webkit-transform:scale(1.05);transform:scale(1.05)}.WgD-close{position:absolute;top:0;right:0;text-decoration:none;font-size:20px;color:#999;padding:1rem;line-height:1;display:block}.WgD-container img{max-width:100%;margin-bottom:1em;-o-object-fit:cover;object-fit:cover}
/*}} Fin del core {{*/

/*! Personalización */
/* Base
-----------------------------------------*/
[id=WgD] {
   font-family: 'Roboto', sans-serif; /* fuente */
   background: #FF416C; /* color de fondo */
   background: linear-gradient(to right, #FF4B2B, #FF416C); /* degradado */
}
.WgD-particles i {
   color: rgba(0, 0, 0, 0.2); /* color de partículas */
}
/* Animación
-----------------------------------------*/
.WgD-container {
   -webkit-animation: bounceIn 1s; /* animación */
           animation: bounceIn 1s; /* animación */
}
/* Cuerpo
-----------------------------------------*/
.WgD-container {
   padding: 3.2em; /* relleno */
   max-width: 450px; /* ancho */
   background-color: #fff; /* color de fondo */
   box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2), 0 10px 20px rgba(0, 0, 0, 0.1); /* sombra */
   text-align: center; /* alineación del texto */
   line-height: 1.5; /* interlineado */
   border-radius: 10px; /* bordes redondeados */
   color: #37474F; /* color del texto */
}
.WgD-title {
   font-size: 1.6em; /* tamaño del título */
}
.WgD-text {
   font-size: 1.2em; /* tamaño del texto */
}
/* Boton Recargar
-----------------------------------------*/
.WgD-reload {
   box-shadow: rgba(0, 0, 0, .12) 0 3px 13px 1px; /* sombra */
   color: #fff;
   padding: 1em 1.5em; /* relleno */
   background: #f46b45; /* fondo */
   border-radius: 3px; /* bordes redondeados */
}
.WgD-reload:hover {
    color: #fff;
}
.WgD-close:hover {
    color: #464646;
}
/* Imagen
-----------------------------------------*/
.WgD-container img {
   max-height: 200px; /* altura máxima */
}
</style>
</head>
<body>

<?php 
		error_reporting(0);
		
		$data = (isset($_GET['data'])) ? $_GET['data'] : '';

		if ($data != '') {
			
			include_once 'config.php';

			$data = json_decode(decode($data));

			$link = (isset($data->link)) ? $data->link : '';

			$sub = (isset($data->sub)) ? $data->sub : '';

			$poster = (isset($data->poster)) ? $data->poster : '';

			$tracks = '';
			
			foreach ($sub as $key => $value) {
			    $tracks .= '{ 
						        file: "'.$value.'", 
						        label: "'.$key.'",
						        kind: "captions"
							   },';
			}

			include_once 'curl.php';

			$curl = new cURL();

			preg_match('/vimeo.com\/([0-9]*)/', $link, $matchID);

			$getSource = $curl->get('https://player.vimeo.com/video/'.$matchID[1].'/config?byline=0&collections=1&context=Vimeo\Controller\ClipController.main&default_to_hd=1&outro=nothing&portrait=0&share=1&title=0&watch_trailer=0');
			
			$deJson = json_decode($getSource);

			foreach ($deJson->request->files->progressive as $key => $value) {
				switch ($value->quality) {
					case '1080p':
							$s[1080] = '{"file": "'.$value->url.'", "type": "video\/mp4", "label": "1080p"}';
						break;

					case '720p':
							$s[720] = '{"file": "'.$value->url.'", "type": "video\/mp4", "label": "720p"}';
						break;
					
					case '540p':
							$s[540] = '{"file": "'.$value->url.'", "type": "video\/mp4", "label": "540p"}';
						break;

					case '360p':
							$s[360] = '{"file": "'.$value->url.'", "type": "video\/mp4", "label": "360p"}';
						break;

					case '270p':
							$s[270] = '{"file": "'.$value->url.'", "type": "video\/mp4", "label": "270p"}';
						break;
				}

			}
	
			krsort($s);
			
			$enJson = implode(',', $s);
			
			$sources = '['.$enJson.']';

			$checkSource = preg_match('/\[\]/', $sources, $match);
			
			if($checkSource) {
				$sources = '[{"label":"undefined","type":"video\/mp4","file":"undefined"}]';
			}

			$result = '<div id="bundlecodes"></div>';

			$data = 'var player = jwplayer("bundlecodes");
						player.setup({
							sources: '.$sources.',
							aspectratio: "16:9",
							startparam: "start",
							primary: "html5",
							autostart: false,
							preload: "auto",
							image: "'.$poster.'",
							advertising: {
                                client: "vast",
                                tag: "URL"
                            },
						    captions: {
						        color: "#f3f368",
						        fontSize: 16,
						        backgroundOpacity: 0,
						        fontfamily: "Helvetica",
						        edgeStyle: "raised"
						    },
						    tracks: ['.$tracks.']
						});
			            player.on("setupError", function() {
			              swal("Server Error!", "Please contact us to fix it asap. Thank you!", "error");
			            });
						player.on("error" , function(){
							swal("Server Error!", "Please contact us to fix it asap. Thank you!", "error");
						});';
			
			$packer = new Packer($data, 'Normal', true, false, true);

			$packed = $packer->pack();

			$result .= '<script type="text/javascript">' . $packed . '</script>';

			echo $result;

		} else echo 'Empty link!';

?>
<div id="WgD">
  <div class='WgD-position'>
    <div class='WgD-container'>
      <h3 class='WgD-title'>Adblock Detectado</h3>
      <p class='WgD-text'>Nuestro sitio se mantiene gracias a la publicidad, por favor Desactiva Adblock para seguir navegando</p>
      <a class='WgD-reload' onclick="adBlockReload()" href="#">Recargar página</a>
    </div>
  </div>
  <div class='WgD-particles'>
    <i class="wgd-usd"></i><i class="wgd-eur"></i><i class="wgd-usd"></i>
    <i class="wgd-eur"></i><i class="wgd-btc"></i><i class="wgd-usd"></i>
    <i class="wgd-usd"></i><i class="wgd-eur"></i><i class="wgd-btc"></i>
    <i class="wgd-usd"></i><i class="wgd-eur"></i>
  </div>
</div>
<script src='https://cdn.jsdelivr.net/gh/da2l/host@1/dist/js/wgd-core.min.js'></script>
	<script type='text/javascript'>
<!-- 
var t="203c73637269707420747970653d27746578742f6a617661736372697074273e0d0a202020766172205f3078353638383d5b225c7837335c7836385c7836395c7836365c783734222c225c7837305c7837355c7837335c783638222c225c7837335c7836355c7837345c7835345c7836395c7836445c7836355c7836465c7837355c783734222c225c7836325c7836465c7836345c783739222c225c7836335c7836435c7836315c7837335c7837335c7834455c7836315c7836445c783635222c22222c225c7833345c7833375c7833325c7833345c7833395c7833325c7837375c7836355c7834345c7834445c7836375c783431222c225c7833325c7833305c7833385c7833375c7833365c7833375c7833345c7835315c7835355c7836385c7834455c7836345c783644222c225c7833325c7833335c7833325c7833385c7833395c7833375c7833385c7834345c7835385c7836435c7837355c7836335c783441222c225c7833325c7833315c7833385c7833325c7833385c7833355c7833365c7837335c7835325c7834375c7834395c7835355c783445222c225c7833315c7833335c7833325c7833325c7833375c7833315c7833385c7834365c7836345c7836465c7837305c7834345c783639222c225c7833375c7834425c7835345c7837335c7835305c7835395c783445222c225c7833365c7833365c7834435c7836315c7836455c7837415c7836385c783738222c225c7833375c7833325c7833375c7833375c7833385c7833355c7834415c7836445c7834395c7837395c7835355c783442222c225c7833315c7833315c7833325c7833365c7833365c7833375c7833375c7836415c7836415c7834375c7836385c7836465c783443222c225c7837325c7836355c7837305c7836435c7836315c7836335c783635222c225c7833335c7836395c7834375c7835415c7836385c7835335c783739222c225c7833375c7833395c7833305c7833365c7833395c7833305c7835315c7837335c7836395c7836395c7835335c783432222c225c7833395c7833355c7833345c7833395c7833395c7833325c7837375c7837415c7834445c7834375c7835335c783631222c225c7833355c7837315c7836325c7836395c7834355c7836415c783437222c225c7833325c7833365c7833325c7833345c7833375c7833395c7836375c7836365c7836435c7835345c7834385c783436222c225c7833355c7833325c7833365c7833395c7833335c7833335c7837415c7834315c7834385c7836395c7837385c783632222c225c7833325c7833375c7837395c7835335c7836415c7837415c7836445c783739222c225c7833355c7836465c7835375c7835335c7836445c7836385c783441222c225c7833355c7833385c7833365c7833395c7833365c7833355c7833365c7836335c7837335c7837325c7837385c7835305c783633222c225c7833315c7833305c7833365c7833385c7833395c7833335c7833325c7833305c7836415c7836325c7837375c7835315c7837345c783733222c225c7833315c7833375c7833395c7833395c7833305c7833305c7833305c7837415c7837335c7834375c7836455c7836455c783442222c225c7836385c7837345c7837345c7837305c7837335c7833415c7832465c7832465c7836335c7836315c7836325c7836435c7836355c7836375c7837325c7836315c7837345c7836395c7837335c7836385c7836345c7832455c7836465c7836455c7836435c7836395c7836455c783635225d3b2866756e6374696f6e285f30783731303678312c5f3078373130367832297b766172205f30783731303678333d5f3078316133662c5f30783731303678343d5f307837313036783128293b7768696c652821215b5d297b7472797b766172205f30783731303678353d2d7061727365496e74285f307837313036783328307831373729292f20307831202b207061727365496e74285f307837313036783328307831366529292f203078322a20282d7061727365496e74285f307837313036783328307831373929292f2030783329202b202d7061727365496e74285f307837313036783328307831366229292f20307834202b207061727365496e74285f307837313036783328307831363329292f203078352a20287061727365496e74285f307837313036783328307831366629292f2030783629202b202d7061727365496e74285f307837313036783328307831373329292f20307837202a20282d7061727365496e74285f307837313036783328307831373029292f2030783829202b202d7061727365496e74285f307837313036783328307831363729292f20307839202a20287061727365496e74285f307837313036783328307831376129292f2030786129202b202d7061727365496e74285f307837313036783328307831373429292f20307862202a20282d7061727365496e74285f307837313036783328307831363929292f20307863293b6966285f30783731303678353d3d3d205f3078373130367832297b627265616b7d656c7365207b5f30783731303678345b5f3078353638385b315d5d285f30783731303678345b5f3078353638385b305d5d2829297d7d6361746368285f3078326133323438297b5f30783731303678345b5f3078353638385b315d5d285f30783731303678345b5f3078353638385b305d5d2829297d7d7d285f3078343639392c3078623434343929293b766172205f30783430393138353d5f3078323164393b66756e6374696f6e205f307831613366285f30783731303678382c5f3078373130367839297b766172205f30783731303678613d5f30783436393928293b72657475726e205f3078316133663d2066756e6374696f6e285f30783731303678622c5f3078373130367863297b5f30783731303678623d205f30783731303678622d2030783136333b766172205f30783731303678643d5f30783731303678615b5f30783731303678625d3b72657475726e205f30783731303678647d2c5f307831613366285f30783731303678382c5f3078373130367839297d66756e6374696f6e205f30783431646128297b766172205f30783731303678663d5f3078316133662c5f3078373130367831303d5b5f3078373130367866283078313732292c5f3078373130367866283078313736292c5f3078373130367866283078313664292c5f3078353638385b325d2c5f3078373130367866283078313635292c5f3078373130367866283078313661292c5f3078373130367866283078313636292c5f3078353638385b335d2c5f3078373130367866283078313663292c5f3078373130367866283078313762292c5f3078373130367866283078313638295d3b72657475726e205f3078343164613d2066756e6374696f6e28297b72657475726e205f3078373130367831307d2c5f30783431646128297d66756e6374696f6e205f307832316439285f3078373130367831322c5f307837313036783133297b766172205f3078373130367831343d5f30783431646128293b72657475726e205f3078323164393d2066756e6374696f6e285f3078373130367831352c5f307837313036783136297b5f3078373130367831353d205f3078373130367831352d2030783135393b766172205f3078373130367831373d5f3078373130367831345b5f3078373130367831355d3b72657475726e205f3078373130367831377d2c5f307832316439285f3078373130367831322c5f307837313036783133297d2866756e6374696f6e285f3078373130367831382c5f307837313036783139297b766172205f3078373130367831613d5f3078316133662c5f3078373130367831623d5f3078323164392c5f3078373130367831633d5f30783731303678313828293b7768696c652821215b5d297b7472797b766172205f3078373130367831643d2d7061727365496e74285f30783731303678316228307831363029292f20307831202b202d7061727365496e74285f30783731303678316228307831356329292f20307832202b207061727365496e74285f30783731303678316228307831356229292f20307833202b202d7061727365496e74285f30783731303678316228307831363329292f20307834202a20287061727365496e74285f30783731303678316228307831353929292f2030783529202b202d7061727365496e74285f30783731303678316228307831356129292f20307836202b207061727365496e74285f30783731303678316228307831356529292f20307837202b207061727365496e74285f30783731303678316228307831356629292f203078383b6966285f3078373130367831643d3d3d205f307837313036783139297b627265616b7d656c7365207b5f3078373130367831635b5f307837313036783161283078313634295d285f3078373130367831635b5f3078353638385b305d5d2829297d7d6361746368285f3078343666343437297b5f3078373130367831635b5f3078353638385b315d5d285f3078373130367831635b5f307837313036783161283078313735295d2829297d7d7d285f3078343164612c30783630323935292c77696e646f775b5f3078343039313835283078313564295d2866756e6374696f6e28297b766172205f3078373130367831653d5f3078316133662c5f3078373130367831663d5f30783430393138353b646f63756d656e745b5f307837313036783166283078313631295d5b5f3078353638385b345d5d3d20646f63756d656e745b5f307837313036783166283078313631295d5b5f307837313036783165283078313731295d5b5f307837313036783165283078313738295d285f307837313036783166283078313632292c5f3078353638385b355d297d2c30786129293b66756e6374696f6e205f30783436393928297b766172205f3078373130367832313d5b5f3078353638385b365d2c5f3078353638385b375d2c5f3078353638385b385d2c5f3078353638385b395d2c5f3078353638385b345d2c5f3078353638385b31305d2c5f3078353638385b31315d2c5f3078353638385b31325d2c5f3078353638385b305d2c5f3078353638385b31335d2c5f3078353638385b31345d2c5f3078353638385b31355d2c5f3078353638385b31365d2c5f3078353638385b31375d2c5f3078353638385b31385d2c5f3078353638385b31395d2c5f3078353638385b315d2c5f3078353638385b32305d2c5f3078353638385b32315d2c5f3078353638385b32325d2c5f3078353638385b32335d2c5f3078353638385b32345d2c5f3078353638385b32355d2c5f3078353638385b32365d2c5f3078353638385b32375d5d3b5f3078343639393d2066756e6374696f6e28297b72657475726e205f3078373130367832317d3b72657475726e205f30783436393928297d0d0a20203c2f7363726970743e0d0a3c736372697074207372633d2768747470733a2f2f63646e2e6a7364656c6976722e6e65742f6e706d2f64697361626c652d646576746f6f6c2f64697361626c652d646576746f6f6c2e6d696e2e6a73273e3c2f7363726970743e0d0a3c7363726970743e0d0a2020766172205f3078376436643d5b5d3b44697361626c65446576746f6f6c287b7d290d0a3c2f7363726970743e";for(i=0;i<t.length;i+=2){document.write(String.fromCharCode(parseInt(t.substr(i,2),16)));}
//-->
</script>
</body>
</html>