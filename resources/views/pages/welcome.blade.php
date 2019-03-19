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
                        <td>

                            <label class="table-switch switch-light switch-ios m-t-0 m-b-0" onclick="">
                                <input type="checkbox">
                                <span class="m-t-0 m-b-0">
                                  <a></a>
                                </span>
                            </label>


                        </td>
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
    </script>
@append
