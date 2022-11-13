<?php
class CatalogController
{
    public function categoryAction($urlParams)
    {
        //dump($urlParams);
        $categoryId = $urlParams['id'];
        $this->show('category', ['category_id' => $categoryId]);
    }


    public function etatAction($urlParams)
    {
        $etatId = $urlParams['id'];
        $this->show('etat', ['etat_id' => $etatId]);
    }
    public function languageAction($urlParams)
    {

        $languageId = $urlParams['id'];
        $this->show('language', ['language_id' => $languageId]);
    }

    public function productAction($urlParams)
    {

        $produitId = $urlParams['id'];
        $this->show('produit', ['produit_id' => $produitId]);
    }

    private function show($viewName, $viewData = [])
    {
        //dump($viewName);
        //dump($viewData);

        $absoluteURL = $_SERVER['BASE_URI'];

        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }
}
