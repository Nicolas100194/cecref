<?php get_header(); ?>
<div class="container-single-article">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="article">
            <p class="info-date-article p">Rédigé le <?php the_date()?></p>
            <h2 class="title-single-article"><?php the_title()?></h2>
            <?php the_content() ?>
        </div>
    <?php endwhile; endif; ?>
</div><?php
// Récupérer le contenu brut du bloc Gutenberg
$footer_content = '<!-- wp:group { "tagName": "footer", "className": ".footer", "layout": { "type": "constrained" }, "metadata": { "name": "Footer" } } -->
<footer class="wp-block-group .footer"><!-- wp:group { "className": "container-footer", "layout": { "type": "flex", "orientation": "vertical" } } -->
<div class="wp-block-group container-footer"><!-- wp:group { "className": "row-top-footer", "layout": { "type": "flex", "flexWrap": "nowrap" } } -->
<div class="wp-block-group row-top-footer"><!-- wp:image { "id": 235, "sizeSlug": "full", "linkDestination": "none" } -->
<figure class="wp-block-image size-full"><img src="http://localhost/cecref/wp-content/uploads/2024/03/Groupe-58.png" alt="" class="wp-image-235"/></figure>
<!-- /wp:image -->

<!-- wp:group { "className": "col-info-footer", "layout": { "type": "flex", "orientation": "vertical" } } -->
<div class="wp-block-group col-info-footer"><!-- wp:heading { "level": 3 } -->
<h3 class="wp-block-heading">Contact</h3>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><!-- wp:list-item -->
<li>03.25.46.01.65</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>14 Allée du Joli Saut 10000 Troyes</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group { "className": "col-info-footer", "layout": { "type": "flex", "orientation": "vertical" } } -->
<div class="wp-block-group col-info-footer"><!-- wp:heading { "level": 3 } -->
<h3 class="wp-block-heading">espace thérapeutique</h3>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><!-- wp:list-item -->
<li><a href="http://localhost/cecref/espace-de-travail/" data-type="page" data-id="36">Espace de travail</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="http://localhost/cecref/espace-consultations/" data-type="page" data-id="48">Espace consultations</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="http://localhost/cecref/espace-de-recherche/" data-type="page" data-id="50">Espace de recherche</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group { "className": "col-info-footer", "layout": { "type": "flex", "orientation": "vertical" } } -->
<div class="wp-block-group col-info-footer"><!-- wp:heading { "level": 3 } -->
<h3 class="wp-block-heading">ressources et contacts</h3>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><!-- wp:list-item -->
<li><a href="#">Modalités pratiques</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="http://localhost/cecref/formulaire-de-contact/" data-type="page" data-id="38">Formulaire de contact</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="http://localhost/cecref/liens/" data-type="page" data-id="42">Liens</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:separator { "className": "separator-footer" } -->
<hr class="wp-block-separator has-alpha-channel-opacity separator-footer"/>
<!-- /wp:separator -->

<!-- wp:group { "className": "row-bottom-footer", "layout": { "type": "flex", "flexWrap": "nowrap" } } -->
<div class="wp-block-group row-bottom-footer"><!-- wp:paragraph { "className": "p-bottom-footer" } -->
<p class="p-bottom-footer">retrouvez l\'actualité du cecref</p>
<!-- /wp:paragraph -->

<!-- wp:buttons { "className": "group-btn" } -->
<div class="wp-block-buttons group-btn"><!-- wp:button { "className": "btn-form-princ btn-footer" } -->
<div class="wp-block-button btn-form-princ btn-footer"><a class="wp-block-button__link wp-element-button">actualité</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->';

// Utiliser do_blocks() pour analyser et afficher le contenu du bloc
echo do_blocks($footer_content);
get_footer();?>