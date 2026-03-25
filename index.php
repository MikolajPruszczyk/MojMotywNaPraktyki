<!-- lączenie strony z headerem -->
<?php get_header(); ?>
<!-- sekcje -->
<!-- hero -->
<section id="start" class="sekcja-start">
    <div class="sekcja-start-tekst">
        <h1>Witaj na moim portfolio!</h1>
        <p>Jestem uczniem szkoły programistycznej lecz przyjmuję zlecenia na podstawowe strony internetowe</p>
        <p>Zainteresowany?</p>
        <a href="#kontakt">Skontaktuj się!</a>
    </div>
</section>
<!-- o mnie -->
<section id="omnie" class="sekcja">
    <div class="podziemnikOmnie1">

        <div class="podziemnikOmnie2">
            <!-- zdjecie lewo ustawiane z folderu img w folderze wordpressa-->
            <img src="<?php echo get_template_directory_uri(); ?>/img/lewoZdjecie.webp"
                alt="Programowanie przy komputerze" class="omnie-img">

            <h2>Coś o mnie:</h2>

            <ul class="lista-omnie">
                <li>Uczeń szkoły programistycznej w Polsce</li>
                <li>Początkujący programista front-end</li>
                <li>Tworzę różnorakie strony w html, css jak i javascript</li>
                <li>A także robienie podstawowych baz danych w sql i stron z użyciem php!</li>
            </ul>
            <!-- zdjecie prawo ustawiane z folderu img w folderze wordpressa-->
            <img src="<?php echo get_template_directory_uri(); ?>/img/prawoZdjecie.webp" alt="Kreatywność"
                class="omnie-img">
        </div>

    </div>
</section>
<!-- oferta -->
<section id="oferta" class="sekcja">
    <h2>Oferta osobista:</h2>
    <div class="poldzienikOferta1">
        <div class="poldzienikOferta2">
            <h3>Strony z wizytówkami</h3>
            <p>Proste i funkcjonalne strony wizytówkowe odpowiednie dla wybranej grupy odbiorców!</p>
        </div>
        <div class="poldzienikOferta2">
            <h3>Portfolio</h3>
            <p>Unikalne przyciągające wzrok portfolia o nowoczesnym stylu!</p>
        </div>
        <div class="poldzienikOferta2">
            <h3>Strony marketingowe</h3>
            <p>Stworzenie strony marketingowej unikalnego rodzaju jak i funkcjonalności!</p>
        </div>
    </div>
</section>
<!-- kontakt -->
<!-- można też podpiąć formularz CF7 (jak działa to nie ruszaj) -->
<section id="kontakt" class="sekcja">
    <h2>Kontakt do mnie:</h2>
    <div class="kontaktDoMnie">
        <form>
            <label for="imie">Twoje imię</label>
            <input type="text" id="imie" name="imie" required>
            <label for="email">Twój email</label>
            <input type="email" id="email" name="email" required>

            <label for="wiadomosc">Wiadomość</label>
            <textarea id="wiadomosc" name="wiadomosc" required></textarea>

            <button type="submit">Wyślij</button>
            <p id="error-formularza"></p>
        </form>
    </div>
</section>
<!-- to samo co w 1 komentarzu tylko z footerem zamiast headerem -->
<?php get_footer(); ?>