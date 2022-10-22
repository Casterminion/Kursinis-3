const createFooter = () => {
    let footer = document.querySelector('footer');

    footer.innerHTML = `
    <footer class="footer-distributed">
    
                <div class="footer-left">
    
                    <img src="img/light-logo.png" class="brand-logo" alt="">
    
                    <p class="footer-links">
                        <a href="index.php" class="link-1">Home</a>
                    
                        <a href="#">About</a>
                        
                        <a href="#">Faq</a>
                        
                        <a href="#">Contact</a>
                    </p>
    
                    <p class="footer-company-name">WISUB © 2022</p>
                </div>
    
                <div class="footer-center">
    
                    <div>
                        <i class="fa fa-map-marker"></i>
                        <p><span>Laisves al. 69 420</span> Kaunas, Lithuania</p>
                    </div>
    
                    <div>
                        <i class="fa fa-phone"></i>
                        <p>+37064883217</p>
                    </div>
    
                    <div>
                        <i class="fa fa-envelope"></i>
                        <p><a href="mailto:support@WISUB.com">support@WISUB.com</a></p>
                    </div>
    
                </div>
    
                <div class="footer-right">
    
                    <p class="footer-company-about">
                        <span>About the company</span>
                        We are all about providing knowledge how to improve your life: mind, body, social, but in the end your work is the thing that matters.
                    </p>
    
                    <div class="footer-icons">
    
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
    
                    </div>
    
                </div>
    
            </footer>`;
}

createFooter();