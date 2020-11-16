<!DOCTYPE html>
<html lang="en" class='no-js'>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!--for mobile ready-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="apple-touch-icon" sizes="57x57" href="images/pngs/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="images/pngs/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="images/pngs/apple-touch-icon-114x114.png" />

    <meta name="description" content="Description of content that contains top keyword phrases">
    </meta>
    <meta name="keywords" content="Key words and phrases, comma separated, not directly used in content - google ignores this tag but used in other engines as a fall back">
    </meta>

    <title>Open Source Online Magazine</title>

    <!--//style sheets-->
    <link media="all" rel="stylesheet" type="text/css" href="style.css" />
    <!-- <link media="all" rel="stylesheet" type="text/css" href="/\?php bloginfo('stylesheet_url'); ?/\" /> -->

    <!--//javascripts-->
    <script src="js/modernizr.custom.20796.js"></script>

    <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <link media="all" rel="stylesheet" type="text/css" href="css/style-ie.css" />
<![endif]-->

</head>

<body <?php body_class($class); ?>>
    <div id="container">
        <header class="">
            <hgroup class="screen-reader-text">
                <h1>OpenSource</h1>
                <h2>Online Magazine</h2>

                <p><em>Using Open Source for work and play</em></p>
            </hgroup>
        </header>
        <div id="container2" class="bdr bdr-top">

            <div class="content left two-thirds">
                <h2 class="thisMonth embossed" style="color:#fff;">This Month:</h2>

                <?php if (have_posts()) :?>
                <?php while (have_posts()) : the_post();?>
                
                <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    <h2 class="post-title">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                            <?php the_title();?>
                        </a>
                    </h2>
                    <p class="entry-meta">by <?php the_author_meta('first_name'); ?>
                        <?php the_author_meta('last_name'); ?> in <?php the_category(", "); ?>
                    </p>

                    <div class="entry-content">
                        <!--//post-->
                        <?php the_content();?>
                    </div>
                    <!--//.entry-content-->

                    <p class="left"><a class="more" href="<?php the_permalink()?>">Read more &raquo;</a></p>
                    <p class="right"><a class="comments" href="#">150</a></p>
                    <div class="push"></div>
                </article>

                <?php endwhile; ?>
                <?php else : ?>
                <h2 class="center">Not Found</h2>
                <p class="center">Sorry, but you are looking for something that isn't here.</p>
                <?php get_search_form(); ?>
                <?php endif; ?>

                <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    <h2 class=""><a href="#">Really Long Article Title Name The More Text The Better Cause You Never Know</a></h2>
                    <p class="entry-meta">by Author Name for <a href="#">Column Type</a></p>

                    <div class="entry-content">
                        <!--//post-->
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed a eros nec orci volutpat vestibulum. Ut pellentesque sagittis metus. In euismod tellus id ante.</p>

                    </div>
                    <!--//.entry-content-->
                    <p class="left"><a class="more" href="#">Read more &raquo;</a></p>
                    <p class="right"><a class="comments" href="#">150</a></p>
                    <div class="push"></div>
                </article>

                <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    <h2 class=""><a href="#">Really Long Article Title Name The More Text The Better Cause You Never Know</a></h2>
                    <p class="entry-meta">by Author Name for <a href="#">Column Type</a></p>

                    <div class="entry-content">
                        <!--//post-->
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed a eros nec orci volutpat vestibulum. Ut pellentesque sagittis metus. In euismod tellus id ante.</p>


                    </div>
                    <!--//.entry-content-->
                    <p class="left"><a class="more" href="#">Read more &raquo;</a></p>
                    <p class='right'>
                        <a class='comments-count' href='<?php the_permalink() ?>'><?php comments_number('0', '1', '%')?></a>
                    </p>
                    <div class="push"></div>
                </article>

                <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    <h2 class=""><a href="#">Really Long Article Title Name The More Text The Better Cause You Never Know</a></h2>
                    <p class="entry-meta">by Author Name for <a href="#">Column Type</a></p>

                    <div class="entry-content">
                        <!--//post-->
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed a eros nec orci volutpat vestibulum. Ut pellentesque sagittis metus. In euismod tellus id ante.</p>

                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed a eros nec orci volutpat vestibulum. Ut pellentesque sagittis metus. In euismod tellus id ante.</p>


                    </div>
                    <!--//.entry-content-->
                    <p class="left"><a class="more" href="#">Read more &raquo;</a></p>
                    <p class='right'>
                        <a class='comments-count' href='<?php the_permalink() ?>'><?php comments_number('0', '1', '%')?></a>
                    </p>
                    <div class="push"></div>
                </article>

                <div class="push"></div>
            </div>
            <!--content-->


            <!-- #left sidebar -->
            <aside class="sidebar right third">
                <div class="bdr grd-vt-main rnd shdw-centered">
                    <h2 class="features embossed">Features:</h2>
                    <ul class="tocNav">
                        <li><a href="#">Article Name 01 Lorem ipsum dolor sit amet consectetuer adipiscing elit</a></li>
                        <li><a href="#">Article Name 02 Lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">Article Name 03 Lorem ipsum</a></li>
                    </ul>
                </div>
                <div class="bdr grd-vt-secondary rnd shdw-centered">
                    <h2 class="columns embossed">Columns:</h2>
                    <ul class="tocNav">
                        <li><a href="#">Name of Category 01 Lorem ipsum (#)</a></li>
                        <li><a href="#">Name of Category 02 Lorem (#)</a></li>
                        <li><a href="#">Name of Category 03 Lorem ipsum dolor (#)</a></li>
                    </ul>
                </div>
                <div class="bdr bg-light2 rnd shdw-centered">
                    <h2 class="pastIssues embossed">Past Issues:</h2>
                    <ul class="tocNav">
                        <li><a href="#">Archive Link year/month 01</a></li>
                        <li><a href="#">Archive Link year/month 02</a></li>
                        <li><a href="#">Archive Link year/month 03</a></li>
                    </ul>
                </div>
                <div class="push"></div>
            </aside>
            <!--//.sidebar1  -->


            <div class="push"></div>

        </div>
        <!--//#container2-->

        <nav id="mainNav" class="grd-vt-tertiary shdw-centered">
            <h2 class="screen-reader-text">Main Navigation:</h2>
            <ul class="sfTab">
                <li class="current_page_item"><a href="#">The Zine</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Resources</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <!--//top_navlist-->