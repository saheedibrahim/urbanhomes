<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pageTitle')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 
    @stack('stylesheet')
    <style>
        :root {
            --primary-purple: #5046E4;
            --light-purple: #F5F4FF;
            --overdue-red: #FF4444;
        }
        body {
            /* background-color: #F8F9FA; */
            background-color: white;
        }
        .sidebar {
            /* width: 250px; */
            height: 100vh;
            border-right: 1px solid #eee;
        }
        .shadow{
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }
        .nav-link {
            color: #666;
            padding: 0.75rem;
            margin: 0.25rem 0;
            border-radius: 8px;
        }
        .nav-link.active {
            background-color: var(--light-purple);
            color: var(--primary-purple);
        }
        .nav-link i {
            width: 20px;
            margin-right: 10px;
        }
        .table {
            background: white;
            border-radius: 12px;
            overflow: hidden;
        }
        .btn-purple {
            background: var(--primary-purple);
            color: white;
        }
        .header-icons {
            gap: 1rem;
        }

        .mp {
            padding: 0;
            margin: 0;
        }

        .bcp {
            background: #524CBF;
        }

        .tcp{
            color: #524CBF;
        }
        .nav>a{
            padding-left: 60px;
        }
        .nav>a>span{
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid  bg-white">
        <div class="row">
        
            <div class="col-2 bg-white sidebar card mp">
                <div class="">
                    <a href="{{url('/test')}}" class="brand-link text-center">
                     <img src="/back/dist/assets/img/logo12_1.png" alt="urbanhomes Logo" class="brand-image my-3 mx-4" />
                    </a>
                </div>
                <nav class="nav flex-column mt-3" style="">            
                    <a href="#" class="nav-link">
                        <img src="/back/dist/assets/img/dashboard.png" alt="" class="" />
                        <span class="pb-1">Dashboard</span>
                    </a>
                    <a href="#" class="nav-link d-flex flex-row text-center">
                        <img src="/back/dist/assets/img/payments-outline.png" alt="" class="brand-image opacity-75 " />
                        <span class="">Rent</span>
                    </a>
                    <a class="nav-link" href="#">
                        <img src="/back/dist/assets/img/request.png" alt="" class="" />
                        <span class="">Request</span>
                    </a>
                    <a class="nav-link" href="#">
                        <img src="/back/dist/assets/img/uil_setting.png" alt="" class="" />
                        <span class="">Profile Settings</span>
                    </a>
                    <div class="position-absolute bottom-0 start-0" style="padding-bottom: 150px; padding-left:100px;">
                        <a class="nav-link text-danger align-self-end mt-auto p-2"  href="#">
                            <img src="/back/dist/assets/img/logout.png" alt="" class="brand-image opacity-75" />
                            <span class="p-2 tcp">Logout</span>
                        </a>
                    </div>
                </nav>
            </div>
        
            <div class="col-10 bg-body-secondary mp">
                <div class="shadow-lg">
                    <ul class="nav justify-content-end bg-white  py-1" style="padding-right: 20px;">
                        <li class="nav-item">
                            <a class="nav-link" href="#" role="button">
                                <img src="/back/dist/assets/img/home.png" alt="" class="" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="/back/dist/assets/img/message.png" alt="" class="" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="/back/dist/assets/img/alarm.png" alt="" class="" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <img src="/back/dist/assets/img/user.png" alt="" class="" />
                            </a>
                        </li> 
                    </ul>  

                </div>
                <div class="">
                    <div  style="background: rgb(82, 76, 191, 0.1)">
        
                        @yield('content')
                        
                    </div>   
                </div>
            </div>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</body>
</html>