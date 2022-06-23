<?php

class Ssid extends Controller {

    public function index( $name) {
        
        $fetchSsid = $this->model('ServiceSetId')->ssidChecker($name);
        $fetchDocument = $this->model('ServiceSetId')->ssidQuery($fetchSsid);
        if (!empty($fetchSsid) && empty($fetchDocument)){
            //show button
            $this->view('ssidView');
        }
        elseif (!empty($fetchSsid) && !empty($fetchDocument)) {
            $this->view('viewDoc');
        }
        else {
            $this->view('denied');
        }
    }
}

// take url param

// initiate connection 

// fetch db

// return result