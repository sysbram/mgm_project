@extends('layouts.app', ['activePage' => 'back_office', 'titlePage' => __('Member List')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-5">
                    <div class="card card-profile" id="adminProfile">
                        <!-- Ajax load for editing profile -->
                            <script>
                                load("{{url('/')}}"+"/{{$admin->id}}/partAdminProfile","adminProfile");
                            </script>
                    </div>
                </div>

                <div class="col-md-12 col-lg-7">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            Edit User
                        </div>
                        <div class="card-body">

                            <form action="/{{$admin->id}}/profile/setting" method="post">
                            {{csrf_field()}}
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                        <th scope="col">Access</th>
                                        <th scope="col">Read</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($menu as $menu_access)                                
                                        <tr>
                                            <td>
                                                {{$menu_access->menu_name}}
                                            </td>
                                            <input type="hidden" neme="uid_menu" value="{{$menu_access->uid}}">
                                            <td>
                                                <div class="custom-control custom-switch">
                                                <input type="checkbox" name="check{{$menu_access->id}}1" value="1" class="custom-control-input" id={{$menu_access->id}}"customSwitch1">
                                                <label class="custom-control-label" for={{$menu_access->id}}"customSwitch1"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="custom-control custom-switch">
                                                <input type="checkbox" name="check{{$menu_access->id}}2" value="1" class="custom-control-input" id={{$menu_access->id}}"customSwitch2">
                                                <label class="custom-control-label" for={{$menu_access->id}}"customSwitch2"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="custom-control custom-switch">
                                                <input type="checkbox" name="check{{$menu_access->id}}3" value="1" class="custom-control-input" id={{$menu_access->id}}"customSwitch3">
                                                <label class="custom-control-label" for={{$menu_access->id}}"customSwitch3"></label>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                <div class="form-group">
                                    <button class="btn btn-primary float-right" type="submit">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>


@endsection