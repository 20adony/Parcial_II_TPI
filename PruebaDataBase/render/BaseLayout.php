<?php
class BaseLayout{
    public function renderHead()
    {
        require_once "views/header.php";
    }
    public function renderFoot()
    {
        require_once "views/footer.php";
    }
}