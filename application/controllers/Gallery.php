<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Loads the gallery view.
 * Author: Michael
 * Date: 2017-09-21
 */
class Gallery extends Application {
    public function index() {
		$this->load->view('gallery');
		//$this->render(); 
	}
}
