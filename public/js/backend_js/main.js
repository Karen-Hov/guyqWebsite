$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function playButton($this) {
    var audioID = "sound" + $(this).attr('id');
    $(".audiofile").trigger('pause');
    $("#" + audioID).trigger("play");
    $(".pause").addClass("play");
    $(".pause").removeClass("pause");
    $(this).addClass("pause");
    $(this).removeClass("play");
    $(".play").off('click');
    $(".play").click(playButton($(this)));
    $(this).off('click');
    $(this).click(function () {
        $(this).addClass('play');
        $(this).removeClass('pause');
        $("#" + $(this).attr('id')).trigger('pause');
    })
};

// $('.play').click(playButton($(this)));
// /* lrahos add image view*/
//
// $('.lrahosImage').change(function(e){
//     $('.addLrahosImage').empty()
//     // var fd = this.files[0];
//     // var fd = $(this).html();
//     for(var i=0;i<event.target.files.length ;i++){
//         var src= URL.createObjectURL(event.target.files[i]);
// var image= document.createElement("img");
// image.width=100;
// image.height=100;
// image.style.padding="6px";
// image.src=src;
// image.id=i;
// var span = document.createElement("span");
// span.innerText="x";
// span.style.fontSize="17px";
// span.className="delimg";
// span.setAttribute("data-id",i);
// // span.onclick=function(){
// //     var id=span.getAttribute("data-id")
// //     $("#"+id).remove();
// //
// //
// // span.remove();
// // }
//         $('.addLrahosImage').css('display','inline');
//         $('.addLrahosImage').append(image);$('.addLrahosImage').append(span);
//
//
//     }
//
// });
//
// /*Delete lrahos Image*/
// $(document).on("click",".delimg",function () {
//     var id=$(this).attr("data-id");
//     $("#"+id).remove();
//     $(this).remove();
//    var files=document.getElementsByClassName('lrahosImage')[0].files;
//     var newfile= new DataTransfer();
//
//    Object.keys(files).forEach(( key) => {
//         if (key !== id) {
//             newfile.items.add(files[key]);
//         }
//    });
//    console.log(newfile);
//     document.getElementsByClassName('lrahosImage')[0].files=newfile.files;
//
//     console.log(document.getElementsByClassName('lrahosImage')[0].files)
// })


/* lrahos add image view*/

$('.viewImage').change(function (e) {
    $('.addImage').empty()
    // var fd = this.files[0];
    // var fd = $(this).html();
    // for(var i=0;i<event.target.files.length ;i++){
    var src = URL.createObjectURL(event.target.files[0]);
    var image = document.createElement("img");
    image.style.margin = "6px";
    image.src = src;
    image.id = 1000;
    // var span = document.createElement("span");
    // span.innerText = "x";
    // span.style.fontSize = "17px";
    // span.className = "delimg";
    // span.setAttribute("data-id", '1000');

    $('.addImage').css('display', 'inline');
    $('.addImage').append(image);
    // $('.addImage').append(span);


});
$('.viewImageFile').change(function (e) {
    $('.addImageFile').empty()
    // var fd = this.files[0];
    // var fd = $(this).html();
    // for(var i=0;i<event.target.files.length ;i++){
    var src = URL.createObjectURL(event.target.files[0]);
    var image = document.createElement("img");
    image.style.margin = "6px";
    image.src = src;
    image.id = 1000;
    var span = document.createElement("span");
    span.innerText = "x";
    span.style.fontSize = "17px";
    span.className = "delimg";
    span.setAttribute("data-id", '1000');
// span.onclick=function(){
//     var id=span.getAttribute("data-id")
//     $("#"+id).remove();
//
//
// span.remove();
// }
    $('.addImageFile').css('display', 'inline');
    $('.addImageFile').append(image);
    $('.addImageFile').append(span);


// }

});


/* lrahos add imageS view*/

$('.viewImages').change(function (e) {
    // $('.addImages').empty()
    // var fd = this.files[0];
    // var fd = $(this).html();
    for(var i=0;i<event.target.files.length ;i++){
        var src = URL.createObjectURL(event.target.files[i]);
        var image = document.createElement("img");
        image.style.margin = "6px";
        image.src = src;
        image.id = i;
        var span = document.createElement("span");
        span.innerText = "x";
        span.style.fontSize = "17px";
        span.className = "delimg";
        span.setAttribute("data-id", i);
// span.onclick=function(){
//     var id=span.getAttribute("data-id")
//     $("#"+id).remove();
//
//
// span.remove();
// }
        $('.addImages').css('display', 'inline');
        $('.addImages').append(image);
        $('.addImages').append(span);


    }

});

