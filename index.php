<?php
  require_once  './IDNA2.php';
  $domainArr = array_reverse(explode('.', $_SERVER ['HTTP_HOST']));
  if( count($domainArr) > 2 ) {
    $domain = $domainArr[2].'.'.$domainArr[1];
  } else {
    $domain = $domainArr[1].'.'.$domainArr[0];
  }
  // $domain_ext = $domainArr[0];
  $domain_len = mb_strlen($domain,'utf8') - 1;

  if( startsWith($domain, 'xn--') ) {
    static $idn;
    $idn = new Net_IDNA2();

    $domain = $idn->decode($domain);
  }

  function startsWith ($haystack, $needle)
  {
      return strncmp($haystack, $needle, strlen($needle)) === 0;
  }
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta content="YOU PERSONAL WEB3.0 SOCIAL MEDIA." name="description">
  <meta content="Web3, Web3.0, ETH, NFT, Wallet, ENS" name="keywords">
  <meta name="theme-color" content="#5f18d3">

  <link rel="icon" type="image/png" href="./assets/images/web3.icon.png">
  <link rel="icon" type="image/png" sizes="144x144" href="./assets/images/web3.icon.png">
  <link rel="apple-touch-icon" type="image/png" href="./assets/images/web3.icon.png">
  <title><?php echo $domain ?></title>
  <style>
    @font-face {
      font-family: 'MiSans';
      src: url('assets/fonts/MiSans.ttf') format('TrueType');
      font-weight: normal;
      font-style: normal;
      font-display: swap;
    }
    @font-face {
      font-family: 'FatFrank';
      src: url('assets/fonts/FatFrank.ttf') format('TrueType');
      font-weight: normal;
      font-style: normal;
      font-display: swap;
    }
    @font-face {
      font-family: 'Main';
      src: url('assets/fonts/Main.ttf') format('TrueType');
      font-weight: normal;
      font-style: normal;
      font-display: swap;
    }
    html {
      font-size: 13.3333vw;
      --domain-len: <?php echo $domain_len ?>;
    }
    html,body {
      height: 100%;
      width: 100%;
      margin: 0;
    }
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      background-color: #f6f6f6;
    }
    h1 {
      margin: 0;
      font-family: "FatFrank";
      font-size: calc( 100vw / var(--domain-len) );
      color: #151b2a;
    }
    /* h1:first-letter {
      text-transform: uppercase;
    } */
    p {
      margin: .3em;
      font-size: .36rem;
      text-align: center;
      letter-spacing: 2px;
      color: #34373c;
      text-transform: uppercase;
      font-family: 'Main';
    }
    .coming {
      font-size: .18rem;
      color: rgba(0,0,0,.5);
    }
    .copyright {
      font-size: .18rem;
      margin-top: 15vh;
    }
    sup, a {
      background-image: linear-gradient(-45deg,#0015ff,#f546f9);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    a {
      display: inline-block;
    }
    a:hover {
      text-decoration: none;
      background-image: linear-gradient(-45deg,#f546f9,#0015ff);
    }
    sup {
      font-weight: 700;
      font-family: 'MiSans';
      font-size: .7em;
      display: inline-block;
      line-height: 1;
    }
    @media screen and (min-width:750px) {
      html {
        font-size: 100px;
      }
    }
    @media screen and (orientation: portrait) and (max-width:750px) {
      .slogan {margin: 2vh;}
      .slogan span {display: block;}
      .coming,.copyright {font-size: .24rem;}
    }

  </style>
</head>
<body>
  <h1><?php echo $domain ?></h1>
  <p class="slogan"><span>You Personal </span><span>WEB<sup>3.0</sup> Social Media.</span></p>
  <p class="coming">Coming soon...</p>
  <p class="copyright"><a href="https://my3.social"><span>&copy;</span><?php echo date("Y") ?> My<sup>3</sup>.social</a></p>
  <canvas id="gradient-canvas" data-transition-in></canvas>
  <script src="./assets/scripts/gradient.js" type="text/javascript"></script>
  <style>
    #gradient-canvas {
    position: absolute;
    z-index: -1;
    left: 0;top: 0;
    width: 100%;
    height: 100%;
    --gradient-color-1: #c3e4ff; 
    --gradient-color-2: #6ec3f4; 
    --gradient-color-3: #eae2ff;  
    --gradient-color-4: #b9beff;
  }
  </style>
  <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "https://hm.baidu.com/hm.js?15d8b1a53514a8a458e8d36c40ad1e14";
      var s = document.getElementsByTagName("script")[0]; 
      s.parentNode.insertBefore(hm, s);
    })();
  </script>
</body>
</html>
