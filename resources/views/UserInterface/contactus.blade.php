@extends('layout.bone')

@section('title','ទាក់ទងជាមួយយើង')


@section('style')

@endsection

@section('post')
<div class="container">

          <div class="row">
              <div class="col-2"></div>
              <div data-aos="fade-left" class="btn btn-warning rounded-circle col">
                  <h1 class="header " data-aos="animate text on scroll">ទាក់ទងជាមួយយើង</h1>
              </div>
              <div class="col-2"></div>
          </div>

          <div class="row">
             <div class="col"></div>
             <div class="col-2">
                <img class="rounded-circle" style="width: 18rem;" src="https://scontent.fpnh2-2.fna.fbcdn.net/v/t1.0-9/137613099_2537617009872265_3507853755147927739_o.jpg?_nc_cat=108&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeFuuHPuu4C4mpTDkGwhX6byroPUIxF5pfiug9QjEXml-LvQQLkKVulTT-juBGWFkJJEBcLVfpl5bMN1ALFNjIHl&_nc_ohc=t_CeZao7gbgAX-sz4Sj&_nc_ht=scontent.fpnh2-2.fna&oh=3d3b01eed6896db5474ebbf7101334fa&oe=60242332" alt="Leav Chan Dara">
                <div class="text-center">
                  <h5>Leav Chan Dara</h5>
                </div>
                <div class="text-center">
                   <a href="https://web.facebook.com/leav.chandara"><i class="fab fa-facebook fa-lg" aria-hidden="true"></i></a>&nbsp;
                   <a href="mailto:leav.chandara7997@gmail.com"><i class="far fa-envelope fa-lg" aria-hidden="true"></i></a>
                </div>
             </div>
             <div class="col"></div>
             <div class="col-2">
                <img class="rounded-circle" style="width: 18rem;" src="https://scontent.fpnh2-2.fna.fbcdn.net/v/t1.0-9/127278990_1271592736537593_965136852605287300_n.jpg?_nc_cat=108&ccb=2&_nc_sid=174925&_nc_eui2=AeFVYzTbDYJOBohNisnb_9ytb-7L_MUlAyVv7sv8xSUDJaoGcwffqU3QqtHZZZHs8LVN-n4yOtQGRMIyQBV_2rFD&_nc_ohc=lp4M7GnQEYwAX_p05x6&_nc_ht=scontent.fpnh2-2.fna&oh=98691ff90c2c8946e0932761bf193662&oe=60225D6B" alt="ly nary">
                <div class="text-center">
                  <h5>Ly Nary</h5>
                </div>
                <div class="text-center">
                   <a href="https://web.facebook.com/profile.php?id=100010606367727"><i class="fab fa-facebook fa-lg" aria-hidden="true"></i></a>&nbsp;
                   <a href="mailto:naryaimeting@gmail.com"><i class="far fa-envelope fa-lg" aria-hidden="true"></i></a>
                </div>
             </div>
             <div class="col"></div>
          </div>
       </div> <br>
       <div class="row">
          <div class="col-4"></div>

          <div class="col-4"></div>
       </div><br><br><br>
         <div class="container">
              <form action="">
                  <div class="form-group">
                          <div>
                              <label class="move-up" for="name"> Full Name </label>
                              <input type="text" name="name"class="form-control">
                          </div>

                          <div>
                                  <label for="name"> Email  </label>
                                  <input type="email" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                          </div>

                          <div>
                              <label for="name"> Your Message </label>
                              <textarea name="message" id="Message" class="form-control"></textarea>
                          </div>
                              <input type="submit" value="submit" class="btn btn-primary">
                  </div>
          </form>
      </div><br><br><br>

@endsection
