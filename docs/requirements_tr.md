openProject
=======

Biçda, openProject, Sürüm 1.0, Tarih: 6 Ekim 2012

Yazýlým Gereksinimlerine Ýliþkin Belirtmeler
----------------

1. **Giris**
>Bu belgenin hazýrlanma amacý, oluþturulacak olan proje yönetimi yazýlýmý ile ilgili bilgiler vermektir. 
Bu belgede yazýlýma kim tarafýndan, neden ihtiyaç ihtiyaç duyulduðu, hangi girdiler ile hangi çýktýlara  
ulaþýlmak istendiði gibi bilgilere deðinilecektir.

    1. **Amaç**
>Açýk Kaynaklý Proje Yönetimi yazýlýmý openProject, internet üzerinden çalýþan, kullanýcýlarýn oturum açarak 
kendi rolarine göre giriþ yaptýklarý ve projeleri ile ilgili, isim, bitiþ tarihi, yapýlacak iþler, önemli 
tarihler gibi bilgileri girerek, projelerinin varolan durumlarýný görüntüleyebildikleri, düzenleyebildikleri, 
güncelleyebildikleri ve silebildikleri ve gerektiðinde de özel hesaplama gerektiren raporlara ve göstergelere 
kolayca ulaþabildikleri bi sistemdir.

    2. **Kapsam**
>Bu belgede proje yönetimi yazýlýmýnýn üzerinde kurulu olduðu MVC yapýsýnýn, veri model, iþlevler ve sunum 
katmanlarý, sistemi kullanacak olan kullanýcýlar ve varsa ayrýca görevleri, kullanýlacak olan teknolojiler ve
ileride yapýlabilecek ek geliþtirmelerden söz edilecektir.

    3. **Tanýmlar, Kýsa Adlar ve Kýsaltmalar**
> MVC: Model-View-Controller, Veri modeli, Görünüm ve Kontrol(iþlev anlamýnda) yazýlým geliþtirme metodolojisi

    4. **Atýfta bulunulan kaynaklar**
>

    5. **Kullanýlacak teknolojiler**
>Bu bölümde, projenizin bir parçasý olarak kullanabileceginiz teknolojilerin tamamý bulunur. Söz konusu
teknolojiler arasýnda Java, J2EE- Servlet’ler, JSP’ler, vb. ve DB2, DB2 Express – C ve WAS, WASCE, vb.
teknolojiler yer alýr.

    6. **Genel bilgiler**
>Bu alt bölümde, SRS belgesinin geri kalan kýsmýnda ne tür bilgilerin yer aldýgý anlatýlmalý ve SRS
belgesinin nasýl düzenlendigine iliskin açýklamalar bulunmalýdýr.

2. **Genel Açýklama**
>SRS belgesinin bu bölümünde SRS belgesine konu olan ürünü ve bu ürüne iliskin gereksinimleri etkileyen
genel etmenler tanýmlanmalýdýr.
Bu bölümde tek tek gereksinimler belirtilmez. Bunun yerine, söz konusu gereksinimlere iliskin genel bir arka
plan bilgisi sunulur, böylece bu gereksinimlerin daha kolay bir biçimde anlasýlabilmesi saglanýr. Sözü
edilen gereksinimler, 3. bölümde ayrýntýlý bir biçimde tanýmlanýr. “Genel Açýklama” bölümünde ürünün
görünümü, ürünün islevleri, kullanýcýnýn özellikleri, kýsýtlamalar, varsayýmlar ve bagýmlýlýklar ve
gereksinimlere iliskin alt kümeler gibi ögelere de yer verin.

    1. **Kullaným Senaryosu Modeline iliskin inceleme**
>SRS belgesinin olusturulmasýnda kullaným senaryosu modellemesi kullanýldýysa, bu bölümde, kullaným
senaryosuna veya bu alt sistem ya da özellik için uygulanabilen kullaným senaryosu ile ilgili alt kümeye iliskin genel bilgiler yer alýr. Söz konusu genel bilgiler, bir ad listesini, tüm kullaným senaryolarýna ve
etmenlere iliskin kýsa açýklamalarý, geçerli semalarý ve iliskileri içerir. Bu noktada, SRS belgesine ek bir
belge olarak kullanýlabilecek olan kullaným senaryosu modeline iliskin inceleme raporuna basvurun.

    2. **Mimari sema ve veritabaný tasarýmý**
