# PHP - TDD - Ćwiczenia 

## Jak rozwiązywać zadania?

Żeby rozwiązać zadania musisz wykonać następujące kroki:

1. Żeby zacząć, stwórz tak zwany [**fork**][forking] repozytorium z zadaniami.
1. Następnie [**sklonuj**][ref-clone] repozytorium na swój komputer.
1. Rozwiąż zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
1. [**Wypchnij**][ref-push] zmiany na swoje repozytorium na GitHubie.
1. [Stwórz **pull request**][pull-request] do oryginalnego repozytorium kiedy skończysz wszystkie ćwiczenia.


Każde zadanie powinno być rozwiązane w swoim folderze. 

## Ćwiczenia do zrobienia z wykładowcą

### Ćwiczenie 1 - Zamiana liczb na napisy
Napisz funkcję która zamieni liczbę na zapis słowny tej liczby. Np. 15143 zamieni na „piętnaście tysięcy sto czterdzieści trzy”. Liczby mają być w zakresie do miliona (ale bez miliona).
Napisz testy do tej funkcji.

### Ćwiczenie 2 - Kręgle
Napisz funkcjię ```bowlingScore(scoreArray)``` która podlicza ilość punktów w zależności od ilości zbitych kręcgli. Funkcja powinna przyjmować tablicę z 10-cioma liczbami całkowitymi, które reprezentują ilość zbitych kręgli w poszczególnych rzutach. 
Ilość punktów to zazwyczaj suma zbitych kręgli. Jednak jeżeli ktoś zbije wszystkie kręgle (strike) podczas jednego rzutu to podliczanie punktów się zmienia:
  1. Ilość punktów za strike to 10 + ilość punktów następnego rzutu + ilosć punktów rzutu 3go 
  2. Ilość punktów z rzutu po strike równa się: ilość punktów tego rzutu + ilość punktów z nastepnego rzutu.

Czyli:
Zakadajc że gracz w pierwszym rzucie trafi strike, w drugim trafi 5 kręgli a w trzecim trafi 7 kręgli punktacja bdziewygldać tak:
  1. Pierwszy rzut: 10 + 5 + 7 = 22 ptk
  2. Drugi rzut: 5 + 7 = 12 ptk
  3. Trzeci rzut 5 ptk
Czyli suma punktów po 3 rzutach bdzie równa 39 ptk.

Więcej informacji możecie znaleźć tutaj: https://en.wikipedia.org/wiki/Ten-pin_bowling#Scoring

Napiszcie funkcjię i nastepujące test-casy do niej:
  1. Wszystkie rzuty zbiły 0 kręgli - suma punktów powinna być 0,
  2. Wszystkie rzuty zbijają po jednym kręglu - suma punktów powinna być 10,
  3. Strike w pierwszym rzucie, nastepnie 3 zbite a potem wszystkie pudła - suma punktów powinna być 16,
  4. Strike w pierwszym rzucie, nastepnie 3 zbite kręgle, następnie 4 zbite kręgle a potem wszystkie pudła - suma punktów powinna być 24
  5. Gra perfekcyjna (wszystkie rzuty to 10).

### Ćwiczenie 3 - Klasa User
Napisz klasę User. Klasa ma implementować nastepujące funkcjonalności:
  1. Rejestracje użytkownika.
  2. Logowanie,
  3. Edycję danych (łącznie z mianą hasła)
  4. Wczytanie i zapamiętanie do bazy danych.
  
Napisz to zadanie używając w pełni metodologii TDD. Pamiętaj o testowaniu danych wczytanych z fikstur. 

## Ćwiczenia samodzielne

### Ćwiczenie 1 - FizzBuzz
Napisz znaną już wam funkcje który przyjmuje liczbę całkowitą a napis stworzony z liczb od 1 do podanej liczby zamieniając:
  1. Liczby podzielne przez 3 na Fizz,
  2. Liczby podzielne przez 5 na Buzz,
  3. Liczby podzielne przez 3 i 5 na BuzzFizz.
  
Napisz testy do tej funkcji.

### Ćwiczenie 2 - Rok Przestępny
Napisz funkcję która przyjmuje liczbę całkowitą (oznaczającą rok) i zwraca true jeżeli rok jest przestępny, false jeżeli nie.
Napisz testy do tej funkcji.

### Ćwiczenie 3 - Word wrap
Napisz funkcjię ```wordWrap($string, $length)``` której zadaniem jest skrócić napis do podanej długości (dodając na końcu ```...```). Funkcja ma działać w taki sposób żeby żadne słowo nigdy nie zostało przecięte.
Napisz testy do tej funkcji.

### Ćwiczenie 4 - PrimeFactors
Napisz klasę która będzie miała jedną statyczną metode ```generatePrimeFactors(n)``` która wygeneruje wszystkie dzielniki podanej liczby ```n``` w kolejności numerycznej (od najmniejszego). 
Napisz to zadanie używając w pełni metodologii TDD.

### Ćwiczenie 5 - Testowanie gotowego kodu
W katalogu znajduje się skompresowany kod - zapoznaj się z nim. Jest to obiektowe rozwiązanie warsztatów. Napisz testy do tego kodu i odnajdź błędy.

### Ćwiczenie 6 - Ankiety
Napisz prosty system do tworzenia ankiet (chodzi tylko o backend – nie piszemy widoków). System ma być napisany w pełni obiektowo według podanych założeń:

Ankieta:
  1. Ma posiadać własną nazwę, unikatowy link.
  2. Ma implementować metody: zwracającą pytań dla danej ankiety, zwracanie nazwy, zmiana nazwy, zapisanie zmian do bazy danych.
  3. Ma implementować statyczne metody: stworzenie nowej ankiety, wczytanie ankiety o podanym id z bazy danych, usunięcie ankiety o podanym id z bazy danych.

Pytanie:
  1. Ma posiadać tekst pytania.
  2. Ma implementować metody: zwracającą wszystkie udzielone odpowiedzi na to pytanie, zmieniające tekst pytania, zwracające tekst pytania, zapamiętujące pytanie do bazy danych.
  3. Ma implementować statyczne metody: stworzenie nowego pytania (potrzebuje podania id ankiety), wczytanie pytania o podanym id z bazy danych, usunięcie pytania o podanym id z bazy danych.

Odpowiedz:
  1. Ma posiadać tekst odpowiedzi.
  2. Ma implementować metody: zmieniające tekst odpowiedzi, zwracające tekst odpowiedzi, zapamiętujące odpowiedź do bazy danych.
  3. Ma implementować statyczne metody: stworzenie nowej odpowiedzi (potrzebuje podania id pytania), wczytanie odpowiedzi o podanym id z bazy danych, usunięcie odpowiedzi o podanym id z bazy danych.

Testy mają być pisane z użyciem ładowania odpowiednych fikstur do baz danych, mają być utworzone 4 grupy testowe: po jednej na każdą klasę i jedna testująca wszystko.


<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request