/* ************  edit image view ************ */
$('.editImage').change(function (e) {
    $('.flexTables').remove()
    $('.editViewImage').empty()
    // var fd = this.files[0];
    // var fd = $(this).html();
    // for(var i=0;i<event.target.files.length ;i++){
    var src = URL.createObjectURL(event.target.files[0]);
    var image = document.createElement("img");
    image.style.margin = "6px";
    image.src = src;
    image.id = 1000;
    var span = document.createElement("span");
    span.innerText = "x";
    span.style.fontSize = "17px";
    span.className = "delimg";
    span.setAttribute("data-id", '1000');
// span.onclick=function(){
//     var id=span.getAttribute("data-id")
//     $("#"+id).remove();
//
//
// span.remove();
// }
    $('.editViewImage').css('display', 'inline');
    $('.editViewImage').append(image);
    $('.editViewImage').append(span);
    // window.URL.revokeObjectURL( src);

// }

});
$('.editImageFile').change(function (e) {
    $('.flexTablesFile').remove()
    // $('.editViewImage').empty()
    // var fd = this.files[0];
    // var fd = $(this).html();
    // for(var i=0;i<event.target.files.length ;i++){
    var src = URL.createObjectURL(event.target.files[0]);
    var image = document.createElement("img");
    image.style.margin = "6px";
    image.src = src;
    image.id = 1000;
    var span = document.createElement("span");
    span.innerText = "x";
    span.style.fontSize = "17px";
    span.className = "delimg";
    span.setAttribute("data-id", '1000');
// span.onclick=function(){
//     var id=span.getAttribute("data-id")
//     $("#"+id).remove();
//
//
// span.remove();
// }
    $('.editViewImageFile').css('display', 'inline');
    $('.editViewImageFile').append(image);
    $('.editViewImageFile').append(span);
    // window.URL.revokeObjectURL( src);

// }

});

/* ************  edit imageS view ************ */
$('.editImages').change(function (e) {
    // $('.flexTables').remove()
    // $('.editViewImages').empty()
    // var fd = this.files[0];
    // var fd = $(this).html();
    for(var i=0;i<event.target.files.length ;i++){
    var src = URL.createObjectURL(event.target.files[i]);
    var image = document.createElement("img");
    image.style.margin = "6px";
    image.src = src;
    image.id = i;
    var span = document.createElement("span");
    span.innerText = "x";
    span.style.fontSize = "17px";
    span.className = "delimg";
    span.setAttribute("data-id", i);
// span.onclick=function(){
//     var id=span.getAttribute("data-id")
//     $("#"+id).remove();
//
//
// span.remove();
// }
    $('.editViewImages').css('display', 'inline');
    $('.editViewImages').append(image);
    $('.editViewImages').append(span);
    // window.URL.revokeObjectURL( src);

}

});
/*Delete lrahos Image*/
$(document).on("click", ".delimg", function () {

    var id = $(this).attr("data-id");
    $("#" + id).remove();
    $(this).remove();
    var files = document.querySelectorAll('input[type="file"]')[0].files;
    var newfile = new DataTransfer();

    Object.keys(files).forEach((key) => {
        if (key !== id) {
            newfile.items.add(files[key]);


        }
    });
    console.log(newfile);
    // document.querySelectorAll('input[typerr="file"]')[0].files=newfile.files;
    $('input[type="file"] ').val('');
    $('input[type="file"] + span').text('')
    window.URL.revokeObjectURL(this.src);
    console.log(document.querySelectorAll('input[type="file"]')[0].files)

})


/*       Fotos add image view           */

// function myFunction(element,url) {
//     // console.log(element,url);
//     var xoragir = $('#select').val();
//     $.ajax({
//         url: url,
//         type: 'get',
//         data: xoragir=>xoragir,
//         success: function () {
//
//         }
//     });
// }

