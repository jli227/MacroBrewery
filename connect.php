<?


function connect() {
		try {

		$servername = "IS-HAY04.ischool.uw.edu";
		$username = "info445";
		$password = "GoHuskies!";
		$dbname = "MacroBrewery2";


		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		$value = $_POST['bname'];
		$conn = new PDO($servername, $username, $password, $dbname);
		$stmt = $conn-> prepare("SELECT 'BeerName', 'BeerPrice', 'BeerVolume', 'BeerDescr' WHERE 'BeerName' LIKE '%$value%'");

		foreach ($conn->query($sql) as $row) {
	        print $row['BeerName'] . "\t";
	        print $row['BeerPrice'] . "\t";
	        print $row['BeerVolume'] . "\t";
	        print $row['BeerDescr'] . "\n";
    	}

		$stmt->close();
	
		$conn->close();
		}

		catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
		}
	}

?>