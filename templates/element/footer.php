
<footer class="footer">
        <div class="row px-5">
            <!-- Important Links -->
            <div class="col-md-4">
                <h5>Important Links</h5>
                <ul class="list-unstyled">
                    <li class = "mt-3 mx-3 sf"><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#ffffff"><path d="m240-240 172-240-172-240h96l172 240-172 240h-96Zm212 0 172-240-172-240h97l171 240-171 240h-97Z"/></svg> <?= $this->Html->link('Lawyers', ['controller' => 'Searchdirectory', 'action' => 'lawyers'], ['class' => 'text-white']) ?></li>
                    <li class = "mt-3 mx-3 sf"><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#ffffff"><path d="m240-240 172-240-172-240h96l172 240-172 240h-96Zm212 0 172-240-172-240h97l171 240-171 240h-97Z"/></svg> <?= $this->Html->link('Law Firms', ['controller' => 'Searchdirectory', 'action' => 'contactus'], ['class' => 'text-white']) ?></li>
                    <li class = "mt-3 mx-3 sf"><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#ffffff"><path d="m240-240 172-240-172-240h96l172 240-172 240h-96Zm212 0 172-240-172-240h97l171 240-171 240h-97Z"/></svg> <?= $this->Html->link('Practice Areas', ['controller' => 'Searchdirectory', 'action' => 'contactus'], ['class' => 'text-white']) ?></li>
                    <li class = "mt-3 mx-3 sf"><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#ffffff"><path d="m240-240 172-240-172-240h96l172 240-172 240h-96Zm212 0 172-240-172-240h97l171 240-171 240h-97Z"/></svg> <?= $this->Html->link('Law Articles', ['controller' => 'Searchdirectory', 'action' => 'contactus'], ['class' => 'text-white']) ?></li>
                </ul>
            </div>

            <!-- Useful Links -->
            <div class="col-md-4">
                <h5>Useful Links</h5>
                <ol class="list-unstyled">
                    <li class="mt-3 mx-3 sf">
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#ffffff">
                            <path d="m240-240 172-240-172-240h96l172 240-172 240h-96Zm212 0 172-240-172-240h97l171 240-171 240h-97Z"/>
                        </svg>
                        <?= $this->Html->link('About Us', ['controller' => 'Gld', 'action' => 'aboutus'], ['class' => 'text-white']) ?>
                    </li>                    
                    <li class = "mt-3 mx-3 sf"><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#ffffff"><path d="m240-240 172-240-172-240h96l172 240-172 240h-96Zm212 0 172-240-172-240h97l171 240-171 240h-97Z"/></svg>                        <?= $this->Html->link('Contact us', ['controller' => 'Gld', 'action' => 'contactus'], ['class' => 'text-white']) ?>
                    </li>
                    <li class = "mt-3 mx-3 sf"><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#ffffff"><path d="m240-240 172-240-172-240h96l172 240-172 240h-96Zm212 0 172-240-172-240h97l171 240-171 240h-97Z"/></svg>                        <?= $this->Html->link('FAQs', ['controller' => 'Gld', 'action' => 'faq'], ['class' => 'text-white']) ?>
                    </li>
                    <li class = "mt-3 mx-3 sf"><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#ffffff"><path d="m240-240 172-240-172-240h96l172 240-172 240h-96Zm212 0 172-240-172-240h97l171 240-171 240h-97Z"/></svg>                        <?= $this->Html->link('Terms and Conditions', ['controller' => 'Gld', 'action' => 'termsNdConditions'], ['class' => 'text-white']) ?>
                    </li>
                    <li class = "mt-3 mx-3 sf"><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#ffffff"><path d="m240-240 172-240-172-240h96l172 240-172 240h-96Zm212 0 172-240-172-240h97l171 240-171 240h-97Z"/></svg>                        <?= $this->Html->link('Privacy Policy', ['controller' => 'Gld', 'action' => 'privacyPolicy'], ['class' => 'text-white']) ?>
                    </li>
                    <li class = "mt-3 mx-3 sf"><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#ffffff"><path d="m240-240 172-240-172-240h96l172 240-172 240h-96Zm212 0 172-240-172-240h97l171 240-171 240h-97Z"/></svg>                        <?= $this->Html->link('Legal Disclaimer', ['controller' => 'Gld', 'action' => 'legalDisclaimer'], ['class' => 'text-white']) ?>
                    </li>
                </ol>
            </div>

            <!-- Newsletter & Social Links -->
            <div class="col-md-4">
                <h5>Subscribe to Our Newsletter</h5>
                <form>
                    <input type="email" class = "form-control" placeholder="Enter email address">
                    <div class = "d-flex justify-content-end">
                    <button class=" btn btn-success bg-success text-white " type="submit">Subscribe</button>
</div>
                </form>
                <h5>Connect With Us</h5>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="row">
            <div class="col-12">
                <div class="copyright">
                    <p class="mb-0">Copyright © Global Law Directories, 2011-2024 | All Rights Reserved</p>
                    <p class="mb-0">Designed & Developed By Aritone Global Ventures Pvt. Ltd.</p>
                </div>
            </div>
        </div>
</footer>

