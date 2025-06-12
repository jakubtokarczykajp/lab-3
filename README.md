# 📦 Zadanie: Użycie menadżera pakietów Composer w Laravel (na przykładzie mPDF)

## 🎯 Cel zadania
Celem zadania jest zrozumienie i praktyczne zastosowanie menadżera pakietów Composer w projekcie opartym o Laravel, z dodatkową integracją biblioteki mPDF służącej do generowania plików PDF.

## 🔧 Narzędzia użyte w projekcie
| Narzędzie  | Opis |
|------------|------|
| Composer   | Menadżer pakietów PHP do zarządzania bibliotekami i zależnościami. |
| Laravel    | Framework PHP zgodny z architekturą MVC. |
| mPDF       | Biblioteka PHP do generowania dokumentów PDF z HTML i CSS. |

## 📥 Instalacja i konfiguracja

### Laravel
Projekt Laravel można utworzyć za pomocą polecenia:
```bash
composer create-project laravel/laravel myApp
```

### Dodanie mPDF do projektu
Zainstaluj bibliotekę mPDF:
```bash
composer require mpdf/mpdf
```

## 🧪 Przykład użycia mPDF w kontrolerze Laravel
```php
use Mpdf\Mpdf;

public function generatePdf()
{
    $mpdf = new Mpdf();
    $mpdf->WriteHTML('<h1>Przykładowy PDF</h1>');
    return response($mpdf->Output('', 'S'))->header('Content-Type', 'application/pdf');
}
```

## ⚙️ Jak działa Composer?
Główne pliki: `composer.json`, `composer.lock`, oraz katalog `vendor/`.

Plik `autoload.php` umożliwia automatyczne ładowanie klas (autoloader).

W Laravelu autoloading działa automatycznie — wystarczy zainstalować bibliotekę przez Composer.

## 🌍 Inne menadżery pakietów
| Menadżer  | Język   | Opis |
|-----------|--------|------|
| npm       | JavaScript | Zarządzanie pakietami dla Node.js i front-endu |
| pip       | Python     | Instalacja bibliotek Pythona |
| NuGet     | .NET/C#    | Oficjalny menadżer pakietów dla platformy .NET |
| RubyGems  | Ruby       | System pakietów dla Ruby |

## 🚀 Wdrożenie aplikacji

### 🔒 Serwer z dostępem do terminala (np. VPS)
Skopiuj projekt na serwer.

W katalogu projektu uruchom:
```bash
composer install
cp .env.example .env
php artisan key:generate
```
Skonfiguruj plik `.env`.

Ustaw uprawnienia do folderów `storage/` i `bootstrap/cache/`.

Uruchom aplikację (np. `php artisan serve` lub konfiguracja Apache/Nginx).

### 🖼 Hosting współdzielony (bez terminala)
1. Wykonaj `composer install` lokalnie.
2. Wygeneruj `.env` i klucz aplikacji.
3. Prześlij cały projekt (wraz z `vendor/`) na serwer.
4. Ustaw `public/` jako katalog startowy.
```
