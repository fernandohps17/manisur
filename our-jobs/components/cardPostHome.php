<?php

// Funcion encargada de muestrar el template de cada Card de la lista de Posts
function card_post($title_en, $img_mobile, $img_mobile_web, $description_en, $uri, $fecha, $id, $seo, $login)
{

    if ($seo === 'true') {
        $path = "/$uri/";
    } else {
        $path = "/our-jobs/post/$uri/";
    }



    echo    "<a href='" . $path . "' title='" . html_entity_decode($title_en) . "' class='img-post'>
        <div class='blog_post_card'>

            <div class='blog_post_card_img'>
                <picture class='picture-defer'>
                    <source class='image source' type='image/webp' data-img='/public/img/blog/$uri/$img_mobile_web' media='(max-width: 700px)'>
                    <img class='image' data-img='/public/img/blog/$uri/$img_mobile' alt='" . html_entity_decode($title_en) . "'  width='100' height='100'>
                </picture>
            </div>

            </a>
            <div class='blog_post_card_content'>
                <div class='blog_post_card_content_title'>
                    <h2 itemprop='name'>" . html_entity_decode($title_en) . "</h2>
                </div>
                <div class='blog_post_card_content_subtitle'>
                    <p itemprop='articleBody'>" . html_entity_decode($description_en) . "</p>
                </div>
            </div>

        </div>";
}
