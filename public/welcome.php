<html>
	<head>
		<title>Url has been processed</title>
		<link rel="stylesheet" type="text/css" href="welcome.css">
	</head>

	<body>
		<h1>This page shows your shortened link!</h1>
		<p> 
			<?php 

				function get_tiny_url($url){
					$ch = curl_init();
					$timeout = 5;
					curl_setopt($ch,CURLOPT_URL,'http://tinyurl.com/api-create.php?url='.$url);
					curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
					curl_setopt($ch,CURLOPT_CONNECTTIMEOUT, $timeout);
					$data = curl_exec($ch);
					curl_close($ch);
					return $data;
				}

				if(empty($_GET["url"])){					
					echo "URL is required in the box";
				}
				else{
					$url = $_GET["url"];
					$new_url = get_tiny_url($url);

					$redis = new Redis();
					try{
						$redis->connect('127.0.0.1',6379);
						$redis->set($url,$new_url);
						//echo ;	
					}

					catch(Exception $e){
						print $e;
					}

					echo "<a href='$new_url'>$new_url</a>";
				}

			?><br>		
		</p>
	</body>
</html>