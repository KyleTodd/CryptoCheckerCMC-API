
<head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
var symbol = "BTC";
  var oReq = new XMLHttpRequest();
	oReq.open("GET", "https://www.cryptocompare.com/api/data/coinlist/");
	  oReq.onload = function(){
		  var img2 = JSON.parse(oReq.responseText);
		  renderHTML(img2);
		  }
			oReq.send();



			function renderHTML(img2){
			var htmlString = "";
      var name = symbol;

			document.getElementById("img").src = 'https://www.cryptocompare.com'+img2.Data[name].ImageUrl;

			}
  </script>
</head>

<body>
<img src="" id="img"></img>
</body>
