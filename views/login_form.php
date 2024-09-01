<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>

    <link rel="stylesheet" href="views/assets/css/login_form.css"> <!-- link to the css file -->
</head>

<body>

    <header id="desktop-nav">
        <img
        
            src="views/assets/img/cite-logo.png"
            alt="CITE logo"
            class="cite-logo" 
        >
        <!--
       /// <button class="slide-button">Slide</button> HIDE THE INPUT ONLY
        <div id="inputContainer" class="input-login">
            ///student input and the placeholder is the letter that show when you are input 
            <input type="text" id="id" name="studentId" placeholder="ID">   
            <input type="password" id="pass" name="Password" placeholder="PASSWORD"> 
            <input type="submit"  id="login"   value="Login">    
        </div>
           -->
    </header>

    <div id="body-login">

        <h1 class="school-name"> CITE Technical Institutes</h1>
    
        <div class="dashboard-login">
            <div class="attendance_name">
                <h3>Attendance</h3>
              </div>
            <div class="body-input">
                <input type="text" name="name" placeholder="Name">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" id="time" value="Login">
            </div>
        </div>

    </div>
    
    <script src="views/assets/js/login_form.js"></script>
</body>

</html>