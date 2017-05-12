<div class="bg-contact">
    <div class="container">
        <h1 class="text-center titre-contact">Contact</h1>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <form action="<?=base_url('contact/index')?>" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <div class="col-md-4">
                            <input type="text" name="nom" value="" id="contact-nom" placeholder="Votre nom" class="form-control input-contact" style="width: 100%;">
                            <input type="text" name="prnom" value="" id="contact-prenom" placeholder="Votre prénom" class="form-control input-contact" style="width: 100%;">
                            <input type="text" name="email" value="" id="contact-email" placeholder="Votre email" class="form-control input-contact" style="width: 100%;">
                        </div>
                        <div class="col-md-8">
                            <textarea name="message" rows="5" type="text" id="message-contact" class="form-control" placeholder="Votre message"></textarea>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-large btn-block btn-danger input-contact" id="btnContact" value="Envoyer">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>