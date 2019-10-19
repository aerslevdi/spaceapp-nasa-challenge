class User{
    //ATTRIBUTE
    private $name;
    private $email;
    private $password;

    //CONSTRUCTOR
    public function __construct($name, $email, $password){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function login($username, $password){
        //Login code goes here.
    }
 
    public function logout(){
        //Logout code goes here.
    }
}