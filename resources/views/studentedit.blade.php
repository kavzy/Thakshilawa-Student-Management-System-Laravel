<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Edit Sudent</title>
    <style> 
    * {
         box-sizing: border-box;
    }

    body{  
      font-family: Calibri, Helvetica, sans-serif;  
      background-color: #ffffff;  
    }  
    .formbody{  
        padding: 50px;  
        background: #00C9FF;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #92FE9D, #00C9FF);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #92FE9D, #00C9FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */



    } 

    h1{
          font-family: 'Audiowide', cursive;

          font-family: 'Goldman', cursive;
    } 
      
    input[type=text], input[type=password], textarea {  
      width: 100%;  
      padding: 15px;  
      margin: 5px 0 22px 0;  
      display: inline-block;  
      border: none;  
      background: #f1f1f1;  
    } 

    #birthday{

      width: 100%;  
      padding: 15px;  
      margin: 5px 0 22px 0;  
      display: inline-block;  
      border: none;  
      background: #f1f1f1; 


    } 

    select{

      width: 100%;  
      padding: 15px;  
      margin: 5px 0 22px 0;  
      display: inline-block;  
      border: none;  
      background: #f1f1f1; 
    }
    input[type=text]:focus, input[type=password]:focus {  
      background-color: #ffe3ab;  
      outline: none;  
    }  
     div {  
                padding: 10px 0;  
             }  
    hr {  
      border: 1px solid #f1f1f1;  
      margin-bottom: 25px;  
    }  
    .updatebtn {  
      background-color: #4CAF50;  
      color: white;  
      padding: 16px 20px;  
      margin: 8px 0;  
      border: none;  
      cursor: pointer;  
      width: 100%;  
      opacity: 0.9;  
    }  
    .updatebtn:hover {  
      opacity: 1;  
    } 

    [type="date"] {
  background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat ;
  }
  [type="date"]::-webkit-inner-spin-button {
  display: none;
  }
  [type="date"]::-webkit-calendar-picker-indicator {
    opacity: 0;
  }
   
  
    </style>
  </head>
  <body>

    <div class="container">
        <div class="text-center">
            <div class="p-3 mb-2 bg-dark text-white"><b>Edit Student</b></div>
        </div>
        <div class="formbody">

        <div class="row">
            <div class="col-md-12">
            @foreach($errors->all() as $error)
     <div class="alert alert-danger" role="alert">

    {{$error}}
    </div>
    @endforeach

    <form class="was-validated" method="POST" action="/updateStudent">
    {{csrf_field()}}  
      
     <input type="hidden" name="id" value="{{$students->id}}"/> 
    <div class="form-group">  
      <label> Firstname </label>   
    <input type="text" class="form-control" name="firstname" placeholder= "Firstname" value="{{$students->firstname}}" size="15" required />
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">     
    <label> Lastname: </label>    
    <input type="text" class="form-control"  name="lastname" placeholder="Lastname" value="{{$students->lastname}}" size="15"required />
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
    </div> 

    <div class="form-group">     
    <label> Class: </label>    
    <input type="text" class="form-control"  name="class" placeholder="class No" value="{{$students->class}}" size="15"required />
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
    </div>  
    <div> 
    <label for="birthday">Birthday:</label>
    <input type="date" id="birthday" name="birthday" value="{{$students->birthday}}"> <br><br>
 
    <div class="form-group"> 
    <label>Contact No: :  </label>  
    <input type="text" class="form-control" name="contact" placeholder="phone no." value="{{$students->contact}}" size="10" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
    </div> 
    
    <div class="form-group">    
    <label>Current Address :</label>   
    <textarea cols="80" class="form-control" rows="5" name="address" required>{{$students->address}}</textarea>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>    
   
    </div> 

    <div class="form-group"> 
    <label for="email">NIC</label>  
    <input type="text" class="form-control" placeholder="Enter NIC" value="{{$students->nic}}" name="nic" required>  
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
    </div> 

    <button type="submit" class="updatebtn">Update</button>

                  
            

            </div>
        </div>
        
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


  
  </body>
</html>
