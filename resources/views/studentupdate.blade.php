<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Update Sudents</title>
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
                <li class="current"><a href="/studentupdate">Student Update</a></li>
                <li ><a href="/searchstudents">Student Search</a></li>
            </ul>
        </nav>

    </div>
   
    

   </header>
      
    <div class="container">
        
        <br>
        <div class="text-center">
            <div class="p-3 mb-2 bg-info text-white"><b>Update Students</b></div>
        </div>
        <center><img height="100" width="100" src="{{asset('/images/edit.png')}}"></center>
        <div class="row">
            <div class="col-md-12">
              <!--Students Table-->
                <table class="table table-dark table-hover">
                    <th>ID</th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Class</th>
                    <th>Birthday</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>NIC</th>
                    <th>Action</th>

                @foreach($students as $student)    
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->firstname}}</td>
                        <td>{{$student->lastname}}</td>
                        <td>{{$student->class}}</td>
                        <td>{{$student->birthday}}</td>
                        <td>{{$student->contact}}</td>
                        <td>{{$student->address}}</td>
                        <td>{{$student->nic}}</td>
                        <td><a href="/studentedit/{{$student->id}}" class="btn btn-primary">EDIT</a><span> </span><a href="/studentdelete/{{$student->id}}" class="btn btn-danger">DELETE</a></td>
                    </tr>
                @endforeach
                  
                </table>
            </div>
        </div>
        
  
    </div>
    
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


  
  </body>
</html>
