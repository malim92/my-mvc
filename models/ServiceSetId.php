<?php

class ServiceSetId
{

    public function ssidChecker($ssidCode)
    {
        $servername = "localhost";
        $username = "com2goco_portuser";
        $password = "SZuKx~vpiDZG";
        $my_db = "com2goco_portaldb";

        if ($ssidCode == '' || $ssidCode == null) {
            echo ('Please Enter a valid ssid after ?ssid= ') . "\n";
            exit;
        } else {
            // Create connection
            $conn = new mysqli($servername, $username, $password, $my_db);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            //print_r( $url);echo '<br>';
            // Perform query
            $query = "SELECT * FROM com2goco_ssid WHERE ssid='$ssidCode'";

            if ($result = $conn->query($query)) {
                foreach ($result as $row) {
                    //echo "Returned results are: " . $row;
                    return $row;
                }
                // Free result set
                $result->free_result();
            } else return true;
        }
    }
    
    public function ssidQuery($ssidquery)
    {
        if(isset($_GET['fetchdoc']) && !empty($_GET['fetchdoc'])) {
            return true;
        } else { 
            return false;
        }
    }
}
