<?php
/**
 * Footer file
 * @package Aquila
 */
?>

        <footer>
            <h3>Footer</h3>
            <?php
                if(is_active_sidebar( 'footer-sidebar' )) {
                    ?>
                    <aside>
                        <?php
                            dynamic_sidebar('footer-sidebar');
                        ?>
                    </aside>
                    <?php
                }
            ?>
        </footer>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
