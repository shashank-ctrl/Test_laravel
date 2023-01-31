<!doctype html>

<html lang="en">



<head>

  <!-- Required meta tags -->

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Post</title>

  <!-- Bootstrap CSS -->

  <link rel="icon" type="image/png" sizes="32x32" href="{{asset ('/images/android-icon-36x36.png') }}">

  <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css') }}">



  <link rel="stylesheet" type="text/css" href="{{asset ('css/animate.css') }}" />

  <link rel="stylesheet" type="text/css" href="{{asset ('css/style.css') }}" />

  <link rel="stylesheet" type="text/css" href="{{asset ('css/responsive.css') }}" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

  <script src="{{asset ('js/parsley.js') }}"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  
</head>



<body>

  <a href="#" id="scroll">

    <div class="scrollArrow">

      <span></span>

    </div>

    <div class="scrollText">Back to top</div>

  </a>

  <div class="main-grid-view-box">

    <div class="header headerFixed">

      <div class="container">

        <div class="row">

          <div class="col-lg-12">

            <nav class="navbar navbar-expand-lg">

              <a class="navbar-brand" href=""><img class="logoImg" src="images/Arccus logo-03.png" /></a>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"

                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

              </button>



              <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">

                  <li class="nav-item active">

                    <a href="#" class="nav-link top-right" data-toggle="modal" data-target="#requestQuote">Request A Quote</a>

                  </li>

                  <li class="nav-item">

                    <a href="#" class="nav-link top-right">Go To Arccus.in</a>

                  </li>

                </ul>

              </div>

            </nav>

          </div>

        </div>

      </div>

    </div>



    <div class="tabset container">

      <!-- Tab 1 -->

      <input type="radio" name="tabset" id="tab1" aria-controls="All" checked>

      <label for="tab1">All</label>

      <!-- Tab 2 -->

      <input type="radio" name="tabset" id="tab2" aria-controls="CaseStudies">

      <label for="tab2">Case Studies </label>

      <!-- Tab 3 -->

      <input type="radio" name="tabset" id="tab3" aria-controls="DigitalMarketing">

      <label for="tab3">Digital Marketing </label>



      <input type="radio" name="tabset" id="tab4" aria-controls="dunkles1">

      <label for="tab4">Logo</label>



      <input type="radio" name="tabset" id="tab5" aria-controls="Website">

      <label for="tab5">Website</label>



      <div class="tab-panels">

        <section class="tab-panel" id="All">

          <div class="website-gallrey">

            <div class="container">
              @if(isset($posts) && !is_null($posts))						
                  @foreach($posts as $posts1)
                  
              <div class="effect-marley all">

                     @if(file_exists(public_path('/post').'/'.$posts1->thumbnail) && !is_null($posts1->thumbnail))									  
                        <img src="{{ asset('post/' . $posts1->thumbnail) }}" style="height: 100%; width: 100%;">									   
                     @else
                        <img src="{{asset('public/avatar/noimg.png')}}" style="height: 400px; width: 100%;">
                     @endif

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                  {{$posts1->title}}

                    <span class="moreh2">{{$posts1->description}}</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>
              @endforeach
             @endif

              <div class="effect-marley all">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley all">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley all">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley all">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley all">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley all">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley all">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley all">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley all">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley all">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>



            </div>

          </div>



          <div class="see-more-btn">

            <a href="#" id="seeMore" class="see-more">See More</a>

          </div>

        </section>

        <section id="CaseStudies" class="tab-panel">

          <div class="website-gallrey">

            <div class="container">

              <div class="effect-marley casestudies">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley casestudies">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley casestudies">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley casestudies">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley casestudies">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley casestudies">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley casestudies">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley casestudies">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley casestudies">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley casestudies">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley casestudies">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley casestudies">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>



            </div>

          </div>



          <div class="see-more-btn">

            <a href="#" id="seeMore2" class="see-more2">See More</a>

          </div>

        </section>

        <section id="DigitalMarketing" class="tab-panel">

          <div class="website-gallrey">

            <div class="container">

              <div class="effect-marley digitamarketing">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley digitamarketing">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley digitamarketing">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley digitamarketing">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley digitamarketing">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley digitamarketing">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley digitamarketing">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley digitamarketing">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley digitamarketing">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley digitamarketing">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley digitamarketing">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley digitamarketing">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>



            </div>

          </div>



          <div class="see-more-btn">

            <a href="#" id="seeMore3" class="see-more3">See More</a>

          </div>

        </section>

        <section id="Logo" class="tab-panel">

          <div class="website-gallrey">

            <div class="container">

              <div class="effect-marley logo">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley logo">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley logo">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley logo">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley logo">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley logo">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley logo">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley logo">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley logo">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley logo">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley logo">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley logo">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>



            </div>

          </div>



          <div class="see-more-btn">

            <a href="#" id="seeMore4" class="see-more4">See More</a>

          </div>

        </section>

        <section id="Website" class="tab-panel">

          <div class="website-gallrey">

            <div class="container">

              <div class="effect-marley website">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley website">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley website">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley website">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley website">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley website">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley website">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley website">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley website">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley website">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley website">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>

              <div class="effect-marley website">

                <img src="images/img-1.jpeg" alt="" />

                <div class="grid-box-text">

                  <div class="main-category-box">

                    <div class="category">

                      <a href="#">Website</a>

                    </div>

                    <div class="category-2">

                      <a href="#">Android</a>

                    </div>

                    <div class="category-3">

                      <a href="#">ios</a>

                    </div>

                  </div>

                  <div class="category-2">website</div>

                  <div class="category-2">website</div>

                  <h2>

                    Sweet <span>Marley</span>

                    <span class="moreh2">Website, Wordpress</span>

                  </h2>

                  <p class="btntype"><a href="page2.html">View more <img src="images/morearrow.svg"></a></p>

                  <a href="page2.html">View more</a>

                </div>

              </div>



            </div>

          </div>



          <div class="see-more-btn">

            <a href="#" id="seeMore5" class="see-more5">See More</a>

          </div>



        </section>

      </div>



    </div>

  </div>


  <!-- Modal -->

  <div class="modal fade request-quote" id="requestQuote" tabindex="-1" role="dialog"

    aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered" role="document">

      <div class="modal-content">

        <div class="modal-header">

          <h5 class="modal-title" id="exampleModalLabel">Request A Free Quote</h5>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">

            <span aria-hidden="true">&times;</span>

          </button>

        </div>

        <div class="modal-body">

          <div class="request-quote-text">

            <form id="validate_form" >
                

                @CSRF

              <div class="box-1">

                <svg id="Layer_1" style="enable-background:new 0 0 64 64;" version="1.1" viewBox="0 0 64 64"

                  xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"

                  width="30px" height="30px">

                  <style type="text/css">

                    .st0 {

                      fill: #1f1f51;

                    }

                  </style>

                  <g>

                    <g id="Icon-User" transform="translate(278.000000, 278.000000)">

                      <path class="st0"

                        d="M-246-222.1c-13.2,0-23.9-10.7-23.9-23.9s10.7-23.9,23.9-23.9c13.2,0,23.9,10.7,23.9,23.9     S-232.8-222.1-246-222.1L-246-222.1z M-246-267.3c-11.7,0-21.3,9.6-21.3,21.3c0,11.7,9.6,21.3,21.3,21.3     c11.7,0,21.3-9.6,21.3-21.3C-224.7-257.7-234.3-267.3-246-267.3L-246-267.3z"

                        id="Fill-57" />

                      <path class="st0"

                        d="M-260-228.7l-2.4-1.1c0.7-1.7,2.9-2.6,5.4-3.7c2.4-1.1,5.4-2.4,5.4-4v-2.2     c-0.9-0.7-2.3-2.3-2.5-4.6c-0.7-0.7-1.8-2-1.8-3.6c0-1,0.4-1.8,0.7-2.3c-0.2-1.1-0.6-3.3-0.6-5c0-5.5,3.8-9.1,9.8-9.1     c1.7,0,3.8,0.5,4.9,1.7c2.7,0.5,4.9,3.7,4.9,7.4c0,2.4-0.4,4.4-0.7,5.3c0.3,0.5,0.6,1.2,0.6,2c0,1.9-0.9,3.1-1.8,3.7     c-0.2,2.3-1.5,3.8-2.3,4.5v2.2c0,1.4,2.5,2.3,4.8,3.2c2.7,1,5.5,2,6.4,4.3l-2.5,0.9c-0.4-1.2-2.8-2-4.8-2.8     c-3.1-1.1-6.6-2.4-6.6-5.6v-3.6l0.6-0.4c0.1,0,1.8-1.2,1.8-3.5v-0.9l0.8-0.3c0.1-0.1,0.9-0.5,0.9-1.7c0-0.4-0.3-0.8-0.4-0.9     l-0.5-0.6l0.2-0.7c0,0,0.7-2.2,0.7-5.2c0-2.5-1.4-4.8-2.9-4.8h-0.8l-0.4-0.7c-0.3-0.5-1.5-1-3.1-1c-4.5,0-7.2,2.4-7.2,6.5     c0,1.9,0.7,5,0.7,5l0.2,0.7l-0.5,0.5c0,0-0.4,0.5-0.4,1c0,0.7,0.9,1.6,1.3,2l0.5,0.4l0,0.7c0,2.2,1.9,3.4,1.9,3.4l0.6,0.4l0,3.6     c0,3.3-3.7,5-7,6.4C-257.5-230.4-259.6-229.4-260-228.7"

                        id="Fill-58" />

                    </g>

                  </g>

                </svg>

                <label>Full Name</label>

                <input type="text" name="first_name" id ="first_name"class="form-control" placeholder="Enter Full Name" required>

                <div class="invalid-feedback mb-2">

                  Please enter full name.

                </div>

              </div>

              <!--    <div class="box-2">

                    <label>Last Name</label>

                    <input type="text" name="name" placeholder="Enter Last Name">

                 </div> -->

              <div class="box-3">

                <svg height="8.4666mm"

                  style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"

                  version="1.1" viewBox="0 0 846.66 846.66" width="8.4666mm" xml:space="preserve"

                  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                  <defs>

                    <style type="text/css">

                      <![CDATA[

                      .fil0 {

                        fill: #1f1f51;

                        fill-rule: nonzero

                      }

                      ]]>

                    </style>

                  </defs>

                  <g id="Layer_x0020_1">

                    <path class="fil0"

                      d="M237.92 776.97l111.55 0 0 -135.37c0,-11.48 9.32,-20.8 20.81,-20.8l106.11 0c11.49,0 20.8,9.32 20.8,20.8l0 135.37 111.55 0 0 -546.91 0 -160.38 -370.82 0 0 160.38 0 546.91zm44.26 -319.56l64.07 0 0 64.07 -64.07 0 0 -64.07zm218.23 0l64.07 0 0 64.07 -64.07 0 0 -64.07zm-109.11 0l64.07 0 0 64.07 -64.07 0 0 -64.07zm-109.12 -154.16l64.07 0 0 64.07 -64.07 0 0 -64.07zm218.23 0l64.07 0 0 64.07 -64.07 0 0 -64.07zm-109.11 0l64.07 0 0 64.07 -64.07 0 0 -64.07zm-109.12 -154.17l64.07 0 0 64.07 -64.07 0 0 -64.07zm218.23 0l64.07 0 0 64.07 -64.07 0 0 -64.07zm-109.11 0l64.07 0 0 64.07 -64.07 0 0 -64.07zm-363.39 669.5c-27.36,0 -27.36,-41.61 0,-41.61l16.23 0 0 -487.73c0,-9.44 6.29,-17.41 14.9,-19.96l137.27 -53.38 0 -167.02c0,-11.49 9.31,-20.81 20.8,-20.81l412.44 0c11.49,0 20.8,9.32 20.8,20.81l0 167.02 137.27 53.38c8.61,2.55 14.9,10.52 14.9,19.96l0 487.73 16.23 0c27.36,0 27.36,41.61 0,41.61 -263.61,0 -527.23,0 -790.84,0zm363.17 -41.61l64.5 0 0 -114.56 -64.5 0 0 114.56zm369.83 -473.58l-110.56 -42.99 0 516.57 110.56 0 0 -473.58zm-564.6 -42.99l-110.56 42.99 0 473.58 110.56 0 0 -516.57z" />

                  </g>

                </svg>

                <label> Company Name</label>

                <input type="text" name="company_name"  id="company_name" class="form-control" placeholder="Enter Company Name" required>

                <div class="invalid-feedback mb-2">

                  Please enter Company name.

                </div>

              </div>

              <div class="box-4">

                <svg xmlns="http://www.w3.org/2000/svg" fill="#1f1f51" xmlns:xlink="http://www.w3.org/1999/xlink"

                  version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 473.806 473.806"

                  style="enable-background:new 0 0 473.806 473.806;width: 24px;height: 24px;" xml:space="preserve">

                  <g>

                    <g>

                      <path

                        d="M374.456,293.506c-9.7-10.1-21.4-15.5-33.8-15.5c-12.3,0-24.1,5.3-34.2,15.4l-31.6,31.5c-2.6-1.4-5.2-2.7-7.7-4    c-3.6-1.8-7-3.5-9.9-5.3c-29.6-18.8-56.5-43.3-82.3-75c-12.5-15.8-20.9-29.1-27-42.6c8.2-7.5,15.8-15.3,23.2-22.8    c2.8-2.8,5.6-5.7,8.4-8.5c21-21,21-48.2,0-69.2l-27.3-27.3c-3.1-3.1-6.3-6.3-9.3-9.5c-6-6.2-12.3-12.6-18.8-18.6    c-9.7-9.6-21.3-14.7-33.5-14.7s-24,5.1-34,14.7c-0.1,0.1-0.1,0.1-0.2,0.2l-34,34.3c-12.8,12.8-20.1,28.4-21.7,46.5    c-2.4,29.2,6.2,56.4,12.8,74.2c16.2,43.7,40.4,84.2,76.5,127.6c43.8,52.3,96.5,93.6,156.7,122.7c23,10.9,53.7,23.8,88,26    c2.1,0.1,4.3,0.2,6.3,0.2c23.1,0,42.5-8.3,57.7-24.8c0.1-0.2,0.3-0.3,0.4-0.5c5.2-6.3,11.2-12,17.5-18.1c4.3-4.1,8.7-8.4,13-12.9    c9.9-10.3,15.1-22.3,15.1-34.6c0-12.4-5.3-24.3-15.4-34.3L374.456,293.506z M410.256,398.806    C410.156,398.806,410.156,398.906,410.256,398.806c-3.9,4.2-7.9,8-12.2,12.2c-6.5,6.2-13.1,12.7-19.3,20    c-10.1,10.8-22,15.9-37.6,15.9c-1.5,0-3.1,0-4.6-0.1c-29.7-1.9-57.3-13.5-78-23.4c-56.6-27.4-106.3-66.3-147.6-115.6    c-34.1-41.1-56.9-79.1-72-119.9c-9.3-24.9-12.7-44.3-11.2-62.6c1-11.7,5.5-21.4,13.8-29.7l34.1-34.1c4.9-4.6,10.1-7.1,15.2-7.1    c6.3,0,11.4,3.8,14.6,7c0.1,0.1,0.2,0.2,0.3,0.3c6.1,5.7,11.9,11.6,18,17.9c3.1,3.2,6.3,6.4,9.5,9.7l27.3,27.3    c10.6,10.6,10.6,20.4,0,31c-2.9,2.9-5.7,5.8-8.6,8.6c-8.4,8.6-16.4,16.6-25.1,24.4c-0.2,0.2-0.4,0.3-0.5,0.5    c-8.6,8.6-7,17-5.2,22.7c0.1,0.3,0.2,0.6,0.3,0.9c7.1,17.2,17.1,33.4,32.3,52.7l0.1,0.1c27.6,34,56.7,60.5,88.8,80.8    c4.1,2.6,8.3,4.7,12.3,6.7c3.6,1.8,7,3.5,9.9,5.3c0.4,0.2,0.8,0.5,1.2,0.7c3.4,1.7,6.6,2.5,9.9,2.5c8.3,0,13.5-5.2,15.2-6.9    l34.2-34.2c3.4-3.4,8.8-7.5,15.1-7.5c6.2,0,11.3,3.9,14.4,7.3c0.1,0.1,0.1,0.1,0.2,0.2l55.1,55.1    C420.456,377.706,420.456,388.206,410.256,398.806z">

                      </path>

                      <path

                        d="M256.056,112.706c26.2,4.4,50,16.8,69,35.8s31.3,42.8,35.8,69c1.1,6.6,6.8,11.2,13.3,11.2c0.8,0,1.5-0.1,2.3-0.2    c7.4-1.2,12.3-8.2,11.1-15.6c-5.4-31.7-20.4-60.6-43.3-83.5s-51.8-37.9-83.5-43.3c-7.4-1.2-14.3,3.7-15.6,11    S248.656,111.506,256.056,112.706z">

                      </path>

                      <path

                        d="M473.256,209.006c-8.9-52.2-33.5-99.7-71.3-137.5s-85.3-62.4-137.5-71.3c-7.3-1.3-14.2,3.7-15.5,11    c-1.2,7.4,3.7,14.3,11.1,15.6c46.6,7.9,89.1,30,122.9,63.7c33.8,33.8,55.8,76.3,63.7,122.9c1.1,6.6,6.8,11.2,13.3,11.2    c0.8,0,1.5-0.1,2.3-0.2C469.556,223.306,474.556,216.306,473.256,209.006z">

                      </path>

                    </g>

                  </g>

                  <g>

                  </g>

                  <g>

                  </g>

                  <g>

                  </g>

                  <g>

                  </g>

                  <g>

                  </g>

                  <g>

                  </g>

                  <g>

                  </g>

                  <g>

                  </g>

                  <g>

                  </g>

                  <g>

                  </g>

                  <g>

                  </g>

                  <g>

                  </g>

                  <g>

                  </g>

                  <g>

                  </g>

                  <g>

                  </g>

                </svg>

                <label>Phone Number</label>

                <input type="number" name="phone" id="phone" class="form-control" placeholder="Enter Phone Number" required>

                <div class="invalid-feedback mb-2">

                  Please enter phone number.

                </div>

              </div>

              <div class="box-5">

                <svg id="Layer_1" style="enable-background:new 0 0 64 64;" version="1.1" viewBox="0 0 64 64"

                  xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                  <style type="text/css">

                    .st0 {

                      fill: #1f1f51;

                    }

                  </style>

                  <g>

                    <g id="Icon-Envelope" transform="translate(78.000000, 232.000000)">

                      <path class="st0"

                        d="M-22.5-213.2l-1.9-1.9l-17.6,17.6c-2.2,2.2-5.9,2.2-8.1,0L-67.7-215l-1.9,1.9l13.1,13.1     l-13.1,13.1l1.9,1.9l13.1-13.1l2.6,2.6c1.6,1.6,3.7,2.5,5.9,2.5s4.3-0.9,5.9-2.5l2.6-2.6l13.1,13.1l1.9-1.9l-13.1-13.1     L-22.5-213.2"

                        id="Fill-3" />

                      <path class="st0"

                        d="M-26.2-181.6h-39.5c-2.3,0-4.2-1.9-4.2-4.2v-28.2c0-2.3,1.9-4.2,4.2-4.2h39.5     c2.3,0,4.2,1.9,4.2,4.2v28.2C-22-183.5-23.9-181.6-26.2-181.6L-26.2-181.6z M-65.8-215.5c-0.8,0-1.4,0.6-1.4,1.4v28.2     c0,0.8,0.6,1.4,1.4,1.4h39.5c0.8,0,1.4-0.6,1.4-1.4v-28.2c0-0.8-0.6-1.4-1.4-1.4H-65.8L-65.8-215.5z"

                        id="Fill-4" />

                    </g>

                  </g>

                </svg>

                <label>Business Email</label>

                <input type="email" name="bus_email" id="bus_email" class="form-control" data-parsley-trigger="keyup" placeholder="Enter Business Email" required>

                <div class="invalid-feedback mb-2">

                  Please enter business email.

                </div>

              </div>


             

              <div class="box-6">

                <svg height="512px" fill="#1f1f51" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1"

                  viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"

                  xmlns:xlink="http://www.w3.org/1999/xlink">

                  <path

                    d="M256,48c-0.1,0-0.1,0-0.2,0c0,0,0,0-0.1,0c-0.1,0-0.2,0-0.2,0C140.8,48.3,48,141.3,48,256c0,114.7,92.8,207.7,207.5,208  c0.1,0,0.2,0,0.2,0c0,0,0.1,0,0.1,0c0.1,0,0.1,0,0.2,0c114.9,0,208-93.1,208-208C464,141.1,370.9,48,256,48z M264.3,172.5  c22.1-0.6,43.5-3.5,64.2-8.5c6.2,24.5,10.1,52.8,10.7,83.8h-74.9V172.5z M264.3,155.8V66c22.4,6.2,45.2,36.1,59.6,82  C304.7,152.6,284.8,155.2,264.3,155.8z M247.7,65.8v90.1c-20.7-0.6-40.8-3.3-60.1-8C202.2,101.7,225.1,71.6,247.7,65.8z   M247.7,172.5v75.2h-75.4c0.6-31,4.5-59.3,10.7-83.8C203.8,168.9,225.5,171.9,247.7,172.5z M155.5,247.7H64.9  c1.8-42.8,17.8-82,43.3-113c18.5,10.2,38.2,18.6,58.8,24.8C160.2,186,156.2,215.9,155.5,247.7z M155.5,264.3  c0.6,31.7,4.6,61.7,11.4,88.2c-20.6,6.3-40.2,14.6-58.8,24.8c-25.5-31-41.4-70.2-43.3-113H155.5z M172.3,264.3h75.4v75.1  c-22.2,0.6-43.9,3.6-64.7,8.7C176.8,323.6,172.9,295.3,172.3,264.3z M247.7,356.1v90.2c-22.6-5.9-45.5-35.9-60.1-82.1  C206.9,359.4,227,356.7,247.7,356.1z M264.3,446v-90c20.5,0.6,40.4,3.3,59.7,7.9C309.5,409.9,286.8,439.8,264.3,446z M264.3,339.4  v-75.1h74.9c-0.6,30.9-4.5,59.2-10.7,83.7C307.8,343,286.4,340,264.3,339.4z M355.9,264.3h91.2c-1.8,42.8-17.8,81.9-43.3,113  c-18.7-10.3-38.5-18.7-59.3-25C351.3,325.8,355.3,296,355.9,264.3z M355.9,247.7c-0.6-31.7-4.6-61.6-11.3-88.1  c20.8-6.3,40.6-14.7,59.2-24.9c25.5,31,41.5,70.2,43.3,113.1H355.9z M392.4,121.9c-16.6,8.8-34,16.1-52.3,21.6  c-9.7-31.3-23.4-56.8-39.5-73.6C336,78.4,367.6,96.8,392.4,121.9z M210.8,70.1c-16.1,16.7-29.7,42.2-39.3,73.3  c-18.1-5.5-35.4-12.7-51.8-21.5C144.2,96.9,175.6,78.6,210.8,70.1z M119.6,390c16.4-8.8,33.8-16,51.8-21.5  c9.7,31.2,23.3,56.6,39.4,73.4C175.6,433.4,144.2,415.1,119.6,390z M300.6,442.1c16.2-16.8,29.8-42.3,39.6-73.7  c18.3,5.5,35.7,12.8,52.3,21.6C367.7,415.2,336,433.6,300.6,442.1z" />

                </svg>

                <!-- <label>Select Country</label> -->

                <!-- <select class="form-control" required="required">

                  <option selected disabled value="">Select Country</option>

                  <option>Us</option>

                  <option>Canada</option>

                  <option>Europe</option>

                  <option>India</option>

                </select>  -->

                <!-- <div class="select2" id="mainSelect2 " aria-required="true">

                  <div class="selectBtn2"  data-type="firstOption">Please Select Country </div>

                  <div class="selectDropdown"  >

                    <div class="option2" data-type="thirdOption"><img src="images/003-united-states-of-america.png"

                        class="mr-2" alt="" />Us</div>

                    <div class="option2" data-type="firstOption"><img src="images/002-india.png" class="mr-2"

                        alt="" />India</div>

                    <div class="option2" data-type="secondOption"><img src="images/004-european.png" class="mr-2"

                        alt="" />Europe</div>

                  </div>

                </div>

                    <div class="invalid-feedback mb-2" id="errorm2">

                      Please Select Country.

                    </div> -->
                    <div class="form-group">
                        <label>Country/Region</label>
                          <select name="country" id="country" class="form-control ">
                                      <option value="">Please Select Country</option>
                                      <option value="US">US</option>
                                      <option value="Canada">Canada</option>
                                      <option value="Europe">Europe</option>
                                      <option value="India ">India</option>
                                      <option value="Other ">Other</option>
                        </select>
                  </div>

              </div> 

              <div class="box-7  mt-2">

                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" id="Layer_1" viewBox="0 0 512 512">

                  <path

                    d="M97.07,244.82H438.66a5,5,0,0,0,5-5V47.11a5,5,0,0,0-5-5H97.07a5,5,0,0,0-5,5V239.82A5,5,0,0,0,97.07,244.82ZM371.43,52.11c5,10.79,23.59,44.59,62.23,47.31v88.09C395,190.24,376.41,224,371.43,234.82H164.3c-5-10.78-23.59-44.58-62.23-47.31V99.42c38.64-2.72,57.25-36.52,62.23-47.31ZM102.07,197.54c29.4,2.39,45.06,25.53,51.17,37.28H102.07Zm280.48,37.28c6.21-11.71,22-34.85,51.11-37.27v37.27ZM433.66,89.4c-29.4-2.4-45.06-25.53-51.17-37.29h51.17ZM153.18,52.11C147,63.83,131.14,87,102.07,89.39V52.11Z"

                    style="fill:#1f1f51" />

                  <path

                    d="M478.3,333.57a35.08,35.08,0,0,0-39.74-18.82L336.9,338.63a27.72,27.72,0,0,0-3.32-1.9L256.4,299.34a149.06,149.06,0,0,0-99.24-10.83l-46.92,11.17H75v-44a5,5,0,0,0-5-5H36.18a5,5,0,0,0,0,10H65V459.89H36.18a5,5,0,0,0,0,10H70a5,5,0,0,0,5-5V401h60L222.11,435a145.38,145.38,0,0,0,116.76-5L467,366.77A24.88,24.88,0,0,0,478.3,333.57ZM462.55,357.8,334.44,420.94a135.26,135.26,0,0,1-108.7,4.7l-88-34.26A5.1,5.1,0,0,0,136,391H75V309.68h35.78a5,5,0,0,0,1.16-.13l47.5-11.31A139,139,0,0,1,252,308.34l77.18,37.39a17.92,17.92,0,0,1,9.47,20.78,16.82,16.82,0,0,1-18.3,12.22L205.46,363.94a5,5,0,1,0-1.27,9.92l114.92,14.79a26,26,0,0,0,3.39.22,26.87,26.87,0,0,0,25.84-19.74A27.94,27.94,0,0,0,345,347l95.82-22.5A25.12,25.12,0,0,1,469.32,338,14.86,14.86,0,0,1,462.55,357.8Z"

                    style="fill:#1f1f51" />

                  <path

                    d="M268.42,189.11H268c-17.49-.47-20.67-11.12-20.78-11.51a5,5,0,1,0-9.7,2.41c.17.7,4.24,16.1,25.35,18.73V212a5,5,0,1,0,10,0V198.73c11.95-2,22.62-11.69,25-23.59,1.42-7.11,1.52-24.88-28.21-36.34-15.93-6.14-24-15.26-22-25,1.72-8.59,10.83-15.93,19.65-15.93h.42c17.37.47,20.63,11,20.79,11.57a5,5,0,0,0,9.69-2.46c-.17-.7-4.24-16.09-25.34-18.73V75a5,5,0,0,0-10,0V88.2c-12.09,2-22.63,11.67-25,23.59-1.42,7.12-1.52,24.89,28.21,36.35,15.93,6.14,23.95,15.26,22,25C286.35,181.77,277.24,189.11,268.42,189.11Z"

                    style="fill:#1f1f51" />

                </svg>

                <!-- <label>Project Budget</label>

                 <select>

                  <option>Select Budget</option>

                  <option>2000$</option>

                  <option>6000$</option>

                  <option>10000$</option>

                </select>  -->

                <!-- <div class="select" id="mainSelect " aria-required="true" >

                  <div class="selectBtn" data-type="firstOption">Please Select Budget </div>

                  <div class="selectDropdown" >

                    <div class="option" data-type="firstOption">$5000</div>

                    <div class="option" data-type="secondOption">$10000</div>

                    <div class="option" data-type="thirdOption">$15000</div>

                  </div>

                </div>

                <div class="invalid-feedback mb-2">

                  Please Select Country.

                </div>

                <div class="invalid-feedback" id="errorm" style="display: none;">

                  Please Select Country.

                </div> -->

                <div class="form-group">
                  <label>Project Budget</label>
                  <select name="bud_range" id="bud_range" class="form-control ">
                                <option value="">Please Select Budget</option>
                                <option value="5000">$5000</option>
                                <option value="10000">$10000</option>
                                <option value="15000">$15000</option>
                    </select>
                </div>


              </div>
             <div>
              <div class="g-recaptcha" data-sitekey="{{env ('CAPTCHA_KEY')}}"></div>
              
             </div>
         
              <div class="see-more-btn">

                <button type="submit" id="submit" value="Submit" class="from-submit-btn">Submit</button>
               
              </div>

            </form>

          </div>

        </div>

      </div>

    </div>

  </div>

  <footer>

    <div class="container">

      <div class="row">

        <div class="col-md-8">

          <p>Copyright © 2022 Arccus. All rights reserved.</p>

        </div>

        <div class="col-md-4">

          <div class="footerlogo"><a href=""><img class="logoImg img-fluid"

                src="images/Arccus logo-04.png" /></a></div>

        </div>

      </div>

    </div>

  </footer>

 <script>

    var mainSelect = document.querySelector("#mainSelect");

    var errorm = document.querySelector("#errorm");

    var mainSelect2 = document.querySelector("#mainSelect2");

    var errorm2 = document.querySelector("#errorm2");

    const select = document.querySelectorAll('.selectBtn');

    const option = document.querySelectorAll('.option');

    const select2 = document.querySelectorAll('.selectBtn2');

    const option2 = document.querySelectorAll('.option2');

    let index = 1;

    let selectItem = '';

    let index2 = 1;

    let selectItem2 = '';

    select.forEach(a => {

      a.addEventListener('click', b => {

        const next = b.target.nextElementSibling;

        next.classList.toggle('toggle');

        next.style.zIndex = index++;

        mainSelect.classList.toggle("mainSelect");

      })

    })

    option.forEach(a => {

      a.addEventListener('click', b => {

        b.target.parentElement.classList.remove('toggle');



        mainSelect.classList.remove("mainSelect");

        const parent = b.target.closest('.select').children[0];

        parent.setAttribute('data-type', b.target.getAttribute('data-type'));

        parent.innerText = b.target.innerText;

        selectItem = b.target.innerText;

        console.log('sdfcsd ')

        document.getElementById("errorm").style.display = "none";

        mainSelect.classList.remove("error");

        mainSelect.classList.add("done");



      })

    });

    select2.forEach(a => {

      a.addEventListener('click', b => {

        const next = b.target.nextElementSibling;

        next.classList.toggle('toggle');

        next.style.zIndex = index++;

        mainSelect2.classList.toggle("mainSelect2");

      })

    })

    option2.forEach(a => {

      a.addEventListener('click', b => {

        b.target.parentElement.classList.remove('toggle');



        mainSelect2.classList.remove("mainSelect2");

        const parent = b.target.closest('.select2').children[0];

        parent.setAttribute('data-type', b.target.getAttribute('data-type'));

        parent.innerText = b.target.innerText;

        selectItem2 = b.target.innerText;

        console.log(selectItem2)

        document.getElementById("errorm2").style.display = "none";

        mainSelect2.classList.remove("error");

        mainSelect2.classList.add("done");

      })

    });

    (function () {

     

      window.addEventListener("load", function () {

        var form = document.getElementById("needs-validation");

        form.addEventListener("submit", function (event) {

          if (selectItem === '') {

            document.getElementById("errorm").style.display = "block";

            mainSelect.classList.add("error");

            mainSelect.classList.remove("done");



          }

          if (selectItem2 === '') {

            document.getElementById("errorm2").style.display = "block";

            mainSelect2.classList.add("error");

            mainSelect2.classList.remove("done");



          }



          if (form.checkValidity() == false) {

            event.preventDefault();

            event.stopPropagation();

          }

          form.classList.add("was-validated");

        }, false);

      }, false);

    }());

  </script>

  <script type="text/javascript">

    class Slider {

      constructor(rangeElement, valueElement, options) {

        this.rangeElement = rangeElement

        this.valueElement = valueElement

        this.options = options



        // Attach a listener to "change" event

        this.rangeElement.addEventListener('input', this.updateSlider.bind(this))

      }



      // Initialize the slider

      init() {

        this.rangeElement.setAttribute('min', options.min)

        this.rangeElement.setAttribute('max', options.max)

        this.rangeElement.value = options.cur



        this.updateSlider()

      }



      // Format the money

      asMoney(value) {

        return '$' + parseFloat(value)

          .toLocaleString('en-US', { maximumFractionDigits: 2 })

      }



      generateBackground(rangeElement) {

        if (this.rangeElement.value === this.options.min) {

          return

        }



        let percentage = (this.rangeElement.value - this.options.min) / (this.options.max - this.options.min) * 100

        return 'background: linear-gradient(to right, #1f1f51,#1f1f51 ' + percentage + '%, #d3edff ' + percentage + '%, #dee1e2 100%)'

      }



      updateSlider(newValue) {

        this.valueElement.innerHTML = this.asMoney(this.rangeElement.value)

        this.rangeElement.style = this.generateBackground(this.rangeElement.value)

      }

    }



    let rangeElement = document.querySelector('.range [type="range"]')

    let valueElement = document.querySelector('.range .range__value span')



    let options = {

      min: 0,

      max: 80000,

      cur: 15000

    }



    if (rangeElement) {

      let slider = new Slider(rangeElement, valueElement, options)



      slider.init()

    }

  </script>

  <script type="text/javascript">

    (function () {

     

      window.addEventListener('load', function () {

        var form = document.getElementById('needs-validation');

        form.addEventListener('submit', function (event) {

          if (form.checkValidity() === false) {

            event.preventDefault();

            event.stopPropagation();

          }

          form.classList.add('was-validated');

        }, false);

      }, false);

    })();

  </script>

  

  <script src="{{asset ('js/isotope.pkgd.js') }}"></script>

  <script src="{{asset ('js/widget.js') }}"></script>

  <script src="{{asset ('js/TweenMax.min.js') }}"></script>

  <script src="{{asset ('js/bootstrap.bundle.min.js') }}"></script>

  <script src="{{asset ('js/slick.min.js') }}"></script>

  <script src="{{asset ('js/custom.js') }}"></script>

</body>



</html>