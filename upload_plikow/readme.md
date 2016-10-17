
# PHP, wstęp do programowania &ndash; zadania

## Jak rozwiązywać zadania?

Wykonaj następujące kroki:

1. Żeby zacząć, stwórz tak zwany [**fork**][forking] repozytorium z zadaniami.
2. Następnie [**sklonuj**][ref-clone] repozytorium na swój komputer.
3. Rozwiąż zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
4. [**Wypchnij**][ref-push] zmiany na swoje repozytorium na GitHubie.
5. [Stwórz **pull request**][pull-request] do oryginalnego repozytorium, gdy skończysz zadania.

Zadania rozwiązuj w odpowiednich, przygotowanych plikach.

## Zadania

Niektóre zadania rozwiążesz razem z wykładowcą. Dzięki temu będzie Ci łatwiej zająć się następnymi.

### Część A &ndash; zadania do schematów blokowych (rozwiązywane grupowo na tablicy)

#### Zadanie A1
Narysuj schemat blokowy znajdujący najwyższą liczbę w 10-elementowej tablicy.

#### Zadanie A2
Narysuj schemat blokowy, który doda wszystkie elementy w 10-elementowej tablicy, a wynik wypisze na ekranie.

#### Zadanie A3
Narysuj schemat blokowy wypisujący wszystkie pozycje, na których w tablicy ```A[0, . . . , n-1] ``` znajduje się liczba **x**.


### Część B &ndash; zadania do wyrażeń warunkowych (rozwiązania wpisz w odpowiednie pliki)

#### Zadanie B1 &ndash; rozwiązywane z wykładowcą
Napisz skrypt definiujący trzy liczby: **a**, **b** i **c**. Skrypt ma sprawdzić, czy podane liczby mogą być bokami trójkąta.
Tę figurę geometryczną można zbudować z trzech linii tylko wtedy, gdy suma długości dwóch z nich jest większa niż długość trzeciej linii, czyli:

```JavaScript
a + b > c
c + b > a
a + c > b
```

W celu wypisania czegoś w konsoli &ndash; użyj następującej funkcji:  
```JavaScript
echo("Tekst, który pokaże się na stronie");
```

#### Zadanie B2
Napisz program definiujący jako zmienne trzy liczby całkowite.
Za pomocą instrukcji **if**, **else** wypisz na stronie największą z tych liczb.
Do porównywania liczb użyj operatorów:
```JavaScript
> (większy),  
>= (większy równy),  
< (mniejszy),  
<= (mniejszy równy).
```

#### Zadanie B3
Napisz program, który wystawi ocenę z testu (użyj **if**, **else if** i **else**).

0&ndash;39 pkt &ndash; ocena niedostateczna,  
40&ndash;54 pkt &ndash; ocena dopuszczająca,  
55&ndash;69 pkt &ndash; ocena dostateczna,  
70&ndash;84 pkt &ndash; ocena dobra,  
85&ndash;98 pkt &ndash; ocena bardzo dobra,  
99&ndash;100 pkt &ndash; ocena celująca.

### Część C &ndash; zadania do pętli (rozwiązania wpisz w odpowiednie pliki)

#### Zadanie C1 &ndash; rozwiązywane z wykładowcą
Napisz program liczący wartość **x!**, gdzie **!** oznacza silnię, a **x** jest zmienną.
Użyj do tego obu znanych Ci pętli.
Silnia to wynik mnożenia wszystkich liczb całkowitych od jeden do podanej liczby, czyli:

```JavaScript
5! = 1*2*3*4*5 = 120
8! = 1*2*3*4*5*6*7*8 = 40320
```

#### Zadanie C2
Napisz program liczący sumę wszystkich liczb w podanym przedziale od **x** do **y**.
Użyj do tego obu znanych Ci pętli.
Np. dla ```x = 5```, ```y = 10``` suma to ```5+6+7+8+9+10=45```.

#### Zadanie C3  
Napisz program, który na podstawie wartości zmiennej **n** wypisuje wszystkie liczby od zera do **n**.
Przy każdej liczbie program ma napisać, czy liczba jest parzysta czy nie. Np.:

```JavaScript
0 – parzysta
1 – nieparzysta
2 – parzysta
3 – nieparzysta
...
```

