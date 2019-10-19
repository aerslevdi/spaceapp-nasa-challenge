class Planeta {
    //ATTRIBUTES
    private $name;
    private $atmosphere;
    private $mass;
    private $orbit;
    private $size;
    private $moon;
    private $chem;

    //CONSTRUCTOR
    public function __construct($name, $atmosphere, $mass, $orbit, $size, $moon, $chem){
        $this->name = $name;
        $this->atmosphere = $atmosphere;
        $this->mass = $mass;
        $this->orbit = $orbit;
        $this->size = $size;
        $this->moon = $moon;
        $this->chem = $chem;
    }

    //GETTER SETTER
    public function setName($nombre){
        $this->name = $nombre;
    }
    public function getName(){
        return this->name;
    }
    public function setAtmosphere($atmos){
        $this->atmosphere = $atmos;
    }
    
    public function getAtmosphere(){
        return this->atmosphere;
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
    public function setMoon($luna){
        $this->moon = $luna;
    }
    public function getMoon(){
        return this->moon;
    }
    public function setChem($quim){
        $this->chem = $quim;
    }
    
    public function getChem(){
        return this->chem;
    }
}