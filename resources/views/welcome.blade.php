<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>WhiteLegals </title>
    <style>
        .container{
    background-color: rgb(44, 120, 235);
    width: 700px;
    height: 70px;
    margin-top: 20px;
    display: flex;
    flex-direction: row;
    justify-content: flex-end;
    align-items: center;
    border-radius: 10px;
}
.heading{
    width: 200px;
    height: 50px;
    color: white;
    font-weight: bold;
    font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
}
.sec1{
    flex-grow: 7;
    margin-top: 35px;
}
.bi-bell-fill,.bi-person-circle,.bi-gear-fill,.bi-people-fill,.bi-123,.bi-box-fill,.bi-receipt,.bi-house-fill{
    color: white;
    font-weight: bold;
    height: 30px;
    width: 30px;
    margin-right: 20px;
}
.main{
    height: 100%;
    display: flex;
    flex-direction: row;
    justify-content: center;
}
.sub1{
    position: absolute;
    top:18%;
    left: 0;
    bottom: 0;
    height: 80%;
}
ul{
    list-style-type: none;
    border-top-right-radius: 20px;
    border-top-left-radius:20px ;
    height: 100%;
    width: 300px;
    background-color: rgb(44, 120, 235);
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    margin-left: 20px;
}
li a{
    text-decoration: none;
    color: white;
    text-transform: uppercase;
    font-weight: bold;
}
.item1{
    background-color: rgb(245, 179, 38);
    width: 280px;
    height: 80px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 20px;
    box-shadow: 2px 3px 5px black;

}
.heading2{
    color: white;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 20px;

}
.value{
    color: white;
    font-weight: bold;
    font-size: 30px;
    letter-spacing: 5px;
}
.item2{
    background-color: rgb(8, 88, 12);
    width: 280px;
    height: 80px;
    margin-left: 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 20px;
    box-shadow: 2px 3px 5px black;

}
.item3{
    background-color: rgb(144, 45, 236);
    width: 280px;
    height: 150px;
    margin-left: 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 20px;
    box-shadow: 2px 3px 5px black;
}
.sub2{
    display: flex;
    flex-direction: row;
    justify-content: center;
    margin-top: 30px;
   margin-left: 20px;
   
}
.sub2 a{
   text-decoration:none;
   
}
.sub3{
    position: absolute;
    left: 25%;
    margin-top: 30px;
    width: 80%;
    
}


    </style>
</head>
<body>
    <header>
       <div class="container">
        <div class="sec1">
         <p class="heading">Welcome</p>
        </div>
        <div>
            
        </div>
       </div>
    </header>

    <section>
        <div class="main">
            
            <div class="sub2">
            <a href="{{ route('login') }}">
                <div class="item1">
                    <p class="heading2">CLIENT</p>
                </div>
            </a>
            <a href="{{ route('employee-login') }}">

                <div class="item2">
                    <p class="heading2">EMPLOYEE</p>
                </div>
            </a>
             
            </div>        
        </div>
        
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</body>
</html>