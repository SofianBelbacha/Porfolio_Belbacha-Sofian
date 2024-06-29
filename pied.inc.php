    <section class="contact_area section_gap_bottom" id="contact_area">
        <div class="container">
            <div class="row no-gutters">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb d-flex justify-content-center mb-1">
                        <li class="breadcrumb-item active">Accueil</li>
                        <li class="breadcrumb-item active" aria-current="page" id="Profil">Contact</li>
                    </ol>
                </nav>
                <h2 class="text-center title-section mb-3">Contact</h2>
                <p class="text-center mb-5">N'hésiter pas à me contacter pour toute renseignement</p>
            </div>
            <div class="col-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2905.3474399897323!2d3.2834153753299264!3d43.26509647744706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b11a930e31872d%3A0xe8fc33e08a0f4834!2sLyc%C3%A9e%20Marc%20Bloch!5e0!3m2!1sfr!2sfr!4v1698225773785!5m2!1sfr!2sfr"
                    class="mapBox" width="1110" height="420" style="border:0; max-width: 100%;" allowfullscreen=""
                     referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="row mt-4">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home d-inline-block"></i>
                            <h6>Béziers, France</h6>
                            <p>rue Saint Vincent de Paul</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="#">33 7 58 97 96 16</a></h6>
                            <p>Mon to Fri 9am to 6 pm</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#">sofianbelbacha@gmail.com</a></h6>
                            <p>Envoyez-nous votre requête à tout moment!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form class="row contact_form" action="contact_process.php" method="post" id="contactForm"
                        novalidate="novalidate">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control border border-dark-subtle" id="name" name="name"
                                    placeholder="Enter your name" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Entrer votre nom'">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border border-dark-subtle" id="email"
                                    name="email" placeholder="Enter email address" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Entrer votre adresse'">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control border border-dark-subtle" id="subject"
                                    name="subject" placeholder="Enter Subject" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Entrer lobjet'">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control border border-dark-subtle" name="message" id="message"
                                    rows="1" placeholder="Enter Message" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Entrer votre message'"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text-end">
                                <button type="submit" value="submit"
                                    class="btn btn-danger btn-md border border-dark-subtle">Envoyer Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">A propos</h2>
                        <p>Je suis une personne très motivé prête à mettre en œuvre mes connaissances pour 
                            répondre à vos besoins en matière de création de sites web.
                        </p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span
                                        class="icon-twitter"></span></a></li>
                            <li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span
                                        class="icon-facebook"></span></a></li>
                            <li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span
                                        class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Liens</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="lnr lnr-arrow-right me-2"></span>Accueil</a></li>
                            <li><a href="#Profil"><span class="lnr lnr-arrow-right me-2"></span>Profil</a></li>
                            <li><a href="#compétences"><span class="lnr lnr-arrow-right me-2"></span>compétence</a></li>
                            <li><a href="#Services"><span class="lnr lnr-arrow-right me-2"></span>service</a></li>
                            <li><a href="#contact_area"><span class="lnr lnr-arrow-right me-2"></span>Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Services</h2>
                        <ul class="list-unstyled">
                            <li><a href="#Services"><span class="lnr lnr-arrow-right me-2"></span>Developpement front-end</a></li>
                            <li><a href="#Services"><span class="lnr lnr-arrow-right me-2"></span>Developpement back-end</a></li>
                            <li><a href="#Services"><span class="lnr lnr-arrow-right me-2"></span>Developpement appli c#</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Des Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Rue st vincent de paul 34500 Béziers</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+33 7 58 97 96 16</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">sofianbelbacha@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="social-media">
                    <a href="#" target="_blank" class="me-3"><img src="image/facebook.png" title="facebook"></a>
                    <a href="#" target="_blank" class="me-3"><img src="image/twitter.png" title="twitter"></a>
                    <a href="#" target="_blank" class="me-3"><img src="image/instagram.png" title="instagram"></a>
        
                </div>
            </div>
        </div>
    </footer>
    <!--loading="lazy"-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>

</html>