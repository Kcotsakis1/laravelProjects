<?php 
class Cms5a0b5518d1dea856315470_bfe2e53f19c0ab5dc59784124493f7edClass extends \Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
