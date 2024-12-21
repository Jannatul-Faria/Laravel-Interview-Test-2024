@extends('layout.app')
@section('content')
@include('includes.sidenav')
    <div class="dashboard__right">
        <div class="dashboard__header single_border_bottom">
            <div class="row gx-4 align-items-center justify-content-between">
                <div class="col-sm-2">
                    <div class="dashboard__header__left">
                        <div class="dashboard__header__left__inner">
                            <span class="dashboard__sidebarIcon d-none d-lg-block"></span>
                            <span class="dashboard__sidebarIcon__mobile sidebar-icon d-lg-none"></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 d-none d-sm-block">
                    <div class="dashboard__header__middle">
                        <div class="dashboard__header__middle__search">
                            <div class="dashboard__header__middle__search__item">
                                <input class="form--control radius-5" type="text" placeholder="Search anything...">
                                <button class="search_icon"><i class="material-symbols-outlined">search</i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="dashboard__header__right">
                        <div class="dashboard__header__right__flex">
                            <div class="dashboard__header__right__item responsive_search">
                                <a href="javascript:void(0)" class="dashboard__search__icon search__click"> <i class="material-symbols-outlined">search</i> </a>
                                <div class="search__wrapper">
                                    <form class="search__wrapper__form" action="#">
                                        <div class="search__wrapper__close"> <i class="fa-solid fa-times"></i> </div>
                                        <input class="search__wrapper__input" type="text" placeholder="Search Here.....">
                                        <button type="submit"><i class="material-symbols-outlined">search</i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="dashboard__header__right__item">
                                <a href="javascript:void(0)" class="dashboard__header__notification__icon lightMode" id="mode_change"> <i class="material-symbols-outlined">wb_sunny</i> </a>
                            </div>
                            <div class="dashboard__header__right__item">
                                <div class="dashboard__header__notification">
                                    <a href="javascript:void(0)" class="dashboard__header__notification__icon"> <i class="material-symbols-outlined">notifications</i> </a>
                                    <span class="dashboard__header__notification__number">9</span>
                                    <div class="dashboard__header__notification__wrap">
                                        <h6 class="dashboard__header__notification__wrap__title"> Notifications </h6>
                                        <ul class="dashboard__header__notification__wrap__list">
                                            <li class="dashboard__header__notification__wrap__list__item">
                                                <div class="dashboard__header__notification__wrap__list__flex">
                                                    <div class="dashboard__header__notification__wrap__list__icon">
                                                        <i class="las la-bell"></i>
                                                    </div>
                                                    <div class="dashboard__header__notification__wrap__list__contents">
                                                        <a class="dashboard__header__notification__wrap__list__contents__title" href="javascript:void(0)"> Notification One </a>
                                                        <span class="dashboard__header__notification__wrap__list__contents__sub"> 4 hours ago </span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dashboard__header__notification__wrap__list__item">
                                                <div class="dashboard__header__notification__wrap__list__flex">
                                                    <div class="dashboard__header__notification__wrap__list__icon">
                                                        <i class="las la-bell"></i>
                                                    </div>
                                                    <div class="dashboard__header__notification__wrap__list__contents">
                                                        <a class="dashboard__header__notification__wrap__list__contents__title" href="javascript:void(0)"> Notification Two </a>
                                                        <span class="dashboard__header__notification__wrap__list__contents__sub"> 8 hours ago </span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dashboard__header__notification__wrap__list__item">
                                                <div class="dashboard__header__notification__wrap__list__flex">
                                                    <div class="dashboard__header__notification__wrap__list__icon">
                                                        <i class="las la-bell"></i>
                                                    </div>
                                                    <div class="dashboard__header__notification__wrap__list__contents">
                                                        <a class="dashboard__header__notification__wrap__list__contents__title" href="javascript:void(0)"> Notification Three </a>
                                                        <span class="dashboard__header__notification__wrap__list__contents__sub"> 1 day ago </span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dashboard__header__notification__wrap__list__item">
                                                <div class="dashboard__header__notification__wrap__list__flex">
                                                    <div class="dashboard__header__notification__wrap__list__icon">
                                                        <i class="las la-bell"></i>
                                                    </div>
                                                    <div class="dashboard__header__notification__wrap__list__contents">
                                                        <a class="dashboard__header__notification__wrap__list__contents__title" href="javascript:void(0)"> Notification Four </a>
                                                        <span class="dashboard__header__notification__wrap__list__contents__sub"> 3 day ago </span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dashboard__header__notification__wrap__list__item">
                                                <div class="dashboard__header__notification__wrap__list__flex">
                                                    <div class="dashboard__header__notification__wrap__list__icon">
                                                        <i class="las la-bell"></i>
                                                    </div>
                                                    <div class="dashboard__header__notification__wrap__list__contents">
                                                        <a class="dashboard__header__notification__wrap__list__contents__title" href="javascript:void(0)"> Notification Five </a>
                                                        <span class="dashboard__header__notification__wrap__list__contents__sub"> 7 day ago </span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <a href="javascript:void(0)" class="dashboard__header__notification__wrap__btn"> See All Notification </a>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard__header__right__item">
                                <div class="dashboard__header__author">
                                    <a href="javascript:void(0)" class="dashboard__header__author__flex flex-btn">
                                        <div class="dashboard__header__author__thumb">
                                            <img src="{{ asset ('assets') }}/img/author_nav_new.jpg" alt="authorImg">
                                        </div>
                                    </a>
                                    <div class="dashboard__header__author__wrapper">
                                        <div class="dashboard__header__author__wrapper__list">
                                            <a href="javascript:void(0)" class="dashboard__header__author__wrapper__list__item">Sign In</a>
                                            <a href="javascript:void(0)" class="dashboard__header__author__wrapper__list__item">Sign Up</a>
                                            <a href="javascript:void(0)" class="dashboard__header__author__wrapper__list__item">Log Out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="dashboard__body">
            <div class="dashboard__inner">
                <div class="row g-4">
                    <div class="col-xxl-12 col-lg-12">
                        <div class="dashboard__card bg__white padding-20 radius-10">
                            <div class="container">
                                <div class="card mt-5">
                                    <h2 class="card-header">City List</h2>
                                    <div class="card-body">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                                            <a class="btn btn-success btn-sm" href="javascript:void(0)" id="createNewCity">
                                                <i class="fa fa-plus"></i> Create New City
                                            </a>
                                        </div>
        
                                        <table class="table table-bordered data-table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>State</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
        
                            <div class="modal fade" id="ajaxModel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="modelHeading"></h4>
                                        </div>
                                        <div class="modal-body">
                                            <form id="cityForm" name="cityForm" class="form-horizontal">
                                                <input type="hidden" name="city_id" id="city_id">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter City Name">
                                                </div>
        
                                                <div class="form-group">
                                                    <label for="state_id">State</label>
                                                    <select id="state_id" name="state_id" class="form-control">
                                                        <option value="">Select State</option>
                                                        @foreach ($states as $state)
                                                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
        
                                                <button type="submit" class="btn btn-success" id="saveBtn">Save</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="modal fade" id="showModel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">View City</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Name:</strong> <span class="show-name"></span></p>
                                            <p><strong>State:</strong> <span class="show-state"></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- <div class="dashboard__body">
            <div class="dashboard__inner">
                <div class="row g-4">
                    <div class="col-xxl-12 col-lg-12">
                        <div class="dashboard__card bg__white padding-20 radius-10">
                            <div class="container">
                                <div class="card mt-5">
                                    <h2 class="card-header">City List</h2>
                                    <div class="card-body">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                                            <a class="btn btn-success btn-sm" href="javascript:void(0)" id="createNewcity"> <i class="fa fa-plus"></i> Create New State</a>
                                        </div>
        
                                        <table class="table table-bordered data-table">
                                            <thead>
                                                <tr>
                                                    <th width="60px">No</th>
                                                    <th>Name</th>
                                                    <th>state</th>
                                                    <th width="280px">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
        
                            <div class="modal fade" id="ajaxModel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="modelHeading"></h4>
                                        </div>
                                        <div class="modal-body">
                                            <form id="stateForm" name="stateForm" class="form-horizontal">
                                                <input type="hidden" name="city_id" id="city_id">
                                                @csrf
        
                                                <div class="alert alert-danger print-error-msg" style="display:none">
                                                    <ul></ul>
                                                </div>
        
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-2 control-label">Name:</label>
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" maxlength="50">
                                                    </div>
                                                </div>
        
                                                <div class="form-group">
                                                    <label for="state_id" class="col-sm-4 control-label">Select state:</label>
                                                    <div class="col-sm-12">
                                                        <select class="form-control" id="state_id" name="state_id">
                                                            <option value="">-- Select state --</option>
                                                            @foreach ($states as $state)
                                                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
        
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-success mt-2" id="saveBtn" value="create"><i class="fa fa-save"></i> Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="modal fade" id="showModel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="modelHeading"><i class="fa-regular fa-eye"></i> Show State</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Name:</strong> <span class="show-name"></span></p>
                                            <p><strong>state:</strong> <span class="show-state"></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        


    </div>
