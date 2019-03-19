

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Linkin Park</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" >
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
                <a class="navbar-brand" href="#"><img src="pictures/12.jpg" height="25px" ></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#myCarousel">HOME</a></li>
                    <li><a href="#band">BAND</a></li>
                    <li><a href="#tour">TOUR</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </nav>



    <div id="myCarousel" class="carousel slide home" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="pictures/1.jpg" alt="New York">
                <div class="carousel-caption">
                    <h1>New York</h1>
                    <p>The atmosphere in New York is lorem ipsum.</p>
                </div> 
            </div>

            <div class="item">
                <img src="pictures/2.jpg" alt="Chicago">
                <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago - A night we won't forget.</p>
                </div> 
            </div>

            <div class="item">
                <img src="pictures/3.jpg" alt="Los Angeles">
                <div class="carousel-caption">
                    <h3>RIP Chester</h3>
                    <p>You will always live on.</p>
                </div> 
            </div>
        </div>

            <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
    
    <div class="container text-center "  id="band">
        <h3>Us</h3>
        <p>We love music!</p>
        <p class="color1">"The biggest misconception about us is that we're just a rock band," 
            describes Linkin Park's guitarist Brad Delson. "We think our music is a cross-section 
            of many genres; a hybrid of what the six of us have grown up on." The title of the band's 
            debut album and its original band name, Hybrid Theory, describes both the six-piece's 
            artistic goals and its approach to making music. Linkin Park's sound, a melting pot of 
            heavy alternative rock, hip-hop, and electronic flourishes, is utterly their own, an 
            accomplishment strengthened by the band's remarkably powerful, organic songwriting. 
            But almost everything about Linkin Park has been unforced, including their Southern 
            California origins. </p>    
        <br>
        <h2>How we became who we are</h2>
        <p class="color1">The band saw its beginnings in emcee/vocalist Mike Shinoda's small 
            bedroom studio, where he and Delson recorded the band's first material in 1996. The two 
            had attended high school together, where they met the band's drummer, Rob Bourdon. 
            Shinoda hooked up with DJ Joseph Hahn while studying illustration at Art Center College 
            in Pasadena. Meanwhile, attending UCLA, Delson shared an apartment with bassist Phoenix, 
            who left the band after college and returned a year later. The final piece of the puzzle 
            was singer Chester Bennington, a transplanted Arizona native who started making records 
            when he was 16. "When I was two, I used to run around singing Foreigner songs--there's 
            tapes of me doing that...Since I learned how to talk I've been telling everybody I was 
            gonna grow up to be a singer." laughs Bennington. </p>
        <br>
        <div class="row">

            <div class="col-sm-4">
                <p><strong>Chester Bennington</strong></p><br>
                <a href="#demo" data-toggle="collapse">
                    <img src="pictures/14.jpg" class="img-circle person"alt=" Chester Bennington" height="255px">
                </a>
                <div id="demo" class="collapse">
                    <p>Lead Vocalist</p>
                    <p><em>"What I enjoy most about being in the band is having the opportunity to 
                        create and perform music with amazing musicians who have also become closest 
                        of friends. I would like to thank all who support us and make all of this 
                        possible."</em></p>
                    
                </div>
            </div> 

            <div class="col-sm-4">
                <p><strong>Mike Shinoda</strong></p><br>
                <a href="#demo2" data-toggle="collapse">
                    <img src="pictures/15.jpg" class="img-circle person" alt="Mike Shinoda" height="255px">
                </a>
                <div id="demo2" class="collapse">
                    <p>Vocals, Beats + Samples, Keyboards, Guitar</p>
                    <p><em>"Writing songs and sharing them with people is a very rewarding experience...I 
                        can't think of anything more gratifying as seeing people from different backgrounds 
                        come together to enjoy music. Thanks."</em></p>
                </div>
            </div>

            <div class="col-sm-4">
                <p><strong>Joe Hahn</strong></p><br>
                <a href="#demo3" data-toggle="collapse">
                    <img src="pictures/16.jpg" class="img-circle person" alt="Joe Hahn" height="255px">
                </a>
                <div id="demo3" class="collapse">
                    <p>Turntables, Samples, Beats, & Sounds</p>
                    <p><em>"All of these quotes sound like excerpts from a high-school yearbook."</em></p>
                </div>
            </div>

        </div>
    </div>
        







    <div class="bg-1">
        <div class="container" id="tour">
            <h3 class="text-center">TOUR DATES</h3>
            <p class="text-center">Come see us play live<br> Book your tickets now on the official Linkin Park Website</p>
            <ul class="list-group">
                <li class="list-group-item">May <span class="label label-danger ">Book Fast!</span></li>
                <li class="list-group-item">June <span class ="label label-danger ">Book Fast!</span></li> 
                <li class="list-group-item">July <span class="label label-danger ">Book Fast!</span></li> 
            </ul>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="pictures/17.jpg" alt="Mumbai">
                        <p><strong>Mumbai</strong></p>
                        <p>Fri. 27 May 2018</p>
                        <button class="btn" data-toggle="modal" data-target="#myModal" ><strong>Buy Tickets</strong></button>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="pictures/18.jpg" alt="Tokyo">
                        <p><strong>Tokyo</strong></p>
                        <p>Mon. 14 June 2018</p>
                        <button class="btn" data-toggle="modal" data-target="#myModal" ><strong>Buy Tickets</strong></button>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="pictures/19.jpg" alt="Paris">
                        <p><strong>Paris</strong></p>
                        <p>Sat. 17 July 2018</p>
                        <button class="btn" data-toggle="modal" data-target="#myModal" ><strong>Buy Tickets</strong></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

        <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
                </div>
                <div class="modal-body">
                    <!--<form role="form">-->
                        {!! Form::open(['action' => 'TicketsController@store', 'method' => 'POST']) !!}                        
                            <div class="form-group">
                                
                                <label for="psw"><span class="glyphicon glyphicon-user"></span> Full name</label>
                                {{Form::text('full_name', '',['class'=>'form-control', 'placeholder' => 'Full Name'])}}
                            </div>
                            <div class="form-group">
                                <label for="psw"><span class="glyphicon glyphicon-earphone"></span> Contact No.</label>
                                {{Form::text('contact_no', '',['class'=>'form-control', 'placeholder' => 'Contact No.'])}}
                            </div>
                            <div class="form-group">
                                <label for="usrname"><span class="glyphicon glyphicon-envelope"></span> Email </label>
                                {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'xyz@abc.com'])}}
                            </div>
                            <div class="form-group">
                                <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
                                {{Form::number('no_of_tickets', '', ['class' => 'form-control', 'placeholder' => 'How many?'])}}
                            </div>
                            <button type="submit" class="btn btn-block">Pay 
                                <span class="glyphicon glyphicon-ok"></span>
                            </button>
                        {!! Form::close() !!}
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remove"></span> Cancel
                    </button>
                    <p>Need <a href="#">help?</a></p>
                </div>
            </div>
        

        </div>
    </div>

    
    <div id="contact" class="container">
        @include('inc.messages')
        <h3 class="text-center">Contact</h3>
        <p class="text-center"><em>Your input is always welcome!</em></p>

        <div class="row">
            <div class="col-md-4">
                <p>Fan? Drop a note.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span>Agoura Hills, California, US</p>
                <p><span class="glyphicon glyphicon-phone"></span>Phone: +1 (888) 420 8842</p>
                <p><span class="glyphicon glyphicon-envelope"></span>Email: linkin_park@gmail.com</p>
            </div>
            <div class="col-md-8">
                {!! Form::open(['action' => 'CommentsController@store', 'method' => 'POST']) !!}
                <div class="row">
                    <div class="col-sm-6 form-group">
                        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
                    </div>
                    <div class="col-sm-6 form-group">
                        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'xyz@abc.com'])}}
                    </div>
                </div>
                {{Form::textarea('comment', '', ['class' => 'form-control', 'placeholder' => 'Comment'])}}
                <br>
                <div class="row">
                    <div class="col-md-12 form-group">
                        {{Form::submit('Send', ['class' => 'btn pull-right'])}}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <br>
        <h3 class="text-center">From The Blog</h3>  
        <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Harvey</a></li>
        <li><a data-toggle="tab" href="#menu1">Mike</a></li>
        <li><a data-toggle="tab" href="#menu2">Joe</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <h2>Harvey Specter, Manager</h2>
                <p>India, its been a long time coming. Can't wait!!</p>
            </div>
            <div id="menu1" class="tab-pane fade">
                <h2>Mike Shinoda, Guitarist</h2>
                <p>It will never be the same without you, Chester. We all miss you.</p>
            </div>
            <div id="menu2" class="tab-pane fade">
                <h2>Joe Hahn, DJ</h2>
                <p>The best part about performing is the crowd.</p>
            </div>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
        // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {

                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                        }, 900, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if 
            });
        })
    </script>
</body>
</html>          