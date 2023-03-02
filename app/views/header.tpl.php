<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <base href="<?= $absoluteURL ?>/">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <title>mBook</title>
</head>

<body>
  <header>
    <div class="top-bar">
      <div class="container-fluid">
        <div class="row d-flex align-items-center">
          <div class="col-sm-7 d-none d-sm-block">
            <ul class="list-inline mb-0">
              <li class="list-inline-item pr-3 mr-0">
                <i class="fa fa-phone"></i> 06 13 46 93 40
              </li>
              <li class="list-inline-item px-3 border-left d-none d-lg-inline-block">Livraison offerte à partir de 50€</li>
              &#128213;
            </ul>
          </div>
          <div class="col-sm-5 d-flex justify-content-end">
            <!-- Currency Dropdown-->
            <div class="dropdown pl-3 ml-0">
              <a id="currencyDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle topbar-link">EUR</a>
              <div aria-labelledby="currencyDropdown" class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item text-sm">USD</a>
                <a href="#" class="dropdown-item text-sm">GBP</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-sticky navbar-airy navbar-light">
      <div class="container-fluid">
        <!-- Navbar Header  -->
        <a href="<?= $router->generate('main-home') ?>" class="navbar-brand">M-Book</a>
        <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
        <!-- Navbar Collapse -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
     
   

          <div class="d-flex align-items-center justify-content-between justify-content-lg-end mt-1 mb-2 my-lg-0">
            <!-- Search Button-->
            <div class="nav-item navbar-icon-link">
              <a href="#" class="navbar-icon-link"><i class="fa fa-search"></i></a>
            </div>
            <!-- User Not Logged - link to login page-->
            <div class="nav-item">
              <a href="#" class="navbar-icon-link"><i class="fa fa-user"></i></a>
            </div>
            <!-- Cart Dropdown-->
            <div class="nav-item dropdown">
              <a href="cart.html" class="navbar-icon-link d-lg-none">
                <span class="badge badge-secondary">New</span>
              </a>
              <div class="d-none d-lg-block">
                <a id="cartdetails" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="cart.html" class="navbar-icon-link dropdown-toggle">
                  <i class="fa fa-shopping-cart"></i>
                  <span class="badge badge-secondary">2</span>
                </a>
                <div aria-labelledby="cartdetails" class="dropdown-menu dropdown-menu-right p-4">
                  <div class="navbar-cart-product-wrapper">
                    <!-- cart item-->
                    <div class="navbar-cart-product">

                      <div class="w-100">

                        <div> <a href="detail.html" class="navbar-cart-product-link">Retro socks</a><small class="d-block text-muted">Quantité : 1 </small><strong class="d-block text-sm">45 €
                          </strong></div>
                      </div>
                    </div>
                    <div class="navbar-cart-product">

                      <div class="w-100">

                        <div> <a href="detail.html" class="navbar-cart-product-link">Dillinger</a><small class="d-block text-muted">Quantité : 1 </small><strong class="d-block text-sm">30 €
                          </strong></div>
                      </div>
                    </div>

                    <!-- total price-->
                    <div class="navbar-cart-total"><span class="text-uppercase text-muted">Total</span><strong class="text-uppercase">75 €</strong></div>
                    <!-- buttons-->
                    <div class="d-flex justify-content-between">
                      <a href="cart.html" class="btn btn-link text-dark mr-3">Voir le panier <i class="fa-arrow-right fa"></i></a>
                      <a href="#" class="btn btn-outline-dark">Commander</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <nav2>
     
    <ul>
        <li class="deroulant"><a href="#">Categories</a>
        <ul class="sous">
        <?php foreach ($categories as $category): ?>
                     <li>
                           <a href="<?= $router->generate('category', ['id' => $category->getId()]) ?>" class="text-muted"><?= $category->getName() ?></a>
                    </li>
        <?php endforeach; ?>
        </ul>
        </li>
    </ul>
      <ul>
          <li class="deroulant"><a href="#">Etats</a>
        <ul class="sous">
         
      <?php foreach ($footerEtats as $singleEtat): ?>
                <li>
                  <a href="<?= $router->generate('etat', ['id' => $singleEtat->getId()]) ?>" class="text-muted"><?= $singleEtat->getName() ?></a>
                </li>
              <?php endforeach; ?>
      </ul>
      </li>
</ul>
      <ul>
          <li class="deroulant"><a href="#">Languages</a>
        <ul class="sous">

          <?php foreach ($footerLanguages as $singleLanguage): ?>
                <li>
                  <a href="<?= $router->generate('language', ['id' => $singleLanguage->getId()]) ?>" class="text-muted"><?= $singleLanguage->getName() ?></a>
                </li>
              <?php endforeach; ?>
             
              </ul>
             </li>  
        
      </ul>

      </nav2>


  </header>