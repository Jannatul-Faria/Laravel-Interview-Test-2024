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
                                    <h2 class="card-header">State List</h2>
                                    <div class="card-body">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                                            <a class="btn btn-success btn-sm" href="javascript:void(0)" id="createNewState"> <i class="fa fa-plus"></i> Create New State</a>
                                        </div>
        
                                        <table class="table table-bordered data-table">
                                            <thead>
                                                <tr>
                                                    <th width="60px">No</th>
                                                    <th>Name</th>
                                                    <th>Country</th>
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
                                                <input type="hidden" name="state_id" id="state_id">
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
                                                    <label for="country_id" class="col-sm-4 control-label">Select Country:</label>
                                                    <div class="col-sm-12">
                                                        <select class="form-control" id="country_id" name="country_id">
                                                            <option value="">-- Select Country --</option>
                                                            @foreach ($countries as $country)
                                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
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
                                            <p><strong>Country:</strong> <span class="show-country"></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        


    </div>
@endsection


@push('script')
<script type="text/javascript">
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
            ajax: "{{ route('states.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'country.name', name: 'country.name'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
//  Click to Button
        $('#createNewState').click(function () {
            $('#saveBtn').val("create-state");
            $('#state_id').val('');
            $('#stateForm').trigger("reset");
            $('#modelHeading').html("<i class='fa fa-plus'></i> Create New State");
            $('#ajaxModel').modal('show');
        });
//   Click to Edit Button
        $('body').on('click', '.editstate', function () {
            var state_id = $(this).data('id');
            $.get("{{ route('states.index') }}" +'/' + state_id +'/edit', function (data) {
                $('#modelHeading').html("<i class='fa-regular fa-pen-to-square'></i> Edit State");
                $('#saveBtn').val("edit-state");
                $('#ajaxModel').modal('show');
                $('#state_id').val(data.id);
                $('#name').val(data.name);
                $('#country_id').val(data.country_id);
            });
        });

        $('#stateForm').submit(function(e) {
            e.preventDefault();

            let formData = new FormData(this);
            $('#saveBtn').html('Sending...');

            $.ajax({
                type:'POST',
                url: "{{ route('states.store') }}",
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
        $('body').on('click', '.showstate', function () {
            var state_id = $(this).data('id');
            $.get("{{ route('states.index') }}" +'/' + state_id, function (data) {
                $('#showModel').modal('show');
                $('.show-name').text(data.name);
                $('.show-country').text(data.country.name);
            
            })
    });
//   Click to delete Button
        $('body').on('click', '.deletestate', function () {
            var state_id = $(this).data("id");
            confirm("Are You sure want to delete?");

            $.ajax({
                type: "DELETE",
                url: "{{ route('states.store') }}"+'/'+state_id,
                success: function (data) {
                    table.draw();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });
    });
</script>

@endpush