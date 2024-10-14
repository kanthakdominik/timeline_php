<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $sportCategoryId = DB::table('categories')->where('name', 'sportowa')->value('id');
        $musicCategoryId = DB::table('categories')->where('name', 'muzyczna')->value('id');
        $culturalCategoryId = DB::table('categories')->where('name', 'kulturalna')->value('id');
        $educationCategoryId = DB::table('categories')->where('name', 'edukacyjna')->value('id');
        $recreationCategoryId = DB::table('categories')->where('name', 'rekreacyjna')->value('id');

        DB::table('events')->insert([
            [
                'name' => 'Mistrzostwa Polski w Piłce Nożnej',
                'start_date' => '2024-03-10',
                'end_date' => '2024-03-17',
                'description' => 'Najlepsze drużyny piłkarskie z całego kraju rywalizują o tytuł mistrza Polski. Niezapomniane emocje i zacięta walka na boisku. Kibice mogą liczyć na wiele emocjonujących momentów i niespodziewane zwroty akcji.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => $sportCategoryId
            ],
            [
                'name' => 'Superliga Siatkarska',
                'start_date' => '2024-04-10',
                'end_date' => '2024-04-12',
                'description' => 'Najlepsze drużyny siatkarskie walczą w ekscytujących meczach o tytuł mistrza Superligi. Dynamiczne akcje i wspaniała atmosfera na arenie. Turniej przyciąga fanów z całego kraju, którzy dopingują swoje drużyny.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => $sportCategoryId
            ],
            [
                'name' => 'Warszawski Maraton',
                'start_date' => '2024-06-10',
                'end_date' => '2024-06-12',
                'description' => 'Maraton przez serce stolicy, kończący się na Stadionie Narodowym. Idealne wydarzenie dla miłośników biegania i sportowych wyzwań. Uczestnicy mogą cieszyć się nie tylko sportem, ale również pięknymi widokami Warszawy.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => $sportCategoryId
            ],
            [
                'name' => 'Lekkoatletyczne Mistrzostwa Polski',
                'start_date' => '2024-07-20',
                'end_date' => '2024-07-22',
                'description' => 'Zawody lekkoatletyczne z udziałem najlepszych polskich sportowców, rywalizujących w różnych dyscyplinach. Emocje i rekordy na najwyższym poziomie. Impreza przyciąga kibiców zainteresowanych różnorodnymi konkurencjami.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => $sportCategoryId
            ],
            [
                'name' => 'Nocny Bieg na Orientację',
                'start_date' => '2024-09-25',
                'end_date' => '2024-09-26',
                'description' => 'Wyjątkowe wydarzenie, które łączy bieg z orientacją terenową po zmroku. Uczestnicy korzystają z map i kompasów, aby dotrzeć do wyznaczonych punktów kontrolnych. Niezapomniana przygoda dla wszystkich miłośników aktywności na świeżym powietrzu.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => $sportCategoryId
            ],
            [
                'name' => 'Festiwal Muzyki Filmowej',
                'start_date' => '2024-02-05',
                'end_date' => '2024-02-06',
                'description' => 'Koncerty orkiestr symfonicznych, wykonujących znane utwory filmowe. Niezapomniana podróż przez świat muzyki filmowej. Idealne wydarzenie dla miłośników kina i muzyki.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => $musicCategoryId
            ],
            [
                'name' => 'Koncert Gwiazd Rocka',
                'start_date' => '2024-05-15',
                'end_date' => '2024-05-16',
                'description' => 'Wieczór pełen niezapomnianych rockowych hitów w wykonaniu największych gwiazd muzyki rockowej. Energia na najwyższym poziomie. Koncert przyciąga tłumy fanów gotowych na świetną zabawę.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => $musicCategoryId
            ],
            [
                'name' => 'Festiwal Jazzowy',
                'start_date' => '2024-07-10',
                'end_date' => '2024-07-12',
                'description' => 'Trzydniowy festiwal, podczas którego występują najwybitniejsi jazzowi muzycy z całego świata. Niezapomniane występy i wyjątkowa atmosfera. Fani jazzu mogą liczyć na niezapomniane wrażenia muzyczne.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => $musicCategoryId
            ],
            [
                'name' => 'Koncert Muzyki Klasycznej',
                'start_date' => '2024-08-25',
                'end_date' => '2024-08-26',
                'description' => 'Wyjątkowy wieczór, gdzie najlepsze orkiestry wykonują dzieła klasyczne na najwyższym poziomie artystycznym. Klasyka w najlepszym wydaniu. Idealne wydarzenie dla miłośników muzyki poważnej.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => $musicCategoryId
            ],
            [
                'name' => 'Festiwal Muzyki Elektronicznej',
                'start_date' => '2024-10-15',
                'end_date' => '2024-10-17',
                'description' => 'Energetyczne występy znanych DJ-ów i producentów muzyki elektronicznej, gwarantujące niezapomnianą noc pełną tańca. Idealne wydarzenie dla miłośników klubowej atmosfery. Niezapomniane przeżycie dla wszystkich uczestników.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => $musicCategoryId
            ],
            [
                'name' => 'Międzynarodowy Festiwal Teatralny',
                'start_date' => '2024-03-20',
                'end_date' => '2024-03-22',
                'description' => 'Przedstawienia teatralne z całego świata, ukazujące różnorodność kultur i tradycji scenicznych. Wyjątkowe spektakle na najwyższym poziomie. Festiwal przyciąga miłośników teatru i sztuki scenicznej.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => $culturalCategoryId
            ],
            [
                'name' => 'Festiwal Sztuki Współczesnej',
                'start_date' => '2024-04-05',
                'end_date' => '2024-04-07',
                'description' => 'Wystawy, instalacje artystyczne i performance\'y, prezentujące najnowsze trendy w sztuce współczesnej. Inspirujące spotkania ze sztuką. Idealne wydarzenie dla miłośników nowoczesnej twórczości.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => $culturalCategoryId
            ],
            [
                'name' => 'Dni Kultury Ludowej',
                'start_date' => '2024-06-10',
                'end_date' => '2024-06-12',
                'description' => 'Występy zespołów ludowych, warsztaty rzemiosła i degustacje tradycyjnych potraw z różnych regionów Polski. Barwne i pełne emocji wydarzenie. Świetna okazja do zapoznania się z bogatą kulturą ludową.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => $culturalCategoryId
            ],
            [
                'name' => 'Festiwal Filmowy',
                'start_date' => '2024-09-01',
                'end_date' => '2024-09-03',
                'description' => 'Projekcje filmów fabularnych, dokumentalnych i krótkometrażowych z całego świata, zakończone galą wręczenia nagród. Kino na najwyższym poziomie. Święto dla miłośników kina i twórczości filmowej.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => $culturalCategoryId
            ],
            [
                'name' => 'Noc Muzeów',
                'start_date' => '2024-11-10',
                'end_date' => '2024-11-11',
                'description' => 'Wyjątkowa noc, podczas której muzea i galerie sztuki otwarte są dla zwiedzających do późnych godzin nocnych, oferując specjalne wystawy i wydarzenia. Idealna okazja do odkrywania kultury i historii. Niezapomniane przeżycia dla wszystkich uczestników.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => $culturalCategoryId
            ],
            [
                'name' => 'Kongres Naukowy',
                'start_date' => '2024-01-10',
                'end_date' => '2024-01-12',
                'description' => 'Spotkanie naukowców z różnych dziedzin, prezentujące najnowsze osiągnięcia i badania. Wykłady, panele dyskusyjne i warsztaty. Idealna okazja do wymiany wiedzy i doświadczeń.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => $educationCategoryId
            ],
            [
                'name' => 'Konferencja Technologiczna',
                'start_date' => '2024-05-05',
                'end_date' => '2024-05-07',
                'description' => 'Wydarzenie skupiające ekspertów technologii, prezentujących innowacyjne rozwiązania i trendy w dziedzinie IT i technologii. Wykłady i prezentacje. Świetna okazja do poznania najnowszych osiągnięć w świecie technologii.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => $educationCategoryId
            ],
            [
                'name' => 'Warsztaty Literackie',
                'start_date' => '2024-07-20',
                'end_date' => '2024-07-22',
                'description' => 'Trzydniowe warsztaty dla pisarzy i poetów, prowadzone przez znanych autorów, z możliwością prezentacji własnych prac. Inspirujące spotkania i twórcza atmosfera. Idealne wydarzenie dla miłośników literatury.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => $educationCategoryId
            ],
            [
                'name' => 'Seminarium Zdrowia Publicznego',
                'start_date' => '2024-09-01',
                'end_date' => '2024-09-03',
                'description' => 'Wykłady i panele dyskusyjne na temat zdrowia publicznego, profilaktyki chorób i promocji zdrowego stylu życia. Spotkania z ekspertami. Ważne wydarzenie dla wszystkich zainteresowanych zdrowiem publicznym.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => $educationCategoryId
            ],
            [
                'name' => 'Festiwal Nauki',
                'start_date' => '2024-11-10',
                'end_date' => '2024-11-12',
                'description' => 'Interaktywne stoiska, pokazy naukowe i warsztaty edukacyjne dla dzieci i dorosłych, promujące naukę i technologię. Fascynujące prezentacje. Idealna okazja do zgłębienia tajemnic nauki.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => $educationCategoryId
            ],
            [
                'name' => 'Festiwal Rowerowy',
                'start_date' => '2024-04-01',
                'end_date' => '2024-04-03',
                'description' => 'Zawody rowerowe, pokazy akrobacji i warsztaty dla miłośników jazdy na rowerze. Idealne wydarzenie dla rodzin i aktywnych osób. Uczestnicy mogą liczyć na pełne emocji dni pełne sportowych wrażeń.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => $recreationCategoryId
            ],
            [
                'name' => 'Bieg Charytatywny',
                'start_date' => '2024-06-14',
                'end_date' => '2024-06-15',
                'description' => 'Bieg na różnych dystansach, mający na celu zbiórkę funduszy na cele charytatywne. Uczestnicy mogą biegać, spacerować lub nordic walking. Wydarzenie promuje zdrowy styl życia i wspieranie potrzebujących.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => $recreationCategoryId
            ],
            [
                'name' => 'Piknik Rodzinny',
                'start_date' => '2024-07-24',
                'end_date' => '2024-07-25',
                'description' => 'Wydarzenie pełne atrakcji dla całej rodziny, z grami, konkursami, występami artystycznymi i strefą gastronomiczną. Idealna okazja do spędzenia czasu z bliskimi na świeżym powietrzu. Zapewnia niezapomniane wspomnienia dla uczestników w każdym wieku.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => $recreationCategoryId
            ],
            [
                'name' => 'Zlot Miłośników Motoryzacji',
                'start_date' => '2024-09-20',
                'end_date' => '2024-09-22',
                'description' => 'Spotkanie fanów motoryzacji, z pokazami samochodów zabytkowych, wyścigami i warsztatami z mechaniki i tuningu. Wydarzenie dla wszystkich entuzjastów motoryzacji i technologii. Wspaniała okazja do zobaczenia unikalnych pojazdów.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => $recreationCategoryId
            ],
            [
                'name' => 'Festiwal Fitness',
                'start_date' => '2024-12-10',
                'end_date' => '2024-12-12',
                'description' => 'Całodniowe wydarzenie pełne zajęć fitness, warsztatów zdrowego stylu życia i pokazów sportowych. Idealne dla tych, którzy chcą zadbać o swoją formę i zdrowie. Uczestnicy mogą liczyć na profesjonalne porady trenerów i inspirację do aktywnego życia.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => $recreationCategoryId
            ]
        ]);
    }
}