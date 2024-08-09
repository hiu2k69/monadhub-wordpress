(function($) {
    $(document).ready(function(){
       $( '#result_ajaxp_new' ).on( 'click',' ul.pagination li a', function( e ) {
          /** Prevent Default Behaviour */
          e.preventDefault();
          /** Get data-page */
          var data_page = $(this).attr( 'data-page' );
          var posts_per_page = $('.ajax_pagination_artist').attr( 'posts_per_page' );
          var post_type = $('.ajax_pagination_artist').attr( 'post_type' );
          var cat = $('.ajax_pagination_artist').attr( 'cat' );
          /** Ajax Call */
          $.ajax({
             cache: false,
             timeout: 8000,
             url: svl_array_ajaxp_artist.admin_ajax,
             type: "POST",
             data: ({ 
                action          :  'LoadPostPaginationArtist', 
                data_page    :  data_page,
                posts_per_page    :  posts_per_page,
                post_type    :  post_type ,
                cat : cat
             }),
             beforeSend: function() {
             $( '.loading_ajaxp' ).css( 'display','block' );
             },
             success: function( data, textStatus, jqXHR ){             
               $( '#result_ajaxp_new' ).html( data );
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