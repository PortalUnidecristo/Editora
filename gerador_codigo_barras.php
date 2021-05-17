
<!DOCTYPE html>
<html lang='en' class=''>

<head>

  <meta charset='UTF-8'>
  <title>CodePen Demo</title>

  <meta name="robots" content="noindex">

  <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
  <link rel="mask-icon" type="" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">
  <link rel="canonical" href="https://codepen.io/hectoricardom/pen/mEONWv">

  
  

  <style class="INLINE_PEN_STYLESHEET_ID">
    .barcode.code128 {
    float: left;
    height: 95%;
    min-height: 5px;
}
.barcode.code128 > div.b {
    background: none repeat scroll 0 0 #000000;
    float: left;
    height: 100%;
}
.barcode.code128 > div.w {
    background: none repeat scroll 0 0 #FFFFFF;
    float: left;
    height: 100%;
}
.barcode.code128 .w20 {
    width: 20px;
}
.barcode.code128 .w1 {
    width: 1px;
}
.barcode.code128 .w2 {
    width: 1px;
}
.barcode.code128 .w3 {
    width: 1px;
}
.barcode.code128 .w4 {
    width: 1px;
}
.barcode.code128 .w5 {
    width: 1px;
}
.barcode.code128 .w6 {
    width: 1px;
}
.barcode.code128 .w7 {
    width: 1px;
}
.barcode.code128 .w8 {
    width: 1px;
}
.barcode.code128 .w9 {
    width: 1px;
}
.barcode.code128 .w10 {
    width: 1px;
}
.barcode.code128 .b1 {
    width: 1px;
}
.barcode.code128 .b2 {
    width: 1px;
}
.barcode.code128 .b3 {
    width: 1px;
}
.barcode.code128 .b4 {
    width: 1px;
}
.barcode.code128 .b5 {
    width: 1px;
}
.barcode.code128 .b6 {
    width: 1px;
}
.barcode.code128 .b7 {
    width: 1px;
}
.barcode.code128 .b8 {
    width: 1px;
}
.barcode.code128 .b9 {
    width: 1px;
}
.barcode.code128 .b10 {
    width: 1px;
}

.hinput{
  height:22px;
  font-size:12px;
  margin-radius:7px;
  min-width:300px;
}
  </style>

  
<script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeConsoleRunner-d8236034cc3508e70b0763f2575a8bb5850f9aea541206ce56704c013047d712.js"></script>
<script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRefreshCSS-4793b73c6332f7f14a9b6bba5d5e62748e9d1bd0b5c52d7af6376f3d1c625d7e.js"></script>
<script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRuntimeErrors-4f205f2c14e769b448bcf477de2938c681660d5038bc464e3700256713ebe261.js"></script>
</head>

<body>
  <html>
<head>
 </script>
</head>
<body ng-app="App">
<div ng-controller="codeCtrl">
  <input class="hinput" type='text' ng-model='code'>
<div barcode-generator="{{code}}" style="margin:10px 0px 10px 0px;height:60px;"></div>

<div barcode-generator="{{code1}}" style="margin:10px 0px 10px 0px;height:60px;">
</div>
  
  <io-barcode code="{{ code }}" type="{{ type }}" options="options"></io-barcode>
  
  </div>
</body>
</html>
  
<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js"></script>
<script src="https://cdn.jsdelivr.net/jsbarcode/3.3.7/JsBarcode.all.min.js"></script>
  <script  src="https://cdpn.io/cp/internal/boomboom/pen.js?key=pen.js-b2c0f059-5f3a-2772-c913-223835b59c20" crossorigin></script>
</body>

</html>
