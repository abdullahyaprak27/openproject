openProject
=======

Bi�da, openProject, S�r�m 1.0, Tarih: 6 Ekim 2012

Yaz�l�m Gereksinimlerine �li�kin Belirtmeler
----------------

1. **Giris**
>Bu belgenin haz�rlanma amac�, olu�turulacak olan proje y�netimi yaz�l�m� ile ilgili bilgiler vermektir. 
Bu belgede yaz�l�ma kim taraf�ndan, neden ihtiya� ihtiya� duyuldu�u, hangi girdiler ile hangi ��kt�lara  
ula��lmak istendi�i gibi bilgilere de�inilecektir.

    1. **Ama�**
>A��k Kaynakl� Proje Y�netimi yaz�l�m� openProject, internet �zerinden �al��an, kullan�c�lar�n oturum a�arak 
kendi rolarine g�re giri� yapt�klar� ve projeleri ile ilgili, isim, biti� tarihi, yap�lacak i�ler, �nemli 
tarihler gibi bilgileri girerek, projelerinin varolan durumlar�n� g�r�nt�leyebildikleri, d�zenleyebildikleri, 
g�ncelleyebildikleri ve silebildikleri ve gerekti�inde de �zel hesaplama gerektiren raporlara ve g�stergelere 
kolayca ula�abildikleri bi sistemdir.

    2. **Kapsam**
>Bu belgede proje y�netimi yaz�l�m�n�n �zerinde kurulu oldu�u MVC yap�s�n�n, veri model, i�levler ve sunum 
katmanlar�, sistemi kullanacak olan kullan�c�lar ve varsa ayr�ca g�revleri, kullan�lacak olan teknolojiler ve
ileride yap�labilecek ek geli�tirmelerden s�z edilecektir.

    3. **Tan�mlar, K�sa Adlar ve K�saltmalar**
> MVC: Model-View-Controller, Veri modeli, G�r�n�m ve Kontrol(i�lev anlam�nda) yaz�l�m geli�tirme metodolojisi

    4. **At�fta bulunulan kaynaklar**
>

    5. **Kullan�lacak teknolojiler**
>Bu b�l�mde, projenizin bir par�as� olarak kullanabileceginiz teknolojilerin tamam� bulunur. S�z konusu
teknolojiler aras�nda Java, J2EE- Servlet�ler, JSP�ler, vb. ve DB2, DB2 Express � C ve WAS, WASCE, vb.
teknolojiler yer al�r.

    6. **Genel bilgiler**
>Bu alt b�l�mde, SRS belgesinin geri kalan k�sm�nda ne t�r bilgilerin yer ald�g� anlat�lmal� ve SRS
belgesinin nas�l d�zenlendigine iliskin a��klamalar bulunmal�d�r.

2. **Genel A��klama**
>SRS belgesinin bu b�l�m�nde SRS belgesine konu olan �r�n� ve bu �r�ne iliskin gereksinimleri etkileyen
genel etmenler tan�mlanmal�d�r.
Bu b�l�mde tek tek gereksinimler belirtilmez. Bunun yerine, s�z konusu gereksinimlere iliskin genel bir arka
plan bilgisi sunulur, b�ylece bu gereksinimlerin daha kolay bir bi�imde anlas�labilmesi saglan�r. S�z�
edilen gereksinimler, 3. b�l�mde ayr�nt�l� bir bi�imde tan�mlan�r. �Genel A��klama� b�l�m�nde �r�n�n
g�r�n�m�, �r�n�n islevleri, kullan�c�n�n �zellikleri, k�s�tlamalar, varsay�mlar ve bag�ml�l�klar ve
gereksinimlere iliskin alt k�meler gibi �gelere de yer verin.

    1. **Kullan�m Senaryosu Modeline iliskin inceleme**
>SRS belgesinin olusturulmas�nda kullan�m senaryosu modellemesi kullan�ld�ysa, bu b�l�mde, kullan�m
senaryosuna veya bu alt sistem ya da �zellik i�in uygulanabilen kullan�m senaryosu ile ilgili alt k�meye iliskin genel bilgiler yer al�r. S�z konusu genel bilgiler, bir ad listesini, t�m kullan�m senaryolar�na ve
etmenlere iliskin k�sa a��klamalar�, ge�erli semalar� ve iliskileri i�erir. Bu noktada, SRS belgesine ek bir
belge olarak kullan�labilecek olan kullan�m senaryosu modeline iliskin inceleme raporuna basvurun.

    2. **Mimari sema ve veritaban� tasar�m�**
