<?php

function ajax_pagination_artist_svl($atts)
{
    $atts = shortcode_atts(
        array(
            'posts_per_page' => 12,
            'paged' => 1,
            'post_type' => 'post',
            'cat' => 19,
            'orderby'   => array(
                'modified' => 'DESC', 
                'date'     => 'DESC', 
            ),
             "order" => "DESC"
        ),
        $atts,
        'ajax_pagination_artist'
    );
    $posts_per_page = intval($atts['posts_per_page']);
    $paged = intval($atts['paged']);
    $cat = intval($atts['cat']);
    $post_type = sanitize_text_field($atts['post_type']);
    $allpost  = '<div id="result_ajaxp_new">';
    $allpost .= query_ajax_pagination_artist($post_type, $cat, $posts_per_page, $paged);
    $allpost .= '</div>';
    return $allpost;
}
add_shortcode('ajax_pagination_artist', 'ajax_pagination_artist_svl');
function query_ajax_pagination_artist($post_type = 'post', $cat = 19, $posts_per_page = 12, $paged = 1)
{
    $args_svl = array(
        'post_type' => $post_type,
        'posts_per_page' => $posts_per_page,
        'cat' => $cat,
        'paged' => $paged,
        'post_status' => 'publish',
        'orderby'   => array(
            'modified' => 'DESC', 
            'date'     => 'DESC', 
        ),
        "order" => "DESC"
    );
    $q_svl = new WP_Query($args_svl);
    $total_records = $q_svl->found_posts;
    $total_pages = ceil($total_records / $posts_per_page);
    if ($q_svl->have_posts()) {
        $allpost = '<div class="row pb-paginate position-relative ajax_pagination_artist" cat="'. $cat .'" posts_per_page="' . $posts_per_page . '" post_type="' . $post_type . '">';
        while ($q_svl->have_posts()) {
            $q_svl->the_post();
            $post_id = get_the_ID();
            $custom_link = get_post_meta(get_the_ID(), '_custom_link', true);
            $artist = get_post_meta(get_the_ID(), '_artist_name', true);
            $post_slug = get_post_field('post_name', get_the_ID());
            $content = get_the_content(); 
            $content_without_shortcodes = strip_shortcodes($content);
            $clean_content = wp_strip_all_tags($content_without_shortcodes);
            $trimmed_content = wp_trim_words($clean_content, 50, '...');
            $allpost .= '<div class="col-lg-3 col-md-6 col-6">';
            $allpost .= '<a href="' . esc_url(home_url('/detail/')) . $post_slug . '">';
            $allpost .= '<div class="box-content-main">';
            $allpost .= '<div class="box-image">';
            $allpost .= '<img src="' . get_the_post_thumbnail_url($post_id) . '" alt="Image Description" class="image-home-artist">';
           
$current_time = current_time('timestamp');
$post_time = get_the_time('U', $post_id);
$post_modified_time = get_the_modified_time('U', $post_id);

$five_minutes_ago = strtotime('-5 minutes', $current_time);
if ($post_time >= $five_minutes_ago || $post_modified_time >= $five_minutes_ago) {
    $allpost .= '<div class="labels">';
    $allpost .= '<div class="box-new d-none-sm">';
    $allpost .= '<span class="">New</span>';
    $allpost .= '</div>';
    $allpost .= '<div class="box-artist-new">';
    $allpost .= '<a href="'. (!empty($custom_link) ? $custom_link : "#").'" target="_blank" rel="noopener noreferrer" class="artist">Artist: <span>'. (!empty($artist) ? $artist : get_the_author()).'</span></a>';
    $allpost .= '</div>';
    $allpost .= '<div class="box-new d-mobile">';
    $allpost .= '<span class="">New</span>';
    $allpost .= '</div>';
    $allpost .= '</div>';
} else {
    $allpost .= '<div class="labels">';
    $allpost .= '<div class="box-artist-new">';
    $allpost .= '<a href="'. (!empty($custom_link) ? $custom_link : "#").'" target="_blank" rel="noopener noreferrer" class="artist">Artist: <span>'. (!empty($artist) ? $artist : get_the_author()).'</span></a>';
    $allpost .= '</div>';
    $allpost .= '</div>';
}

$allpost .= '</div>'; 
$allpost .= '<div class="box-content-artist">';
$allpost .= '<h3 class="home-title-artist text-center">'. get_the_title() .'</h3>';
$allpost .= '<p class="ml-2 home-content-artist text-sm text-center">'. $trimmed_content .'</p>';
$allpost .= '</div>';
$allpost .= '</div>';
$allpost .= '</a>';
$allpost .= '</div>';
            
?>

<?php
        }
        $allpost .= paginate_function_artist($posts_per_page, $paged, $total_records, $total_pages);
        $allpost .= '<div class="loading_ajaxp"><div id="circularG"><div id="circularG_1" class="circularG"></div><div id="circularG_2" class="circularG"></div><div id="circularG_3" class="circularG"></div><div id="circularG_4" class="circularG"></div><div id="circularG_5" class="circularG"></div><div id="circularG_6" class="circularG"></div><div id="circularG_7" class="circularG"></div><div id="circularG_8" class="circularG"></div></div></div>';
        $allpost .= "</div>";
    }
    wp_reset_query();
    return $allpost;
}

