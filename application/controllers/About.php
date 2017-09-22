<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Controller for the about view. Loads the about view.
 * Author: Michael
 * Date: 2017-09-21
 */
class About extends Application {
    public function index() {
		$this->load->view('about');
		//$this->render(); 
	}
}
