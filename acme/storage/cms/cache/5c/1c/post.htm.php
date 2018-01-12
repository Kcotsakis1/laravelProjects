<?php 
class Cms5a0b647835c84574315235_27aaec724a5e7f75827eca7587e14f09Class extends \Cms\Classes\PageCode
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
