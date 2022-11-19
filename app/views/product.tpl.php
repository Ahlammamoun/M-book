<section class="hero">
  <div class="container">
    <!-- Breadcrumbs -->
    <ol class="breadcrumb justify-content-center">
      <li class="breadcrumb-item"><a href="<?= $router->generate('main-home') ?>">Acceuil</a></li>
      <li class="breadcrumb-item active"><?= $product_data['category_name'] ?></li>
    </ol>
  </div>
</section>

<section class="products-grid">
  <div class="container-fluid">

    <div class="row">
      <!-- product-->
      <div class="col-lg-6 col-sm-12">
        <div class="product-image">
          <a href="detail.html" class="product-hover-overlay-link">
            <img src="<?= $product_data['picture'] ?>" alt="product" class="img-fluid">
          </a>
        </div>
        
      </div>
      <div class="col-lg-6 col-sm-12">
        <div class="mb-3">
          <h3 class="h3 text-uppercase mb-1"><?= $product_data['name'] ?></h3>
          <div class="text-muted">in <em><?= $product_data['language_name'] ?></em></div>
          <div>
            <?php for ($i = 0 ; $i < 5 ; $i++) : ?>
              <i class="fa fa-star<?php if ($i >= $product_data['rate']) { echo "-o";} ?>"></i>
            <?php endfor ?>
          </div>
        </div>
        <div class="my-2">
          <div class="text-muted"><span class="h4"><?= $product_data['price'] ?></span> TTC</div>
        </div>
        <div class="product-action-buttons">
          <form action="" method="post">
            <input type="hidden" name="product_id" value="1">
            <button class="btn btn-dark btn-buy"><i class="fa fa-shopping-cart"></i><span class="btn-buy-label ml-2">Ajouter au panier</span></button>
          </form>
        </div>
        <div class="mt-5">
          <p class="product">
          <?= $product_data['description'] ?>
        </div>
      </div>
      <!-- /product-->
    </div>

  </div>
</section>