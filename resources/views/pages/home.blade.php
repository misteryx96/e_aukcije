@extends('layouts.front')


@section('content')
<!--************************************
        Welcom To Your Shop Start
*************************************-->


<section class="tg-haslayout">
    <div class="container-fluid">
        <div class="row">
            <div class="tg-welcometoyourshoop tg-vtwo">
                <div class="col-sm-6 col-xs-12 tg-verticalmiddle">
                    <div class="tg-sectioncontent">
                        <div class="tg-sectiontitle">
                            <h2><span>welcome to</span> your shop<em></em></h2>
                        </div>
                        <div class="tg-description">
                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magnai aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquipexae consequat aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident sunt in culpa qui officiaiunt mollit anim id est laborum ut perspiciatis unde omnis.</p>
                        </div>
                        <div class="tg-sectionfoot">
                            <a class="tg-btn" href="http://exprostudio.com/html/your_shop/index-v2.html#"><span>Read More</span></a>
                            <div class="tg-socialarea">
                                <strong>fOLLOW uS:</strong>
                                <ul class="tg-socialicons">
                                    <li><a href="http://exprostudio.com/html/your_shop/index-v2.html#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="http://exprostudio.com/html/your_shop/index-v2.html#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="http://exprostudio.com/html/your_shop/index-v2.html#"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a href="http://exprostudio.com/html/your_shop/index-v2.html#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 tg-verticalmiddle">
                    <div class="row">
                        <figure class="tg-videobox">
                            <img src="{{ asset('/') }}pics/product1/test_files/img-05(1).jpg" alt="image description">
                            <figcaption>
                                <a class="tg-btnplay" href="http://exprostudio.com/html/your_shop/index-v2.html#"><i class="fa fa-play"></i></a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--************************************
        Welcom To Your Shop End
*************************************-->
<!--************************************
        Female New Arrival Start
*************************************-->
<section class="tg-haslayout">
    <div class="container-fluid">
        <div class="row">
            <div class="tg-femalenewarrival tg-vtwo">
                <div class="col-sm-6 col-xs-12 pull-right">
                    <div class="tg-sectioncontent">
                        <div class="tg-sectiontitle">
                            <h2><span>New Arrival</span>Female Stock<em></em></h2>
                        </div>
                        <div class="tg-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incuntaiti quis nostrud exerci ationice commodo consequat.</p>
                        </div>
                        <ul class="tg-femalecategorynav tg-catagorynav" role="tablist">
                            <li role="presentation" class="">
                                <a href="http://exprostudio.com/html/your_shop/index-v2.html#femaledress" aria-controls="femaledress" role="tab" data-toggle="tab" aria-expanded="false">
                                    <img src="{{ asset('/') }}pics/product1/test_files/img-01.png" alt="image description">
                                </a>
                            </li>
                            <li role="presentation" class="">
                                <a href="http://exprostudio.com/html/your_shop/index-v2.html#femaleshoes" aria-controls="femaleshoes" role="tab" data-toggle="tab" aria-expanded="false">
                                    <img src="{{ asset('/') }}pics/product1/test_files/img-02.png" alt="image description">
                                </a>
                            </li>
                            <li role="presentation" class="active">
                                <a href="http://exprostudio.com/html/your_shop/index-v2.html#femalepurse" aria-controls="femalepurse" role="tab" data-toggle="tab" aria-expanded="true">
                                    <img src="{{ asset('/') }}pics/product1/test_files/img-03.png" alt="image description">
                                </a>
                            </li>
                        </ul>
                        <a class="tg-btn" href="http://exprostudio.com/html/your_shop/index-v2.html#"><span>view all</span></a>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 pull-left">
                    <div class="row">
                        <div class="tab-content tg-tabcontent">
                            <div role="tabpanel" class="tab-pane fade" id="femaledress">
                                <figure>
                                    <img src="{{ asset('/') }}pics/product1/test_files/img-01(2).jpg" alt="image description">
                                </figure>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="femaleshoes">
                                <figure>
                                    <img src="{{ asset('/') }}pics/product1/test_files/img-02(2).jpg" alt="image description">
                                </figure>
                            </div>
                            <div role="tabpanel" class="tab-pane fade active in" id="femalepurse">
                                <figure>
                                    <img src="{{ asset('/') }}pics/product1/test_files/img-03(2).jpg" alt="image description">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--************************************
        Female New Arrival End
*************************************-->
<!--************************************
        Male New Arrival Start
*************************************-->
<section class="tg-haslayout">
    <div class="container-fluid">
        <div class="row">
            <div class="tg-malenewarrival tg-vtwo">
                <div class="col-sm-6 col-xs-12 tg-verticalmiddle">
                    <div class="tg-sectioncontent">
                        <div class="tg-sectiontitle">
                            <h2><span>New Arrival</span>male Stock<em></em></h2>
                        </div>
                        <div class="tg-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incuntaiti quis nostrud exerci ationice commodo consequat.</p>
                        </div>
                        <ul class="tg-malecategorynav tg-catagorynav" role="tablist">
                            <li role="presentation" class="">
                                <a href="http://exprostudio.com/html/your_shop/index-v2.html#maledress" aria-controls="maledress" role="tab" data-toggle="tab" aria-expanded="false">
                                    <img src="{{ asset('/') }}pics/product1/test_files/img-04.png" alt="image description">
                                </a>
                            </li>
                            <li role="presentation" class="active">
                                <a href="http://exprostudio.com/html/your_shop/index-v2.html#maleshoes" aria-controls="maleshoes" role="tab" data-toggle="tab" aria-expanded="true">
                                    <img src="{{ asset('/') }}pics/product1/test_files/img-05.png" alt="image description">
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="http://exprostudio.com/html/your_shop/index-v2.html#malepurse" aria-controls="malepurse" role="tab" data-toggle="tab">
                                    <img src="{{ asset('/') }}pics/product1/test_files/img-06.png" alt="image description">
                                </a>
                            </li>
                        </ul>
                        <a class="tg-btn" href="http://exprostudio.com/html/your_shop/index-v2.html#"><span>view all</span></a>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 tg-verticalmiddle">
                    <div class="row">
                        <div class="tab-content tg-tabcontent">
                            <div role="tabpanel" class="tab-pane fade" id="maledress">
                                <figure>
                                    <img src="{{ asset('/') }}pics/product1/test_files/img-01(2).jpg" alt="image description">
                                </figure>
                            </div>
                            <div role="tabpanel" class="tab-pane fade active in" id="maleshoes">
                                <figure>
                                    <img src="{{ asset('/') }}pics/product1/test_files/img-02(2).jpg" alt="image description">
                                </figure>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="malepurse">
                                <figure>
                                    <img src="{{ asset('/') }}pics/product1/test_files/img-03(2).jpg" alt="image description">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--************************************
        Male New Arrival End
*************************************-->
<!--************************************
        Kids New Arrival Start
*************************************-->

<!--************************************
        Kids New Arrival End
*************************************-->


<!--************************************
        Brands End
*************************************-->

@endsection