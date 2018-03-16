<?php namespace LzoDevelopment\Album\Components;

use Cms\Classes\ComponentBase;
use LzoDevelopment\Album\Models\Album;
use LzoDevelopment\Album\Models\AlbumCategory;

class AllAlbums extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'AllAlbums Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    /**
     * @method onRender
     */
    public function onRun()
    {


        //get the param
        $gallery_id = $this->param('gallery_id');


        //
        $this->page['categories'] = AlbumCategory::all();

        //if the category is all please print all the albums if not print the album category
        if($gallery_id == 'all'){

            $this->page['albums']     = Album::all();

        } else{

            $this->page['albums'] = Album::where('album_category', $gallery_id)->get();

        }


    }

}