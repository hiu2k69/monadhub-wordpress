<?php

function ajax_pagination_type_svl($atts)
{
    $atts = shortcode_atts(
        array(
            'posts_per_page' => 4,
            'paged' => 1,
            'post_type' => 'post',
            "cat" => 22,
            "type" => 'serialized-manga', // Đặt giá trị mặc định
        ),
        $atts,
        'ajax_pagination_type'
    );

    $posts_per_page = intval($atts['posts_per_page']);
    $paged = intval($atts['paged']);
    $post_type = sanitize_text_field($atts['post_type']);
    $cat = intval($atts['cat']);
    $type = sanitize_text_field($atts['type']); // Sử dụng giá trị 'type' từ shortcode

    // Cấu trúc lại 'tax_query' để sử dụng đúng 'type'
    $tax_query = array(
        array(
            'taxonomy' => 'type',
            'field' => 'slug',
            'terms' => $type,
        ),
    );

    $allpost  = '<div  class="result_ajaxp_type tab_'.$type.'" >';
    $allpost .= query_ajax_pagination_type($post_type, $cat, $type, $posts_per_page, $paged);
    $allpost .= '</div>';
    return $allpost;
}
add_shortcode('ajax_pagination_type', 'ajax_pagination_type_svl');
function query_ajax_pagination_type($post_type = 'post',$cat = 22, $type="" , $posts_per_page = 1, $paged = 1)
{
    $args_svl = array(
        "post_type" => "post",
        "cat" => $cat,
        "tax_query" => [
            [
                "taxonomy" => "type",
                "field" => "slug",
                "terms" => $type,
            ],
        ],
        "posts_per_page" => $posts_per_page,
        "paged" => $paged,
    );
    $q_svl = new WP_Query($args_svl);

    /*Tổng bài viết trong query trên*/
    $total_records = $q_svl->found_posts;
    /*Tổng số page*/
    $total_pages = ceil($total_records / $posts_per_page);
    if ($q_svl->have_posts()) {  
        $allpost = '<div class="row pb-paginate position-relative ajax_pagination_type_'.$type.'"  posts_per_page="' . $posts_per_page . '" cat="'.$cat.'" type="' . $type . '" post_type="' . $post_type . '">';
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
            $allpost .= '  <div class="col-lg-4 col-md-6 col-12">';
            $allpost .= '<a href="' . esc_url(home_url('/detail/')) . $post_slug . '">';
            $allpost .= ' <div class="box-content-main">';
            $allpost .= '  <div class="box-image">';
            $allpost .= '<img src="' . get_the_post_thumbnail_url($post_id) . '" alt="Image Description" class="image-home">';
            $allpost .= '<div class="box-artist">';
            $allpost .= ' <a href="'. (!empty($custom_link) ? $custom_link : "#").'" target="_blank" rel="noopener noreferrer" class="artist">Creator: <span>'. (!empty($artist) ? $artist : get_the_author()).'</span></a>';
            $allpost .= '  </div>';
            $allpost .= ' <div class="box-content">';
            $allpost .= ' <h3 class="home-title">'. get_the_title().'</h3>';
            $allpost .= '  <p class="ml-2 home-content">'. $trimmed_content .'</p>';
            $allpost .= '  <span class="text-secondary-foreground flex align-items-center d-none-time">';
            $allpost .= '<i class="fa-solid fa-user-pen"></i>&nbsp; Last update ' . esc_html(get_the_date()) . ' &nbsp; <span class="text"> <span class="by-t">by</span>&nbsp; <span class="text-primary ml-1">' . (!empty($artist) ? $artist : get_the_author()) . '</span></span>';
            $allpost .= '   </span>';
            $allpost .= '  <span class="text-secondary-foreground flex align-items-center d-mobile">';
            $allpost .= '<i class="fa-solid fa-user-pen"></i> &nbsp; ' . esc_html(get_the_date()) . ' &nbsp; <span class="text"><span class="by-t">-</span>&nbsp;  <span class="text-primary ml-1">' . (!empty($artist) ? $artist : get_the_author()) . '</span></span>';
            $allpost .= '   </span>';
            $allpost .= '</div>';
            $allpost .= '</div>';
            $allpost .= '</div>';
            $allpost .= '</a>';
            $allpost .= '</div>';
?>

<?php
        }
        $allpost .= paginate_type_function($posts_per_page, $paged, $total_records, $total_pages, $type);
        // $allpost .= '<div class="loading_ajaxp"><div id="circularG"><div id="circularG_1" class="circularG"></div><div id="circularG_2" class="circularG"></div><div id="circularG_3" class="circularG"></div><div id="circularG_4" class="circularG"></div><div id="circularG_5" class="circularG"></div><div id="circularG_6" class="circularG"></div><div id="circularG_7" class="circularG"></div><div id="circularG_8" class="circularG"></div></div></div>';
        $allpost .= "</div>";
    }
    wp_reset_query();
    return $allpost;
}