### Część D &ndash; zadania do pętli zagnieżdżonych (rozwiązania wpisz w odpowiednie pliki)

#### Zadanie D1 &ndash; rozwiązywane z wykładowcą
Napisz program rysujący na podstawie wartości zmiennej **n** następujący schemat (tutaj dla ```n = 5```):

```JavaScript
* * * * *
* * * * *
* * * * *
* * * * *
* * * * *
```
**Użyj pętli zagnieżdżonych**.


Jeżeli chcesz przełamać linię, wyświetl na stronie tag **br** (czyli  ```echo("<br>");```).

#### Zadanie D2 &ndash; rozwiązywane z wykładowcą
Napisz program rysujący na podstawie wartości zmiennej **n** następujący schemat (tutaj dla ```n = 5```).  Użyj dwóch pętli **for**.
```JavaScript
*
* *
* * *
* * * *
* * * * *
```
1. Rozwiąż to zadanie, używając pętli zależnych.
2. Rozwiąż to zadanie, używając pętli niezależnych i instrukcji warunkowej **if**.

#### Zadanie D3
Napisz program rysujący na podstawie wartości zmiennej **n** następujący schemat (tutaj dla ```n = 5```):

```JavaScript  
  *   *
*   *   *
  *   *  
*   *   *
  *   *   
```
Użyj do tego pętli zagnieżdżonych, a w wewnętrznej pętli dodaj **if** sprawdzający odpowiedni warunek (jeżeli ```i + j``` jest nieparzyste, to ma być gwiazdka).

#### Zadanie D4
Napisz program rysujący na podstawie wartości zmiennej **n** następujący schemat (tutaj dla ```n = 5```):

```JavaScript
* 2 3 4 5
* * 3 4 5
* * * 4 5
* * * * 5
* * * * *
* * * * *
* * * * 5
* * * 4 5
* * 3 4 5
* 2 3 4 5
```

Użyj pętli zagnieżdżonych, aby narysować pierwszą połowę rysunku. Potem dopisz drugą parę pętli zagnieżdżonych, która dorysuje resztę.


#### Zadanie D5
Napisz program tworzący tabliczkę mnożenia dla podanej zmiennej **n**. Na przykład dla ```n = 3``` wynik będzie następujący:


<table>
  <tr>
    <td>1 x 1 = 1</td>
    <td>1 x 2 = 2</td>
    <td>1 x 3 = 3</td>
  </tr>
  <tr>
    <td>2 x 1 = 2</td>
    <td>2 x 2 = 4</td>
    <td>2 x 3 = 6</td>
  </tr>
  <tr>
    <td>3 x 1 = 3</td>
    <td>3 x 2 = 6</td>
    <td>3 x 3 = 9</td>
  </tr>
</table>

Do mnożenia liczb użyj operatora *****. Do stworzenia tabelki użyj tagów HTML: (```<table> <tr> <td>```).

### Część E &ndash; zadania do funkcji (rozwiązania wpisz w odpowiednie pliki)


Pamiętaj o tym, że z funkcji zwracasz wartosć dzięki użyciu słowa kluczowego **return**.

#### Zadanie E1 &ndash; rozwiązywane z wykładowcą
Napisz funkcję o nazwie ```FooBar``` przyjmującą jedną zmienną (liczbę całkowitą). Funkcja ta ma wypisywać kolejne liczby, ale:
* w miejsce liczb podzielnych przez 3 wypisywać ```Foo```,
* w miejsce liczb podzielnych przez 5 wypisywać ```Bar```,
* w miejsce liczb podzielnych przez 3 i 5 wypisywać ```FOOBAR```.

Na przykład dla argumentu ```x = 15``` wynik ma być następujący:
```
12Foo4BarFoo78FooBar11Foo1314FOOBAR
```
#### Zadanie E2 &ndash; rozwiązywane z wykładowcą
Napisz funkcję przyjmującą dwie liczby jako argumenty: **a** i **n**. Funkcja zwraca wynik **a** do potęgi **n**.
Użyj pętli a nie funkcji wbudowanej ```pow()```.

#### Zadanie E3
Napisz funkcję, która przyjmuje jako argument liczbę **n** i wyświetla **n** razy na stronie napis "Programowanie w PHP jest fajne!".