$('#imageFile').change(function (e) {

    $('.addFotosImage').empty()
    // var fd = this.files[0];
    // var fd = $(this).html();
    for (var i = 0; i < event.target.files.length; i++) {
        var src = URL.createObjectURL(event.target.files[i]);
        var image = document.createElement("img");
        // image.width=100;
        // image.height=100;
        image.style.margin = "6px";
        image.src = src;
        image.id = i;
        var span = document.createElement("span");
        span.innerText = "x";
        span.style.fontSize = "17px";
        span.className = "delimg";
        span.setAttribute("data-id", i);
// span.onclick=function(){
//     var id=span.getAttribute("data-id")
//     $("#"+id).remove();
//
//
// span.remove();
// }
        $('.addFotosImage').css('display', 'inline');
        $('.addFotosImage').append(image);
        $('.addFotosImage').append(span);


    }

});

function removeImage(target,url){
    let element = $(target).parents('.image');
    console.log(element,url)

    if (confirm(" Դուք ի՞սկապես ցանկանում էք ջնջել")) {
        $.ajax({
            url: url,
            type: 'post',
            // data: {Imgid},
            success: function () {
                element.fadeOut(1000, function () {
                    element.remove()
                    target.remove()
                });
            }
        });
    }
}




/*      Delete Fotos Image      */

// $(document).on("click",".delimg",function () {
//     var id=$(this).attr("data-id");
//     $("#"+id).remove();
//     $(this).remove();
//     var file=document.getElementsByClassName('imageFile')[id];
//     var newfile= new DataTransfer();
//
//     Object.keys(file).forEach(( key) => {
//         if (key !== id) {
//             newfile.items.add(files[key]);
//         }
//     });
//     console.log(newfile);
//     document.getElementsByClassName('imageFile')[0].file=newfile;
//
//     console.log(document.getElementsByClassName('imageFile')[0])
// })
/*************************************************************************************************/
$('#create_video').on('submit', function (event) {

    event.preventDefault();
    $('.progress').css('display', 'inline')
    var formData = new FormData($('#create_video')[0]);
    // if($('#edit_video').validate() == true){
    $.ajax({
        xhr: function () {
            var xhr = new window.XMLHttpRequest();
            xhr.upload.addEventListener('progress', function (e) {
                if (e.lengthComputable) {
                    var percent = Math.round((e.loaded / e.total) * 100);
                    // console.log('Byutes Loaded: '+e.loaded);
                    // console.log('Total Size: '+e.total);
                    // console.log('Percentage uploaded: '+ (e.loaded /e.total));
                    $('.progress-bar').attr('aria-valuenow', percent).css('width', percent + '%').text(percent + '%');
                }
            });
            return xhr;
        },
        type: 'POST',
        url: $(this).attr('action'),
        data: formData,
        processData: false,
        contentType: false,
        success: function (data) {
            var redirect = data.redirect_url;
            // $(".container-fluid").prepend("<span class='success'>"+data.message+"</span>")

            location.href = redirect;
        },

    });
    // }
});


$('#editVideo').on('submit', function (event) {
    event.preventDefault();
    $('.progress').css('display', 'inline')
    var formData = new FormData($('#editVideo')[0]);
    // if($('#edit_video').validate() == true){
    $.ajax({
        xhr: function () {
            var xhr = new window.XMLHttpRequest();
            xhr.upload.addEventListener('progress', function (e) {
                if (e.lengthComputable) {
                    var percent = Math.round((e.loaded / e.total) * 100);
                    console.log('Byutes Loaded: ' + e.loaded);
                    console.log('Total Size: ' + e.total);
                    console.log('Percentage uploaded: ' + (e.loaded / e.total));
                    $('.progress-bar').attr('aria-valuenow', percent).css('width', percent + '%').text(percent + '%');
                }
            });
            return xhr;
        },
        type: 'POST',
        url: $(this).attr('action'),
        data: formData,
        processData: false,
        contentType: false,
        success: function (data) {
            var redirect = data.redirect_url;
            // $(".container-fluid").prepend("<span class='success'>"+data.message+"</span>")

            location.href = redirect;
        },

    });
    // }
});

