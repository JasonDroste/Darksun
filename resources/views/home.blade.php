<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container"> 
        <header>
             Darksun
        </header>
        <nav>
            Navigation Here
        </nav>
        
    @auth
        <p>You are logged in!</p>
        <form action="/logout" methdod="POST">
            @csrf
            <button type="submit" class="btn btn-primary">Logout</button>
        </form>

        
    @else   
            <form action="/register" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="name" aria-describedby="name" placeholder=" Full Name">
                    </div>
                
                    <div class="col">
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">            
                    </div>
                
                    <div class="col">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>

                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                
            </form>
           

            <form action="/login" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="loginname" aria-describedby="name" placeholder=" Full Name">
                    </div>
                
                    <div class="col">
                        <input type="password" class="form-control" name="loginpassword" placeholder="Password">
                    </div>

                </div>
                <button type="submit" class="btn btn-primary">login</button>
                
            </form>
            
    @endauth
    <footer>
                Footer
            </footer>
        </div>
</body>
</html>