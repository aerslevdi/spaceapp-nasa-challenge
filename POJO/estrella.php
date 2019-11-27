class Estrella {
    //ATTRIBUTE
    private $name;
    private $mass;
    private $orbit;
    private $size;
    //CONSTRUCTOR
    public function __construct($name, $mass, $orbit, $size){
        $this->name = $name;
        $this->mass = $mass;
        $this->orbit = $orbit;
        $this->size = $size;
    }

    //GETTER SETTER
    public function setName($nombre){
        $this->name = $nombre;
    }
    public function getName(){
        return this->name;
    }
    public function setMass($masa){
        $this->mass = $masa;
    }
    
    public function getMass(){
        return this->mass;
    }
    public function setOrbit($orbita){
        $this->orbit = $orbita;
    }
    
    public function getOrbit(){
        return this->orbit;
    }
    public function setSize($tamanio){
        $this->size = $tamanio;
    }
    
    public function getSize(){
        return this->size;
    }
}