# PHP - TDD - Æwiczenia 

## Jak rozwi¹zywaæ zadania?

¯eby rozwi¹zaæ zadania musisz wykonaæ nastêpuj¹ce kroki:

1. ¯eby zacz¹æ, stwórz tak zwany [**fork**][forking] repozytorium z zadaniami.
1. Nastêpnie [**sklonuj**][ref-clone] repozytorium na swój komputer.
1. Rozwi¹¿ zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
1. [**Wypchnij**][ref-push] zmiany na swoje repozytorium na GitHubie.
1. [Stwórz **pull request**][pull-request] do oryginalnego repozytorium kiedy skoñczysz wszystkie æwiczenia.


Ka¿de zadanie powinno byæ rozwi¹zane w swoim folderze. 

## Æwiczenia do zrobienia z wyk³adowc¹

### Æwiczenie 1 - Zamiana liczb na napisy
Napisz funkcjê która zamieni liczbê na zapis s³owny tej liczby. Np. 15143 zamieni na „piêtnaœcie tysiêcy sto czterdzieœci trzy”. Liczby maj¹ byæ w zakresie do miliona (ale bez miliona).
Napisz testy do tej funkcji.

### Æwiczenie 2 - Krêgle
Napisz funkcjiê ```bowlingScore(scoreArray)``` która podlicza iloœæ punktów w zale¿noœci od iloœci zbitych krêcgli. Funkcja powinna przyjmowaæ tablicê z 10-cioma liczbami ca³kowitymi, które reprezentuj¹ iloœæ zbitych krêgli w poszczególnych rzutach. 
Iloœæ punktów to zazwyczaj suma zbitych krêgli. Jednak je¿eli ktoœ zbije wszystkie krêgle (strike) podczas jednego rzutu to podliczanie punktów siê zmienia:
  1. Iloœæ punktów za strike to 10 + iloœæ punktów nastêpnego rzutu + ilosæ punktów rzutu 3go 
  2. Iloœæ punktów z rzutu po strike równa siê: iloœæ punktów tego rzutu + iloœæ punktów z nastepnego rzutu.

Wiêcej informacji mo¿ecie znaleŸæ tutaj: https://en.wikipedia.org/wiki/Ten-pin_bowling#Scoring

Napiszcie funkcjiê i nastepuj¹ce test-casy do niej:
  1. Wszystkie rzuty zbi³y 0 krêgli - suma punktów powinna byæ 0,
  2. Wszystkie rzuty zbijaj¹ po jednym krêglu - suma punktów powinna byæ 10,
  3. Spare w pierwsym rzucie, nastepnie 3 zbite a potem wszystkie pud³a - suma punktów powinna byæ 16,
  4. Spare w pierwszym rzucie, nastepnie 3 zbite krêgle, nastêpnie 4 zbite krêgle a potem wszystkie pud³a - suma punktów powinna byæ 24
  5. Gra perfekcyjna (wszystkie rzuty to 10).

### Æwiczenie 3 - Klasa User
Napisz klasê User. Klasa ma implementowaæ nastepuj¹ce funkcjonalnoœci:
  1. Rejestracje u¿ytkownika.
  2. Logowanie,
  3. Edycjê danych (³¹cznie z mian¹ has³a)
  4. Wczytanie i zapamiêtanie do bazy danych.
  
Napisz to zadanie u¿ywaj¹c w pe³ni metodologii TDD. Pamiêtaj o testowaniu danych wczytanych z fikstur. 

## Æwiczenia samodzielne

### Æwiczenie 1 - FizzBuzz
Napisz znan¹ ju¿ wam funkcje który przyjmuje liczbê ca³kowit¹ a napis stworzony z liczb od 1 do podanej liczby zamieniaj¹c:
  1. Liczby podzielne przez 3 na Fizz,
  2. Liczby podzielne przez 5 na Buzz,
  3. Liczby podzielne przez 3 i 5 na BuzzFizz.
  
Napisz testy do tej funkcji.

### Æwiczenie 2 - Rok Przestêpny
Napisz funkcjê która przyjmuje liczbê ca³kowit¹ (oznaczaj¹c¹ rok) i zwraca true je¿eli rok jest przestêpny, false je¿eli nie.
Napisz testy do tej funkcji.

### Æwiczenie 3 - Word wrap
Napisz funkcjiê ```wordWrap($string, $length)``` której zadaniem jest skróciæ napis do podanej d³ugoœci (dodaj¹c na koñcu ```...```). Funkcja ma dzia³aæ w taki sposób ¿eby ¿adne s³owo nigdy nie zosta³o przeciête.
Napisz testy do tej funkcji.

### Æwiczenie 4 - PrimeFactors
Napisz klasê która bêdzie mia³a jedn¹ statyczn¹ metode ```generatePrimeFactors(n)``` która wygeneruje wszystkie dzielniki podanej liczby ```n``` w kolejnoœci numerycznej (od najmniejszego). 
Napisz to zadanie u¿ywaj¹c w pe³ni metodologii TDD.

### Æwiczenie 5 - Testowanie gotowego kodu
W katalogu znajduje siê skompresowany kod - zapoznaj siê z nim. Jest to obiektowe rozwi¹zanie warsztatów. Napisz testy do tego kodu i odnajdŸ b³êdy.

### Æwiczenie 6 - Ankiety
Napisz prosty system do tworzenia ankiet (chodzi tylko o backend – nie piszemy widoków). System ma byæ napisany w pe³ni obiektowo wed³ug podanych za³o¿eñ:

Ankieta:
  1. Ma posiadaæ w³asn¹ nazwê, unikatowy link.
  2. Ma implementowaæ metody: zwracaj¹c¹ pytañ dla danej ankiety, zwracanie nazwy, zmiana nazwy, zapisanie zmian do bazy danych.
  3. Ma implementowaæ statyczne metody: stworzenie nowej ankiety, wczytanie ankiety o podanym id z bazy danych, usuniêcie ankiety o podanym id z bazy danych.

Pytanie:
  1. Ma posiadaæ tekst pytania.
  2. Ma implementowaæ metody: zwracaj¹c¹ wszystkie udzielone odpowiedzi na to pytanie, zmieniaj¹ce tekst pytania, zwracaj¹ce tekst pytania, zapamiêtuj¹ce pytanie do bazy danych.
  3. Ma implementowaæ statyczne metody: stworzenie nowego pytania (potrzebuje podania id ankiety), wczytanie pytania o podanym id z bazy danych, usuniêcie pytania o podanym id z bazy danych.

Odpowiedz:
  1. Ma posiadaæ tekst odpowiedzi.
  2. Ma implementowaæ metody: zmieniaj¹ce tekst odpowiedzi, zwracaj¹ce tekst odpowiedzi, zapamiêtuj¹ce odpowiedŸ do bazy danych.
  3. Ma implementowaæ statyczne metody: stworzenie nowej odpowiedzi (potrzebuje podania id pytania), wczytanie odpowiedzi o podanym id z bazy danych, usuniêcie odpowiedzi o podanym id z bazy danych.

Testy maj¹ byæ pisane z u¿yciem ³adowania odpowiednych fikstur do baz danych, maj¹ byæ utworzone 4 grupy testowe: po jednej na ka¿d¹ klasê i jedna testuj¹ca wszystko.