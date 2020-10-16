<?php

App::uses('SitemapsController','Controller');

class SitemapsController extends AppController{
	//public $layout = 'xml/default';
	public $uses = array('Item','FavoriteItem','Member','Browse');
	public $helpers = array('Time');
	public $components = array('RequestHandler');
	//public $helpers = ['Time'];
	//public $components = ['RequestHandler'];  

	function index(){
		
		$arrFrontNewDatas = $this->Item->getFrontNewDatas(500);//TOPPAGE新着商品数
        $this->set('arrNewDatas',$arrFrontNewDatas);
		
		

        Configure::write ('debug', 0);
		$this->layout = 'xml/default';
        //$this->RequestHandler->respondAs('xml');
    }
}




