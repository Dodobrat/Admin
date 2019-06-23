let mode = document.getElementById('myonoffswitch');

mode.addEventListener('click', function () {

    let checked = mode.checked;
    let url = mode.dataset.url;

    $.ajaxSetup({
        cache: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: url,
        method: 'post',
        data: {
            theme: checked,
        },

        success: function (result) {
            setTimeout(function () {
                location.reload();
            }, 200);

        }
    });
});

window.onload(startTime());

function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('curr-time').innerHTML =
        h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}

function checkTime(i) {
    if (i < 10) {
        i = "0" + i
    }
    ;  // add zero in front of numbers < 10
    return i;
}

$('#datepicker-inline').datepicker({
    todayHighlight: true
});

$(".counter").counterUp({
    delay: 100,
    time: 1000
});

// maxlength="200" <- TOVA SE DOBAVQ V HTMLA na inputa kato attribute inache ne baca

$(document).ready(function () {

    $('[live-count]').each(function(i, el) {
        //if type is edior skip
        if (el.classList.value === 'description') {
            return true;
        }
        let input = $(el);
        let value_count = el.value.length;
        let max_chars = input.attr('live-count');
        let rand_id = Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
        let span_box = `<span  id=`+rand_id+` class="m-l-5 max_char">(`+value_count+`/`+max_chars+`)</span></label>`;


        let parent_html = $(input).parents()[1];
        let parent = $(parent_html);
        let label_html = parent.children()[0];
        let label = $(label_html);
        label.html(label.html() + span_box);


        input.bind("change keyup input paste",function() {
            let len;
            let change_span = $('#' + rand_id);

            len = this.value.length;
            if (len > max_chars) {
                change_span.html("(" + len + "/" + max_chars + ")");
                change_span.addClass('text-danger');
            } else if (len > 0) {
                change_span.html("(" + len + "/" + max_chars + ")");
                change_span.removeClass('text-danger');
            } else {
                change_span.html("(0/" + max_chars + ")");
                change_span.removeClass('text-danger');
            }
        })
    });
});
