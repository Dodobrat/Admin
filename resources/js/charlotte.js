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
