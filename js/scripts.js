$(document).ready(function(){
	$(window).scroll(function(){
		
		if($('#home-section').visible()){
			$('.page-scroll').removeClass('active');
			$('#home-indicator').addClass('active');
		}

		if($('#app-phone-section').visible()){
			$('.page-scroll').removeClass('active');
			$('#app-phone-indicator').addClass('active');
		}

		if($('#app-sms-section').visible()){
			$('.page-scroll').removeClass('active');
			$('#app-sms-indicator').addClass('active');
		}

		if($('#app-calltext-section').visible()){
			$('.page-scroll').removeClass('active');
			$('#app-calltext-indicator').addClass('active');
		}
	})

    $('.page-scroll').click(function(event) {
        var section = $(this).data('section');
        $('html, body').animate({
            scrollTop: $("#"+section).offset().top
        }, 500);
    });

    $('#faq li').click(function(){
    	$('#faq li p').slideUp();
    	$(this).find('p').slideToggle();
    });
})

function openPlayer(video){
    $('#video-player').fadeIn();
    $(document.body).css('overflow','hidden');

    $("#video-src-1").attr("src", "videos/"+video+".mp4");
    $("#video-src-2").attr("src", "videos/"+video+".webm");
    $("#video-src-3").attr("src", "videos/"+video+".ogv");

    if (video == 'd1_final') {
        $("#video-tag").attr("poster", "img/video-poster.png");
    }
    else if (video == 'd2_final') {
        $("#video-tag").attr("poster", "img/video-poster.png");
    }
    else if (video == 'd3_final') {
        $("#video-tag").attr("poster", "img/video-poster.png");
    }

    var video = document.getElementById('video-tag');
    video.load();

    setTimeout(function() {
        video.play();
    }, 1000);
}

function closePlayer(){
    $('#video-player').fadeOut();
    $(document.body).css('overflow','auto');

    var video = document.getElementById('video-tag');
    video.pause();    
}

/*****************************************************************************/
$(document).ready(function(){
    var charLimit = 160;
    var Char_limitInfo = '160 Characters  only.';

    $("textarea#comments").keyup(function(){
        var cnt = $(this).val().length;
        
        if(cnt > charLimit){
            $('span.warning').css('display','block');
            $('span.warning').text(Char_limitInfo);
        }else{
           
            $('span.warning').css('display','none');
        }

    });


    $('textarea#comments').on('keydown',function(e){
        var cnt = $(this).val().length;
        if(cnt > charLimit){
            var key = e.charCode || e.keyCode;
            if(key == 122 || key == 27 || key == 8)
                e.stopPropagation();
            else
                e.preventDefault();
        }
    });

    $('textarea#comments').bind('paste', null, function(e) {
        if(!e.keyCode){
            var cnt = $(this).val().length;
            console.log(cnt);
            if(cnt > charLimit){
                $('span.warning').css('display','block');
                $('span.warning').text(Char_limitInfo);
            }else{
               
                $('span.warning').css('display','none');
            }
        }
    });

    $('textarea#comments').blur(function(){
        var _comments = $(this).val();
        var _subString = _comments.substring(0, charLimit);
        console.log(_subString);
        $('textarea#comments').val(_subString);
    });

    $('.country-select').click(function() {
        goToByScroll('rate_option');  
     });


     function goToByScroll(id){
        id = id.replace("link", "");
        $('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
    }
});