function paginate_type_function($item_per_page, $current_page, $total_records, $total_pages, $type)
{
    $pagination = '';
    if ($total_pages > 0 && $total_pages != 1 && $current_page <= $total_pages) { // kiểm tra tổng số trang và số trang hiện tại
        $pagination .= '<ul class="pagination justify-content-center">';
        $right_links = $current_page + 3;
        $previous = $current_page - 1; // liên kết trang trước
        $next = $current_page + 1; // liên kết trang kế tiếp
        $first_link = true; // biến boolean để quyết định liên kết đầu tiên

        if ($current_page > 1) {
            $previous_link = ($previous < 1) ? 1 : $previous;
            $pagination .= '<li><a href="#" data-slug="'.$type.'" data-page="' . $previous_link . '" title="Previous"><i class="fa-solid fa-arrow-left"></i></a></li>'; // liên kết trang trước
            for ($i = ($current_page - 2); $i < $current_page; $i++) { // tạo liên kết trang bên trái
                if ($i > 0) {
                    $pagination .= '<li><a href="#" data-slug="'.$type.'" data-page="' . $i . '" title="Page ' . $i . '">' . $i . '</a></li>';
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
                $pagination .= '<li><a href="#" data-slug="'.$type.'" data-page="' . $i . '" title="Page ' . $i . '">' . $i . '</a></li>';
            }
        }

        if ($current_page < $total_pages) {
            $next_link = ($current_page + 1 > $total_pages) ? $total_pages : $current_page + 1;
            $pagination .= '<li><a href="#" data-slug="'.$type.'" data-page="' . $next_link . '" title="Next"><i class="fa-solid fa-arrow-right"></i></a></li>'; // liên kết trang kế tiếp
        }

        $pagination .= '</ul>';
    }
    return $pagination; // trả về các liên kết phân trang
}

/** Xử lý Ajax trong WordPress */
add_action('wp_ajax_LoadPostPaginationType', 'LoadPostPaginationType_init');
add_action('wp_ajax_nopriv_LoadPostPaginationType', 'LoadPostPaginationType_init');
function LoadPostPaginationType_init()
{
    $posts_per_page = intval($_POST['posts_per_page']);
    $paged = intval($_POST['data_page']);
    $cat = intval($_POST['cat']);
    $post_type = sanitize_text_field($_POST['post_type']);
    $type = sanitize_text_field($_POST['type']);
    $allpost = query_ajax_pagination_type($post_type, $cat, $type, $posts_per_page, $paged);
    echo $allpost;
    exit;
}
add_action('wp_enqueue_scripts', 'devvn_useAjaxPaginationType', 1);
function devvn_useAjaxPaginationType()
{
    /** Thêm js vào website */
    wp_enqueue_script('devvn-ajax-type', esc_url(trailingslashit(get_stylesheet_directory_uri()) . 'AjaxPaginationType/ajax_pagination.js'), array('jquery'), '1.0', true);
    $php_array = array(
        'admin_ajax' => admin_url('admin-ajax.php')
    );
    wp_localize_script('devvn-ajax-type', 'svl_array_ajaxp_type', $php_array);
    /*Thêm css vào website*/
    wp_enqueue_style('ajaxp', get_stylesheet_directory_uri() . '/AjaxPaginationType/Ajax_pagination.css', [], '1.0.0');

}
