class Atmosfera {
    //ATTRIBUTE
    private $elementoUno;
    private $elementoDos;
    private $elementoTres;

    //CONSTRUCTOR
    public function __construct($elementoUno, $elementoDos, $elementoTres){
        $this->elementoUno = $elementoUno;
        $this->elementoDos = $elementoDos;
        $this->elementoTres = $elementoTres;
    }
    //GETTER SETTER
    public function setElementoUno($nombre){
        $this->elementoUno = $nombre;
    }
    public function getElementoUno(){
        return this->elementoUno;
    }
    public function setAtmosphere($atmos){
        $this->elementoDos = $atmos;
    }
    
    public function getAtmosphere(){
        return this->elementoDos;
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