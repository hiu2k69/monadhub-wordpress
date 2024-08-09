(function($) {
    $(document).ready(function(){
       $( '#result_ajaxp_search' ).on( 'click',' ul.pagination a', function( e ) {
          /** Prevent Default Behaviour */
          e.preventDefault();
          /** Get data-page */
          var data_page = $(this).attr( 'data-page' );
          var posts_per_page = $('.ajax_pagination_search').attr( 'posts_per_page' );
          var post_type = $('.ajax_pagination_search').attr( 'post_type' );
          var keyword = $('.ajax_pagination_search').attr( 'keyword' );
          var cat = $('.ajax_pagination_search').attr( 'cat' );
          /** Ajax Call */
          $.ajax({
             cache: false,
             timeout: 8000,
             url: svl_array_ajaxp_search.admin_ajax,
             type: "POST",
             data: ({ 
                action          :  'LoadPostPaginationSearch', 
                data_page    :  data_page,
                posts_per_page    :  posts_per_page,
                post_type    :  post_type ,
                cat : cat,
                keyword: keyword
             }),
             beforeSend: function() {
             $( '.loading_ajaxp' ).css( 'display','block' );
             },
             success: function( data, textStatus, jqXHR ){             
               $( '#result_ajaxp_search' ).html( data );
             },
             error: function( jqXHR, textStatus, errorThrown ){
                console.log( 'The following error occured: ' + textStatus, errorThrown );
             },
             complete: function( jqXHR, textStatus ){
             }
          });
       });
    });
})(jQuery);