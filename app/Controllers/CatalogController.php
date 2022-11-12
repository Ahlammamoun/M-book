<?php
class CatalogController
{
    public function categoryAction($urlParams)
    {
        //dump($urlParams);
        $categoryId = $urlParams['id'];
        $this->show('category', ['category_id' => $categoryId]);
    }



    private function show($viewName, $viewData = [])
    {
        //dump($viewName);
        dump($viewData);

        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }
}
