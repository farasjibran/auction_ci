<?php

class HomeController extends CI_Controller
{

	public function index()
	{
		$title['title'] = "Auction";
		$this->load->view('home', $title);
	}
}
