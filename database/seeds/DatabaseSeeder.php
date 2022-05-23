<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    const DESCPROD = '<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Phasellus pellentesque. Mauris quam enim, molestie in, rhoncus ut, lobortis a, est. </p><p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Phasellus pellentesque. Mauris quam enim, molestie in, rhoncus ut, lobortis a, est.</p>';
    
    public function run() {

        DB::table('houses')->insert([
            ['id' => 1, 'titolo' => 'Appartamento1', 'prezzo' => 280, 'descrizione' => 'Appartamento situato in pieno centro, 250m dalla fermata principale del pullman, a 2 minuti a piedi da piazza Cavour. Presenti due bagni, una cucina e un ampio salone',
                'tipologia' => null, 'n_camere' => 3, 'n_posti_letto_totali' => 3, 'data_inserimento' => date("Y-m-d H:i:s"),
                'indirizzo' => 'Via Simeoni, 6', 'cap' => '60121','città' => 'Ancona', 'provincia' => 'AN', 'età_min' => '18', 
                'superficie' => '150','immagine' => 'app2.jpg']
        ]);
            
        DB::table('houses')->insert([
            ['id' => 2, 'titolo' => 'Appartamento2', 'prezzo' => 480, 'descrizione' => 'Appartamento situato in pieno centro, 250m dalla fermata principale del pullman, a 2 minuti a piedi da piazza Cavour. Presenti due bagni, una cucina e un ampio salone',
                'tipologia' => null, 'n_camere' => 4, 'n_posti_letto_totali' => 6, 'data_inserimento' => date("Y-m-d H:i:s"),
                'indirizzo' => 'Via Marcelletta, 17', 'cap' => '60121','città' => 'Ancona', 'provincia' => 'AN', 'genere' => 'F', 
                'età_min' => '30', 'superficie' => '250']
        ]);
        
        DB::table('houses')->insert([
            ['id' => 3, 'titolo' => 'Appartamento2', 'prezzo' => 480, 'descrizione' => 'Appartamento situato in pieno centro, 250m dalla fermata principale del pullman, a 2 minuti a piedi da piazza Cavour. Presenti due bagni, una cucina e un ampio salone',
                'tipologia' => null, 'n_camere' => 4, 'n_posti_letto_totali' => 6, 'data_inserimento' => date("Y-m-d H:i:s"),
                'indirizzo' => 'Via Marcelletta, 17', 'cap' => '60121','città' => 'Ancona', 'provincia' => 'AN', 'genere' => 'F', 
                'età_min' => '30', 'superficie' => '250']
        ]);
         
        DB::table('houses')->insert([
            ['id' => 4, 'titolo' => 'Appartamento2', 'prezzo' => 480, 'descrizione' => 'Appartamento situato in pieno centro, 250m dalla fermata principale del pullman, a 2 minuti a piedi da piazza Cavour. Presenti due bagni, una cucina e un ampio salone',
                'tipologia' => null, 'n_camere' => 4, 'n_posti_letto_totali' => 6, 'data_inserimento' => date("Y-m-d H:i:s"),
                'indirizzo' => 'Via Marcelletta, 17', 'cap' => '60121','città' => 'Ancona', 'provincia' => 'AN', 'genere' => 'F', 
                'età_min' => '30', 'superficie' => '250']
        ]);
        
        DB::table('houses')->insert([
            ['id' => 5, 'titolo' => 'Appartamento2', 'prezzo' => 480, 'descrizione' => 'Appartamento situato in pieno centro, 250m dalla fermata principale del pullman, a 2 minuti a piedi da piazza Cavour. Presenti due bagni, una cucina e un ampio salone',
                'tipologia' => null, 'n_camere' => 4, 'n_posti_letto_totali' => 6, 'data_inserimento' => date("Y-m-d H:i:s"),
                'indirizzo' => 'Via Marcelletta, 17', 'cap' => '60121','città' => 'Ancona', 'provincia' => 'AN', 'genere' => 'F', 
                'età_min' => '30', 'superficie' => '250']
        ]);
        
        DB::table('houses')->insert([
            ['id' => 6, 'titolo' => 'Appartamento2', 'prezzo' => 480, 'descrizione' => 'Appartamento situato in pieno centro, 250m dalla fermata principale del pullman, a 2 minuti a piedi da piazza Cavour. Presenti due bagni, una cucina e un ampio salone',
                'tipologia' => null, 'n_camere' => 4, 'n_posti_letto_totali' => 6, 'data_inserimento' => date("Y-m-d H:i:s"),
                'indirizzo' => 'Via Marcelletta, 17', 'cap' => '60121','città' => 'Ancona', 'provincia' => 'AN', 'genere' => 'F', 
                'età_min' => '30', 'superficie' => '250']
        ]);
        
        DB::table('houses')->insert([
            ['id' => 7, 'titolo' => 'Appartamento2', 'prezzo' => 480, 'descrizione' => 'Appartamento situato in pieno centro, 250m dalla fermata principale del pullman, a 2 minuti a piedi da piazza Cavour. Presenti due bagni, una cucina e un ampio salone',
                'tipologia' => null, 'n_camere' => 4, 'n_posti_letto_totali' => 6, 'data_inserimento' => date("Y-m-d H:i:s"),
                'indirizzo' => 'Via Marcelletta, 17', 'cap' => '60121','città' => 'Ancona', 'provincia' => 'AN', 'genere' => 'F', 
                'età_min' => '30', 'superficie' => '250']
        ]);
        
        DB::table('houses')->insert([
            ['id' => 8, 'titolo' => 'Appartamento2', 'prezzo' => 480, 'descrizione' => 'Appartamento situato in pieno centro, 250m dalla fermata principale del pullman, a 2 minuti a piedi da piazza Cavour. Presenti due bagni, una cucina e un ampio salone',
                'tipologia' => null, 'n_camere' => 4, 'n_posti_letto_totali' => 6, 'data_inserimento' => date("Y-m-d H:i:s"),
                'indirizzo' => 'Via Marcelletta, 17', 'cap' => '60121','città' => 'Ancona', 'provincia' => 'AN', 'genere' => 'F', 
                'età_min' => '30', 'superficie' => '250']
        ]);
        
        DB::table('houses')->insert([
            ['id' => 9, 'titolo' => 'Appartamento2', 'prezzo' => 480, 'descrizione' => 'Appartamento situato in pieno centro, 250m dalla fermata principale del pullman, a 2 minuti a piedi da piazza Cavour. Presenti due bagni, una cucina e un ampio salone',
                'tipologia' => null, 'n_camere' => 4, 'n_posti_letto_totali' => 6, 'data_inserimento' => date("Y-m-d H:i:s"),
                'indirizzo' => 'Via Marcelletta, 17', 'cap' => '60121','città' => 'Ancona', 'provincia' => 'AN', 'genere' => 'F', 
                'età_min' => '30', 'superficie' => '250']
        ]);
        
        DB::table('houses')->insert([
            ['id' => 10, 'titolo' => 'Appartamento2', 'prezzo' => 480, 'descrizione' => 'Appartamento situato in pieno centro, 250m dalla fermata principale del pullman, a 2 minuti a piedi da piazza Cavour. Presenti due bagni, una cucina e un ampio salone',
                'tipologia' => null, 'n_camere' => 4, 'n_posti_letto_totali' => 6, 'data_inserimento' => date("Y-m-d H:i:s"),
                'indirizzo' => 'Via Marcelletta, 17', 'cap' => '60121','città' => 'Ancona', 'provincia' => 'AN', 'genere' => 'F', 
                'età_min' => '30', 'superficie' => '250']
        ]);
        
        DB::table('houses')->insert([
            ['id' => 11, 'titolo' => 'Appartamento2', 'prezzo' => 480, 'descrizione' => 'Appartamento situato in pieno centro, 250m dalla fermata principale del pullman, a 2 minuti a piedi da piazza Cavour. Presenti due bagni, una cucina e un ampio salone',
                'tipologia' => null, 'n_camere' => 4, 'n_posti_letto_totali' => 6, 'data_inserimento' => date("Y-m-d H:i:s"),
                'indirizzo' => 'Via Marcelletta, 17', 'cap' => '60121','città' => 'Ancona', 'provincia' => 'AN', 'genere' => 'F', 
                'età_min' => '30', 'superficie' => '250']
        ]);
        
        DB::table('houses')->insert([
            ['id' => 12, 'titolo' => 'Appartamento2', 'prezzo' => 480, 'descrizione' => 'Appartamento situato in pieno centro, 250m dalla fermata principale del pullman, a 2 minuti a piedi da piazza Cavour. Presenti due bagni, una cucina e un ampio salone',
                'tipologia' => null, 'n_camere' => 4, 'n_posti_letto_totali' => 6, 'data_inserimento' => date("Y-m-d H:i:s"),
                'indirizzo' => 'Via Marcelletta, 17', 'cap' => '60121','città' => 'Ancona', 'provincia' => 'AN', 'genere' => 'F', 
                'età_min' => '30', 'superficie' => '250']
        ]);
        
        DB::table('houses')->insert([
            ['id' => 13, 'titolo' => 'Appartamento2', 'prezzo' => 480, 'descrizione' => 'Appartamento situato in pieno centro, 250m dalla fermata principale del pullman, a 2 minuti a piedi da piazza Cavour. Presenti due bagni, una cucina e un ampio salone',
                'tipologia' => null, 'n_camere' => 4, 'n_posti_letto_totali' => 6, 'data_inserimento' => date("Y-m-d H:i:s"),
                'indirizzo' => 'Via Marcelletta, 17', 'cap' => '60121','città' => 'Ancona', 'provincia' => 'AN', 'genere' => 'F', 
                'età_min' => '30', 'superficie' => '250']
        ]);
        
        DB::table('houses')->insert([
            ['id' => 14, 'titolo' => 'Appartamento2', 'prezzo' => 480, 'descrizione' => 'Appartamento situato in pieno centro, 250m dalla fermata principale del pullman, a 2 minuti a piedi da piazza Cavour. Presenti due bagni, una cucina e un ampio salone',
                'tipologia' => null, 'n_camere' => 4, 'n_posti_letto_totali' => 6, 'data_inserimento' => date("Y-m-d H:i:s"),
                'indirizzo' => 'Via Marcelletta, 17', 'cap' => '60121','città' => 'Ancona', 'provincia' => 'AN', 'genere' => 'F', 
                'età_min' => '30', 'superficie' => '250']
        ]);
        
        DB::table('houses')->insert([
            ['id' => 15, 'titolo' => 'Appartamento2', 'prezzo' => 480, 'descrizione' => 'Appartamento situato in pieno centro, 250m dalla fermata principale del pullman, a 2 minuti a piedi da piazza Cavour. Presenti due bagni, una cucina e un ampio salone',
                'tipologia' => null, 'n_camere' => 4, 'n_posti_letto_totali' => 6, 'data_inserimento' => date("Y-m-d H:i:s"),
                'indirizzo' => 'Via Marcelletta, 17', 'cap' => '60121','città' => 'Ancona', 'provincia' => 'AN', 'genere' => 'F', 
                'età_min' => '30', 'superficie' => '250']
        ]);
        

/*          DB::table('product')->insert([
            ['name' => 'NetBook Modello2', 'catId' => 5,
                'descShort' => 'Caratteristiche NetBook2', 'descLong' => self::DESCPROD,
                'price' => 219.34, 'discountPerc' => 12, 'discounted' => 0, 'image' => ''],
            ['name' => 'HardDisk Modello2', 'catId' => 6,
                'descShort' => 'Caratteristiche HardDisk2', 'descLong' => self::DESCPROD,
                'price' => 86.37, 'discountPerc' => 15, 'discounted' => 1, 'image' => 'Italy.gif'],
            ['name' => 'Desktop Modello1', 'catId' => 3,
                'descShort' => 'Caratteristiche Desktop1', 'descLong' => self::DESCPROD,
                'price' => 1230.49, 'discountPerc' => 25, 'discounted' => 1, 'image' => 'Brazil.gif'],
            ['name' => 'Laptop Modello1', 'catId' => 4,
                'descShort' => 'Caratteristiche Laptop1', 'descLong' => self::DESCPROD,
                'price' => 455.37, 'discountPerc' => 17, 'discounted' => 1, 'image' => ''],
            ['name' => 'Laptop Modello2', 'catId' => 4,
                'descShort' => 'Caratteristiche Laptop1', 'descLong' => self::DESCPROD,
                'price' => 1889.67, 'discountPerc' => 15, 'discounted' => 1, 'image' => 'Argentina.gif'],
            ['name' => 'Netbook Modello3', 'catId' => 5,
                'descShort' => 'Caratteristiche NetBook3', 'descLong' => self::DESCPROD,
                'price' => 259.99, 'discountPerc' => 17, 'discounted' => 0, 'image' => 'Red Apple.gif'],
            ['name' => 'Laptop Modello3', 'catId' => 4,
                'descShort' => 'Caratteristiche Laptop3', 'descLong' => self::DESCPROD,
                'price' => 998.99, 'discountPerc' => 23, 'discounted' => 1, 'image' => 'UK.gif'],
            ['name' => 'HardDisk Modello1', 'catId' => 6,
                'descShort' => 'Caratteristiche HardDisk1', 'descLong' => self::DESCPROD,
                'price' => 88.93, 'discountPerc' => 5, 'discounted' => 0, 'image' => 'USA.gif'],
            ['name' => 'HardDisk Modello4', 'catId' => 6,
                'descShort' => 'Caratteristiche HardDisk4', 'descLong' => self::DESCPROD,
                'price' => 78.66, 'discountPerc' => 7, 'discounted' => 01, 'image' => 'Ukraine.gif']
        ]);*/

        DB::table('users')->insert([
            ['nome' => 'Admin', 'cognome' => 'Admin', 'età' => 55, 'genere' => 'M', 'email' => 'admin@admin.it', 
                'cellulare' => '333567890', 'username' => 'adminadmin','password' => 'i4z5zipq', 'livello' => 'admin',],
            ['nome' => 'Luca', 'cognome' => 'Tore', 'età' => 20, 'genere' => 'M', 'email' => 'loca@loca.it', 
                'cellulare' => '334567890', 'username' => 'lorelore','password' => 'i4z5zipq', 'livello' => 'locatore',],
            ['nome' => 'Luca', 'cognome' => 'Tario', 'età' => 69, 'genere' => 'M', 'email' => 'lario@lario.it', 
                'cellulare' => '335567890', 'username' => 'lariolario','password' => 'i4z5zipq', 'livello' => 'locatario',],
        ]);
        
        DB::table('faqs')->insert([
            ['id' => 1, 'domanda' => 'Domanda 1', 'risposta' => 'Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Phasellus pellentesque. Mauris quam enim, molestie in, rhoncus ut, lobortis a, est.'],
            ['id' => 2, 'domanda' => 'Domanda 2', 'risposta' => 'Gallia est omnis divisa in partes tres, quarum unam incolunt Belgae, aliam Aquitani, tertiam qui ipsorum lingua Celtae, nostra Galli appellantur. Hi omnes lingua, institutis, legibus inter se differunt. Gallos ab Aquitanis Garumna flumen, a Belgis Matrona et Sequana dividit. Horum omnium fortissimi sunt Belgae, propterea quod a cultu atque humanitate provinciae longissime absunt, minimeque ad eos mercatores saepe commeant atque ea quae ad effeminandos animos pertinent important, proximique sunt Germanis, qui trans Rhenum incolunt, quibuscum continenter bellum gerunt.'],
            ['id' => 3, 'domanda' => 'Domanda 3', 'risposta' => 'Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Phasellus pellentesque. Mauris quam enim, molestie in, rhoncus ut, lobortis a, est.'],
            ['id' => 4, 'domanda' => 'Domanda 2', 'risposta' => 'Gallia est omnis divisa in partes tres, quarum unam incolunt Belgae, aliam Aquitani, tertiam qui ipsorum lingua Celtae, nostra Galli appellantur. Hi omnes lingua, institutis, legibus inter se differunt. Gallos ab Aquitanis Garumna flumen, a Belgis Matrona et Sequana dividit. Horum omnium fortissimi sunt Belgae, propterea quod a cultu atque humanitate provinciae longissime absunt, minimeque ad eos mercatores saepe commeant atque ea quae ad effeminandos animos pertinent important, proximique sunt Germanis, qui trans Rhenum incolunt, quibuscum continenter bellum gerunt.'],
            ['id' => 5, 'domanda' => 'Domanda 3', 'risposta' => 'Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Phasellus pellentesque. Mauris quam enim, molestie in, rhoncus ut, lobortis a, est.'],
            ]);
/*        
        DB::table('category')->insert([
            ['catId' => 1, 'name' => 'Computer', 'parId' => 0, 'desc' => 'Desktop, Laptop, Netbook'],
            ['catId' => 2, 'name' => 'Periferiche', 'parId' => 0, 'desc' => 'Hard Disk, Tastiere, Mouse'],
            ['catId' => 3, 'name' => 'Desktop', 'parId' => 1, 'desc' => 'Descrizione dei Prodotti Desktop'],
            ['catId' => 4, 'name' => 'Laptop', 'parId' => 1, 'desc' => 'Descrizione dei Prodotti Laptop'],
            ['catId' => 5, 'name' => 'NetBook', 'parId' => 1, 'desc' => 'Descrizione dei Prodotti Netbook'],
            ['catId' => 6, 'name' => 'HardDisk', 'parId' => 2, 'desc' => 'Descrizione dei Dischi Rigidi'],
        ]);
 */
        DB::table('services')->insert([
            ['id' => 1, 'house_id' => 1, 'nome' => 'Locale ricreativo', 'presente' => 1],
            ['id' => 2, 'house_id' => 1, 'nome' => 'Lavatrice', 'presente' => 1],
            ['id' => 3, 'house_id' => 1, 'nome' => 'Wifi',  'presente' => 1],
        ]);
 /* 

        DB::table('product')->insert([
            ['name' => 'NetBook Modello2', 'catId' => 5,
                'descShort' => 'Caratteristiche NetBook2', 'descLong' => self::DESCPROD,
                'price' => 219.34, 'discountPerc' => 12, 'discounted' => 0, 'image' => ''],
            ['name' => 'HardDisk Modello2', 'catId' => 6,
                'descShort' => 'Caratteristiche HardDisk2', 'descLong' => self::DESCPROD,
                'price' => 86.37, 'discountPerc' => 15, 'discounted' => 1, 'image' => 'Italy.gif'],
            ['name' => 'Desktop Modello1', 'catId' => 3,
                'descShort' => 'Caratteristiche Desktop1', 'descLong' => self::DESCPROD,
                'price' => 1230.49, 'discountPerc' => 25, 'discounted' => 1, 'image' => 'Brazil.gif'],
            ['name' => 'Laptop Modello1', 'catId' => 4,
                'descShort' => 'Caratteristiche Laptop1', 'descLong' => self::DESCPROD,
                'price' => 455.37, 'discountPerc' => 17, 'discounted' => 1, 'image' => ''],
            ['name' => 'Laptop Modello2', 'catId' => 4,
                'descShort' => 'Caratteristiche Laptop1', 'descLong' => self::DESCPROD,
                'price' => 1889.67, 'discountPerc' => 15, 'discounted' => 1, 'image' => 'Argentina.gif'],
            ['name' => 'Netbook Modello3', 'catId' => 5,
                'descShort' => 'Caratteristiche NetBook3', 'descLong' => self::DESCPROD,
                'price' => 259.99, 'discountPerc' => 17, 'discounted' => 0, 'image' => 'Red Apple.gif'],
            ['name' => 'Laptop Modello3', 'catId' => 4,
                'descShort' => 'Caratteristiche Laptop3', 'descLong' => self::DESCPROD,
                'price' => 998.99, 'discountPerc' => 23, 'discounted' => 1, 'image' => 'UK.gif'],
            ['name' => 'HardDisk Modello1', 'catId' => 6,
                'descShort' => 'Caratteristiche HardDisk1', 'descLong' => self::DESCPROD,
                'price' => 88.93, 'discountPerc' => 5, 'discounted' => 0, 'image' => 'USA.gif'],
            ['name' => 'HardDisk Modello4', 'catId' => 6,
                'descShort' => 'Caratteristiche HardDisk4', 'descLong' => self::DESCPROD,
                'price' => 78.66, 'discountPerc' => 7, 'discounted' => 01, 'image' => 'Ukraine.gif']
        ]);*/

    }

}
