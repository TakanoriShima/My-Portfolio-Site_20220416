<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kazuma Iwai</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
     rel="stylesheet">
    <link rel="icon" href="images/favicon_smile.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background: url(images/green.jpg)">
    <!--smartphone menu-->
    <div class="m-menu">
        <span class="material-icons" id="open">menu</span>
    </div>
    <div class="overlay">
        <span class="material-icons" id="close">close</span>
            <ul>
                <li><a href="index.php">Top</a></li>
                <li><a href="#site">About this site</a></li>
                <li><a href="#me">About me</a></li>
                <li><a href="#works">My portfolio</a></li>
                <li><a href="#skill">My programming skills</a></li>
                <li><a href="#profile">My Profile</a></li>
                <li><a href="#hobby">My hobby</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="index.php">Japanese</a></li>
            </ul>
    </div>
    <!--PC menu-->
    <div class="pc-gnav">
         <ul>
            <li><a href="#">Top</a></li>
            <li>
                <a href="#site">About this site</a>
                <ul>
                    <li><a href="#me">About this site</a></li>
                </ul>
            </li>
            <li>
                <a href="#works">My Portfolio</a>
                <ul>
                    <li><a href="#skill">My programming skills</a></li>
                </ul>
            </li>
            <li>
                <a href="#profile">My Profile</a>
                <ul>
                    <li><a href="#hobby">My hobby</a></li>
                </ul>
            </li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="index.php">Japanese</a></li>
         </ul>
    </div>
    
    <div class="contents">
        <!--Top screen (Scenery of Fukuoka)-->
        <div class="wrapper">
            <div id="slider"></div>
            <div id="txt_animation">
                <h1 class="first">Welcome to My Portfolio Site !!</h1>
                <h1 class="second">I Love Fukuoka !!</h1>    
            </div>
        </div>
        
        <div class="position">
            <img src="images/fukuoka_town.jpg" alt="Clip art of city of Fukuoka" class="town">   
            <!--About this site-->
            <div id="site" class="content">
                <div id="hs">About this site</div>
                <p>Here is Engineer Iwai's portfolio site.</p>
                <p>My profile and productions are summarized here.</p>
                <p>I made it so that people would know more about me.</p>
                <p>Please take your time to view it over a cup of coffee.</p>
                <img src="images/coffee.jpg" alt="Coffee Image" class="coffee">
            </div>
                
            <!--About me-->
            <div id="me" class="content">
                <div class="hm">About me</div>
                <img src="images/myface.jpg" alt="My face" class="myface">
                <p>I am from Nagoya City, Aichi Prefecture.</p>
                <p>I am a graduate of Nanzan University, Faculty of Law.</p>
                <p>I graduated from university in March 2015 and went on to Aichi College of Social Welfare and Medical Care.</p>
                <p>I became a licensed mental health professional in March 2016.</p>
                <p>Since April 2016, I have worked for about 5 years as a consultant and other positions in psychiatric hospitals.</p>
                <p>I retired at the end of August 2021 and moved to Fukuoka Prefecture at the end of November after getting married.</p>
                <p>During my previous work experience, I became interested in promoting digitalization.</p>
                <p>I wanted to change my career to become a web engineer.</p>
                <p>I began attending the Samurai Engineer School in December 2021.</p><br>
                <p id="git">Click here for my GitHub URL↓↓</p>
                <a href="https://github.com/kazuma9976"><div class="box"></div></a>
            </div>
            
            <!--My portfolio-->
            <div id="works" class="content">
                <div class="h">My portfolio</div>
                <p>These are the products created during the course of the Samurai Engineer School !!</p>
                <p>Click here↓↓</p>
                <div id="open_2">
                    <img class="object" src="images/work.jpg" alt="Images of productions">
                </div>
                
                <div id="mask" class="hidden"></div>
                <div id="modal" class="hidden">
                    <div id="close_2">Close</div>
                    <table class="table table-bordered table-striped mt-3">
                        <tr>
                            <th>Title</th>
                            <th>Source code</th>
                            <th>Published on the Web</th>
                        </tr>
                        <tr>
                            <td>Typing game (Javascript)</td>
                            <td><a href="https://github.com/kazuma9976/Typing-Game.git">GitHub</a></td>
                            <td><a href="https://kazuma9976.github.io/Typing-Game/">GitHub Pages</a></td>
                        </tr>
                        <tr>
                            <td>DOM Manipulation (jQuery)</td>
                            <td><a href="https://github.com/kazuma9976/jQuery_Practice-DOM-manipulation.git">GitHub</a></td>
                            <td><a href="https://kazuma9976.github.io/jQuery_Practice-DOM-manipulation/">GitHub Pages</a></td>
                        </tr>
                        <tr>
                            <td>Animation (jQuery)</td>
                            <td><a href="https://github.com/kazuma9976/jQuery_animation.git">GitHub</a></td>
                            <td><a href="https://kazuma9976.github.io/jQuery_animation/">GitHub Pages</a></td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <!--My programming skills-->
            <div id="skill" class="content">
               <div class="h">My programming skills</div>
                <img src="images/skill.jpg" alt="Images of Skills" class="tech">
                <div class="container mb-3 col-sm-8">
                    <div class="row mt-3 mb-3">
                        <p>Skill List</p>
                        <table class="table table-bordered">
                            <tr class="table-success">
                                <th>Programming Language</th>
                                <th>History of use</th>
                                <th>Technical level</th>
                            </tr>
                            <tr>
                                <td>HTML/CSS</td>
                                <td>4 months</td>
                                <td class="star">★★★</td>
                            </tr>
                            <tr class="table-success">
                                <td>Javascript/jQuery</td>
                                <td>2 months</td>
                                <td class="star">★★</td>
                            </tr>
                            <tr>
                                <td>PHP</td>
                                <td>2 months</td>
                                <td class="star">★★</td>
                            </tr>
                            <tr class="table-success">
                                <td>MySQL</td>
                                <td>1 month</td>
                                <td class="star">★</td>
                            </tr>
                            <tr>
                                <td>Bootstrap</td>
                                <td>1 month</td>
                                <td class="star">★</td>
                            </tr>
                        </table>
                    </div>
                    <div class="row mt-5">
                        <p>How to see skills</p>
                        <table class="table table-bordered">
                            <tr class="table-success">
                                <th>Number of stars</th>
                                <th>Description</th>
                            </tr>
                            <tr>
                                <td class="star">★</td>
                                <td>Basic syntax has been learned.</td>
                            </tr>
                            <tr class="table-success">
                                <td class="star">★★</td>
                                <td>Can apply basic syntax to implement simple sample programs.</td>
                            </tr>
                            <tr>
                                <td class="star">★★★</td>
                                <td>Original applications can be built using this technology.</td>
                            </tr>
                            <tr class="table-success">
                                <td class="star">★★★★</td>
                                <td>I have experience using this technology in practice.</td>
                            </tr>
                            <tr>
                                <td class="star">★★★★★</td>
                                <td>Can instruct others on this technique.</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            
            <!--My profile-->
            <div id="profile" class="content">
                <div class="h">My Profile</div>
                <img src="images/road.jpg" alt="Images of the Road" class="road">
                <div class="container mb-3 col-sm-9">
                    <div class="row">
                        <table class="table table-bordered">
                            <tr class="table-success">
                                <th class="col-sm-3">Chronology</th>
                                <th>Episode</th>
                            </tr>
                            <tr>
                                <td>1992.8</td>
                                <td>Born in Nagoya, Aichi, Japan.</td>
                                
                            </tr>
                            <tr class="table-success">
                                <td>
                                    1999.4~<br>
                                    Elementary school days
                                </td>
                                <td>I learned folk songs under the influence of my grandmother. Loved Pokemon.</td>
                            </tr>
                            <tr>
                                <td>
                                    2005.4~<br>
                                    Junior high school days
                                </td>
                                <td>I started choral singing when my voice changed.</td>
                            </tr>
                            <tr class="table-success">
                                <td>
                                    2008.4~<br>
                                    High school days
                                </td>
                                <td>
                                    I was immersed in studying every day to prepare for college. I commuted to school by bicycle, traveling about 26 kilometers round trip every day.<br>
                                    My own thighs became as big as those of a bicycle racer.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2011.4~<br>
                                    College days
                                </td>
                                <td>
                                    I practiced gospel music every day in my circle.<br>
                                    I decided to become a mental health worker during my senior year of college after an encounter with a psychiatrist.
                                </td>
                            </tr>
                            <tr class="table-success">
                                <td>
                                    2015.4~<br>
                                    Technical school days
                                </td>
                                <td>I spent a lot of time studying and practicing to obtain my mental health certification.<br>
                                    I was shocked by the current situation of the patients at the hospital where I did my internship.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2016.4~<br>
                                    Finding employment
                                </td>
                                <td>I worked in a psychiatric hospital. Every day I had to deal with a variety of patients, including depression and schizophrenia.</td>
                            </tr>
                            <tr class="table-success">
                                <td>
                                    2020.6~<br>
                                    Change of occupation
                                </td>
                                <td>
                                    I worked as an instructor at a community activity support center for the mentally disabled.<br>
                                    I spent my days researching how to create places for leisure time while taking into consideration the characteristics of the users' disabilities.
                                </td>
                            </tr>
                            <tr>
                                <td>2021.8<br>
                                    Retirement
                                </td>
                                <td>
                                    My experience in the health and welfare industry has piqued my interest in working to promote digitalization.<br>
                                    I decided to change my career to become a web engineer.
                                </td>
                            </tr>
                            <tr class="table-success">
                                <td>2021.12~</td>
                                <td>I started attending the Samurai Engineer School.</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            
            <!--My hobby-->
            <div id="hobby" class="content">
                <div class="h">My hobby</div>
                <div id="fadein_fadeout">
                    <img src="images/cook0.jpg" alt="Photo of the first dish">
                </div>
                
                <p>My hobby is cooking. I cook a lot with my wife.</p>
                <p>My specialties include takikomi gohan and gyoza.</p>
                <p>I became interested in slow food as I became more conscious of my food health.</p>
            </div>
            
            <!--Contact-->
            <div id="contact" class="content">
                <div class="hw">Contact</div>
                <img src="images/mail.jpg" alt="メールの画像" class="mail">
                <p>Thank you for taking the time to read this to the end.</p>
                <p>I am happy that you have learned a little about me through this site.</p>
                <p>If you have any comments about this site or me, please use the form below.</p>
                
                <!--Error message-->
                <div id="message"></div>
                <!--Input form-->
                <form action="send_mail_English" method="POST">
                    Name: <input type="text" name="name" placeholder="Taro Tanaka"/><br><br>
                    Email: <input type="email" name="email" placeholder="sample@gmail.com">
                    <p>Comment</p>
                    <textarea name="comment" id="comment" cols="30" rows="10"></textarea><br>
                    <button type="button" id="btn">Send</button>
                </form>
            </div>
            
            <!--Return to the top screen.-->
            <div id="back">
                <br>
                <p>Thank you for comming !!</p>
                <a href="index.php"><span class="material-icons">arrow_circle_up</span></a>
            </div>
            <!--Footer-->
            <footer>
                <small>©2022 Kazuma Iwai</small>
            </footer>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/script_English.js"></script>
</body>
</html>