<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends Application {

    /**
     * Gallery Page for this controller.
     */
    public function index() {
//        $this->load->view('gallery');
        $this->data['pagebody'] = 'gallery';
        $this->render();
    }

}

/* End of file Gallery.php */
/* Location: ./application/controllers/Gallery.php */