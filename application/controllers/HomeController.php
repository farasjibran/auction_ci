<?php

class HomeController extends CI_Controller
{

	public function index()
	{
		$title['title'] = "Auction";
		$this->load->view('home', $title);
	}

	public function login()
	{
		$title['title'] = "Auction";
		$this->load->view('login', $title);
	}
}