#### Zadanie E4
Napisz funkcję, która przyjmuje trzy liczby i zwraca największą z nich (zwraca, a nie wypisuje na ekranie).

#### Zadanie E5 &ndash; podsumowanie
 Zamień następujące zadania na funkcje:
 * B2, B3,
 * wszystkie z części C i D.

Pamiętaj o przyjmowaniu odpowiednich argumentów przez funkcje i zwracaniu wartości. Funkcje dla zadań B2, C1 i C2 powinny zwracać wartość wyliczoną w środku funkcji.

## Praca domowa
Dokończ i powtórz wszystkie zadania, które zrobiłeś na zajęciach.

## Część F &ndash; zadania dla chętnych
Poniżej znajdują się dodatkowe, trochę trudniejsze zadania. Zachęcam, abyś przynajmniej zastanowił się nad ich rozwiązaniem.

#### Zadanie F1
Napisz funkcję sprawdzającą, czy podana liczba jest liczbą pierwszą (czyli podzielną przez jeden i samą siebie). Funkcja ma zwracać wartość ```true``` albo ```false (boolean)```.
Zastosuj algorytm **brute force**. Jest to najprostsza &ndash; a zarazem najbardziej czasochłonna metoda &ndash; wyznaczania liczb pierwszych. Działanie algorytmu opiera się na sprawdzeniu wszystkich potencjalnych dzielników danej liczby &ndash; jeżeli dana liczba nie dzieli się przez żadną inną liczbę (oprócz jeden i samej siebie), to jest ona oznaczana jako pierwsza.
W celu optymalizacji algorytmu sprawdza się wszystkie potencjalne dzielniki nie większe niż pierwiastek z samej sprawdzanej liczby.  Większe wartości nie mogą by3 już dzielnikami.
W celu otrzymania reszty z dzielenia użyj operatora **%** (modulo), np.

```
12 % 5 = 2
```
#### Zadanie F2
Napisz funkcję losującą liczbę z zakresu **0&ndash;20**, aż nie wybierze liczby **10**. Jeśli funkcja wylosowała:
* złą liczbę (inną niż **10**), to ma wypisać „Zła liczba”.
* liczbę **10**, to ma wypisać „Dobra liczba”.
Funkcja ma zwracać liczbę przeprowadzonych losowań.

Do losowania liczb użyj funkcji [**rand**][ref-rand].

#### Zadanie F3
Napisz program, który zwraca wartość liczby **Pi**. Użyj następującej formuły:
```JavaScript
pi = 4 * ((1/1 - 1/3) + (1/5 - 1/7) + (1/9 - 1/11) + ...)
```
Zobacz, jak zmienia się precyzja wyniku w zależności od liczby iteracji pętli.

#### Zadanie F4
Liczba doskonała to taka liczba, która jest sumą wszystkich swoich dzielników. Jest to np. 6:
```JavaScript
6 = 3 + 2 + 1
```

Liczba niekompletna to taka liczba, która jest większa od sumy wszystkich swoich dzielników. Jest to np. 10:
```JavaScript
1+2+5=8 < 10
```

Napisz program, który wypisze wszystkie liczby do wcześniej zdefiniowanej liczby ```x```. Określi przy tym, czy jest to liczba doskonała, niekompletna czy żadna z nich.


#### Zadanie F5
Napisz funkcję ```mySin(x, iterNum)``` i ```myCos(x, iterNum)```, która zwraca aproksymacje funkcji ```sinus``` i ```cosinus```, użyj następujących wzorów:
```JavaScript

sin(x) = (x^1)/1! - (x^3)/3! + (x^5)/5! - (x^7)/7! + (x^9)/9! - (x^11)/11! + ...
cos(x) = (x^0)/0! - (x^2)/2! + (x^4)/4! - (x^6)/6! + (x^8)/8! - (x^10)/10! + ...
```
Pamiętaj, że ```0! = 1```.
Najpierw napisz funkcję do wyliczania silni, potem do wyliczania potęgi, a na koniec połącz je w całość.

<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[ref-rand]: http://php.net/manual/pl/function.rand.php
[pull-request]: https://help.github.com/articles/creating-a-pull-request
