<?php 
class Cms5a0b5654ca1c5919989721_509d028db0cc4ccd19e60777aae55af4Class extends \Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
