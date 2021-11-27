<!-- Start Courses Area -->
<section id="estudios" class="courses section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <div class="section-icon wow zoomIn" data-wow-delay=".4s">
                        <i class="lni lni-graduation"></i>
                    </div>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Estudios y investigaciones</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum, ligula cursus ornare rhoncus, eros purus gravida nunc, in lacinia lacus mauris ut turpis. </p>
                </div>
            </div>
        </div>
        <div class="single-head">
            <div class="row">
                @foreach($docs as $doc)
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Course -->
                    <div class="single-course wow fadeInUp" data-wow-delay=".2s">
                        <div class="course-image">
                            <a href="javascript:void(0)"><img src="{{$doc->image}}" alt="#"></a>
                        </div>
                        <div class="content">
                            <h3><a href="javascript:void(0)">{{$doc->title}}</a></h3>
                            <p>{{$doc->description}}</p>
                        </div>
                    </div>
                    <!-- End Single Course -->
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- End Courses Area -->