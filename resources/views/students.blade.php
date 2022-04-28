<html>
    <head>
        <title>Student Management</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

    <body>
        <!--Home page-->
        <div class="container">
            <div class="text-center">
                <div class="p-3 mb-2 bg-info text-white">Student Management</div>
              
                <!--Home Image-->
                <img height="400" width="400" src="{{asset('/images/thaksilawa.png')}}">
            
                <div class="row">
                    <!--Register section-->
                    <div class="col-md-4 bg-warning">
                        
                            <br>
                            <img height="100" width="100" src="{{asset('/images/add.png')}}" alt="logo" class="img-size-50 mr-3 img-circle"><br><br>
                            <input type="button" class="btn btn-primary" onclick=" relocate_stregister()" value="Register Student"><br><br>
                            <script>
                                function relocate_stregister()
                                {
                                     location.href = "/studentregister";
                                } 
                                </script>


                    </div>
                    <!--Update section-->
                    <div class="col-md-4 bg-warning">
                        
                        <br>
                        <img height="100" width="100" src="{{asset('/images/edit.png')}}" alt="logo" class="img-size-50 mr-3 img-circle"><br><br>
                        <input type="button" class="btn btn-primary" onclick=" relocate_stupdate()" value="Update Student"><br><br>
                        <script>
                            function relocate_stupdate()
                            {
                                 location.href = "/studentupdate";
                            } 
                            </script>


                    </div>
                    <!--Search section-->
                    <div class="col-md-4 bg-warning">
                            
                        <br>
                        <img height="100" width="100" src="{{asset('/images/search.png')}}" alt="logo" class="img-size-50 mr-3 img-circle"><br><br>
                        <input type="button" class="btn btn-primary" onclick=" relocate_searchstudents()" value="Search Student"><br><br>
                        <script>
                            function relocate_searchstudents()
                            {
                                location.href = "/searchstudents";
                            } 
                            </script>


                    </div>
                </div>
            </div>
        </div>



    </body>
</html>