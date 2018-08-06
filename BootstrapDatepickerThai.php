<?php
namespace kongoon\yii2\datepickerthai;

use yii\base\Widget;
use yii\helpers\Json;



class BootstrapDatepickerThai extends Widget
{
    public $options = [];
    public $htmlOptions = [];

    public function init()
    {
        $this->options = [
            'language' => 'th-th',
            'format' => 'dd/mm/yyyy'
        ];
        parent::init();
    }

    public function run()
    {
        $this->id = isset($this->htmlOptions['id']) ? $this->htmlOptions['id'] : $this->getId();
        
        $this->registerAsset();
        parent::run();
    
    }

    protected function registerAsset()
    {
        BootstrapDatepickerAsset::register($this->view);
        BootstrapDatepickerThaiAsset::regiter($this->view);

        $jsOptions = Json::encode($this->options);

        $js = '$(".'.$this->id.'").datepicker('.$jsOptions.')';
    }
}