>Bu b�l�mde, uygulama mimarisi seman�zdan ve veritaban� tasar�m� seman�zdan s�z edin

    3. **Varsay�mlar ve Bag�ml�l�klar**
>Bu b�l�mde,bu SRS belgesinde tan�t�lan yaz�l�m�n uygulanabilirligine temel olabilecek �nemli herhangi
bir teknik fizibilite incelemesine,alt sistemlerin ya da bilesenlerin kullan�labilirligine veya proje ile
baglant�l� olan diger varsay�mlara iliskin a��klamalar yer al�r.

3. **Belirli Gereksinimler**
>SRS belgesinin bu b�l�m�nde,tasar�mc�lar�n ilgili yaz�l�m gereksinimlerini kars�layan bir sistem
tasarlayabilmelerini ve test sorumlular�n�n s�z konusu sistemin ilgili yaz�l�m gereksinimlerini kars�lay�p
kars�lamad�g�n� test edebilmelerini saglayacak yaz�l�m gereksinimlerin tamam� yeterli d�zeyde
ayr�nt�land�r�larak saglanmal�d�r. Kullan�m senaryosu modelinin kullan�ld�g� durumlarda, s�z konusu
gereksinimler kullan�m senaryolar�nda ve ilgili ek belirtimlerde saglan�r. Kullan�m senaryosu modelinin
kullan�lmad�g� durumlarda, ek belirtimlerin yer ald�g� belgenin taslag� dogrudan bu b�l�me eklenebilir.

    1. **Kullan�m Senaryosu Raporlar�**
>Kullan�m senaryosu modellemesinde, kulan�m senaryolar�nda, �ogunlukla, herhangi bir islevi olmayan
birka� gereksinimin yan� s�ra sisteme iliskin islevsel gereksinimlerin b�y�k bir k�sm� da tan�mlan�r. Yukar�da
yer alan kullan�m senaryosu modelindeki her bir kulan�m senaryosu i�in ya da bu kullan�m senaryolar�n�n alt
k�meleri i�in bu b�l�mdeki kullan�m senaryosu raporuna basvurun ya da bu raporu SRS belgesine ekleyin.
T�m gereksinimlerin anlas�l�r bir bi�imde s�n�fland�r�ld�g�ndan emin olun.

    2. **Ek Gereksinimler**
>Ek Belirtimler belgesinde, kulan�m senaryolar�nda yer almayan gereksinimler bulunur. Ek Belirtimler
belgesinden al�nan ve bu alt sisteme ya da �zellige uygulanabilen belirli gereksinimler bu b�l�mde yer
almal�d�r. S�z konusu belirli gereksinimler, ilgili alt sistemin ya da �zelligin tan�mlanabilmesi i�in gerekli
olan ayr�nt�lar� i�erecek sekilde sadelestirilmelidir.
Bu belirtimleri dogrudan bu belgede saglayabilirsiniz ya da bu noktada SRS belgesine ek ayr� bir belge
olarak kullan�labilecek olan Ek Belirtimler belgesine basvurabilirsiniz. T�m gereksinimlerin anlas�l�r bir
bi�imde s�n�fland�r�ld�g�ndan emin olun.

4. **Yard�mc� Bilgiler**
>Saglanan yard�mc� bilgiler, SRS belgesinin kullan�m�n� kolaylast�r�r. Yard�mc� bilgiler b�l�m�nde sunlar
yer al�r: a) ��indekiler, b) Dizin, c) Ekler. Yard�mc� bilgiler, kullan�m senaryolar�na iliskin taslaklar� ya da
kullan�c�-arabirim �n �r�nlerini i�erebilir. Eklerin dahil edilmesi durumunda, s�z konusu eklerin SRS
belgesinde yer alan gereksinimlerin bir par�as� olarak kabul edilip edilmeyecegi SRS belgesinin i�inde a��k bir
bi�imde belirtilmelidir.

5. **Varsa Merak Edilenler / Sorular / Teredd�tler:**
>Bu b�l�me, projenize ya da kulland�g�n�z teknolojilere iliskin sorular�n�z� ve teredd�tlerinizi yazabilirsiniz.
Sorular�n�z yan�tlan�p tart�sma forumuna konulacakt�r. Herhangi bir proje ile ilgili olan sorular�n yan�tlar� tek
tek ekiplere g�nderilecektir.