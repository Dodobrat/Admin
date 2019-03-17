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
                                <i class="ti-image"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td><a class="m-l-10 m-r-10 action-btn" href="#">
                                <i class="ti-image"></i>
                            </a></td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td><a class="m-l-10 m-r-10 action-btn" href="#">
                                <i class="ti-image"></i>
                            </a></td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td><a class="m-l-10 m-r-10 action-btn" href="#">
                                <i class="ti-image"></i>
                            </a></td>
                    </tr>
                    <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                    </tr><tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td><a class="m-l-10 m-r-10 action-btn" href="#">
                                <i class="ti-image"></i>
                            </a></td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td><a class="m-l-10 m-r-10 action-btn" href="#">
                                <i class="ti-image"></i>
                            </a></td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>

                            <a class="m-l-10 m-r-10 action-btn" href="#">
                                <i class="ti-image text-success"></i>
                            </a>

                            <a class="m-l-10 m-r-10 action-btn" href="#">
                                <i class="ti-pencil text-warning"></i>
                            </a>

                            <a class="m-l-10 m-r-10 action-btn" href="#">
                                <i class="ti-trash text-danger"></i>
                            </a>

                            <a class="m-l-10 m-r-10 action-btn" href="#">
                                <i class="fa fa-undo text-info"></i>
                            </a>

                            <a class="m-l-10 m-r-10 action-btn" href="#">
                                <i class="ti-exchange-vertical text-inverse"></i>
                            </a>

                        </td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td><a class="m-l-10 m-r-10 action-btn" href="#">
                                <i class="ti-image"></i>
                            </a></td>
                    </tr>
                    <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                    </tr><tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                    </tr>
                    <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <button id="modal-btn" class="button">Click Here</button>

    <div id="my-modal" class="media-modal">
        <div class="media-modal-content">
            <div class="media-modal-header">
                <span class="media-close">&times;</span>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
                    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
                    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
                </ul>
            </div>
            <div class="media-modal-body">
                <div class="tab-content m-t-0">
                    <div id="home" class="tab-pane fade in active">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="white-box m-b-0">
                                    <form action="#" class="dropzone">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple /> </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="white-box m-b-0">
                                    <form action="wtf" class="dropzone">
                                        <input name="blog_id" type="text" value="111"  />
                                        <div class="fallback">
                                            <input name="file" type="file" multiple /> </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="white-box m-b-0">
                                    <form action="#" class="dropzone">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple /> </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="white-box m-b-0">
                                    <form action="#" class="dropzone">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple /> </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    </script>
@append