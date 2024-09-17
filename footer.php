<footer class="themeContainer themeFooter">
    <div class="themeContainer__center">
        <div class="themeFooter__newsletter">
            <div class="themeFooter__newsletter-title">
                <h2>voce quer receber conteudos gratuitos?</h2>
                <div class="themeFooter__newsletter-text">
                    <p>seja o primeiro a receber nossos conteudos sobre wordpressr</p>
                </div>
                <div class="themeFooter__newsletter-icon">
                    <img src="<?= get_stylesheet_directory_uri() . '/assets/images/arrow-down.svg' ?>" alt="" />
                </div>
                <div class="themeFooter__newsletter-form">
                    <?php get_template_part('templates/parts/newsletter/index'); ?>
                </div>
            </div>
        </div>
        <div class="themeFooter__copyright">
            <div class="themeFooter__copyright-logo">
                <img src="<?= get_stylesheet_directory_uri() . '/assets/images/logotipo.svg' ?>" alt="" />
            </div>
            <div class="themeFooter__copyright-text">
                <p>2024 - Fábio Sousa // Todos os direitos reservados</p>
            </div>
            <nav class="themeFooter__copyright-navigation">
                <ul>
                    <li><a href="">Termos de Uso</a> //</li>
                    <li><a href="">Política de Privacidade</a> //</li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>