<?php $k=0;?>
<div class="row">
    <div class="col-xl-3 col-lg-2 col-md-2 col-2"></div>
    <div  data-aos="fade-left" class="btn btn-primary rounded-pill col" >
        <h3 class="header " class="btn btn-white rounded-pill animate__animated animate__bounce" data-aos="animate text on scroll">
            ចែករំលែកបទពិសោធន៍និងចំណេះដឹង
            <sup><img src="image/new.jpg" alt="new" class="new rounded-circle animate__animated animate__swing" style="width: 7%;"></sup>
        </h3>
    </div>
    <div class="col-xl-3 col-lg-2 col-md-2 col-2"></div>
</div>

        <div class="row">
            <div class="col"></div>
            @foreach($allbook as $books)
                <?php $k++;?>
                @if($k<4)
            <div class="card col-3 " data-aos="flip-up" style="width: 18rem;">
                <a href="#" target="_blank">
                    <img src="{{asset("BookImages/".$books->image)}}" class="card-img-top img-thumbnail" alt="BookImage">
                </a>
                <div class="card-body">
                    <p class="card-text">
                        <?php
                        echo $books->description;
                        ?>
                    </p>
                </div>
            </div>
                    @endif
            @endforeach
            <div class="col"></div>
        </div>

