<div class="row">
    <div class="col"></div>
    @foreach($allvid as $vids)
        <?php $k++;?>
        @if($k<4)
            <div class="card col-3 " data-aos="flip-up" style="width: 18rem;">
                <a href="#" target="_blank">
                    <img src="{{asset("VideoImages/".$vids->image)}}" class="card-img-top img-thumbnail" alt="BookImage">
                </a>
                <div class="card-body">
                    <p class="card-text">
                        <?php
                        echo $vids->description;
                        ?>
                    </p>
                </div>
            </div>
        @endif
    @endforeach
    <div class="col"></div>
</div>
