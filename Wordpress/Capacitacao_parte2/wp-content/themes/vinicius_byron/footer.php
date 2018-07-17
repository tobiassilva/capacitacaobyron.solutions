    <footer id="footer">
        <div class="redes_sociais">
            <a href="<?php echo esc_attr(get_option('capacitacao_facebook')); ?>">
                <i class="fa fa-facebook-official" aria-hidden="true"></i>
            </a>
            <a href="<?php echo esc_attr(get_option('capacitacao_github')); ?>">
                <i class="fa fa-github" aria-hidden="true"></i>
            </a>
            <a href="<?php echo esc_attr(get_option('capacitacao_instagram')); ?>">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
        </div>
        <div class="sociais_info">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <p> <?php echo esc_attr(get_option('capacitacao_email')); ?> </p>
            <p>Desenvolvido por <a href="http://byron.solutions/">byron.solutions</a></p>
        </div>
    </footer>
    <?php wp_footer(); ?>
    
</body>

</html>