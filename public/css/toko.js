$( document ).ready(function() {
    // slider
    $('.slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
              }
            }
        ]
      });

    $('.beli').on('click', function(e){
        e.preventDefault();
        var url = $(this).attr('data-url');
        $.post('https://promospesial.store/shopeehaul/', {
                toko: toko,
                link: url
            },function(data, status){
                if(status == 'success'){
                    window.location.href = data
                }
            }
        )
    })

    $('#follow').on('click', function(e){
        e.preventDefault();
        var url = $(this).attr('data-url');
            $.post('https://promospesial.store/shopeehaul/', {
                    toko: toko,
                    link: url
                },function(data, status){
                    if(status == 'success'){
                        window.location.href = data
                    }
                }
            )
    })
});