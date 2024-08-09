(function($) {
    $(document).ready(function(){
       $( '.result_ajaxp_type' ).on( 'click',' ul.pagination li a', function( e ) {
          /** Prevent Default Behaviour */
          e.preventDefault();
          /** Get data-page */
          var data_page = $(this).attr( 'data-page' );
          var slug = $(this).data('slug');
          var posts_per_page = $('.ajax_pagination_type_'+slug).attr( 'posts_per_page' );
          var post_type = $('.ajax_pagination_type_'+slug).attr( 'post_type' );
          var type = $('.ajax_pagination_type_'+slug).attr( 'type' );
          var cat = $('.ajax_pagination_type_'+slug).attr( 'cat' );
          /** Ajax Call */
          $.ajax({
             cache: false,
             timeout: 8000,
             url: svl_array_ajaxp_type.admin_ajax,
             type: "POST",
             data: ({ 
                action          :  'LoadPostPaginationType', 
                data_page    :  data_page,
                posts_per_page    :  posts_per_page,
                post_type    :  post_type ,
                cat : cat,
                type : type
             }),
             beforeSend: function() {
             $( '.loading_ajaxp' ).css( 'display','block' );
             },
             success: function( data, textStatus, jqXHR ){             
               $( '.result_ajaxp_type.tab_'+ slug ).html( data );
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