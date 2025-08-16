<?php
    session_start();
	$conn = mysqli_connect("localhost","root","se4%*ssprtl","greeniesnowie");
    $date = date("Y-m-d H:i:s");

    $sitename = "GreenieSnowie";
    $domain = "greeniesnowie.ca";
    $sitelink = "https://greeniesnowie.ca";

	function SQL($sqlcond,$fill,$fillout) {
        global $conn;
        $stmt = mysqli_stmt_init($conn);

		$fillarray = array();
		$faray = 0;
		if (strpos($fillout, '...') !== false) {
			$faray = 1;
			$fillout = str_replace('...', '', $fillout);
			$fillexplode = explode(",", $fillout);
			foreach($fillexplode as $fin) {$fillarray[] = $fin;}
		}
		
        if(!mysqli_stmt_prepare($stmt,$sqlcond)) {
			exit("sql failed<br>$fill<br>$fillout<br>$sqlcond");
		}
        else {
            if(strlen($fill) > 0) {
				if($faray == 1) {mysqli_stmt_bind_param($stmt,$fill,...$fillarray);}
				else {mysqli_stmt_bind_param($stmt,$fill,$fillout);}
			}
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if(mysqli_num_rows($result) > 0) {
                if(strpos($sqlcond, 'INSERT') == false) {
                    while($row = mysqli_fetch_array($result)) {$returnAR[] = $row;}
                    return $returnAR;
                }
            }
            else {return 0;}
        }
    }
	function changeHead($location) {header("Location: $location");}
?>