function deleteFoto(target, url, method) {
console.log( url, method)
    let element = $(target).parents('li');
    if (confirm(" Դուք ի՞սկապես ցանկանում էք ջնջել")) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: 'DELETE',
            success: function () {

                element.fadeOut(1000, function () {
                    element.remove()
                });
            }
        });
    }
};




function deleteItem(target, url, method) {

    let element = $(target).parents('.item');
    let element_2 = $(target).parents('.itemParent');
    if (confirm(" Դուք ի՞սկապես ցանկանում էք ջնջել")) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: method,

            success: function () {
                element.hide(1000, function () {
                    element.remove();
                    element_2.remove()

                });
            }
        });
    }
}

function deleteMessage(target, url, method,redirects) {

    let element = $(target).parents('tr');

// console.log(method)
// console.log(redirects==true)
    if (confirm(" Դուք ի՞սկապես ցանկանում էք ջնջել")) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: method,

            success: function () {
                element.hide(1000, function () {
                    element.remove()
                    if(redirects != true){
                        // alert('true')
                        window.location.replace(location.protocol + '//' + location.host + location.pathname);
                    }else{
                        // alert('false ')
                        window.location.reload();
                    }

                });
            }
        });
    }
}

function deleteIndustries(target, url, method) {
    console.log(target, url, method)
    let element = $(target).parents('.itemParent');

    if (confirm(" Դուք ի՞սկապես ցանկանում էք ջնջել")) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: method,

            success: function () {
                element.hide(1000, function () {
                    element.remove()
                    window.location.reload();

                });
            }
        });
    }
}
function deleteSlider(target, url, method) {
    console.log(target, url, method)
    let element = $(target).parents('.item');

    if (confirm(" Դուք ի՞սկապես ցանկանում էք ջնջել")) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: method,

            success: function () {
                element.hide(1000, function () {
                    element.remove()
                    // window.location.reload();

                });

            }
        });

    }
}

function deleteItemSlider(target, types, type_id, url, method) {
    let element = $(target).parents('tr');

    if (confirm(" Դուք ի՞սկապես ցանկանում էք ջնջել")) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            data: {types: types, type_id: type_id},
            type: method,

            success: function () {
                element.hide(1000, function () {
                    element.remove()
                    window.location.reload();

                });
            }
        });
    }
}

function deleteReportaj(target, url, method, rel_id = null) {
    let element = $(target).parents('tr');
    if (confirm(" Դուք ի՞սկապես ցանկանում էք ջնջել")) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: method,
            data: {id: rel_id},
            success: function () {
                console.log($(target).parents('.reportaj'))
                $(target).parents('.reportaj').hide(1000, function () {
                    // element.remove()

                    $(target).parents('.reportaj').remove('.reportaj')

                });
            }
        });
    }
}



/**********************-- Create File Aspar --*********************************/


/************************-- Delete File Aspar --*******************************/
function removeFiles(target, url, fileID) {
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    //     }
    // });

    $.ajax({
        url: url,
        type: 'post',
        method: 'POST',
        data: {fileID: fileID},
        success: function (result) {

            $(target).closest('.file').remove('.file')
        }
    });
};
/************************-- select video file & link --*******************************/
$('.fileVideo').change(function () {

    $('.video_link').attr('placeholder', '* Անջատված է').prop('disabled', true);
    // $('span.filename').html('');
});

$('.fileVideo').change(function () {
    if ($('.fileVideo').val() == '') {
        $('.video_link').removeAttr('placeholder').prop('disabled', false);
    }

});

$('.video_link').change(function () {
// $('#video_link').attr('enabled','disabled')
    $('.fileVideo').prop('disabled', true);
    $(' span.filename').next().html('Անջատված է');
    $('span.filename').html('');

    if ($('.video_link').val() == '') {
        $('.fileVideo').prop('disabled', false);
        $(' span.filename').next().html('Ընտրել Ֆայլը')
        $('span.filename').html('Ֆայլը ընտրված չէ');
    }

});

// $('.video_link').blur(function(){
//     // alert('sddssd');
//     if($('.video_link').val() ==''){
//         $('.fileVideo').prop('disabled', false);
//         $(' span.filename').next().html( 'Ընտրել Ֆայլը')
//         $('span.filename').html('Ֆայլը ընտրված չէ');
//     }
// });
// $('.video_link').change(function(){
//     // alert('sddssd');
//     if($('.video_link').val() ==''){
//         $('.fileVideo').prop('disabled', false);
//         $(' span.filename').next().html( 'Ընտրել Ֆայլը')
//         $('span.filename').html('Ֆայլը ընտրված չէ');
//     }
// });

