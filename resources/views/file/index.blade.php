@extends('layouts.app')
@section("css")
    <style>
        html,body{
            height: 100%;
            margin: 0;
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(149,199,20,1) 0%, rgba(0,212,255,1) 96%);

        }

    </style>
    @endsection
@section('content')

    <div class="container h-100">
        <div class="d-flex justify-content-center">
            <div class="card mt-5 col-md-10 animated bounceInDown myForm">

                <div class="card-header">
                    <h4>Anlatım</h4>
                </div>

                <div>
                   <h4> ## Proje hakkında</h4>

                    <h5>Proje kod yapısı anlatımı.</h5>

                    <p> - Laravel crud (veri tabanı) işlemleri için bir repository örneği hazırladım.</p>

                    <h5>Repository Yapısı</h5>

                    <p> - Model (Entity) ögelerimizi soyutlamak amacıyla Contracts klasörü altında kullanmak istediğim modellerin interface yapılarını oluşturdum.

                       - Models klasörüm altında Veritabanı işlemlerini yüretecek sınıflarımı oluşturdum.
                       Modellerin eşleniği olan Proxy sınıfları ilişkiler veri modelleri için kullanılmaktadır.</p>

                    <p> -Repository klasörü altında işlemlerimizi yürüten Class'larımız yer almaktadır.</p>

                    <p> -ModuleServiceProvider içine modellerimizi belirtiyoruz.Hangi modellerimizin instance'larının üretileceğini belirtmiş oluyoruz..</p>

                    <h5> Yeni bir kayıt olunduğunda</h5>

                    <p> -Kullanıcı için oauth_access_tokens tablosunda bir kullanıcı için üretilen token bilgileri tutulur.</p>

                    <h5> Yapılandırma</h5>

                    <p> -config/auth.php içindeki guards yapısı içindeki api ile giriş yönteminde 'driver' => 'passport' değerini belirtilen değer ile değiştiriyoruz.</p>

                    <p>AuthServiceProvider içine Passport::routes(); fonsksiyonunu ekliyoruz.(Paket yapısı kullanabilmek için)</p>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('css')

@endsection


@section('js')

@endsection