@endsection


@push('script')
<script>
    $(function () {
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });
    
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('cities.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name'},
                {data: 'state_name', name: 'state.name'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
    
        $('#createNewCity').click(function () {
            $('#cityForm').trigger("reset");
            $('#modelHeading').html("Create New City");
            $('#ajaxModel').modal('show');
        });
    
        $('body').on('click', '.editcity', function () {
            var city_id = $(this).data('id');
            $.get("{{ route('cities.index') }}" + '/' + city_id + '/edit', function (data) {
                $('#modelHeading').html("Edit City");
                $('#ajaxModel').modal('show');
                $('#city_id').val(data.id);
                $('#name').val(data.name);
                $('#state_id').val(data.state_id);
            });
        });
    
        $('#cityForm').submit(function (e) {
            e.preventDefault();
            $.ajax({
                data: $(this).serialize(),
                url: "{{ route('cities.store') }}",
                type: "POST",
                success: function () {
                    $('#cityForm').trigger("reset");
                    $('#ajaxModel').modal('hide');
                    table.draw();
                }
            });
        });
    
        $('body').on('click', '.deletecity', function () {
            var city_id = $(this).data("id");
            if (confirm("Are You sure want to delete?")) {
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('cities.store') }}" + '/' + city_id,
                    success: function () {
                        table.draw();
                    }
                });
            }
        });
    });
    </script>
{{-- <script type="text/javascript">
    $(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
//  Render DataTable

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('cities.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'state.name', name: 'state.name'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
//  Click to Button
        $('#createNewcity').click(function () {
            $('#saveBtn').val("create-city");
            $('#city_id').val('');
            $('#stateForm').trigger("reset");
            $('#modelHeading').html("<i class='fa fa-plus'></i> Create New State");
            $('#ajaxModel').modal('show');
        });
//   Click to Edit Button
        $('body').on('click', '.editcity', function () {
            var city_id = $(this).data('id');
            $.get("{{ route('states.index') }}" +'/' + city_id +'/edit', function (data) {
                $('#modelHeading').html("<i class='fa-regular fa-pen-to-square'></i> Edit State");
                $('#saveBtn').val("edit-state");
                $('#ajaxModel').modal('show');
                $('#city_id').val(data.id);
                $('#name').val(data.name);
                $('#state_id').val(data.state_id);
            });
        });

        $('#stateForm').submit(function(e) {
            e.preventDefault();

            let formData = new FormData(this);
            $('#saveBtn').html('Sending...');

            $.ajax({
                type:'POST',
                url: "{{ route('cities.store') }}",
                data: formData,
                contentType: false,
                processData: false,
                success: (response) => {
                    $('#saveBtn').html('Submit');
                    $('#stateForm').trigger("reset");
                    $('#ajaxModel').modal('hide');
                    table.draw();
                },
                error: function(response){
                    $('#saveBtn').html('Submit');
                    $('#stateForm').find(".print-error-msg").find("ul").html('');
                    $('#stateForm').find(".print-error-msg").css('display','block');
                    $.each(response.responseJSON.errors, function(key, value) {
                        $('#stateForm').find(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                    });
                }
            });
        });

//  Click to Show 
        $('body').on('click', '.showcity', function () {
            var city_id = $(this).data('id');
            $.get("{{ route('cities.index') }}" +'/' + city_id, function (data) {
                $('#showModel').modal('show');
                $('.show-name').text(data.name);
                $('.show-state').text(data.state.name);
            
            })
    });
//   Click to delete Button
        $('body').on('click', '.deletecity', function () {
            var city_id = $(this).data("id");
            confirm("Are You sure want to delete?");

            $.ajax({
                type: "DELETE",
                url: "{{ route('cities.store') }}"+'/'+city_id,
                success: function (data) {
                    table.draw();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });
    });
</script> --}}

@endpush