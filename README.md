# PHP MVC Framework Demo

Przykładowy framework PHP oparty na wzorcu projektowym Model-View-Controller (MVC).

## O projekcie

Ten projekt to demonstracyjna implementacja frameworku PHP opartego na wzorcu MVC. Zawiera podstawowe funkcjonalności, takie jak logowanie oraz proces rejestracji użytkowników, i jest zaprojektowany w sposób umożliwiający łatwe wdrożenie na serwerze. Framework nie korzysta z Composera, co upraszcza instalację – wystarczy skopiować kod i skonfigurować ustawienia w pliku konfiguracyjnym.

## Główne funkcjonalności

- **Wzorzec MVC**: Czysta struktura oparta na modelach, widokach i kontrolerach.
- **Logowanie**: Gotowy mechanizm uwierzytelniania użytkowników.
- **Rejestracja**: Prosty proces zakładania konta dla nowych użytkowników.
- **Łatwa konfiguracja**: Wszystkie ustawienia dostępne w pliku `app/core/config.php`.

## Wymagania

- Serwer z PHP (zalecana wersja PHP 7.4 lub nowsza).
- Serwer HTTP (np. Apache, Nginx).
- Baza danych (np. MySQL) – skonfigurowana w pliku `app/core/config.php`.

## Instalacja

1. **Pobierz projekt**:
   - Skopiuj kod źródłowy projektu na swój serwer.
   - Możesz pobrać repozytorium jako ZIP lub sklonować je za pomocą:
     ```bash
     git clone https://github.com/gmaxsoft/PHP-MVC-Framework-demo.git
     ```
Skonfiguruj plik konfiguracyjny:

Edytuj plik app/core/config.php, aby ustawić dane dostępowe do bazy danych i inne ustawienia (np. dane serwera, dane logowania).


Wdróż na serwerze:

Umieść kod w katalogu głównym serwera (np. /var/www/html dla Apache).
Upewnij się, że serwer ma odpowiednie uprawnienia do folderów (np. do zapisu w folderze tymczasowym, jeśli jest używany).


Uruchom aplikację:

Otwórz przeglądarkę i przejdź do adresu URL, gdzie wdrożyłeś projekt (np. http://localhost/PHP-MVC-Framework-demo).
Skonfiguruj bazę danych, jeśli jest wymagana (np. zaimportuj schemat bazy danych, jeśli jest dostarczony).

## Struktura projektu

app/core/config.php – Plik konfiguracyjny frameworku.
app/controllers/ – Kontrolery obsługujące logikę aplikacji.
app/models/ – Modele do zarządzania danymi i komunikacją z bazą danych.
app/views/ – Widoki odpowiedzialne za warstwę prezentacji.

## Użycie

Logowanie:

Przejdź do strony logowania (np. /login).
Użyj danych testowych lub zarejestruj nowego użytkownika.


Rejestracja:

Przejdź do strony rejestracji (np. /register).
Wypełnij formularz, aby utworzyć nowe konto.


Dostosowanie:

Dodawaj własne kontrolery, modele i widoki w odpowiednich folderach, aby rozszerzyć funkcjonalność frameworku.

## Uwagi

Projekt jest demonstracyjny i przeznaczony do celów edukacyjnych lub jako punkt wyjścia do tworzenia własnych aplikacji.
Framework nie korzysta z Composera, co oznacza, że wszystkie zależności są wbudowane w kod źródłowy.

## Licencja

Projekt jest dostępny na licencji MIT. Szczegóły w pliku LICENSE (jeśli istnieje).

## Kontakt

W razie pytań lub problemów skontaktuj się z autorem poprzez GitHub Issues.
