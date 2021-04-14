<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Proje hakkında

Proje kod yapısı anlatımı.

- Laravel crud (veri tabanı) işlemleri için bir repository örneği hazırladım.

Repository Yapısı

- Model (Entity) ögelerimizi soyutlamak amacıyla Contracts klasörü altında kullanmak istediğim modellerin interface yapılarını oluşturdum.

- Models klasörüm altında Veritabanı işlemlerini yüretecek sınıflarımı oluşturdum.
  Modellerin eşleniği olan Proxy sınıfları ilişkiler veri modelleri için kullanılmaktadır.
  
-Repository klasörü altında işlemlerimizi yürüten Class'larımız yer almaktadır.

Yeni bir kayıt olunduğunda

-Kullanıcı için oauth_access_tokens tablosunda bir kullanıcı için üretilen token bilgileri tutulur.

Yapılandırma

-config/auth.php içindeki guards yapısı içindeki api ile giriş yönteminde 'driver' => 'passport' değerini belirtilen değer ile değiştiriyoruz.
