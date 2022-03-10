//emoji
$(document).ready(function () {
    $("#emoji").emojioneArea({
        pickerPosition: "bottom"
    });
});

jQuery(document).ready(function ($) {

    $('#url').bind('input', function () {
        $('#imageHolder').attr('src', $(this).val()); //concatinate path if required
    });

});   //

// videopreview
const input = document.getElementById('video');
const video = document.getElementById('vdoprw');
const videoSource = document.createElement('source');

input.addEventListener('change', function () {
    const files = this.files || [];

    if (!files.length) return;

    const reader = new FileReader();

    reader.onload = function (e) {
        videoSource.setAttribute('src', e.target.result);
        video.appendChild(videoSource);
        video.load();
        video.play();
    };

    reader.onprogress = function (e) {
        console.log('progress: ', Math.round((e.loaded * 100) / e.total));
    };

    reader.readAsDataURL(files[0]);
});        //end


//filedhideshow
$(document).ready(function () {
    $("#type").change(function () {
        var type = $("#type").val();

        if (type == 'videoUpload') {
            $("#upload_url").hide(1000);
            $("#upload_video").show(1000);
        }

        else {
            $("#upload_url").show(1000);
            $("#upload_video").hide(1000);
        }


    });

    $(window).on('load', function () {
        var type = $("#type").val();

        if (type == 'videoUpload') {
            $("#upload_url").hide(1000);
            $("#upload_video").show(1000);
        }

        else {
            $("#upload_url").show(1000);
            $("#upload_video").hide(1000);
        }

    });

});


//2nd field hide show
$(document).ready(function () {
    $("#subscription").change(function () {
        var type = $("#subscription").val();

        if (type == 'paid') {
            // $("#video").hide(1000);
            $("#content").show(1000);
        }
        if (type == 'free') {
            // $("#video").hide(1000);
            $("#content").hide(1000);
        }

    });

    $(window).on('load', function () {
        var type = $("#subscription").val();

        if (type == 'paid') {
            // $("#video").hide(1000);
            $("#content").show(1000);
        }
        if (type == 'free') {
            // $("#video").hide(1000);
            $("#content").hide(1000);
        }

    });

});


// 3rd hide show field


$(document).ready(function () {
    $("#type").change(function () {
        var type = $("#type").val();

        if (type == 'category') {
            $("#video").hide(1000);
            $("#channel").show(1000);
        }

        if (type == 'status') {
            $("#video").show(1000);
            $("#channel").hide(1000);
        }


    });

    $(window).on('load', function () {
        var type = $("#type").val();

        if (type == 'category') {
            $("#video").hide(1000);
            $("#channel").show(1000);
        }

        if (type == 'status') {
            $("#video").show(1000);
            $("#channel").hide(1000);
        }

    });

});

