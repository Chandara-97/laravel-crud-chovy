@extends('layout.bone')

@section('title','ដំណឹងអាហារូករណ៍')


@section('style')

@endsection
@section('post1')
    <div class="row">
        <div class="col-xl-3 col-lg-2 col-md-2 col-2"></div>
        <div  data-aos="fade-left" class="btn btn-primary rounded-pill col" >
            <h3 class="header " class="btn btn-white rounded-circle animate__animated animate__bounce" data-aos="animate text on scroll">អនុវិទ្យាល័យនិងវិទ្យាល័យ
                <sup><img src="image/new.jpg" alt="new" class="new rounded-circle animate__animated animate__swing" style="width: 7%;"></sup>
            </h3>
        </div>
        <div class="col-xl-3 col-lg-2 col-md-2 col-2"></div>
    </div>
    @foreach($bachelors as $bachelor)
        <section class="card rounded card-post-size" data-aos="flip-right">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-3"><img src="{{asset("ScholarshipBachelorImages/".$bachelor->image)}}" class="imagepost" alt="imagepost"></div>
                <div class="col-4"></div>
            </div>


            <!-- <img src="https://i1.wp.com/phoura-y.com/wp-content/uploads/2020/11/image.png?resize=1024%2C822&ssl=1" alt=""> -->
            <div class="card-body">


                <div class="d-flex flex-column comment-section" id="myGroup">
                    <?php
                    echo $bachelor->description;
                    ?>
                    @include('layout.like')
                </div>
                <div>
                    {{$bachelor->created_at}}
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
    @endforeach
@endsection
