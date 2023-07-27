<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
    <title>K Fitness</title>
</head>
<body>
    <header class="header">
        <a href="{{ route ('home')}}" class="logo">
            <img src="./Images/WhatsApp Image 2023-04-30 at 10.12.24 PM.png" width="15%" height="15%" alt=""></a>
        <nav>
            <div class="navbar">
                <a href="{{ route ('home')}}">Home</a>
                <a href="#classes">Classes</a>
                <a href="#trainers">Trainers</a>
                <a href="#nutrition">Nutrition</a>
                <a href="{{ route ('plan')}}">Plan</a> 
                <span>|</span>  
                <a href="#" onclick="event.preventDefault(); logout()"><ion-icon name="log-out-outline"></ion-icon></i></a>   
            </div>
        </nav>
        <script>
        function logout() {
            fetch("{{ route('logout') }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                }
            }).then(response => {
                if (response.redirected) {
                    window.location.href = response.url;
                }
            });
        }
    </script>
     
    </header>

    <section class="home">
        <div class ="max-width">
            <div class="hom-content">
                <h3>help for ideal <br> body fitness </h3>
                <p> Choose different workouts with different trainers,
                    healthy recipes, for a whole body and mind
                    approach to feeling great.</p>
                <a href="{{ route ('plan')}}" class="btn">Get started</a>
            </div>
            <div class="home-image">
               <img src="./Images/handsome-man-is-engaged-gym.png" width="100%" height="90%" alt="">
            </div>
        </div>
    </section>

    <section class="classes" id="classes">
        <h1 class="heading">Our classes</h1>
        <div class="box-container">
            <div class="box">
                <img src="./Images/female-legs-running-track-gym.jpg" width="50%" height="50%" alt="">
                <div class="info">
                    <h3>Treadmill</h3>
                    <p>treadmill classes are 45-minute workouts, divided into two training styles: running and strength training. Half the class is on the treadmills, where you'll be mixing up running, sprinting and walking. The other half of the class is all about strength and conditioning training using weights and bodyweight exercises.</p>
                    <a href="#trainers"><button class="btn">Start</button></a>
                </div>
            </div>

        </div>

        <div class="box-container">
            <div class="box">
                <img src="./Images/low-angle-view-unrecognizable-muscular-build-man-preparing-lifting-barbell-health-club.jpg" width="50%" height="50%" alt="">
                <div class="info">
                    <h3>Weight Lifting</h3>
                    <p>Weightlifting is a weight class sport so athletes strive to balance maximum power and strength development with the maintenance of an ideal body composition. Weightlifting as a fitness protocol produces athletic, strong and powerful bodies capable of incredible athletic feats.</p>
                    <a href="#trainers"><button class="btn">Start</button></a>
                </div>
            </div>

        </div>

        <div class="box-container">
            <div class="box">
                <img src="./Images/two-professional-boxer-boxing-black-smoky.jpg" width="50%" height="50%" alt="">
                <div class="info">
                    <h3>Boxing</h3>
                    <p>Boxing classes are 60 minutes long and are usually structured in three “rounds” that include an intense cardio warmup, boxing with intervals of bodyweight exercises, and of course, core work.
                        All three rounds are extremely challenging . In fact, a boxing class can burn anywhere from 500 to 1,000 calories per hour.</p>
                    <a href="#trainers"><button class="btn">Start</button></a>
                </div>
            </div>

        </div>
    </section>


    <section class="trainers" id="trainers">
       <div class="container">
       <h1 class="heading">Trainers</h1>
        <div class="card-wrapper">
            <div class="card">
                <img src="./Images/low-angle-view-unrecognizable-muscular-build-man-preparing-lifting-barbell-health-club.jpg" alt="card background" class="card-img">
                <img src="./Images/trainer 1.png" alt="profile image" class="profile-img">
                <h1>Michelle Stones</h1>
                <p class="trainer-job">Weightlifting</p>
                <p class="about">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Aliquam, perferendis magni, corrupti doloremque laboriosam
                    reiciendis molestias doloribus consectetur facilis sit odio 
                    blanditiis ipsum adipisci ab et. Placeat tenetur debitis iure.
                </p>
                <a href="{{ route ('contact')}}" class="btn">Contact</a>
                <ul class="social-media">
                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="card">
                <img src="./Images/two-professional-boxer-boxing-black-smoky.jpg" alt="card background" class="card-img">
                <img src="./Images/trainer 2.png" alt="profile image" class="profile-img">
                <h1>Amelia Khatib</h1>
                <p class="trainer-job">Boxing</p>
                <p class="about">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Aliquam, perferendis magni, corrupti doloremque laboriosam
                    reiciendis molestias doloribus consectetur facilis sit odio 
                    blanditiis ipsum adipisci ab et. Placeat tenetur debitis iure.
                </p>
                <a href="{{ route ('contact')}}" class="btn">Contact</a>
                <ul class="social-media">
                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="card">
                <img src="./Images/low-angle-view-unrecognizable-muscular-build-man-preparing-lifting-barbell-health-club.jpg" alt="card background" class="card-img">
                <img src="./Images/trainer 3.png" alt="profile image" class="profile-img">
                <h1>Adam Smith</h1>
                <p class="trainer-job">Weightlifting</p>
                <p class="about">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Aliquam, perferendis magni, corrupti doloremque laboriosam
                    reiciendis molestias doloribus consectetur facilis sit odio 
                    blanditiis ipsum adipisci ab et. Placeat tenetur debitis iure.
                </p>
                <a href="{{ route ('contact')}}" class="btn">Contact</a>
                <ul class="social-media">
                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="card">
                <img src="./Images/female-legs-running-track-gym.jpg" alt="card background" class="card-img">
                <img src="./Images/trainer 4.png" alt="profile image" class="profile-img">
                <h1>Sam Jone</h1>
                <p class="trainer-job">Treadmill</p>
                <p class="about">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Aliquam, perferendis magni, corrupti doloremque laboriosam
                    reiciendis molestias doloribus consectetur facilis sit odio 
                    blanditiis ipsum adipisci ab et. Placeat tenetur debitis iure.
                </p>
                <a href="{{ route ('contact')}}" class="btn">Contact</a>
                <ul class="social-media">
                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="card">
                <img src="./Images/two-professional-boxer-boxing-black-smoky.jpg" alt="card background" class="card-img">
                <img src="./Images/trainer 5.png" alt="profile image" class="profile-img">
                <h1>James Martinez</h1>
                <p class="trainer-job">Boxing</p>
                <p class="about">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Aliquam, perferendis magni, corrupti doloremque laboriosam
                    reiciendis molestias doloribus consectetur facilis sit odio 
                    blanditiis ipsum adipisci ab et. Placeat tenetur debitis iure.
                </p>
                <a href="{{ route ('contact')}}" class="btn">Contact</a>
                <ul class="social-media">
                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="card">
                <img src="./Images/female-legs-running-track-gym.jpg" alt="card background" class="card-img">
                <img src="./Images/trainer 6.png" alt="profile image" class="profile-img">
                <h1>Olive Smith</h1>
                <p class="trainer-job">Treadmill</p>
                <p class="about">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Aliquam, perferendis magni, corrupti doloremque laboriosam
                    reiciendis molestias doloribus consectetur facilis sit odio 
                    blanditiis ipsum adipisci ab et. Placeat tenetur debitis iure.
                </p>
                <a href="{{ route ('contact')}}" class="btn">Contact</a>
                <ul class="social-media">
                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="nutrition" id="nutrition">
        <h1 class="heading">Nutrition</h1>
        <div class="box-container">
            <div class="box">
                <img src="./Images/hazelnuts-dried-fruits-snack-bars.jpg" alt="" width="25%" height="25%">
                <div class="info">
                    <h3>Important things to look out when buying a protien Bar</h3>
                    <a href="{{route('article')}}">Read this article</a>
                </div>
            </div>
            <div class="box">
                <img src="./Images/flay-lay-scale-weights.jpg" alt="" width="25%" height="25%">
                <div class="info">
                    <h3>Things to Consider Before Beginning a New Diet</h3>
                    <a href="{{route('article')}}">Read this article</a>
                </div>
            </div>
            <div class="box">
                <img src="" alt="">
                <div class="info">
                    <img src="./Images/stair-lunge-1.jpg" alt="">
                    <h3>Zero-Counting Calorie Reduction Techniques</h3>
                    <a href="{{route('article')}}">Read this article</a>
                </div>
            </div>
        </div>
    </section>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>