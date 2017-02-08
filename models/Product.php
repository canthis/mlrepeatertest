<?php namespace CanThis\MLRepeaterTest\Models;

use Model;

/**
 * Model
 */
class Product extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'canthis_mlrepeatertest_products';
    
    /**
     * Softly implement the TranslatableModel behavior.
     */
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    
    /**
     * @var array Attributes that support translation, if available.
     */
    public $translatable = [
        'name',
        'description', 
    ];
    
    protected $jsonable = ['description'];
}