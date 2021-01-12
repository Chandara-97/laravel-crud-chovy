<?php $k=0;?>
@foreach($phds as $phd)
    <?php $k++;?>
    @if($k<3)
        <section class="card rounded card-post-size" data-aos="flip-right">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-3"><img src="{{asset("ScholarshipPhdImages/".$phd->image)}}" class="imagepost" alt="imagepost"></div>
                <div class="col-4"></div>
            </div>


            <!-- <img src="https://i1.wp.com/phoura-y.com/wp-content/uploads/2020/11/image.png?resize=1024%2C822&ssl=1" alt=""> -->
            <div class="card-body">


                <div class="d-flex flex-column comment-section" id="myGroup">
                    <?php
                    echo $phd->description;
                    ?>
                    @include('layout.like')
                </div>
                <div>
                    {{$phd->created_at}}
                </div>
            </div>

        </section>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                offset: 400, // offset (in px) from the original trigger point
                delay: 0, // values from 0 to 3000, with step 50ms
                duration: 1000 // values from 0 to 3000, with step 50ms
            });
        </script>
    @endif

@endforeach
