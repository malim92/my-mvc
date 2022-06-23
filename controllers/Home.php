<?php

class Home extends Controller {
    
    public function denied() {

        $this->model('HomePage');
        $this->view('denied');
        
    }
}