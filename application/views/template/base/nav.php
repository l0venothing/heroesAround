 <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse navi">
            <div class="container">
                <div class="col-md-4">
                    <img src="<?php echo base_url('assets/img/Untitled-2-02.png') ?>" id="logo">
                </div>
                <div class="col-md-7 col-md-offset-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="links" href="<?=base_url('#accueil');?>">Accueil</a></li>
                        <li><a class="links" href="<?=base_url('#heroes');?>">Notre technologie</a></li>
                        <li><a class="links" href="<?=base_url('#appli');?>">Télécharger</a></li>
                        <li><a class="links" href="<?=base_url('#contact');?>">Contact</a></li>
                        <li><a class="langues" href="<?=base_url('#contact');?>">FR</a></li>
                        <li><a class="langues" href="<?=base_url('#contact');?>">NL</a></li>
                        <li><a class="langues" href="<?=base_url('#contact');?>">EN</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>