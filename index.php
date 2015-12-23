<html>
	<head>
		<title>SweetPrompt</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="An awesome replacement for JavaScript's prompt.">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="lib/sweet-alert.css">
		<link rel="stylesheet" type="text/css" href="lib/sweet-prompt.css">

		<style type="text/css">

		.jumbotron{
			padding: 50px;
		}

		.pull-center{
			text-align: center;
		}

		pre{
			background-color: #49483e;
			color: #f8f8f2;
			padding: 10px;
			border-radius: 5px;
			white-space: pre-line;
			text-align: left;
			font-size: 14px;
			max-width: 100%;
			margin: auto;
			margin-top: 20px;
			text-align: left;
		}


		</style>

	</head>
	<body>

		<div class="jumbotron">
			<h1 class="pull-center">SweetPrompt</h1>
			<h3 class="pull-center">An awesome replacement for JavaScript's prompt.</h3>
		</div>

		<div class="container">

			<div class="row">

				<div class="col-md-6 pull-center">
					<h3>Normal Prompt</h3>

					<button class="btn btn-lg btn-default" onclick="withoutswal()">Show Me</button>

					<pre>
						alert('This is your response: '+prompt('Title and Description:'));
					</pre>
					
					
					
					
					
			
			<div class="pull-center" style="margin-top: 30px;">


<script type="text/javascript">
    google_ad_client = "ca-pub-6993025057939200";
    google_ad_slot = "2856489375";
    google_ad_width = 320;
    google_ad_height = 100;
</script>
<!-- SweetPrompt -->
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>


			</div>
					
					
					

				</div>
				<div class="col-md-6 pull-center">

					<h3>Sweet Prompt</h3>

					<button class="btn btn-lg btn-default" onclick="withswal()">Show Me</button>

					<pre>
						sweetPrompt("Title", "Description Content", "Confirm", "Cancel", function(response){

							setTimeout(function(){

								sweetAlert("Result", "This is your response: "+response, "success");
								
							}, 100);

						});
					</pre>

				</div>

			</div>

			<div class="pull-center" style="margin-top: 30px;">

				<a class="btn btn-lg btn-info" href="https://github.com/gabrielederosa/SweetPrompt">View on Github</a>
				<a class="btn btn-lg btn-info" href="https://github.com/gabrielederosa/SweetPrompt/archive/master.zip">Download Source</a>

			</div>

			<div class="pull-center" style="margin-top: 50px;">
   

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="9BB4GQYGBGLAG">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/it_IT/i/scr/pixel.gif" width="1" height="1">
</form>

               <!-- 
                
<div class="cb-tip-button" data-content-location="" data-href="//www.coinbase.com/tip_buttons/show_tip" data-to-user-id="54beb90c6f9789fca4000057"></div>
<script>!function(d,s,id) {var js,cjs=d.getElementsByTagName(s)[0],e=d.getElementById(id);if(e){return;}js=d.createElement(s);js.id=id;js.src="https://www.coinbase.com/assets/tips.js";cjs.parentNode.insertBefore(js,cjs);}(document, 'script', 'coinbase-tips');</script>
                
                -->
			</div>


		</div>

		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		<script src="lib/sweet-alert.min.js"></script>
		<script src="lib/sweet-prompt.min.js"></script>

		<script type="text/javascript">

		function withoutswal(){

			alert('This is your response: '+prompt('Title and Description:'));

		}

		function withswal(){

			sweetPrompt("Title", "Description Content", "Confirm", "Cancel", function(response){

				setTimeout(function(){ sweetAlert("Result", "This is your response: "+response, "success"); }, 250);

			});

		}

		</script>
		<?php include_once("../../analyticstracking.php"); ?>


                  
                  

                        
        


	</body>
</html>