<?php namespace LzoDevelopment\Album\Components;

use Cms\Classes\ComponentBase;
use LzoDevelopment\Album\Models\Album;

class SingleAlbum extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'SingleAlbum Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }


    /**
     *
     */
    public function onRender()
    {
        $album_id = $this->param('album_id');

        $album = Album::find($album_id);


        $this->page['album'] = $album;
    }

}