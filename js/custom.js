$(document).ready(function(){
    const lazyLoadInstance = new LazyLoad({
        elements_selector:"img.lazy, video.lazy, div.lazy, section.lazy, header.lazy, footer.lazy,iframe.lazy"
    });   
});




const locationSlider = new Swiper('.company-logo-slider', {        
    breakpoints: {               
        300: {
            slidesPerView: 1.5,
        },
        500: {
            slidesPerView: 2.5,
        },
        992: {
            slidesPerView: 3.5,
        },

        1200: {
            slidesPerView:4,
        }, 

        1300: {
            slidesPerView:4.5,
        }, 

        1400: {
            slidesPerView:5,
        },        
    },
    speed: 800,
    navigation: false, 
    pagination: false, 
    autoplay: {
        delay: 3000,
        disableOnInteraction: false, 
    },
});


const reviews = new Swiper('.reviews', {        
    navigation: false, 
    pagination: false, 
    slidesPerView: 1,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false, 
    },   
});


$('body').on('click','.js-video-modal',function(){
    const poster = $(this).find('input[type="hidden"]').attr('data-poster');
    const video = $(this).find('input[type="hidden"]').attr('data-video');
    $('#videoModal').modal('show')

    let videoTag = '';
    if(video && poster) {
        videoTag = `<video
                        id="video"
                        class="video-js"
                        controls
                        poster="${poster}"
                        width="100%"
                    >
                    <source src="${video}" type="video/mp4" />
                    <source src="${video}" type="video/webm" />
                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a
                        web browser that
                        <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                    </p>
                </video>`


      
    } else {
        videoTag = `<div class="p-4">Error...</div>`
    }
    
    $('#videoModal .modal-body').html(videoTag);
       
    videojs('video', {
        fluid: true,
        controls: true,
        autoplay: false,
        preload: 'auto'
    });

})

const videoModal = document.getElementById('videoModal')
if(videoModal) {
    videoModal.addEventListener('hidden.bs.modal', function (event) {   
        let player = videojs('video');
        player.dispose();     
        $('#videoModal .modal-body').html('');
    })
}
  

 

$('body').on('click','.accordion-button',function(){
    let currentEle = $(this).parents('.accordion-item');    
    if(currentEle.hasClass('accordion-active')){
        currentEle.removeClass('accordion-active');
    } else {
        $('.accordion-item').removeClass('accordion-active');
        currentEle.addClass('accordion-active');
    }
})