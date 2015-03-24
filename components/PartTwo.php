<?php namespace KurtJensen\Test\Components;

use App;
use Request;
use Redirect;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;

class PartTwo extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'partTwo Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'TestSlug' => [
                'title'       => 'Test Slug',
                'description' => 'Slug for Testing Slug Behavior.',
                'default'     => '{{ :slug }}',
                'type'        => 'string',
                'group'       => 'Parameters'
            ],
            'PartOnePage' => [
                'title'       => 'Part One Page',
                'description' => 'Page that contains the Part One Component.',
                'default'     => '',
                'type'        => 'dropdown',
                'group'       => 'Links',
            ]
        ];
    }

    public function getPartOnePageOptions()
    {
        return Page::sortBy('baseFileName')->lists('title', 'baseFileName');
    }

    public function onRun()
    {
        $this->page['myslug'] = $this->property('testSlug');
        
        $this->page['partOnePage'] = $this->property('PartOnePage');
     
        $params = [
        'id' => 2,
        'slug' => 'b',
            ];
        
        $this->page['TestUrl'] = $this->pageUrl(
                                        $this->property('PartOnePage'),
                                        $params
                                        );
    }

}
