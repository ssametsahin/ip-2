# Online Test Platformu - Laravel 11
![](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)
![](https://img.shields.io/badge/npm-CB3837?style=for-the-badge&logo=npm&logoColor=white)
![](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)

Bu projede Laravel 11 ile online bir test projesi kurulmuştur. İki adet kullanıcı tipi vardır:
- Öğretmen: Bu kullanıcı testler oluşturabilir, testlere sorular ekleyebilir.
- Öğrenci: Bu kullanıcılar sitede bulunan testleri görüntüleyebilir, çözebilir ve gönderebilir.
## Kurulumlar

Projenizin yerel makinenizde çalışabilmesi için PHP, Laravel, MySQL, Composer ve NPM kurulu olmalıdır. Aşağıda kurulum için gerekli linkler listelenmiştir:

- PHP kurulumu için: [`https://www.php.net/manual/tr/install.php`](https://www.php.net/manual/tr/install.php)
- Laravel kurulumu için: [`https://laravel.com/docs/11.x/installation`](https://laravel.com/docs/11.x/installation)
- MySQL kurulumu için: [`https://downloads.mysql.com/archives/installer/`](https://downloads.mysql.com/archives/installer/)
- Composer kurulumu için: [`https://getcomposer.org/download/`](https://getcomposer.org/download/)
- NPM kurulumu için: [`https://docs.npmjs.com/cli/v10/commands/npm-install`](https://docs.npmjs.com/cli/v10/commands/npm-install)

## Projeyi Çalıştırma
İlk olarak projeyi klonlayın veya dosyaları `.zip` olarak indirip dizine çıkarınız. Klonlamak için:
`git clone https://github.com/ssametsahin/ip-2.git`
Proje dizinini açınız ve gerekli Node modüllerini kurmak için aşağıdaki komut satırını çalıştırın:
`npm i`
Composer paketleri kurmak ve güncellemek için aşağıdaki kodları komut satırına sırayla giriniz:
`composer install`
`composer update`
Veri tabanı oluşturma işlemi için öncelikle proje dizininde bulunan `.env` dosyasını düzenlemek üzere açınız ve `DB_PASSWORD` değişkenine MySQL şifrenizi atayın.
- Github profilimde bulunan `db-2` deposundaki `schema.sql` dosyasını oluşturduğunuz veri tabanında içeri aktarabilirsiniz.
`git clone https://github.com/ssametsahin/db-2.git`
veya

- komut satırında `php artisan migrate` komutunu çalıştırabilirsiniz.

- tabloları veriyle doldurabilmek için `php artisan db:seed` komutunu çalıştırınız.
Son olarak projeyi sunucuda çalıştırmak için aşağıdaki kodu komut satırında çalıştırabilirsiniz.
`php artisan serve`
Tüm bu işlemlerin sonrasında proje `127.0.0.1/8000` veya `localhost:8000` adresinde çalışacaktır.
## Projede Kullanılan Mimari ve Teknolojiler

#### **MVC (Model-View-Controller) :**
Model-View-Controller (MVC), yazılım mühendisliğinde kullanılan bir **mimari desen**dir. Kullanıcıya yüklü miktarda verinin sunulduğu karmaşık uygulamalarda veri ve gösterimin soyutlanması esasına dayanır. Böylece veriler (*İngilizce: model*) ve kullanıcı arayüzü (*İngilizce: view*), birbirini etkilemeden kontrolcü (*İngilizce: controller*) adı verilen ara bileşenle veri gösterimi, kullanıcı etkileşiminden veri erişimi ve iş mantığını çıkarma suretiyle çözümlenmektedir.
<hr>

#### **Laravel 11 :**
Bildiğiniz üzere **PHP** dilinin içerisinde kullanıcıların işlerini kolaylaştıran ve güvenlik açısından destek sağlayan birçok **framework** bulunur. ”Web Sanatçılarının PHP Framework’ü” sloganıyla Laravel bu **framework** yapılarında ilk sıralarda gelir. Web uygulamaları geliştirilirken büyük bir kullanım oranına sahiptir.

**Laravel**  ile projelerimizin hazırlanmasını hızlandırıp, çok zaman harcadığınız işlemleri kolayca yapabilirsiniz. Örneğin oturum yönetimi, caching ve kullanıcı doğrulama gibi işlemleri kolayca hazırlayabilirsiniz.

Açık kaynak kodlu bir framework olan  **MVC**  yapısıyla zenginleştirilmiştir.
Daha fazla bilgi için, [tıklayınız](https://laravel.com/docs/11.x/).
<hr>

#### **Bootstrap 5**
Bootstrap, HTML, [CSS](https://www.argenova.com.tr/css "CSS") ve [JavaScript](https://www.argenova.com.tr/javascript "JavaScript") ile yazılmış kullanışlı, yeniden kullanılabilir kod parçalarından oluşan dev bir koleksiyondur. Ayrıca, geliştiricilerin ve tasarımcıların hızla tam olarak duyarlı web siteleri oluşturmasını sağlayan bir frameworktür.
Daha fazla bilgi için, [tıklayınız](https://getbootstrap.com/docs/5.0/getting-started/introduction/)
<hr>


#### **MySQL**
MySQL bir ilişkisel veri tabanı olarak, 1995 yılında kullanıma sürülen en popüler açık kaynaklı ilişkisel veri tabanı yönetim sisteminden biridir.Güçlü bir veri tabanı yönetim sistemi olan MySQL veri tabanı gerektiren hemen hemen her ortamda rahatlıkla kullanılabilir. Ama özellikle web sunucularında en çok kullanılan veritabanıdır, asp, php gibi birçok web programlama dili ile kullanılabilir.

Daha fazla bilgi için, [tıklayınız](https://www.mysql.com/)

## Proje Görselleri
![görsel1](https://github.com/user-attachments/assets/de8768da-029b-408a-80b2-1d1b8054c2c4)
<br>
![görsel2](https://github.com/user-attachments/assets/1763251c-801a-4e00-92f2-b2ff99ff6282)
<br>
![görsel3](https://github.com/user-attachments/assets/cb5e15ce-bb43-416c-b5ef-2bd7fe6184c9)
<br>
![görsel4](https://github.com/user-attachments/assets/9cbb08e6-9345-4258-bd32-8051cd2f25a2)
<br>
![görsel5](https://github.com/user-attachments/assets/9730a6ea-15fe-4857-bc57-635b181d7caf)
<br>
![görsel6](https://github.com/user-attachments/assets/37ea40c8-b36e-44e8-bffa-b9d5778aeb45)
<br>
![görsel7](https://github.com/user-attachments/assets/7cf9c754-534f-4e5e-9e4a-42a274721d22)
<br>
![görsel8](https://github.com/user-attachments/assets/1f0055bd-dd88-4517-9a7e-cc602a19abb3)
<br>
![görsel9](https://github.com/user-attachments/assets/3d4a6506-87fd-4341-aec6-72c2ba166d1e)


## Yazar
`Samet Şahin`
<br>
