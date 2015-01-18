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
        // get all the images from our model
        $pix = $this->imges->all();
        
        // build an array of formatted cells from them
        foreach ($pix as $picture)
            $cell[] = $this->parser->parse('_cell', (array)$picture, true);
        
        // prime the table class
        $this->load->library('table');
        $parms = array(
            'table_open' => '<table class="gallery">',
            'cell_start' => '<td class="oneimage">',
            'cell_alt_start' => '<td class="oneimage">'
        );
        $this->table->set_template($parms);
        
        // finally! generate the table
        $rows = $this->table->make_columns($cells, 3);
        $this->data['thetable'] = $this->generate($rows);

        $this->data['pagebody'] = 'gallery';
        $this->render();
    }

}

/* End of file Gallery.php */
/* Location: ./application/controllers/Gallery.php */