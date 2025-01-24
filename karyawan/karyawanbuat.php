<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

<script src="../js/jquery.min.js"></script>

<script src="../js/JsBarcode.all.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" href="ohiniScann.css">
<form method="post" action="Scann_aksinya.php">
    <title> Barcode</title>
</head>
<body>

<div class="card">
  <div class="content">
    <h3>Silahkan Scann Barcode mu</h3>
    <div class="imgbox">
    Scann
      <img src="iniapayah.jp" alt="">
     
  <input type="text" name="idp" id="idp" placeholder="tes"><span class="border border-2"></span>



<script type="text/javascript">

function arrayjsonbarcode(j){
	json=JSON.parse(j);
	arr=[];
	for (var x in json) {
		arr.push(json[x]);
	}
	return arr;
}

jsonvalor='<?php echo json_encode($codbarra) ?>';
valores=arrayjsonbarcode(jsonvalor);

for (var i = 0; i < valores.length; i++) {

	JsBarcode("#barcode" + valores[i], valores[i].toString(), {
		format: "codabar",
		lineColor: "#000",
		width: 2,
		height: 30,
		displayValue: true
	});
}

</script>

  
</div>
    </div>
  </div>

 
   



  </div>
 
  </div>









    



</body>
</html>