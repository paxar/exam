
*************** plugins ********************
Busted! - unfreeze css changes, caching OFF :-)
*******************************************
*************** новая тема ******************
/*

Theme Name: Rose

Theme URI: домашняя-страница-темы

Description: краткое-описание-темы

Author: ваше-имя

Author URI: ваш-URI

Template: напишите-здесь-наименование-родительской-темы--необязательное-поле

Version: номер-версии--необязательное-поле

.

Развёрнутое описание темы/Лицензия-если-нужно.

.

*/

****************Дочерняя тема*******************
/*
Theme Name: Имя темы
Template: Имя родительского шаблона
Theme URI: http://site.ru/
Description: Описание темы
Author: Имя автора
Author URI: http://site.ru/about/
Version: 1.0
*/

// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}




****************************подключение кастомных страниц**************************
<?php /* Template Name: homepage */ ?>

**************************************************************************************

bloginfo($string) - выводит информацию о сайте

wp_title( $sep, $echo, $seplocation ) - выводит или возвращает заголовок страницы

*************************************************

wp_head() - запускает одноименный экшн (action), необходима для корректной работы темы и отдельных плагинов

*************************************************

wp_footer() - запускает одноименный экшн (action), необходима для корректной работы темы и отдельных плагинов

*************************************************

add_action( $tag, $function_to_add, $priority, $accepted_args ) - цепляет функцию на указанный экшн

*************************************************

wp_enqueue_script( $handle, $src, $deps, $ver ) - безопасно подключает скрипт к странице

wp_enqueue_style( $handle, $src, $deps, $ver, $media ) - ставит файл CSS стилей в очередь на загрузку

*************************************************

register_sidebar( $args ) - регистрирует новую панель для виджетов WordPress в пользовательской теме оформления

*************************************************

add_theme_support( $feature, $formats ) - позволяет темам или плагинам регистрировать поддержку новых возможностей

add_theme_support('post-thumbnails') - позволяет устанавливать миниатюру посту

set_post_thumbnail_size( $width, $height, $crop ) - устанавливает размер миниатюры поста по умолчанию

has_post_thumbnail( $post_id ) - условный тег, проверяющий имеет ли пост картинку миниатюру

the_post_thumbnail( $size, $attr ) - выводит html код картинки-миниатюры поста

*************************************************

register_post_type( $post_type, $args ) - создает новый или изменяет имеющийся тип записи

*************************************************

**Цикл WP**

<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        //
        // Post Content here
        //
    } // end while
} // end if
?>

**Цикл WP с WP_Query**

<?php
// the query
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

    <!-- pagination here -->

    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <h2><?php the_title(); ?></h2>
    <?php endwhile; ?>
    <!-- end of the loop -->

    <!-- pagination here -->

    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


*********************Вывод полей поста****************************

the_permalink() - выводит ссылку на текущий пост

the_author() - выводит имя автора поста

the_time() - выводит на экран время (дату) публикации текущего поста

comments_popup_link( $zero, $one, $more, $css_class, $none ) - ссылка на комментарии

the_title( $before, $after, $echo ) - выводит на экран или возвращает заголовок записи

the_excerpt() - выводит отрывок (цитату) поста, со вставкой в конец [...]

the_content( $more_link_text, $strip_teaser ) - выводит контент текущего поста

comments_template( $file, $separate_comments ) - подгружает файл шаблона комментариев

previous_post_link($format, $link, $in_same_cat = false, $excluded_categories = '') - выводит ссылку на предыдущий пост

next_post_link($format, $link, $in_same_cat, $excluded_categories) - выводит ссылку на следующий пост

*************************** Подключение частей страницы *******************************
get_header( $name ) - подключает файл шаблона header.php

get_sidebar( $name ) - подключает файл шаблона sidebar.php

get_footer( $name ) - подключает файл шаблона footer.php

****************************** Подключение NAV menu **************************

<div> // верстка

    <?php wp_nav_menu( array(
        'theme_location' => 'top-menu',  // Имя меню
        'container' => '',
        'menu_class'=> 'mainmenu',  // Класс меню
        'items_wrap' => '<ul id="scroll" class="nav navbar-nav navbar-right">%3$s</ul>' // задаём классы списка например bootstrap
    ) ); ?>

    Functions.php регистрация меню
    // This theme uses wp_nav_menu( 'top-menu', 'NameMenu') in one location.
    register_nav_menus( array(
    'top-menu' => esc_html__( 'Primary', 'nava' ),
    ) );

    Достать значения произвольных полей поста

<?php echo '<div>' . get_post_meta($post->ID, 'user_submit_name', true) . '</div>'; ?>

    <?php echo get_post_meta($post->ID, 'location', true); ?>
