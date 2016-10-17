<?php
//phpinfo();
//header ("Content-type: text/html");
//header("Location: http://www.google.com/");
//exit;
//if (isset($_FILES['fileToUpload'])) {
//    var_dump($_FILES);
//}
//    $uploaddir = '/home/wojtek/Workspace/PhpUNIT/TDD/upload_plikow/';
//    $uploadfile = $uploaddir . basename($_FILES['fileToUpload']['name']);
//    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadfile) ) {
//        echo ("File is valid, and was sucessfully uploaded.\n");
//    } else {
//        echo ("possible file upload problem\n");
//    }
//    
//}
//pliki
//$plik_sciezka = "plik.txt";
//
//$wskaznik = fopen($plik_sciezka, 'r');
//var_dump( fstat($wskaznik) );
//wskaznik do pliku
//$handle = fopen($plik_sciezka, "r");
//odczyt calego pliku
//$contents = fread($handle, filesize($plik_sciezka));
//$zawartosc_pliku = file($plik_sciezka);
//var_dump($zawartosc_pliku);
//$plik = fopen("nowy_pik.txt", "w");
//$dlugosc = fwrite($plik, "Nowa zawartosc pliku");
//print "Zapisano plik o dlugosci $dlugosc";
//fclose($plik);
//$zawartosc = file_get_contents($plik_sciezka);
//var_dump($zawartosc);
//file_put_contents('plik3.txt', $zawartosc . "\nNowa czwarta linijka");
//exit;
//
//<!--<html>
//    <h2>Formularz upload pliku</h2>
//    <form action="22wrzesienphp.php" method="post" enctype="multipart/form-data">
//        
//        <input type="file" name="fileToUpload[]" id="fileToUpload" /><br/>
//        <input type="file" name="fileToUpload[]" id="fileToUpload" /><br/>
//        <input type="file" name="fileToUpload[]" id="fileToUpload" />
//        
//        <input type="submit" value="Upload" name="submit" />
//         
//    </form> 
//    
//</html>-->
//function inverse($x) { //zadanie1 pliki w php -zawansowayny php
//
//    if (!$x) {
//
//        throw new Exception('Division by zero.');
//    } else {
//        return 1 / $x;
//}
//}
//try {
//    inverse(0);
//} catch (Exception $e) {
//    print "komunikat bledy: " . $e->getMessage() . "<br/>";
//    print "nazwa pliku: " . $e->getFile() . "<br/>";
//    print "numer linii w pliku: " . $e->getLine() . "<br/>";
//
//} finally {
//    print "zawsze sie wykonam";
//}

if (
        filter_has_var(INPUT_GET, 'email') &&
        filter_has_var(INPUT_GET, 'url') &&
        filter_has_var(INPUT_GET, 'adresip')) { 
    print "mamy wszystkie wymagane wartosci";

    if (filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
        print "<br/>W zmiennej email mamy poprawny adres email";
    } else {
        print "<br/>niepoprawny adres email";
    }
    if (filter_var($_GET['url'], FILTER_VALIDATE_URL)) {
        print "<br/>W zmiennej url mamy poprawny adres url";
    } else {
        print "<br/>niepoprawny adres url";
    }


    if (filter_var($_GET['adresip'], FILTER_VALIDATE_IP)) {
        print "<br/>W zmiennej url mamy poprawny adres adresip";
    } else {
        print "<br/>niepoprawny adres adresip";
    }
} else {
    print "nie mamy wszystkich wymaganych wartosci";
}
?>

<html>
    <h2>Formularz testujacy filtry</h2>
    <form>
        Adres email:<input type="text" name="email"/><br/>
        Adres url:<input type="text" name="url"/><br/>
        Adres ip:<input type="text" name="adresip"/><br/>
        <input type="submit" />
    </form>



    <!--    <form action="22wrzesienphp.php" method="post" enctype="multipart/form-data">
            
            <input type="file" name="fileToUpload[]" id="fileToUpload" /><br/>
            <input type="file" name="fileToUpload[]" id="fileToUpload" /><br/>
            <input type="file" name="fileToUpload[]" id="fileToUpload" />
            
            <input type="submit" value="Upload" name="submit" />
             
        </form> -->

</html>