/************************-- END-- select video file & link  --END--*******************************/

// $('.addreportaj').click(function(){
//    $('.addreportaj').parent('div').parent().css({'border':'2px solid red'}) ;
//    // var obj = $('.addreportaj').parent('div').parent().clone() ;
//    var obj = $('.addreportaj').parent('div').parent().html() ;
//     $('.addreportaj').parent('div').parent().append(obj);
// });

var k = 0;
$('.addRep').change(function (e) {

    // var fd = this.files[0];
    // var fd = $(this).html();
    for (var i = 0; i < event.target.files.length; i++) {
        k += 1;
        var src = URL.createObjectURL(event.target.files[i]);
        var audio = "<audio controls>\n" +
            "        \n" +
            "        <source src=\"" + src +
            "\" type=\"audio/mpeg\">\n" +
            "         \n" +
            "         </audio>";

        audio.id = i;
        var span = document.createElement("span");
        span.innerText = "x";
        span.style.fontSize = "22px";
        span.className = "delAudio";
        span.setAttribute("data-id", k);
// span.onclick=function(){
//     var id=span.getAttribute("data-id")
//     $("#"+id).remove();
//
//
// span.remove();

        $('.viewRep').css('display', 'inline');
        $('.viewRep').append(audio);
        $('.viewRep').append(span);

        var input = '<input form="create_aspar" multiple style="display: none" type="file" name="reportaj[]" id="fileReportajCr' + k + '"  >\n';
        $(this).parent().append(input);
        var file = document.getElementById("fileReportajCr").files[0];
        console.log(file)
        var newfile = new DataTransfer();
        newfile.items.add(file);
        document.getElementById("fileReportajCr" + k).files = newfile.files;


    }

// }
    $(this).val("")
});


/* ********************************************  edit Reportaj ***************************************************************/
$('.editRep').change(function (e) {

    // var fd = this.files[0];
    // var fd = $(this).html();
    for (var i = 0; i < event.target.files.length; i++) {
        k += 1;
        var src = URL.createObjectURL(event.target.files[i]);
        var audio = "<audio controls>\n" +
            "        \n" +
            "        <source src=\"" + src +
            "\" type=\"audio/mpeg\">\n" +
            "         \n" +
            "         </audio>";

        audio.id = i;
        var span = document.createElement("span");
        span.innerText = "x";
        span.style.fontSize = "22px";
        span.className = "delAudio";
        span.setAttribute("data-id", k);
// span.onclick=function(){
//     var id=span.getAttribute("data-id")
//     $("#"+id).remove();
//
//
// span.remove();

        $('.editViewRep').css('display', 'inline');
        $('.editViewRep').append(audio);
        $('.editViewRep').append(span);

        var input = '<input form="edit_aspar" multiple style="display: none" type="file" name="reportaj[]" id="fileReportaj' + k + '"  >\n';
        $(this).parent().append(input);
        var file = document.getElementById("fileReportaj").files[0];
        console.log(file)
        var newfile = new DataTransfer();
        newfile.items.add(file);
        document.getElementById("fileReportaj" + k).files = newfile.files;


    }

// }
    $(this).val("")
});
/* ********************************************END  edit Reportaj END***************************************************************/


$('.addAudio').change(function (e) {
    $('.viewAudio').empty()
    var src = URL.createObjectURL(event.target.files[0]);
    var audio = "<audio controls>\n" +
        "        \n" +
        "        <source src=\"" + src +
        "\" type=\"audio/mpeg\">\n" +
        "         \n" +
        "         </audio>";

    $('.viewAudio').css('display', 'inline');
    $('.viewAudio').append(audio);
});

/************************-- del audio   --*******************************/

$(document).on('click', '.delAudio', function () {
    $(this).prev('audio').detach()
    $(this).detach();
    var id = $(this).attr('data-id');

    // $(this).prev('audio').css({'border':'2px solid red'})
    $('#fileReportajCr' + id).detach()
    // $('.viewRep span').detach()
    // alert('s');
});
/************************-- Edit Music  --*******************************/


