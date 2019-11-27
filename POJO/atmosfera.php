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
    public function setElementoUno($elem){
        $this->elementoUno = $elem;
    }
    public function getElementoUno(){
        return this->elementoUno;
    }
    public function setElementoDos($elemD){
        $this->elementoDos = $elemD;
    }
    
    public function getElementoDos(){
        return this->elementoDos;
    }
    public function setElementoTres($elemT){
        $this->elementoTres = $elemT;
    }
    
    public function getElementoTres(){
        return this->elementoTres;
    }
}