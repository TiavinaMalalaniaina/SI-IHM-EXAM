<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regime extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('regimeActivite_model');
    }

    public function index($poids) {
        $regimes = $this->regimeActivite_model->findAll();
        $regimes = $this->regimeActivite_model->getRegime($poids);
        $this->load->view('test', ['objects' => $regimes]);
    }
	
    public function detail($id_regime) {
        $this->load->model('detailRegime_model', 'detail');
        $regime = $this->regimeActivite_model->findById($id_regime);
        $regime->detail = $this->detail->findByRegime($id_regime);
    }

    public function test($id_regime, $day) {
        $this->load->model('plat_model', 'plat');
        $nourritures = $this->plat->getRandomPlat($id_regime, $day);
        var_dump($nourritures);

    }
}