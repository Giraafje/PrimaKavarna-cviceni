<footer>
        <div class="brownFooter">
            <div class="container">
                <div class="menuFooter" class="footerBox">
                    <h3>Menu</h3>
                    <ul>
                        <li><a href="<?php echo get_option('home'); ?>/">o nás</a></li>
                        <li><a href="<?php echo get_option('home'); ?>/nabidka">nabídka</a></li>
                        <li><a href="<?php echo get_option('home'); ?>/kontakt">kontakt</a></li>
                        <li><a href="<?php echo get_option('home'); ?>/rezervace">rezervace</a></li>
                        <li><a href="<?php echo get_option('home'); ?>/blog">novinky</a></li>
                        <li class="facebookItem"><a href="#">facebook</a></li>
                    </ul>
                </div>
                <div class="kontaktFooter" class="footerBox">
                    <h3>Kontakt</h3>
                    <p>PrimaKavárna</p>
                    <p>Jablonského 2, Praha</p>
                    <p>Holešovice</p>
                </div>
                <div class="otevDobaFooter" class="footerBox">
                    <h3>Otevírací doba</h3>
                    <p><strong>Po - Pá:</strong> 8h - 20h</p>
                    <p><strong>So:</strong> 10h - 22h</p>
                    <p><strong>Ne:</strong> 12h - 20h</p>
                </div>
                <div class="fbPluginFooter" class="footerBox">
                <div class="fb-page" data-href="https://www.facebook.com/primakurzy" data-tabs="" data-width="340" data-height="155" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/primakurzy" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/primakurzy">PrimaKurzy.cz</a></blockquote></div>
                </div>
            </div>
        </div>
        <div class="whiteFooter">
            <div class="container">
                <div class="copyright">
                    <p>&copy; copyright 2020<strong> PrimaKavárna <span>/</span> <a href="#">Ochrana osobních údajů</a> <span>/</span> <a href="#">O cookies</a></strong></p>
                </div>
                <div class="createdBy">
                    <p>Vytvořila: <strong><a href="#" target="_blank">Lenka Erbenová</a></strong></p>
                </div>
            </div>
        </div>
    </footer>
    <script>
        document.getElementById('mmenu').addEventListener('click', checkNav);
        window.addEventListener("keyup", function(e) {
            if (e.keyCode == 27) closeNav();
        }, false);
        
        function checkNav() {
            if (document.body.classList.contains('mmenu-active')) {
            closeNav();
            } else {
            openNav();
            }
        }
        
        function closeNav() {
            document.body.classList.remove('mmenu-active');
        }
        
        function openNav() {
            document.body.classList.add('mmenu-active');
        }
    </script>

    <?php wp_footer(); ?>

</body>
</html>