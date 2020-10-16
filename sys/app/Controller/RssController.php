<?php

App::uses('RssController','Controller');

class RssController extends AppController{
	//public $layout = 'xml/default';
	public $uses = array('Item','FavoriteItem','Member','Browse');
	public $helpers = array('Time');
	public $components = array('RequestHandler');
	//public $helpers = ['Time'];
	//public $components = ['RequestHandler'];  

	function index(){
		//$this->Entry->recursive = -1;
    	//$this->set('entries', $this->Entry->find('all', array('limit'=>20, 'order'=>'Entry.created desc')));
		$arrFrontNewDatas = $this->Item->getFrontNewDatas(20);//TOPPAGE新着商品数
        $this->set('arrNewDatas',$arrFrontNewDatas);
		
		

        Configure::write ('debug', 0);
		$this->layout = 'xml/default';
        //$this->RequestHandler->respondAs('xml');
    }
}




