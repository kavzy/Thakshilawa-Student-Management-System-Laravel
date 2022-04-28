<!DOCTYPE html>  
    <html>  
    <head>
      <title>Register new student</title>  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Goldman:wght@700&display=swap" rel="stylesheet">
    
    <style> 
    * {
         box-sizing: border-box;
    }

    body{  
      font-family: Calibri, Helvetica, sans-serif;  
      background-color: #ffffff;  
    }  
    .container {  
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
    .registerbtn {  
      background-color: #4CAF50;  
      color: white;  
      padding: 16px 20px;  
      margin: 8px 0;  
      border: none;  
      cursor: pointer;  
      width: 100%;  
      opacity: 0.9;  
    }  
    .registerbtn:hover {  
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
    <center>  <h1>Thakshilawa Student Registration</h1> </center>
    <center><a class="btn btn-primary" href="/">Home</a> <a class="btn btn-primary" href="/studentupdate">Student Update</a> <a class="btn btn-primary" href="/searchstudents">Student Search</a> </center>
   
    <hr>
    @foreach($errors->all() as $error)
     <div class="alert alert-danger" role="alert">

    {{$error}}
    </div>
    @endforeach

    <form class="was-validated" method="POST" action="/regStudent">
    {{csrf_field()}}  
      
      
    <div class="form-group">  
      <label> Firstname </label>   
    <input type="text" class="form-control" name="firstname" placeholder= "Firstname" size="15" required />
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">     
    <label> Lastname: </label>    
    <input type="text" class="form-control"  name="lastname" placeholder="Lastname" size="15"required />
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
    </div> 

    <div class="form-group">     
    <label> Class: </label>    
    <input type="text" class="form-control"  name="class" placeholder="class No" size="15"required />
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
    </div>  
    <div> 
    <label for="birthday">Birthday:</label>
    <input type="date" id="birthday" name="birthday"> <br><br>

    
    <div class="form-group"> 
    <label>Contact No: :  </label>  
    <input type="text" class="form-control" name="phone" placeholder="0771234567" size="10" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
    </div> 
    
    <div class="form-group">    
    <label>Current Address :</label>   
    <textarea cols="80" class="form-control" rows="5" name="address"  value="address" required></textarea>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>    
   
    </div> 

    <div class="form-group"> 
    <label for="email">NIC</label>  
    <input type="text" class="form-control" placeholder="Enter NIC" name="nic" required>  
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
    </div> 

    <button type="submit" class="registerbtn">Register</button>

    </div>
       
    </form>  
    </body>  
    </html>  