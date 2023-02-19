$( window ).scroll( () => {
    if( $(window).scrollTop() != 0 ){
        $( ".back-to-top" ).css( "display", "block" )
    }else{
        $( ".back-to-top" ).css( "display", "none" )
    }
} )

$( ".back-to-top" ).click( () => {
    $( "html, body" ).animate( {
        scrollTop: 0
    }, 300 )
} )