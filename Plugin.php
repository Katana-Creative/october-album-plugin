<?php namespace LzoDevelopment\Album;

use Backend;
use System\Classes\PluginBase;

/**
 * Album Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Album',
            'description' => 'Album plugin for managing the pictures',
            'author'      => 'LzoDevelopment',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {

        return [
            'LzoDevelopment\Album\Components\SingleAlbum' => 'SingleAlbum',
            'LzoDevelopment\Album\Components\AllAlbums' => 'AllAlbums',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {

        return [
            'lzodevelopment.album.some_permission' => [
                'tab' => 'Album',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {

        return [
            'album' => [
                'label'       => 'Albums',
                'url'         => \Backend::url('lzodevelopment/album/albums'),
                'icon'        => 'icon-leaf',
                'permissions' => ['lzodevelopment.album.*'],
                'order'       => 500,
            ],
        ];
    }

}
