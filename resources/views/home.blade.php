@extends('layouts.main')
@section('container')
<div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="w-100 pt-1 mb-5 text-right">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="get" class="modal-content modal-body border-0 p-0">
            <div class="input-group mb-2">
                <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                <button type="submit" class="input-group-text bg-success text-dark">
                    <i class="fa fa-fw fa-search text-white"></i>
                </button>
            </div>
        </form>
    </div>
</div>
<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <div class="row p-5">
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <img class="img-fluid" src="https://alfatihstudentcenter.com/wp-content/uploads/2021/01/2.-Ilustrasi-merayakan-hari-wisuda.jpg" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left align-self-center">
                            <h1 class="h1 text-success"><b>Welcome To Universitas Antah Barantah</b>
                            <h3 class="h2">Tiny and Perfect eCommerce Template</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo tempore qui voluptas ipsa aperiam ullam impedit nostrum laboriosam cupiditate laborum? <a rel="sponsored" class="text-success" href="https://templatemo.com" target="_blank">TemplateMo</a> website.
                                Image credits go to <a rel="sponsored" class="text-success" href="https://stories.freepik.com/" target="_blank">Freepik Stories</a>,
                                <a rel="sponsored" class="text-success" href="https://unsplash.com/" target="_blank">Unsplash</a> and
                                <a rel="sponsored" class="text-success" href="https://icons8.com/" target="_blank">Icons 8</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <img class="img-fluid" src="https://media.suara.com/pictures/970x544/2021/01/04/44623-ilustrasi-kampus-unsplash.jpg" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1">Proident occaecat</h1>
                            <h3 class="h2">Aliquip ex ea commodo consequat</h3>
                            <p>
                                You are permitted to use this Zay CSS template for your commercial websites.
                                You are <strong>not permitted</strong> to re-distribute the template ZIP file in any kind of template collection websites.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <img class="img-fluid" src="https://sami.ipb.ac.id/wp-content/uploads/2021/07/WhatsApp-Image-2021-07-19-at-10.42.08-1024x576.jpeg" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1">Repr in voluptate</h1>
                            <h3 class="h2">Ullamco laboris nisi ut </h3>
                            <p>
                                We bring you 100% free CSS templates for your websites.
                                If you wish to support TemplateMo, please make a small contribution via PayPal or tell your friends about our website. Thank you.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
        <i class="fas fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
        <i class="fas fa-chevron-right"></i>
    </a>
</div>
<!-- End Banner Hero -->
<section class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Universitas Antah Barantah News</h1>
            <p>
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="https://www.paramadina.ac.id/images/2022/WhatsApp_Image_2022-07-08_at_170640.jpeg"class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Non provident architecto nisi est eos? Delectus quia mollitia sit possimus voluptatibus repellendus maxime distinctio optio esse libero, eveniet soluta repellat exercitationem?</h5>
            <p class="text-center"><a href="{{ url('berita') }}" class="btn btn-success text-white">ReadMore</a></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="https://images.unsplash.com/photo-1588681664899-f142ff2dc9b1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8bmV3c3xlbnwwfHwwfHw%3D&w=1000&q=80" class="rounded-circle img-fluid border"></a>
            <h2 class="h5 text-center mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum quam reprehenderit libero deleniti, repellendus beatae corrupti distinctio? Nesciunt, officiis? Iusto libero voluptatem nulla fugiat mollitia, maiores amet blanditiis soluta dolor?</h2>
            <p class="text-center"><a href="{{ url('berita') }}" class="btn btn-success text-white">ReadMore</a></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="https://cdn0-production-images-kly.akamaized.net/fIyatiwTpR7L3iUG_p84FKvmb38=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3409609/original/062042600_1616557325-annie-spratt-hWJsOnaWTqs-unsplash.jpg" class="rounded-circle img-fluid border"></a>
            <h2 class="h5 text-center mt-3 mb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex, nihil consectetur. Odit inventore accusamus vitae alias natus voluptatum, totam distinctio sint laudantium repellendus harum dicta blanditiis quo qui repellat. Eveniet.</h2>
            <p class="text-center"><a href="{{ url('berita') }}" class="btn btn-success text-white">ReadMore</a></p>
        </div>
    </div>

<section class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Gallery</h1>
            <p>
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </p>
                 </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="{{url('galeri')}}"><img src="https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_1024,h_683/https://www.pnp.ac.id/wp-content/uploads/2018/07/Barisan.jpg"class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3"> SECATA GELOMBANG 1</h5>

        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="{{url('galeri')}}"><img src="https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_1024,h_683/https://www.pnp.ac.id/wp-content/uploads/2018/07/Barisan.jpg" class="rounded-circle img-fluid border"></a>
            <h2 class="h5 text-center mt-3 mb-3">SECATA GELOMBANG 2</h2>

        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="{{url('galeri')}}"><img src="https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_1024,h_683/https://www.pnp.ac.id/wp-content/uploads/2018/07/Barisan.jpg" class="rounded-circle img-fluid border"></a>
            <h2 class="h5 text-center mt-3 mb-3">SECATA GELOMBANG 3</h2>

        </div>
    </div>
</section></section>
<br>




@endsection
