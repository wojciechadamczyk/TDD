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
Napisz funkcję która zamieni liczbę na zapis słowny tej liczby. Np. 143 zamieni na „sto czterdzieści trzy”. Liczby mają być w zakresie do tysiąca (ale bez tysiąca).
Napisz testy do tej funkcji.

### Ćwiczenie 2 - Kręgle
Zadaniem jest napisanie klasy o nazwie ```BowlingGame``` która ma służyć do podliczania wyników w grze w kręgle. Klasa ma mieć co najmniej dwie funkcjie:
  1. ```roll(pins)``` - funkcja która jest używana za każdym razem kiedy gracz rzuca,
  2. ```score()``` - funkcja która zwraca ilość punktów uzyskanych do tej pory.
  
Zadady jakie muszą być spełnione:
  1. Gra w kręgle składa się z 10 ramek. Każda ramka składa się z dwóch rzutów w których można uzyskać maksymalnie 10 punktów (tyle ile jest kręgli na torze). Ilość punktów z ramki to ilośc zbitych kręgli + bonusy za strike i spare,
  2. Spare - jest to przypadek w którym gracz zbija wszystkie 10 kręgli w dwóch rzutach nalerzących do jednej ramki. Wtedy do punktów z tej ramki są doliczne punkty z następnego rzutu (pierwszego rzutu następnej ramki). Np: W pierwszej ramce gracz rzucił 6 i 4. W kolejnej ramce rzucił 3 i 5. Punktacja za pierwszą ramkę to 13 (6 + 4 + 3), punktacja za drugą ramkę to 8.
  3. Strike - jest to przypadek w którym gracz zbija wszystkie kręgle za pierwszym rzutem nalerzącym do ramki (nie ma drugiego rzutu w tej ramce). W takim przypadku to wyniku z tej ramki dodawane są punkty z kolejnych dwóch rzutów. Np: W pierwszej ramce gracz rzucił 10. W kolejnej ramce rzucił 3 i 5. Punktacja za pierwszą ramkę to 17 (10 + 3 + 5), punktacja za drugą ramkę to 8.
  4. Jeżeli w ostatniej ramce gracz wyrzucił strike albo spare to przysługują mu dodatkowe rzuty (ale nie więcej niż 3).
  
Dla upewnienia się jak powinien działać taki program możecie zajrzeć tutaj: http://www.bowlinggenius.com/

Przed napisaniem klasy najpierw stwórz następujące test-casy:
  1. Wszystkie rzuty zbiły 0 kręgli - suma punktów powinna być 0,
  2. Wszystkie rzuty zbijają po jednym kręglu - suma punktów powinna być 10,
  3. Strike w pierwszym rzucie, nastepnie 3 zbite a potem wszystkie pudła - suma punktów powinna być 16,
  4. Strike w pierwszym rzucie, nastepnie 3 zbite kręgle, następnie 4 zbite kręgle a potem wszystkie pudła - suma punktów powinna być 24,
  5. Spare w pierwszej ramce (obojętkie jak zdobyty), potem w nastepnym rzucie 4, następnie 3 i reszta same pudła. Suma punktów powinna wynosić 21.
  6. Gra perfekcyjna (10 x strike).

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
