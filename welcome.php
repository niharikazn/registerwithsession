
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="style.css">
     <style>
          * {
    margin: 0;
    padding: 0;
}
body {
    background-color:pink;
    align-items: center;
    justify-content: center;
text-align: center;
  align-items: center;
 color: rgb(77, 3, 77);
}   
.w{
     margin: 1rem;
     margin-top: 2%;
}
h2{
     font-weight: 1rem;
     font-size: 3rem;
}
h1{
     font-weight: 1rem;
     font-size: 6rem;
}
.t{
     margin: 1rem;
}

   
</style>
</head>
<body>
<div class="w"><h1>Welcome</h1></div>
<div class="t"><h2>This is Niharika Jain</h2></div>
<section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">SEARCH DATA</h2>
                        <form method="POST" class="register-form" id="register-form" action="search.php">
                            <div class="form-group">
                                <label for="by">Search For</label>
                                <select name="by" id="by" style="padding:1rem;width-100%;border: none;
                              border-bottom: 1px solid #999;
                              padding: 6px 85px;
                              font-family: Poppins;
                              box-sizing: border-box;">
                                        <option value="hr">HR</option>
                                        <option value="manager">MANAGER</option>
                                        <option value="sales">SALES</option>
                                        <option value="all">ALL</option>
                              </select>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="search" id="signup" class="form-submit" value="Search"/>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </section>
<form method="POST" class="register-form" id="register-form" action="logout.php">
                            
                            <div class="form-group form-button">
                                <input type="submit" name="logout" id="signup" class="form-submit" value="Logout"/>
                            </div>
                            
                        </form>

</body>
</html>