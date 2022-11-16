<?php

class CoreController
{


    protected function show($viewName, $viewData = [])

    {
        $absoluteURL = $_SERVER['BASE_URI'];
        global $router;
        $languageObject = new Language();
        $footerLanguages = $languageObject->findFooterLanguages();
        //dump($footerLanguages);


        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }
}
