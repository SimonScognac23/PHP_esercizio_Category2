<?php




/* Crea un nuovo file chiamato index.php e, importando la classe appena creata, crea una classe Post con i seguenti attributi:
Titolo
Categoria
Tag

Crea delle istanze di classe Post, iniettando la dipendenze Categoria all’interno dell’attributo dedicato. Crea anche dei metodi per visualizzare gli articoli completi. */






require_once 'class.php';  // require_once  -->  serve per importare il file class.php dentro index.php

class Post {

    private $categoria;

    private $titolo;
  
    private $tag;

    public function __construct( Category $_categoria, string $_titolo, array $_tag) {   // DEPENDENCY INJECTION -->  // qua gli dico di accettare come parametro non solo un parametro primitivo, anche degli oggetti
    //  io scrivendo Category istruisco il mio programma ad accettare i figli diretti di Category, ossia Attualita,Gossip,Storia,Sport

        $this->categoria = $_categoria;

        $this->titolo = $_titolo;   // valorizziamo gli attributi

        $this->tag = $_tag;

    }




   // Metodo per richiamare l'articolo completo
   public function getPostDetails() {

    echo "Categoria: " . $this->categoria->getMyCategory() . " - {$this->titolo} - Tag: " . implode(' ', $this->tag);

    //  La funzione implode() in PHP viene usata per unire gli elementi di un array in una singola stringa. Il primo parametro di implode() è il delimitatore, ovvero il carattere (o stringa) che verrà inserito tra gli elementi dell'array, mentre il secondo parametro è l'array che si deve unire, in questo caso è l'array tag.
}


}




//Creazione di istanze di categoria 

// $attualita = new Attualita();
// $sport = new Sport();
// $gossip = new Gossip();
// $storia = new Storia();







// Creazione di istanze di Post con il metodo  INLINE VARIABLE-->>  1. creo l'oggetto   2 Passo l'istanza di oggetto


$post1 = new Post( new Attualita(), "Sanremo 2025", ["Il vincitore di Sanremo è Noyz Narcos ", "portando la canzone Sinnò Me moro\n"]); // istanziamo un oggetto di classe Attualita e passarlo come parametro, senza definirgli un nome, METODO PIU VELOCE 

$post2 = new Post( new Sport(), "NBA", ["Luka Doncic ai Lakers. ", "I 76ers onorano Allen iverson con una statua sulla Legends Walk\n"]); 

$post3 = new Post( new Gossip(), "Super Bowl", ["Kendrick Lamar conquista l Half Time del Super Bowl. ", "Tutto sul look di Kendrick Lamar\n"]);

$post4 = new Post( new Storia(), "Archeologia", ["Una scoperta incredibile: una tomba intatta del Medio Regno trovata in Egitto. ", "Un viaggio nel tempo: la straordinaria scoperta di una tomba intatta del Medio Regno in Egitto\n"]);











// Visualizzazione dei post
$post1->getPostDetails();

$post2->getPostDetails();

$post3->getPostDetails();

$post4->getPostDetails();



?>
