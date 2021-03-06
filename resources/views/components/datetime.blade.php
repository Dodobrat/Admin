<div class="form-group">
    <label class="col-sm-12">DateTime Picker</label>
    <div class="col-sm-12 m-b-20">
        <input type="text" class="form-control dateTimePicker">
        <span class="help-block">
            <small>A block of help text that breaks onto a new line and may extend beyond one line.</small>
        </span>
    </div>
</div>


@section('js')
<script>
    $(".dateTimePicker").flatpickr({
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        time_24hr: true
    });

    $('body').on('keyup', function () {
        console.log($(".dateTimePicker").val())
    })

</script>
@append