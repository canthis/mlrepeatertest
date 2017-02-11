<?php namespace CanThis\MLRepeaterTest;

use System\Classes\PluginBase;
use CanThis\MLRepeaterTest\Controllers\Products as ProductsController;

class Plugin extends PluginBase
{
    public $require = ['RainLab.Translate'];
    
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }
    
    public function boot() {
        ProductsController::extendFormFields(function($widget, $model, $context) {
            
            if(!$widget->isNested) {
                
                $widget->addTabFields([
                    '_dynamic_richtext' => [
                        'label' => 'Richeditor',
                        'type' => 'richeditor',
                        'tab' => 'Dynamically added form fields',
                        'span' => 'full',
                        'default' => 'Default value for <b>dynamically</b> added Richeditor'
                    ],
                ]);
                
            }
            
        });
    }
}
