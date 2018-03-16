<?php namespace LzoDevelopment\Album\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Albums Back-end Controller
 */
class Albums extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';

    public $listConfig = 'config_list.yaml';

    /**
     * Albums constructor.
     */
    public function __construct()
    {

        parent::__construct();

        BackendMenu::setContext('LzoDevelopment.Album', 'album', 'albums');

    }
}