<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\ClassModel;
use App\Models\Question;
use App\Models\Subject;
use App\Models\Topic;
use App\Models\Test;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Role::create(['name' => 'Öğretmen']);
        Role::create(['name' => 'Öğrenci']);
        $classes = [
            [
                'name' => '5. Sınıf',
                'subjects' => [
                    [
                        'name' => 'Türkçe',
                        'topics' => [
                            ['name' => 'Söz Varlığı Unsurları'],
                            ['name' => 'İşlev Temelli Dil Yapıları ve Söz Varlığı'],
                            ['name' => 'Metin Türleri'],
                            ['name' => 'Paragraf Bilgisi'],
                            ['name' => 'Yazım Bilgisi'],
                        ],
                    ],
                    [
                        'name' => 'Matematik',
                        'topics' => [
                            ['name' => 'Geometrik Şekiller'],
                            ['name' => 'Doğal Sayılarla İşlemler'],
                            ['name' => 'Geometrik Nicelikler'],
                            ['name' => 'Kesirler'],
                            ['name' => 'İstatistiksel Araştırma Süreci'],
                            ['name' => 'İşlemlerle Cebirsel Düşünme'],
                            ['name' => 'Veriden Olasılığa'],
                        ],
                    ],
                    [
                        'name' => 'Fen Bilimleri',
                        'topics' => [
                            ['name' => 'Gökyüzündeki Komşularımız ve Biz'],
                            ['name' => 'Kuvveti Tanıyalım'],
                            ['name' => 'Canlıların Yapısına Yolculuk'],
                            ['name' => 'Işığın Dünyası'],
                            ['name' => 'Maddenin Doğası'],
                            ['name' => 'Elektrik Devre Elemanları'],
                            ['name' => 'Sürdürülebilir Yaşam ve Geri Dönüşüm'],
                        ],
                    ],
                    [
                        'name' => 'Sosyal Bilgiler',
                        'topics' => [
                            ['name' => 'Birlikte Yaşamak'],
                            ['name' => 'Evimizi Dünya'],
                            ['name' => 'Ortak Mirasımız'],
                            ['name' => 'Yaşayan Demokrasimiz'],
                            ['name' => 'Hayatımızdaki Ekonomi'],
                            ['name' => 'Teknoloji ve Sosyal Bilimler'],
                        ],
                    ],
                    [
                        'name' => 'Yabancı Dil',
                        'topics' => [
                            ['name' => 'Hello!'],
                            ['name' => 'My Town'],
                            ['name' => 'Games and Hobbies'],
                            ['name' => 'My Daily Routine'],
                            ['name' => 'Health'],
                            ['name' => 'Movies'],
                            ['name' => 'Party Time'],
                            ['name' => 'Fitness'],
                            ['name' => 'The Animal Shelter'],
                            ['name' => 'Festivals'],
                        ],
                    ],
                    [
                        'name' => 'Din Kültürü ve Ahlak Bilgisi',
                        'topics' => [
                            ['name' => 'Allah İnancı'],
                            ['name' => 'Ramazan ve Oruç'],
                            ['name' => 'Adap ve Nezaket'],
                            ['name' => 'Adap ve Nezaket 2'],
                            ['name' => 'Hz. Muhammed ve Aile Hayatı'],
                            ['name' => 'Çevremizde Dinin İzleri'],
                        ],
                    ],
                ],
            ],
            [
                'name' => '6. Sınıf',
                'subjects' => [
                    [
                        'name' => 'Türkçe',
                        'topics' => [
                            ['name' => 'Biçim ve Yapı Bilgisi'],
                            ['name' => 'Sözcükte Anlam'],
                            ['name' => 'Tamlamalar'],
                            ['name' => 'Cümlede Anlam'],
                            ['name' => 'Söz Gruplarında Anlam'],
                        ],
                    ],
                    [
                        'name' => 'Matematik',
                        'topics' => [
                            ['name' => 'Doğal Sayılarla İşlemler'],
                            ['name' => 'Çarpanlar ve Katlar'],
                            ['name' => 'Kümeler'],
                            ['name' => 'Tam Sayılar'],
                            ['name' => 'Kesirlerle İşlemler'],
                            ['name' => 'Ondalık Gösterim'],
                            ['name' => 'Oran'],
                            ['name' => 'Sıvı Ölçme'],
                        ],
                    ],
                    [
                        'name' => 'Fen Bilimleri',
                        'topics' => [
                            ['name' => 'Güneş Sistemi ve Tutulmalar'],
                            ['name' => 'Vücudumuzdaki Sistemler'],
                            ['name' => 'Kuvvet ve Hareket'],
                            ['name' => 'Madde ve Isı'],
                            ['name' => 'Ses ve Özellikleri'],
                            ['name' => 'Vücudumuzdaki Sistemler ve Sağlığı'],
                            ['name' => 'Elektriğin İletimi'],
                        ],
                    ],
                    [
                        'name' => 'Sosyal Bilgiler',
                        'topics' => [
                            ['name' => 'Biz ve Değerlerimiz'],
                            ['name' => 'Tarihe Yolculuk'],
                            ['name' => 'Yeryüzünde Yaşam'],
                            ['name' => 'Bilim ve Teknoloji Hayatımızda'],
                            ['name' => 'Üretiyorum, Tüketiyorum, Bilinçliyim'],
                            ['name' => 'Yönetime Katılıyorum'],
                        ],
                    ],
                    [
                        'name' => 'Yabancı Dil',
                        'topics' => [
                            ['name' => 'Life'],
                            ['name' => 'Yummy Breakfast'],
                            ['name' => 'Downtown'],
                            ['name' => 'Weather and Emotions'],
                            ['name' => 'At the Fair'],
                            ['name' => 'Occupations'],
                            ['name' => 'Holidays'],
                            ['name' => 'Bookworms'],
                            ['name' => 'Saving the Planet'],
                            ['name' => 'Democracy'],
                        ],
                    ],
                    [
                        'name' => 'Din Kültürü ve Ahlak Bilgisi',
                        'topics' => [
                            ['name' => 'Peygamber ve İlahi Kitap İnancı'],
                            ['name' => 'Namaz'],
                            ['name' => 'Zararlı Alışkanlıklar'],
                            ['name' => 'Hz. Muhammed’in (S.A.V.) Hayatı'],
                            ['name' => 'Temel Değerlerimiz'],
                        ],
                    ],
                ],
            ],
            [
                'name' => '7. Sınıf',
                'subjects' => [
                    [
                        'name' => 'Türkçe',
                        'topics' => [
                            ['name' => 'Fiiller'],
                            ['name' => 'Sözcükte Anlam'],
                            ['name' => 'Cümlede Anlam'],
                            ['name' => 'Fiilde Yapı – Ek Fiiller'],
                            ['name' => 'Zarflar'],
                            ['name' => 'Parçada Anlam'],
                        ],
                    ],
                    [
                        'name' => 'Matematik',
                        'topics' => [
                            ['name' => 'Tam Sayılarla İşlemler'],
                            ['name' => 'Rasyonel Sayılar'],
                            ['name' => 'Rasyonel Sayılarla İşlemler'],
                            ['name' => 'Cebirsel İfadeler'],
                            ['name' => 'Eşitlik ve Denklem'],
                            ['name' => 'Oran ve Oranti'],
                            ['name' => 'Yüzdeler'],
                        ],
                    ],
                    [
                        'name' => 'Fen Bilimleri',
                        'topics' => [
                            ['name' => 'Güneş Sistemi ve Ötesi'],
                            ['name' => 'Hücre ve Bölünmeler'],
                            ['name' => 'Kuvvet ve Enerji'],
                            ['name' => 'Saf Madde ve Karışımlar'],
                            ['name' => 'Işığın Madde ile Etkileşimi'],
                            ['name' => 'Canlılarda Üreme, Büyüme ve Gelişme'],
                            ['name' => 'Elektrik Devreleri'],
                        ],
                    ],
                    [
                        'name' => 'Sosyal Bilgiler',
                        'topics' => [
                            ['name' => 'İletişim ve İnsan İlişkileri'],
                            ['name' => 'Türk Tarihinde Yolculuk'],
                            ['name' => 'Ülkemizde Nüfus'],
                            ['name' => 'Zaman İçinde Bilim'],
                            ['name' => 'Ekonomi ve Sosyal Hayat'],
                            ['name' => 'Yaşayan Demokrasi'],
                            ['name' => 'Ülkeler Arası Köprüler'],
                        ],
                    ],
                    [
                        'name' => 'Yabancı Dil',
                        'topics' => [
                            ['name' => 'Appearance and Personality'],
                            ['name' => 'Sports'],
                            ['name' => 'Biographies'],
                            ['name' => 'Wild Animals'],
                            ['name' => 'Television'],
                            ['name' => 'Celebrations'],
                            ['name' => 'Dreams'],
                            ['name' => 'Public Buildings'],
                            ['name' => 'Environment'],
                            ['name' => 'Planets'],
                        ],
                    ],
                    [
                        'name' => 'Din Kültürü ve Ahlak Bilgisi',
                        'topics' => [
                            ['name' => 'Melekler ve Ahiret İnancı'],
                            ['name' => 'Hac ve Kurban'],
                            ['name' => 'Ahlaki Davranışlar'],
                            ['name' => 'Allah’ın (C.C.) Kulu ve Elçisi: Hz. Muhammed (S.A.V.)'],
                            ['name' => 'İslam Düşüncesinde Yorumlar'],
                        ],
                    ],
                ],
            ],
            [
                'name' => '8. Sınıf',
                'subjects' => [
                    [
                        'name' => 'Türkçe',
                        'topics' => [
                            ['name' => 'Fiilimsiler'],
                            ['name' => 'Sözcükte Anlam'],
                            ['name' => 'Cümlede Anlam'],
                            ['name' => 'Fiil ve Eylem'],
                            ['name' => 'Parça İlgisi'],
                            ['name' => 'Anlatım Bozuklukları'],
                        ],
                    ],
                    [
                        'name' => 'Matematik',
                        'topics' => [
                            ['name' => 'Cebirsel İfadeler'],
                            ['name' => 'Eşitlikler ve Denklem Çözme'],
                            ['name' => 'Geometri'],
                            ['name' => 'Üçgenler'],
                            ['name' => 'Oran Orantı'],
                            ['name' => 'Veri Analizi'],
                        ],
                    ],
                    [
                        'name' => 'Fen Bilimleri',
                        'topics' => [
                            ['name' => 'Madde ve Özellikleri'],
                            ['name' => 'İnsan ve Çevre'],
                            ['name' => 'Canlıların Yapısı ve Düzenleri'],
                            ['name' => 'Elektrik Enerjisi'],
                            ['name' => 'Işık ve Ses'],
                            ['name' => 'Hücre Bölünmesi ve Genetik'],
                            ['name' => 'Hücre ve Organizmalar'],
                        ],
                    ],
                    [
                        'name' => 'Sosyal Bilgiler',
                        'topics' => [
                            ['name' => 'Türklerin Geçmişteki İzlenceleri'],
                            ['name' => 'Ekonomi ve Para'],
                            ['name' => 'Sosyal Hayat'],
                            ['name' => 'Yerel Yönetimler'],
                            ['name' => 'Cumhuriyet ve Toplum'],
                            ['name' => 'Gelecek ve Planlama'],
                        ],
                    ],
                    [
                        'name' => 'Yabancı Dil',
                        'topics' => [
                            ['name' => 'Human Rights'],
                            ['name' => 'Sports'],
                            ['name' => 'Future'],
                            ['name' => 'Music'],
                            ['name' => 'Education'],
                            ['name' => 'Technology'],
                            ['name' => 'Holidays'],
                            ['name' => 'Environment'],
                            ['name' => 'World',],
                        ],
                    ],
                    [
                        'name' => 'Din Kültürü ve Ahlak Bilgisi',
                        'topics' => [
                            ['name' => 'İslamda Ahiret İnancı'],
                            ['name' => 'İslamda İbadet ve Hükümler'],
                            ['name' => 'Hz. Muhammed’in (S.A.V.) Hayatı ve İslami Kavramlar'],
                            ['name' => 'Oruç ve Zekâtın Önemi'],
                            ['name' => 'Müslümanların Toplumsal Hayata Katılımı'],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($classes as $classData) {
            $class = ClassModel::create(['name' => $classData['name']]);

            foreach ($classData['subjects'] as $subjectData) {
                $subject = Subject::create([
                    'name' => $subjectData['name'],
                    'class_id' => $class->id,
                ]);

                foreach ($subjectData['topics'] as $topicData) {
                    $topic = Topic::create([
                        'name' => $topicData['name'],
                        'subject_id' => $subject->id,
                    ]);
                }

            }
        }
    }
}

