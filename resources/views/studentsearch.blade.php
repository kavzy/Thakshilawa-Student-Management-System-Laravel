<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Search Sudents</title>
    <style>
/* Header **/
header{
  background:#35424a;
  color:#ffffff;
  padding-top:30px;
  min-height:70px;
  border-bottom:#e8491d 3px solid;
}

header a{
  color:#ffffff;
  text-decoration:none;
  text-transform: uppercase;
  font-size:16px;
}

header li{
  float:left;
  display:inline;
  padding: 0 20px 0 20px;
}

header #branding{
  float:left;
}

header #branding h1{
  margin:0;
}

header nav{
  float:right;
  margin-top:10px;
}

header .highlight, header .current a{
  color:#e8491d;
  font-weight:bold;
}

header a:hover{
  color:#cccccc;
  font-weight:bold;
}

.active-cyan-3 input[type=search]:focus:not([readonly]) {
  border-bottom: 1px solid #4dd0e1;
  box-shadow: 0 1px 0 0 #4dd0e1;
}
 



    </style>   
  </head>
  <body>

   <header>

    <div class="container">
        <div id="branding">
            <h1><span class="highlight">Thakshilawa</span> Student Management</h1>
        </div>
        <nav>
            <ul>
                <li ><a href="/">Home</a></li>
                <li ><a href="/studentupdate">Student Update</a></li>
                <li  class="current" ><a href="/searchstudents">Student Search</a></li>
            </ul>
        </nav>
    </div>
   
    

   </header>
      
    <div class="container">
        
        <br>
        <div class="text-center">
            <div class="p-3 mb-2 bg-info text-white"><b>Search Students</b></div>
        </div>
        <center><img height="100" width="100" src="{{asset('/images/search.png')}}"></center>
        <div class="row">
            <div class="col-md-12">

            <!-- Search by name form -->
           <center> <form class="form-inline active-cyan-3" type="get" action="/searchstudentsbyname">
                    {{csrf_field()}} 
                <br><br>
                <i class="fas fa-search text-cyan"
        aria-hidden="true"></i><span>   </span><input class="form-control form-control-sm ml-3 w-75" type="search" name="searchname" placeholder="Search by student name">
                    <button class="btn btn-primary">Search</button></center>
                    </form>

            <!-- Search by nic form -->
           <center> <form class="form-inline active-cyan-3" type="get" action="/searchstudentsbynic">
                    {{csrf_field()}} 
            <br><br>
            <i class="fas fa-search text-cyan"
        aria-hidden="true"></i><span>   </span><input class="form-control form-control-sm ml-3 w-75" type="search" name="searchnic" placeholder="Search by student NIC">
                    <button class="btn btn-primary">Search</button></center>
                    </form>

            </div>
        </div>
        
  
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <br><br>
    <div class="container">
      @yield('content')
    </div>
  
  </body>
</html>
