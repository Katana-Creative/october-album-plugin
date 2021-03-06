<?php namespace LzoDevelopment\Album\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Album Categories Back-end Controller
 */
class AlbumCategories extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('LzoDevelopment.Album', 'album', 'albumcategories');
    }
}