$('.editMusic').change(function (e) {
    $('.flexMusicTables').remove()
    $('.editViewMusic').empty()
    // var fd = this.files[0];
    // var fd = $(this).html();
    // for(var i=0;i<event.target.files.length ;i++){
    var src = URL.createObjectURL(event.target.files[0]);
    console.log(src)
    var song = "<audio controls>\n" +
        "        \n" +
        "        <source src=\"" + src +
        "\" type=\"audio/mpeg\">\n" +
        "         \n" +
        "         </audio>";

    $('.editViewMusic').css('display', 'inline');
    $('.editViewMusic').append(song);
});
/************************--END-- Edit Music view  --END--*******************************/

/************************-- Add Video view   --*******************************/

$('.addVideo').change(function (e) {
    $('.viewVideo').empty()
    var src = URL.createObjectURL(event.target.files[0]);
    var video = "<video width=\"180\" height=\"120\" controls=\"\">\n" +
        "<source src=\"" + src + "\" type=\"video/mp4\">\n" +
        "\n" +
        "</video>"
    $('.viewVideo').css('display', 'inline');
    $('.viewVideo').append(video);
});

/************************--END-- Add Video view  --END--*******************************/

/************************-- Edit Music  --*******************************/


$('.editVideo').change(function (e) {
    $('.flexTables').remove()
    $('.editViewVideo').empty()

    var src = URL.createObjectURL(event.target.files[0]);
    // console.log(src)
    var video = "<video width=\"180\" height=\"120\" controls=\"\">\n" +
        "<source src=\"" + src + "\" type=\"video/mp4\">\n" +
        "\n" +
        "</video>"

    $('.editViewVideo').css('display', 'inline');
    $('.editViewVideo').append(video);
});

/************************--END-- Edit Music view  --END--*******************************/



function itemsSlider(that, ids, types) {
    // console.log(that, ids, types);
    if ($(that).attr('checked')) {
        $.ajax({
            type: 'POST',
            url:  routes["slider-filter-category"],
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {id: ids, types: types},
            success: function (data) {
                // if(data.data.success){
                //     //do something
                // }
            }
        });
    } else {
        $.ajax({
            type: 'DELETE',
            url: routes["slider-filter-category-delete"],
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {id: ids, types: types},
            success: function (data) {
                // if(data.data.success){
                //     //do something
                // }
            }
        });

    }

}
// $('#tesanyut').on('input' , function () {
//
//     if($(this).val().length> 0){
//         $('#asparplayer').prop('disabled',true);
//         $('#asparplayer').closest('div').css({
//             'opacity':'0.5'
//         });
//         $('#fileAsparCr').prop('disabled',true);
//         $('#fileAsparCr').closest('div').css({
//             'opacity':'0.5'
//         });
//     } else {
//         $('#asparplayer').prop('disabled',false);
//         $('#asparplayer').closest('div').css({
//             'opacity':'1'
//         }); $('#fileAsparCr').closest('div').css({
//             'opacity':'1'
//         });
//         $('#fileAsparCr').prop('disabled',false);
//
//     }
// })
// $('#haxordum').on('input' , function () {
//
//     if($(this).val().length> 0){
//         $('#player').prop('disabled',true);
//         $('#fileAudioCr').prop('disabled',true);
//     } else {
//         $('#player').prop('disabled',false);
//         $('#fileAudioCr').prop('disabled',false);
//     }
// })
// hideInput()
// function hideInput(){
//     if($('#haxordum').val().length> 0){
//         $('#player').prop('disabled',true);
//         $('#fileAudioCr').prop('disabled',true);
//     } else {
//         $('#player').prop('disabled',false);
//         $('#fileAudioCr').prop('disabled',false);
//     }
// }
// $('#player').on('input' , function () {
//
//     if($(this).val().length> 0){
//         $('#haxordum').prop('disabled',true);
//
//     } else {
//         $('#haxordum').prop('disabled',false);
//
//     }
// })
//
// $('#fileAudioCr').on('input' , function () {
//
//     if($(this).val().length> 0){
//         $('#haxordum').prop('disabled',true);
//
//     } else {
//         $('#haxordum').prop('disabled',false);
//
//     }
// })
$('.xoragrer').addClass('red')
