<footer class="main-footer">
  <!-- Services block-->
  <div id="footer-services" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 service-column">
          <i class="fa fa-truck"></i>
          <div class="service-text">
            <h6 class="text-uppercase">Livraison et retour gratuit</h6>
            <p class="text-muted font-weight-light text-sm mb-0">Livraison gratuite à partir de 50€</p>
          </div>
        </div>
        <div class="col-lg-4 service-column">
          <i class="fa fa-money"></i>
          <div class="service-text">
            <h6 class="text-uppercase">Satisfait ou remboursé</h6>
            <p class="text-muted font-weight-light text-sm mb-0">30 jours pour renvoyer</p>
          </div>
        </div>
        <div class="col-lg-4 service-column">
          <i class="fa fa-phone"></i>
          <div class="service-text">
            <h6 class="text-uppercase">06 13 46 93 40</h6>
            <p class="text-muted font-weight-light text-sm mb-0">Joignable 24/7</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Main block - menus, subscribe form-->
  <div id="footer-menu" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="font-weight-bold text-uppercase text-lg text-dark mb-3">M-Book</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <ul class="list-inline">
            <li class="list-inline-item">
              <a href="#" target="_blank" title="twitter" class="text-muted text-hover-primary">
                <i class="fa fa-twitter">
                </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" target="_blank" title="facebook" class="text-muted text-hover-primary">
                <i class="fa fa-facebook-official">
                </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" target="_blank" title="instagram" class="text-muted text-hover-primary">
                <i class="fa fa-instagram">
                </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" target="_blank" title="pinterest" class="text-muted text-hover-primary">
                <i class="fa fa-pinterest">
                </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" target="_blank" title="vimeo" class="text-muted text-hover-primary">
                <i class="fa fa-vimeo">
                </i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
          <h6 class="text-uppercase text-dark mb-3">Langues</h6>
          <ul class="list-unstyled">
          <?php foreach ($footerLanguages as $singleLanguage): ?>
                <li>
                  <a href="<?= $router->generate('language', ['id' => $singleLanguage->getId()]) ?>" class="text-muted"><?= $singleLanguage->getName() ?></a>
                </li>
              <?php endforeach; ?>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
          <h6 class="text-uppercase text-dark mb-3">Etats</h6>
          <ul class="list-unstyled">
          <?php foreach ($footerEtats as $singleEtat): ?>
                <li>
                  <a href="<?= $router->generate('etat', ['id' => $singleEtat->getId()]) ?>" class="text-muted"><?= $singleEtat->getName() ?></a>
                </li>
              <?php endforeach; ?>
          </ul>
        </div>
        <div class="col-lg-4">
          <h6 class="text-uppercase text-dark mb-3">Recevez nos offres promotionnelles</h6>
          <p class="mb-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. At itaque temporibus.</p>
          <form action="#" id="newsletter-form">
            <div class="input-group mb-3">
              <input type="email" placeholder="Votre adresse email" class="form-control bg-transparent border-secondary border-right-0">
              <div class="input-group-append">
                <button type="submit" class="btn btn-outline-secondary border-left-0"><i class="fa fa-paper-plane"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Copyright section of the footer-->
  <div id="footer-copyright" class="py-3">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-3 text-center text-md-left">
          <p class="mb-md-0">Tous droits réservés<br>© 2023 M-book</p>
        </div>
        <div class="col-md-6 text-center">
          <p class="mb-md-0"><a class="text-white" href="<?= $router->generate('legal-mentions')?>">Mentions légales</a><br><a class="text-white" href="#">Conditions générales de vente</a></p>
        </div>

        <div class="col-md-3">
          <ul class="list-inline mb-0 mt-2 mt-md-0 text-center text-md-right">
            <li class="list-inline-item">
              <img src="assets/images/visa.svg" alt="..." class="payment-icon">
            </li>
            <li class="list-inline-item">
              <img src="assets/images/mastercard.svg" alt="..." class="payment-icon">
            </li>
            <li class="list-inline-item">
              <img src="assets/images/paypal.svg" alt="..." class="payment-icon">
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- JS -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/app.js"></script>
</body>

</html>