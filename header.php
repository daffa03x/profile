<?php $req = $_REQUEST['hal']; ?>
<div class="container-fluid">
        <div class="row">
          <div class="col-xs-12">
            <div class="cd-slider-nav">
              <nav class="navbar navbar-expand-lg" id="tm-nav">
                <a class="navbar-brand" href="index.php?hal=home">Profile</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-supported-content" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbar-supported-content">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                      <li class="nav-item <?= ($req == 'home') ? 'selected' : '' ?>">
                        <a class="nav-link" href="index.php?hal=home">Home</a>
                        <div class="circle"></div>
                      </li>
                      <li class="nav-item <?= ($req == 'gallery') ? 'selected' : '' ?>">
                        <a class="nav-link" href="index.php?hal=gallery">Gallery</a>
                        <div class="circle"></div>
                      </li>
                      <li class="nav-item <?= ($req == 'about') ? 'selected' : '' ?>">
                        <a class="nav-link" href="index.php?hal=about">About</a>
                        <div class="circle"></div>
                      </li>
                      <li class="nav-item <?= ($req == 'pendidikan') ? 'selected' : '' ?>">
                        <a class="nav-link" href="index.php?hal=pendidikan">Pendidikan</a>
                        <div class="circle"></div>
                      </li>
                      <li class="nav-item <?= ($req == 'contact') ? 'selected' : '' ?>">
                        <a class="nav-link" href="index.php?hal=contact">Contact</a>
                        <div class="circle"></div>
                      </li>
                    </ul>
                  </div>
              </nav>
            </div>
          </div>          
        </div>        
      </div>