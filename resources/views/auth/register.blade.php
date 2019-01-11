
    <!DOCTYPE html>
<html lang="en">
 

<body id="register">
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/tooplate.css">

    <div class="container">
        <div class="row tm-register-row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-register-col-l">
                <form class="tm-bg-black p-5 h-100" method="post" action="{{ route('register')}}" style="border-radius: 20px;">
                    @csrf
                    <div class="input-field">
                        <input placeholder="Name" id="first_name" name="name" type="text" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Email" id="last_name" name="email" type="email" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Password" id="email" name="password" type="password" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Confirm Password" id="mobile" name="password_confirmation" type="password" class="validate">
                    </div>
                    
                    <div class="text-right mt-4">
                        <button type="submit" class="waves-effect btn-large btn-large-white px-4 black-text">SUBMIT</button>
                        
                    </div>
                
                </form>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-register-col-r">
                <form class="tm-bg-black">
                <header class="mb-5">
                    <h3 class="mt-0 text-white">Register</h3>
                    <h6 class="mt-0 text-white font-weight-light">
                    <p>Buat Akan Anda disini!!</p>
                    <p>Silakan Tunggu Akun Anda diKonfimasi</p></h6><br><br><br><br><br>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ml-auto mr-0 text-center" style="justify-content: center; border-radius: 10px;">
                                <a href="{{ url('login')}}" class="waves-effect btn-large btn-large-white px-4 black-text rounded-0">Login</a>
                        </div>
                    </div>
                </form>
                </header>  
            </div>
                 
        
        
    </div>

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script>
        $(document).ready(function () {
            $('select').formSelect();
        });
    </script>
</body>

</html>
