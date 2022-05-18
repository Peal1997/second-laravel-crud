{{-- Bismillah --}}
 

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Teachers Info</title>
        <!-- ALL CSS FILES  -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
       
    
    </head>
    
    <body>
        
    
   <section class="header">
     <div class="container shadow">
         
        <div class="row">
            <div class="col-md-3">
                <a href="{{url('home')}}"><img src="https://media.istockphoto.com/vectors/adoption-and-community-care-vector-id1286680331?k=20&m=1286680331&s=612x612&w=0&h=N7cQExSqTTo-Jd30iyOe0IrCCpbeyCRBuxUHL1j13qs=" alt=""></a>
            </div>
            <div class="col-md-9">
            <div class="menu">
                <ul>
                    <li><a href="{{url('home')}}">Home</a></li>
                    <li><a href="{{'add'}}">Add Student</a></li>
                    <li><a href="{{'edit'}}">Edit Student</a></li>
                    <li><a href="{{'single'}}">Single</a></li>
                </ul>
            </div>
            </div>
        </div>
     </div>
    </section> 

    <section class="topbar">
        <h1>@yield('page', 'this is page name')</h1>
        <p>@yield('page-sub-title', 'page sub-title')</p>
        
    </section>

    
    @section('main-content')
        
    @show



    <footer class="footer">
        <div class="container">
            <p>Copyright © 2022 Apple Inc. All rights reserved.</p>
        </div>
        
    </footer>
   
    
    
        <!-- JS FILES  -->
        <script src ="assets/js/jquery-3.6.0.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        
        <script src="assets/js/scripts.js"></script>
        
    </body>
    </html>