@include('dashboard/header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-sm-6">
                        <h1 class="m-0">Welcome to our site Dashboard</h1>
                    </div>

                </div>
            </div>



        <div class="row">
            <div class="col-md-4">
                <div class="card-counter primary">
                    <i class="fa fa-code-fork"></i>
                    <span class="count-numbers">{{$courses_count}}</span>
                    <span class="count-name">Courses</span>
                </div>
            </div>



            <div class="col-md-4">
                <div class="card-counter success">
                    <i class="fa fa-database"></i>
                    <span class="count-numbers">{{$courses_details_count}}</span>
                    <span class="count-name">Materials</span>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-counter info">
                    <i class="fa fa-users"></i>
                    <span class="count-numbers">{{$users_count}}</span>
                    <span class="count-name">Users</span>
                </div>
            </div>


        </div>
    </div>

</div>

<aside class="control-sidebar control-sidebar-dark">

</aside>

@include('dashboard/footer')