function paginate_function_artist($item_per_page, $current_page, $total_records, $total_pages)
{
    $pagination = '';
    if ($total_pages > 0 && $total_pages != 1 && $current_page <= $total_pages) { // kiểm tra tổng số trang và số trang hiện tại
        $pagination .= '<ul class="pagination artist justify-content-center">';
        $right_links = $current_page + 3;
        $previous = $current_page - 1; // liên kết trang trước
        $next = $current_page + 1; // liên kết trang kế tiếp
        $first_link = true; // biến boolean để quyết định liên kết đầu tiên

        if ($current_page > 1) {
            $previous_link = ($previous < 1) ? 1 : $previous;
            $pagination .= '<li><a href="#" data-page="' . $previous_link . '" title="Previous"><i class="fa-solid fa-arrow-left"></i></a></li>'; // liên kết trang trước
            for ($i = ($current_page - 2); $i < $current_page; $i++) { // tạo liên kết trang bên trái
                if ($i > 0) {
                    $pagination .= '<li><a href="#" data-page="' . $i . '" title="Page ' . $i . '">' . $i . '</a></li>';
                }
            }
            $first_link = false; // đặt liên kết đầu tiên thành false
        }

        if ($first_link) { // nếu trang hiện tại là liên kết đầu tiên
            $pagination .= '<li class="first active">' . $current_page . '</li>';
        } elseif ($current_page == $total_pages) { // nếu trang hiện tại là trang cuối cùng
            $pagination .= '<li class="last active">' . $current_page . '</li>';
        } else { // liên kết trang hiện tại bình thường
            $pagination .= '<li class="active">' . $current_page . '</li>';
        }

        for ($i = $current_page + 1; $i < $right_links; $i++) { // tạo liên kết trang bên phải
            if ($i <= $total_pages) {
                $pagination .= '<li><a href="#" data-page="' . $i . '" title="Page ' . $i . '">' . $i . '</a></li>';
            }
        }

        if ($current_page < $total_pages) {
            $next_link = ($current_page + 1 > $total_pages) ? $total_pages : $current_page + 1;
            $pagination .= '<li><a href="#" data-page="' . $next_link . '" title="Next"><i class="fa-solid fa-arrow-right"></i></a></li>'; // liên kết trang kế tiếp
        }

        $pagination .= '</ul>';
    }
    return $pagination; // trả về các liên kết phân trang
}

/** Xử lý Ajax trong WordPress */
add_action('wp_ajax_LoadPostPaginationArtist', 'LoadPostPaginationArtist_init');
add_action('wp_ajax_nopriv_LoadPostPaginationArtist', 'LoadPostPaginationArtist_init');
function LoadPostPaginationArtist_init()
{
    $posts_per_page = intval($_POST['posts_per_page']);
    $paged = intval($_POST['data_page']);
    $cat = intval($_POST['cat']);
    $post_type = sanitize_text_field($_POST['post_type']);
    $allpost = query_ajax_pagination_artist($post_type, $cat, $posts_per_page, $paged);
    echo $allpost;
    exit;
}
add_action('wp_enqueue_scripts', 'devvn_useAjaxPaginationArtist', 1);
function devvn_useAjaxPaginationArtist()
{
    /** Thêm js vào website */
    wp_enqueue_script('devvn-ajax-artist', esc_url(trailingslashit(get_stylesheet_directory_uri()) . 'AjaxPaginationArtist/ajax_pagination.js'), array('jquery'), '1.0', true);
    $php_array = array(
        'admin_ajax' => admin_url('admin-ajax.php')
    );
    wp_localize_script('devvn-ajax-artist', 'svl_array_ajaxp_artist', $php_array);
    /*Thêm css vào website*/
    wp_enqueue_style('ajaxp', get_stylesheet_directory_uri() . '/AjaxPaginationArtist/Ajax_pagination.css', [], '1.0.0');

}