>Bu bölümde, uygulama mimarisi semanýzdan ve veritabaný tasarýmý semanýzdan söz edin

    3. **Varsayýmlar ve Bagýmlýlýklar**
>Bu bölümde,bu SRS belgesinde tanýtýlan yazýlýmýn uygulanabilirligine temel olabilecek önemli herhangi
bir teknik fizibilite incelemesine,alt sistemlerin ya da bilesenlerin kullanýlabilirligine veya proje ile
baglantýlý olan diger varsayýmlara iliskin açýklamalar yer alýr.

3. **Belirli Gereksinimler**
>SRS belgesinin bu bölümünde,tasarýmcýlarýn ilgili yazýlým gereksinimlerini karsýlayan bir sistem
tasarlayabilmelerini ve test sorumlularýnýn söz konusu sistemin ilgili yazýlým gereksinimlerini karsýlayýp
karsýlamadýgýný test edebilmelerini saglayacak yazýlým gereksinimlerin tamamý yeterli düzeyde
ayrýntýlandýrýlarak saglanmalýdýr. Kullaným senaryosu modelinin kullanýldýgý durumlarda, söz konusu
gereksinimler kullaným senaryolarýnda ve ilgili ek belirtimlerde saglanýr. Kullaným senaryosu modelinin
kullanýlmadýgý durumlarda, ek belirtimlerin yer aldýgý belgenin taslagý dogrudan bu bölüme eklenebilir.

    1. **Kullaným Senaryosu Raporlarý**
>Kullaným senaryosu modellemesinde, kulaným senaryolarýnda, çogunlukla, herhangi bir islevi olmayan
birkaç gereksinimin yaný sýra sisteme iliskin islevsel gereksinimlerin büyük bir kýsmý da tanýmlanýr. Yukarýda
yer alan kullaným senaryosu modelindeki her bir kulaným senaryosu için ya da bu kullaným senaryolarýnýn alt
kümeleri için bu bölümdeki kullaným senaryosu raporuna basvurun ya da bu raporu SRS belgesine ekleyin.
Tüm gereksinimlerin anlasýlýr bir biçimde sýnýflandýrýldýgýndan emin olun.

    2. **Ek Gereksinimler**
>Ek Belirtimler belgesinde, kulaným senaryolarýnda yer almayan gereksinimler bulunur. Ek Belirtimler
belgesinden alýnan ve bu alt sisteme ya da özellige uygulanabilen belirli gereksinimler bu bölümde yer
almalýdýr. Söz konusu belirli gereksinimler, ilgili alt sistemin ya da özelligin tanýmlanabilmesi için gerekli
olan ayrýntýlarý içerecek sekilde sadelestirilmelidir.
Bu belirtimleri dogrudan bu belgede saglayabilirsiniz ya da bu noktada SRS belgesine ek ayrý bir belge
olarak kullanýlabilecek olan Ek Belirtimler belgesine basvurabilirsiniz. Tüm gereksinimlerin anlasýlýr bir
biçimde sýnýflandýrýldýgýndan emin olun.

4. **Yardýmcý Bilgiler**
>Saglanan yardýmcý bilgiler, SRS belgesinin kullanýmýný kolaylastýrýr. Yardýmcý bilgiler bölümünde sunlar
yer alýr: a) Ýçindekiler, b) Dizin, c) Ekler. Yardýmcý bilgiler, kullaným senaryolarýna iliskin taslaklarý ya da
kullanýcý-arabirim ön ürünlerini içerebilir. Eklerin dahil edilmesi durumunda, söz konusu eklerin SRS
belgesinde yer alan gereksinimlerin bir parçasý olarak kabul edilip edilmeyecegi SRS belgesinin içinde açýk bir
biçimde belirtilmelidir.

5. **Varsa Merak Edilenler / Sorular / Tereddütler:**
>Bu bölüme, projenize ya da kullandýgýnýz teknolojilere iliskin sorularýnýzý ve tereddütlerinizi yazabilirsiniz.
Sorularýnýz yanýtlanýp tartýsma forumuna konulacaktýr. Herhangi bir proje ile ilgili olan sorularýn yanýtlarý tek
tek ekiplere gönderilecektir.