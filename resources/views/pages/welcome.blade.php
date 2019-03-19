@extends('layouts.app')
@section('content')
    {{--<link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />--}}
    <div class="col-sm-12">
        <div class="white-box">
            <div class="table-responsive p-t-20 p-b-20 ">
                <table id="myTable" class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>
                            <a class="m-l-10 m-r-10 action-btn" href="#">
                                <i class="ti-exchange-vertical text-inverse"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>
                            <a class="m-l-10 m-r-10 action-btn" href="#">
                                <i class="ti-exchange-vertical text-inverse"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>
                            <a class="m-l-10 m-r-10 action-btn" href="#">
                                <i class="ti-exchange-vertical text-inverse"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>
                            <a class="m-l-10 m-r-10 action-btn" href="#">
                                <i class="ti-exchange-vertical text-inverse"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>
                            <a class="m-l-10 m-r-10 action-btn" href="#">
                                <i class="ti-exchange-vertical text-inverse"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>
                            <a class="m-l-10 m-r-10 action-btn" href="#">
                                <i class="ti-exchange-vertical text-inverse"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>

                            <a class="m-l-10 m-r-10 action-btn" href="#">
                                <i class="ti-exchange-vertical text-inverse"></i>
                            </a>

                        </td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>
                            <a class="m-l-10 m-r-10 action-btn" href="#">
                                <i class="ti-exchange-vertical text-inverse"></i>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{--<div class="col-md-4">--}}
        {{--<div class="white-box">--}}
            {{--<h3 class="box-title">Nestable 2</h3>--}}
            {{--<div class="myadmin-dd-empty dd" id="nestable2">--}}

                {{--<ol class="dd-list">--}}
                    {{--<li class="dd-item dd3-item" data-id="13">--}}
                        {{--<div class="dd-handle dd3-handle"></div>--}}
                        {{--<div class="dd3-content"> Item 13 </div>--}}
                    {{--</li>--}}
                    {{--<li class="dd-item dd3-item" data-id="14">--}}
                        {{--<div class="dd-handle dd3-handle"></div>--}}
                        {{--<div class="dd3-content"> Item 14 </div>--}}
                    {{--</li>--}}
                    {{--<li class="dd-item dd3-item" data-id="14">--}}
                        {{--<div class="dd-handle dd3-handle"></div>--}}
                        {{--<div class="dd3-content"> Item 16 </div>--}}
                    {{--</li>--}}
                    {{--<li class="dd-item dd3-item" data-id="14">--}}
                        {{--<div class="dd-handle dd3-handle"></div>--}}
                        {{--<div class="dd3-content"> Item 17 </div>--}}
                    {{--</li>--}}
                    {{--<li class="dd-item dd3-item" data-id="14">--}}
                        {{--<div class="dd-handle dd3-handle"></div>--}}
                        {{--<div class="dd3-content"> Item 18 </div>--}}
                    {{--</li>--}}
                    {{--<li class="dd-item dd3-item" data-id="14">--}}
                        {{--<div class="dd-handle dd3-handle"></div>--}}
                        {{--<div class="dd3-content"> Item 19 </div>--}}
                    {{--</li>--}}
                    {{--<li class="dd-item dd3-item" data-id="15">--}}
                        {{--<div class="dd-handle dd3-handle"></div>--}}
                        {{--<div class="dd3-content"> Item 15 </div>--}}
                        {{--<ol class="dd-list">--}}
                            {{--<li class="dd-item dd3-item" data-id="16">--}}
                                {{--<div class="dd-handle dd3-handle"></div>--}}
                                {{--<div class="dd3-content"> Item 16 </div>--}}
                            {{--</li>--}}
                            {{--<li class="dd-item dd3-item" data-id="17">--}}
                                {{--<div class="dd-handle dd3-handle"></div>--}}
                                {{--<div class="dd3-content"> Item 17 </div>--}}
                            {{--</li>--}}
                            {{--<li class="dd-item dd3-item" data-id="18">--}}
                                {{--<div class="dd-handle dd3-handle"></div>--}}
                                {{--<div class="dd3-content"> Item 18 </div>--}}
                            {{--</li>--}}
                        {{--</ol>--}}
                    {{--</li>--}}
                {{--</ol>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    @include('components.dashboard.link-box')

@endsection

@section('js')
    {{--<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>--}}
    {{--<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>--}}
    {{--<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>--}}
    {{--<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>--}}
    {{--<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>--}}
    {{--<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>--}}
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                // "autoWidth": false,
                // "responsive": false,
                // "ordering": false,
            });
        });

        $(document).ready(function() {
            $.toast({
                heading: 'Welcome to Pixel admin',
                text: 'Use the predefined ones, or specify a custom position object.',
                position: 'top-right',
                loaderBg: '#ff6849',
                icon: 'info',
                hideAfter: 3500,
                stack: 6
            })
        });


            // Nestable
            var updateOutput = function(e) {
                var list = e.length ? e : $(e.target),
                    output = list.data('output');
                if (window.JSON) {
                    output.val(window.JSON.stringify(list.nestable('serialize'))); //, null, 2));
                } else {
                    output.val('JSON browser support required for this demo.');
                }
            };

            $('#myTable').nestable({
                group: 1
            }).on('change', updateOutput);

            updateOutput($('#myTable').data('output', $('#nestable2-output')));
            $('#nestable-menu').on('click', function(e) {
                var target = $(e.target),
                    action = target.data('action');
                if (action === 'expand-all') {
                    $('.dd').nestable('expandAll');
                }
                if (action === 'collapse-all') {
                    $('.dd').nestable('collapseAll');
                }
            });
            $('#nestable-menu').nestable();

    </script>
@append
