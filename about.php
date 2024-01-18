<?php
    session_start();
    if (!isset($_SESSION["user"])) {
        header("Location: login.php"); 
    }

    include_once 'productRepository.php';
    $productRepository = new ProductRepository;
    $products = $productRepository->getAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>School App</title>
    <link rel="stylesheet" href="about.css">
</head>
<body>
    <header style="height:70px;background-color: rgb(84, 138, 138);">
        <div class="style">
            <a href="index.php"><img src="photo/Appschool.png" style="height:80px;margin-bottom:40px"></a>
        </div>
        <div class="table">
            <ul>
                    <li><a href="#feature">Opinions</a></li>
                    <li><a href="#step">Steps</a></li>
                    <li><a href="#price">Pricing</a></li>
                    <li><a href="#author">Authors</a></li>
                    <li><a href="#kids">School Kids</a></li>
                    <form class="logout-cont" action="logoutController.php" method="post">
                        <a class="dashboard" href="dashboard.php">Dashboard</a>
                        <button class="logout" name="logout" type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </header>
    <form>
        <div id="feature" class="future">
                 <p class="futurep"><strong>Opinions</strong></p>
                <h2 class="futureh2"> Amazing Opinions</h2>
            <div class="divs">
                <div class="up1"><img class="codelogo" src="photo/download.png"></div>
                <div class="div1">
                    <h2 class="div1-h2">New School </h2>
                    <p class="divs-p"> This course arms newly elected <br> school board members <br> with the knowledge </p>
                </div>
                <div class="up2"><img class="uilogo" src="photo/download.png"></div>
                <div class="div2">
                    <h2 class="div2-h2">Reclaim your School</h2>
                    <p class="divs-p">School Board campaigns <br>  are often unique compared <br>  are often unique <br> compared </p></div>
                <div class="up3"><img class="websitelogo" src="photo/download.png"></div>
                <div class="div3">
                    <h2 class="div3-h3">Leadership Institut</h2>
                    <p class="divs-p">Many people know the basic <br> tenets of conservatism,<br> but when asked the question</p></div>
                    <div class="up4"><img class="gamelogo" src="photo/download.png" alt=""></div>
                <div class="div4">
                    <h3>History of the Constitution</h3>
                    <p class="divs-p">A look at how your Rights <br> became self-evident starting <br> with the earliest Angleo-Saxons</p></div>
                </div>
            </div>
        </div>
        <div class="about-us">
            <div class="imgdiv">
                <img class="about-img" src="photo/school-1.jpg">
            </div>
            <div class="aboutus-txt">
                <p class="aboutus-p"><strong>About Us</strong></p>
                <h2 class="aboutus-h2">Introduction to Student <br> Opinion Questions </h2>
                <p class="aboutus-p2">Want to learn more about this feature? <br> Watch this 
                                      hort introduction video and <br> start sharing your ideas 
                                       and opinions today.</p>
            </div>
        </div>  
        <div class="howit-works">
            <div class="text">
                <p class="work-p"><strong>Learning Processes</strong></p>
                <h2 class="work-h2">How To Learn</h2>
            </div>
            <div class="containers">
            <h2 id="step">Steps</h2>
                <div class="cont-1">
                

                    <div class="steps">
                        <p class="step-p"><strong><a href="https://stepbystepschool.org.uk/" target="_blank" >Step 1</a></strong></p>
                    </div>
                    <h2>School history</h2>
                    <p class="conta-p">In 2000 a small group of <br>
                                       parents with autistic children, <br> 
                                       in and around the Crowborough area,<br>
                                       were put in touch with each other <br>
                                       through a common interest of wanting <br>
                                       to create a learning environment. </p>
                </div>
                <div class="cont-2">
                    <div class="steps">
                        <p class="step-p"><strong> <a href="https://stepbystepschool.org.uk/" target="_blank" >Step 2</a></strong></p>
                    </div>
                    <h2>About autism</h2>
                    <p class="conta-p">Autism is a lifelong developmental <br>
                    disability. It is the result of a neurological <br>
                    condition which affects how the brain <br>
                    processes information in particular, it <br>
                    can affect communication and social <br> 
                    interaction.</p>
                </div>
               
            </div>
        </div>
        <div id="imgGallary" class="screenshot-div">
            <div class="screenshot-text">
                <h2 class="screenshot-h2"></h2>
            </div>
            <div class="phone">
                <div class="cam"></div>
                <div class="voice"></div>
                <div class="cam2"></div>
                <div class="click-button"></div>
            <div class="screenshot-imgs">
                <img class="img" src="photo/1.png">
                <img class="img" src="photo/2.png">
                <img class="img" src="photo/3.png">
                <img class="img" src="photo/4.webp">
                <img class="img" src="photo/5.jpg">
                <img class="img" src="photo/6.jpg">
                <img class="img" src="photo/7.jpg">
            </div>
        </div>
        <div class="voice1"></div>
        <div class="voice2"></div>
        <div class="lock"></div>
        <div id="price" class="price-container">
            <div class="inset-shadow">
        
            <div class="monthly-container">
                <?php 
                    foreach($products as $product) :
                ?>
                    <div class="monthly" >
                        <p id="monthly-p2"><strong><?php echo $product[1]; ?></strong></p>
                        <h2>$<?php echo $product[2]; ?></h2>
                        <p id="month">Per Month</p>
                        <?php 
                            foreach(explode(',', $product[3]) as $content) :
                        ?>
                            <p id="monthly-p"><strong><?php echo $content; ?></strong></p>
                        <?php endforeach; ?>
                        <label class="purchase-button"><strong>Buy</strong></label>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        </div>
        <div id="reviews" class="reviews-container">
            <div class="text-reviews">
                <h2 id="author">Authors</h2>
            </div>
            <div id="but-container">
                <label onclick="showFirst()" id="label-but"><img id="clients" src="photo/one.jpg"></label>
                <label onclick="showSecond()" id="label-but"><img id="clients" src="photo/two.jpg"></label>
                <label onclick="showThird()" id="label-but"><img id="clients" src="photo/threee.jpg"></label>
            </div>
            
            <div class="informations-container">
                    <div class="information-clients1">
                        <div class="text-info-cont">
                            <h3>Naim Frasheri</h3>
                            <p id="ceo"><strong>Writer</strong></p>
                        
                            <p><strong>Knowledge and science give man a weapon <br> 
                            in his hand, education trains him in the use of that weapon.<br> 
                             A man who does not know how to use a weapon, if given to him, <br> can 
                             kill his friends; even a scholar without education and with evil habits. <br> Thank you so much
                            </strong></p>
                        </div>
                        <div id="info-logo">
                            <img id="pic-man" src="photo/thenje.jpg">
                        </div>
                    </div>
                    
                    <div class="information-clients1">
                        <div class="text-info-cont">
                            <h3>Sami Frasheri</h3>
                            <p id="ceo"><strong>Writer</strong></p>
                        
                            <p><strong>Knowledge and science give man a weapon <br> 
                            in his hand, education trains him in the use of that weapon.<br> 
                             A man who does not know how to use a weapon, if given to him, <br> can 
                             kill his friends; even a scholar without education and with evil habits.<br> Thank you so much
                            </strong></p>
                        </div>
                        <div id="info-logo">
                            <img id="pic-man" src="photo/thenje.jpg">
                        </div>
                    </div>
                    <div class="information-clients1">
                        <div class="text-info-cont">
                            <h3>Ismail Kadare</h3>
                            <p id="ceo"><strong>Writer</strong></p>
                           
                            <p><strong>Knowledge and science give man a weapon <br> 
                            in his hand, education trains him in the use of that weapon.<br> 
                             A man who does not know how to use a weapon, if given to him, <br> can 
                             kill his friends; even a scholar without education and with evil habits. <br> Thank you so much
                            </strong></p>
                        </div>
                        <div id="info-logo">
                            <img id="pic-man" src="photo/thenje.jpg">
                        </div>
                    </div>
           </div>
        </div>
        <div class="news-container">
            <div class="news-text-container">
                <h2 id="kids">School kids</h2>
            </div>
            <div class="news-information-container">
                <div class="info">
                    <h2>
                      Read Kids
                    </h2>
                    <p>
                    When I was a kid, the most advanced <br>
                    technology anyone had was a Walkman, <br> and that was just the rich kids.
                    </p>
                    <img src="photo/happy.jpg">
                </div>
                <div class="info">
                <img src="photo/happy2.jpg">
                    <h2>
                    Can schools confiscate <br> my childs phone?
                    </h2>
                    <p>
                    Yes, but there has to be a reason.<br>
                    It would have to fall into categories <br>
                    that are outlined in the school's policy.
                    </p>
                </div>
            </div>
        </div>
    </form>
    <script>
        (function(){
        var imgLen = document.getElementById('imgGallary');
        var images = imgLen.getElementsByClassName('img');
        var counter = 1;

        if(counter <= images.length){
            setInterval(function(){
                images[0].src = images[counter].src;
                console.log(images[counter].src);
                counter++;

                if(counter === images.length){
                    counter = 1;
                }
            },3000);
        }
})();

    var slides = document.querySelector(".information-clients1");


function showFirst(){
    slides.style.marginLeft="0";
}
function showSecond(){
    slides.style.marginLeft="-80vw";
}
function showThird(){
    slides.style.marginLeft="-160vw";
}

    </script>
</body>
</html>