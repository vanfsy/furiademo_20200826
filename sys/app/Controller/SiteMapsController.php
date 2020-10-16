<?php
class SiteMapsController extends AppController {

　　　　public $uses = array('モデル');//使用モデルを指定
　　　　public $helpers = array('Time');
　　　　public $components = array('RequestHandler');

　　　　function index() {

　　　　　　　　$this->layout = "/xml/sitemap";

　　　　　　　　//モデルからデータ取得し、ビューへ渡す
　　　　　　　　$モデル = $this->モデル->find('all');
　　　　　　　　$this->set(compact('モデル'));

　　　　　　　　$this->RequestHandler->respondAs('xml'); //xmlファイルとする
　　　　}
}