<?php
/**
 * Blog post entry meta component
 * @package Aquila
 */

if(is_single()){
    ?>
    <div class="entry-meta my-3">
        <?php
        aquila_posted_on();
        aquila_posted_by();
        ?>
    </div>
    <?php
}
else {
    ?>
    <div class="entry-meta mb-3">
        <?php
        aquila_posted_on();
        aquila_posted_by();
        ?>
    </div>
<?php
}
?>

