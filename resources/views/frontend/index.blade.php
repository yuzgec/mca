<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trinity Türkiye Sınav Merkezi | Trinity Colle London </title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <link rel="stylesheet" href="/frontend/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/css/theme.css">
    <link rel="stylesheet" href="/frontend/css/theme-elements.css">

    <style>
        .form-cerceve {
            bottom:15%;
            right:30%;
            width:35%;
            top:3%;
        }
        .input-bosluk{
            margin-bottom: 10px;
        }
        @media only screen and (max-width: 600px) {
            .form-cerceve {
                top:1%;
                width:100%;
                bottom:0%;
                left:0%;

            }
            .input-bosluk{
                margin-bottom: 2px;
            }
        }
    </style>
</head>
<body>

<div class="body">
    <div role="main" class="main">
        <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover
        show-dots-xs show-dots-sm show-dots-md dots-light custom-nav-arrows-1 nav-dark nav-md nav-font-size-md show-nav-hover mb-0"
             data-plugin-options="{'autoplayTimeout': 5000}"
             style="height: 100vh;">
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <div class="owl-item position-relative pt-5"
                         style="background:#4f1948;">
                    </div>
                    <div class="owl-item position-relative pt-5"
                    style="background:#4f1948;">
               </div>
               <div class="owl-item position-relative pt-5"
               style="background:#4f1948;">
          </div>
                </div>
                <div class="position-absolute form-cerceve">
                    <div class="card border-radius border-0 box-shadow-1 mb-5" style="background-color: rgba(255,255,255,.9);">
                        <div class="card-body p-2 m-2 text-center">

                            <div class="">
                                <img src="/logo.png" class="img-fluid" alt="Trinity Türkiye Sınav Merkezi" style="width: 250px;margin-bottom:25px">
                            </div>

                            <h4 class="card-title mb-1 text-6" style="color: black;">Telefon :  0 232 382 05 25 </h4>
                            <p class="card-text">Nergiz Mahallesi 1775/6 Sokak No:4/A 35560 Karşıyaka/İZMİR<br>
                                info@trinitycollegeturkey.com<br>
                            Gökçer<strong> BAŞAR</strong></p>

                            @if (\Session::has('success'))
                                <div class="contact-form-success alert alert-success mt-4">
                                    <strong>Başarılı!</strong> {!! \Session::get('success') !!}
                                </div>
                            @endif

                            <form class="contact-form" action="{{ route('form') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group col text-start">
                                        <input type="text" placeholder="Adınız Soyadınız*" class="form-control text-2-5 input-bosluk" name="name" required value="{{ old('name') }}">
                                        <input type="email"  placeholder="Email*"  class="form-control text-2-5 input-bosluk" name="email" required value="{{ old('email') }}">
                                        <input type="text" placeholder="Konu*" class="form-control text-2-5 input-bosluk" name="subject" value="{{ old('subject') }}">
                                        <textarea type="text" placeholder="Mesajınız*" class="form-control text-2-5" rows="3" name="message" required></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <div class="d-grid gap-2">
                                            <button type="submit" value="Gönder" class="btn border-0 btn-primary text-color-primary text-3-5 p-1">
                                                Gönder
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>



    </div>

</div>

<script src="/frontend/vendor/plugins/js/plugins.min.js"></script>
<script src="/frontend/js/theme.js"></script>
<script src="/frontend/js/theme.init.js"></script>
<script src="/frontend/js/demos/demo-business-consulting-5.js"></script>

</body>
</html>
