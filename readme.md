# PHP - TDD - �wiczenia 

## Jak rozwi�zywa� zadania?

�eby rozwi�za� zadania musisz wykona� nast�puj�ce kroki:

1. �eby zacz��, stw�rz tak zwany [**fork**][forking] repozytorium z zadaniami.
1. Nast�pnie [**sklonuj**][ref-clone] repozytorium na sw�j komputer.
1. Rozwi�� zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
1. [**Wypchnij**][ref-push] zmiany na swoje repozytorium na GitHubie.
1. [Stw�rz **pull request**][pull-request] do oryginalnego repozytorium kiedy sko�czysz wszystkie �wiczenia.


Ka�de zadanie powinno by� rozwi�zane w swoim folderze. 

## �wiczenia do zrobienia z wyk�adowc�

### �wiczenie 1 - Zamiana liczb na napisy
Napisz funkcj� kt�ra zamieni liczb� na zapis s�owny tej liczby. Np. 15143 zamieni na �pi�tna�cie tysi�cy sto czterdzie�ci trzy�. Liczby maj� by� w zakresie do miliona (ale bez miliona).
Napisz testy do tej funkcji.

### �wiczenie 2 - Kr�gle
Napisz funkcji� ```bowlingScore(scoreArray)``` kt�ra podlicza ilo�� punkt�w w zale�no�ci od ilo�ci zbitych kr�cgli. Funkcja powinna przyjmowa� tablic� z 10-cioma liczbami ca�kowitymi, kt�re reprezentuj� ilo�� zbitych kr�gli w poszczeg�lnych rzutach. 
Ilo�� punkt�w to zazwyczaj suma zbitych kr�gli. Jednak je�eli kto� zbije wszystkie kr�gle (strike) podczas jednego rzutu to podliczanie punkt�w si� zmienia:
  1. Ilo�� punkt�w za strike to 10 + ilo�� punkt�w nast�pnego rzutu + ilos� punkt�w rzutu 3go 
  2. Ilo�� punkt�w z rzutu po strike r�wna si�: ilo�� punkt�w tego rzutu + ilo�� punkt�w z nastepnego rzutu.

Wi�cej informacji mo�ecie znale�� tutaj: https://en.wikipedia.org/wiki/Ten-pin_bowling#Scoring

Napiszcie funkcji� i nastepuj�ce test-casy do niej:
  1. Wszystkie rzuty zbi�y 0 kr�gli - suma punkt�w powinna by� 0,
  2. Wszystkie rzuty zbijaj� po jednym kr�glu - suma punkt�w powinna by� 10,
  3. Spare w pierwsym rzucie, nastepnie 3 zbite a potem wszystkie pud�a - suma punkt�w powinna by� 16,
  4. Spare w pierwszym rzucie, nastepnie 3 zbite kr�gle, nast�pnie 4 zbite kr�gle a potem wszystkie pud�a - suma punkt�w powinna by� 24
  5. Gra perfekcyjna (wszystkie rzuty to 10).

### �wiczenie 3 - Klasa User
Napisz klas� User. Klasa ma implementowa� nastepuj�ce funkcjonalno�ci:
  1. Rejestracje u�ytkownika.
  2. Logowanie,
  3. Edycj� danych (��cznie z mian� has�a)
  4. Wczytanie i zapami�tanie do bazy danych.
  
Napisz to zadanie u�ywaj�c w pe�ni metodologii TDD. Pami�taj o testowaniu danych wczytanych z fikstur. 

## �wiczenia samodzielne

### �wiczenie 1 - FizzBuzz
Napisz znan� ju� wam funkcje kt�ry przyjmuje liczb� ca�kowit� a napis stworzony z liczb od 1 do podanej liczby zamieniaj�c:
  1. Liczby podzielne przez 3 na Fizz,
  2. Liczby podzielne przez 5 na Buzz,
  3. Liczby podzielne przez 3 i 5 na BuzzFizz.
  
Napisz testy do tej funkcji.

### �wiczenie 2 - Rok Przest�pny
Napisz funkcj� kt�ra przyjmuje liczb� ca�kowit� (oznaczaj�c� rok) i zwraca true je�eli rok jest przest�pny, false je�eli nie.
Napisz testy do tej funkcji.

### �wiczenie 3 - Word wrap
Napisz funkcji� ```wordWrap($string, $length)``` kt�rej zadaniem jest skr�ci� napis do podanej d�ugo�ci (dodaj�c na ko�cu ```...```). Funkcja ma dzia�a� w taki spos�b �eby �adne s�owo nigdy nie zosta�o przeci�te.
Napisz testy do tej funkcji.

### �wiczenie 4 - PrimeFactors
Napisz klas� kt�ra b�dzie mia�a jedn� statyczn� metode ```generatePrimeFactors(n)``` kt�ra wygeneruje wszystkie dzielniki podanej liczby ```n``` w kolejno�ci numerycznej (od najmniejszego). 
Napisz to zadanie u�ywaj�c w pe�ni metodologii TDD.

### �wiczenie 5 - Testowanie gotowego kodu
W katalogu znajduje si� skompresowany kod - zapoznaj si� z nim. Jest to obiektowe rozwi�zanie warsztat�w. Napisz testy do tego kodu i odnajd� b��dy.

### �wiczenie 6 - Ankiety
Napisz prosty system do tworzenia ankiet (chodzi tylko o backend � nie piszemy widok�w). System ma by� napisany w pe�ni obiektowo wed�ug podanych za�o�e�:

Ankieta:
  1. Ma posiada� w�asn� nazw�, unikatowy link.
  2. Ma implementowa� metody: zwracaj�c� pyta� dla danej ankiety, zwracanie nazwy, zmiana nazwy, zapisanie zmian do bazy danych.
  3. Ma implementowa� statyczne metody: stworzenie nowej ankiety, wczytanie ankiety o podanym id z bazy danych, usuni�cie ankiety o podanym id z bazy danych.

Pytanie:
  1. Ma posiada� tekst pytania.
  2. Ma implementowa� metody: zwracaj�c� wszystkie udzielone odpowiedzi na to pytanie, zmieniaj�ce tekst pytania, zwracaj�ce tekst pytania, zapami�tuj�ce pytanie do bazy danych.
  3. Ma implementowa� statyczne metody: stworzenie nowego pytania (potrzebuje podania id ankiety), wczytanie pytania o podanym id z bazy danych, usuni�cie pytania o podanym id z bazy danych.

Odpowiedz:
  1. Ma posiada� tekst odpowiedzi.
  2. Ma implementowa� metody: zmieniaj�ce tekst odpowiedzi, zwracaj�ce tekst odpowiedzi, zapami�tuj�ce odpowied� do bazy danych.
  3. Ma implementowa� statyczne metody: stworzenie nowej odpowiedzi (potrzebuje podania id pytania), wczytanie odpowiedzi o podanym id z bazy danych, usuni�cie odpowiedzi o podanym id z bazy danych.

Testy maj� by� pisane z u�yciem �adowania odpowiednych fikstur do baz danych, maj� by� utworzone 4 grupy testowe: po jednej na ka�d� klas� i jedna testuj�ca wszystko.