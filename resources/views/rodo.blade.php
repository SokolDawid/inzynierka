@extends('layouts.app')
    @section('content')
        <!-- RODO Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="mb-4 text-primary">Polityka Prywatności i RODO</h1>
                    <p><strong>Administrator danych osobowych:</strong> Młodzieżowy Dom Kultury w [miasto], ul. [adres], kontakt: [email / tel.].</p>

                    <h4 class="mt-4">1. Administrator danych osobowych</h4>
                    <p>Administratorem danych osobowych jest Młodzieżowy Dom Kultury w [nazwa miasta], z siedzibą przy ul. [adres], NIP: [NIP], REGON: [REGON], e-mail: [adres e-mail kontaktowy].</p>

                    <h4 class="mt-4">2. Cele i podstawy przetwarzania danych</h4>
                    <p>Dane osobowe użytkowników aplikacji przetwarzane są w celu:</p>
                    <ul>
                    <li>rejestracji konta w aplikacji i obsługi zapisów na zajęcia (art. 6 ust. 1 lit. b RODO),</li>
                    <li>umożliwienia zapisu na zajęcia oraz zarządzania nimi (art. 6 ust. 1 lit. b RODO),</li>
                    <li>kontaktowania się z użytkownikami w sprawach organizacyjnych (art. 6 ust. 1 lit. b i f RODO),</li>
                    <li>realizacji obowiązków wynikających z przepisów prawa (art. 6 ust. 1 lit. c RODO).</li>
                    </ul>

                    <h4 class="mt-4">3. Zakres przetwarzanych danych osobowych</h4>
                    <p>W związku z korzystaniem z aplikacji mogą być przetwarzane następujące kategorie danych osobowych użytkowników:</p>
                    <ul>
                    <li>dane identyfikacyjne: imię, nazwisko, data urodzenia,</li>
                    <li>dane kontaktowe: adres e-mail, numer telefonu,</li>
                    <li>dane uwierzytelniające: hasło (przechowywane w sposób zaszyfrowany),</li>
                    <li>dane dotyczące uczestnictwa w zajęciach: informacje o zapisach, grupach zajęciowych, terminach oraz prowadzących.</li>
                    </ul>
                    <p>Podanie powyższych danych jest niezbędne do rejestracji konta w systemie oraz korzystania z usług oferowanych przez aplikację.</p>

                    <h4 class="mt-4">4. Sposób zbierania danych</h4>
                    <p>Dane osobowe użytkowników zbierane są bezpośrednio od nich, w momencie zakładania konta, logowania się oraz dokonywania zapisów na zajęcia.</p>

                    <h4 class="mt-4">5. Odbiorcy danych</h4>
                    <p>Dane osobowe użytkowników mogą być udostępniane wyłącznie:</p>
                    <ul>
                    <li>upoważnionym pracownikom Młodzieżowego Domu Kultury,</li>
                    <li>podmiotom wspierającym nas w zakresie obsługi IT (na podstawie umowy powierzenia),</li>
                    <li>organom uprawnionym na podstawie przepisów prawa.</li>
                    </ul>

                    <h4 class="mt-4">6. Pliki cookies</h4>
                    <p>Aplikacja może wykorzystywać pliki cookies w celu:</p>
                    <ul>
                    <li>zapewnienia prawidłowego działania aplikacji (np. utrzymanie sesji użytkownika),</li>
                    <li>analizy technicznej i poprawy bezpieczeństwa,</li>
                    <li>opcjonalnie – do celów statystycznych, w sposób anonimowy.</li>
                    </ul>
                    <p>Użytkownik może samodzielnie zarządzać plikami cookies poprzez ustawienia swojej przeglądarki internetowej.</p>

                    <h4 class="mt-4">7. Okres przechowywania danych</h4>
                    <p>Dane osobowe użytkowników będą przechowywane przez czas korzystania z aplikacji oraz przez okres wymagany przepisami prawa, w tym na przykład przez 5 lat po zakończeniu działalności użytkownika w systemie.</p>

                    <h4 class="mt-4">8. Prawa użytkowników</h4>
                    <p>Każdemu użytkownikowi przysługują prawa do:</p>
                    <ul>
                    <li>dostępu do swoich danych osobowych,</li>
                    <li>sprostowania danych,</li>
                    <li>usunięcia danych,</li>
                    <li>ograniczenia przetwarzania danych,</li>
                    <li>sprzeciwu wobec przetwarzania danych,</li>
                    <li>przenoszenia danych,</li>
                    <li>wniesienia skargi do Prezesa Urzędu Ochrony Danych Osobowych (UODO).</li>
                    </ul>

                    <h4 class="mt-4">9. Zabezpieczenia danych</h4>
                    <p>Administrator stosuje odpowiednie środki techniczne i organizacyjne w celu zapewnienia bezpieczeństwa danych osobowych, w tym szyfrowanie haseł, regularne aktualizacje systemu oraz kontrolę dostępu do danych.</p>

                    <h4 class="mt-4">10. Dobrowolność podania danych</h4>
                    <p>Podanie danych osobowych jest dobrowolne, jednak niezbędne do skorzystania z usług aplikacji. Brak podania wymaganych danych uniemożliwi rejestrację konta i zapis na zajęcia.</p>

                    <h4 class="mt-4">11. Kontakt</h4>
                    <p>W sprawach związanych z ochroną danych osobowych, prosimy o kontakt z administratorem danych:<br>
                    📧 [adres e-mail kontaktowy]<br>
                    📞 [numer telefonu]</p>

                    <h4 class="mt-4">12. Zmiany w Polityce Prywatności</h4>
                    <p>Administrator zastrzega sobie prawo do wprowadzania zmian w niniejszej Polityce Prywatności. Wszelkie zmiany będą publikowane na tej stronie.</p>

                    
                </div>
            </div>
        </div>
        <!-- RODO End -->
    @endsection