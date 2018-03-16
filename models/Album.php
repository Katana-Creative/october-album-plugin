<?php namespace LzoDevelopment\Album\Models;

use Model;

/**
 * Album Model
 */
class Album extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'lzodevelopment_albums';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [
        'gallery' => 'System\Models\File'
    ];

    public function listCategories()
    {
        return AlbumCategory::lists('title','id');
    }

}