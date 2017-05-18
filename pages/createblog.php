<!DOCTYPE html>
<html>
    <head>
        <title>View Blog</title>
        
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href= "css/mainstyle.css" rel="stylesheet" type="text/css">
        <link href= "css/viewblog.css" rel="stylesheet" type="text/css">
        <link href= "css/fullblog.css" rel="stylesheet" type="text/css">
        <link href= "css/aboutus.css" rel="stylesheet" type="text/css">
        <link href= "css/login.css" rel="stylesheet" type="text/css">
        <link href= "css/register.css" rel="stylesheet" type="text/css">
        
    </head>
    
    <body>
        <div id="wrapper">
            <div class="row">
            <div class="col-md-3">
                <section id="nav">
 
                            <h2>Blog Site</h2>
                            <p><a href="./" /> Home</a></p>
                            <p><a href="./register" /> Become a blogger</a></p>
                            <p><a href="./aboutus" /> About us</a></p>
                            <p><a href="./login" /> Login</a></p>
                            <div id="spacer"> </div>
                </section><!--section Nav-->
            </div><!--cols 3-->
            
            <div class="col-md-8">
                <section id="nav2">
                    
                    <div id="headerWords">
                        <img src="images/writing.png" />
                        <h1>Become a Blogger</h1>
                        <h3>Create a new account below</h3>
                    </div>
                </section><!--section Nav-->
                
            </div><!--cols 3-->
            
               <div class="col-md-8">
                <section id="nav">
                    <div class="container">
                        <form>
                            
                          <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="offset-sm-2 col-sm-4">
                              <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                          </div>
                          
  
                          
                          <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="offset-sm-2 col-sm-4">
                              <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Username</label>
                            <div class="offset-sm-2 col-sm-4">
                              <input type="text" name="username" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                          </div>
                          

                         
                        <div class="form-group">
                          <label for="bio">Quick Bio</label>
                          <textarea class="form-control" id="bio" rows="3" ></textarea>
                        </div>
                        
                                                    <div class="form-group row">
                              <div class="offset-sm-2 col-sm-4">
                              <button type="submit" class="btn btn-primary">Sign Up</button>
                            </div>
                              
                        <div class="form-group">
                          <label for="exampleInputFile">File input</label>
                          <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                        </div>
   
                            
                          </div>
                        </form>
                      </div>
                

                </section><!--section Nav-->
                
            </div><!--cols 3-->

            </div><!--End row-->
            

        </div><!--End wrapper-->
    </body>
</html>