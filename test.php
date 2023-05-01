<?

class ctrCheck
{

    private $counter;
    private $params;

    public function __construct(array $params)
    {
        $this->params = $params;
    }

    public function valid(string $string){

        $this->counter = 0;

        foreach( str_split($string) as $simbol ){
   
            $this->counter += isset( $this->params[ $simbol ] ) ? $this->params[ $simbol ]: 0 ;      
        }
        
        return $this->counter == 0 ? true : false;
    }  
}




$params = [ '{' => 1, '}' => -1  ];

$checker = new ctrCheck($params);

print $checker->valid("{{lajkdhf{adfa}{}adfasdfadf{}}}") ? 'valid ' : 'unvalid ' ;
print $checker->valid("{{lajkdhf{adfa") ? 'valid ' : 'unvalid ' ; 