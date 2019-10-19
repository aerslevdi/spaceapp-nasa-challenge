class Luna {
    //ATTRIBUTE
    private $name;
    private $atmosphere;
    private $mass;
    private $orbit;
    private $size;
    
    //CONSTRUCTOR
    public function __construct($name, $atmosphere, $mass, $orbit, $size){
        $this->name = $name;
        $this->atmosphere = $atmosphere;
        $this->mass = $mass;
        $this->orbit = $orbit;
        $this->size = $size;
    }
}