<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Pacifico&display=swap" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Source+Sans+Pro&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="bg"></div>
    <header>
      <div class="content_header ">
        <a href="/"><img src="{{ asset('frontend/img/logo_final.png') }}?{{ time() }}" alt="">
        </a>

        <div class="bienvenue">   
          @if(session()->has('loginId'))
          <a href="#" style="font-family: pacifico; font-size:25px">Welcome {{session()->get('loginId')}}</a>
          @endif
        </div>

        <div class="home">
          <a href="/">Home</a>
        </div>
        
        @if(session()->has('loginId'))
      
        <div class="menudown">
          <a class="menubtn">Menu
            <i class="fa fa-caret-down"></i>
          </a>
          <div class="menudown-content">
            <div class="informations">
  
              <a href="/information">Informations</a>
       
            </div>
            
    
            <div class="informations">
        
              <a href="/regime" >My diet</a>
       
            </div>
    
            <div class="informations">
        
              <a href="/programme" >My Program</a>
         
            </div>
    
    
            <div class="informations">
       
              <a href="/historique" >History</a>
          
            </div>
            <div class="informations">
         
              <a href="/exercices">Exercises</a>
           
            </div>
            <div class="informations">
            
              <a href="logout" id="deconnexion" >Logout</a>
           
            </div>
          @else 
          <div class="home">
            
            <a href="login" id="connexion" >Login</a>
         
          </div>
          @endif
          </div>
        </div> 


      </div>
    </header>
    <body>
      @yield('content')
    </body>
    <footer>
      <div class="footer-content">
        <img src="{{ asset('frontend/img/logo_final.png') }}?{{ time() }}" alt="">
        <p style="font-family: pacifico; font-size:25px; font-weight:100">
          Nutritional program generated by linear optimisation.</p>
        <h3>Get Social with Us</h3>
        <ul class="socials">
          <li>
            <a href="#"><i class="fa fa-facebook"></i></a>
          </li>
          <li>
            <a href="https://fr.linkedin.com/company/orsima"
              ><i class="fa fa-linkedin-square"></i
            ></a>
          </li>
          <li>
            <a href="info@orsima.com"><i class="fa fa-google"></i></a>
          </li>
        </ul>
      </div>
    </footer>
    
  </body>
</html>