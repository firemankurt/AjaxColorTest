<?php namespace KurtJensen\Test\Components;

use App;
use Request;
use Redirect;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;

class PartOne extends ComponentBase
{    
    public $TestStr = '';
    public $Color = '';
    
    public function componentDetails()
    {
        return [
            'name'        => 'partOne Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'Color' => [
                'title'       => 'Color',
                'description' => 'Color for test',
                'default'     => 'red',
                'type'        => 'string',
            ]
        ];
    }
    
    public function Init()
    {
        $this->TestStr .= 'Init (blue) - ';
        $this->Color = 'blue';
    }
    
    public function onRun()
    {
        $this->TestStr .= 'onRun ('.$this->property('Color').') - ';
        $this->Color = $this->property('Color');
    }
    
    public function onChangeColor()
    {
        
        $this->Color = 'green';
        $this->TestStr .= 'onChangeColor (green) - ';
    }

}
