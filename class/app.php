<?php
class App
{
    private $db_name, $db_user, $db_pass, $db_host, $pdo;



    public function __construct( $db_name = "congopedia", $db_user = "root", $db_pass = "", $db_host = 'localhost' )
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }

    public function getPDO()
    {
        try {
            if ( $this->pdo === null ) {
                $pdo_ = new PDO( 'mysql:host=' . $this->db_host . '; port=3306; dbname=' . $this->db_name . ';charset=utf8', $this->db_user, $this->db_pass );
                $pdo_->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
                $this->pdo = $pdo_;
            }
        } catch ( PDOException $ex ) {
            die( $ex->getMessage() );
        }
        return $this->pdo;
    }

    public function query_exec( $statement )
    {
        $req = $this->getPDO()->query( $statement );
        $data = $req->fetchAll( PDO::FETCH_OBJ );
        return $data;
    }

//    public function rowCount($variable){
//        return $this->getPDO()->rowCount();
//    }

    public function prepare( $statement, $attribut = [], $test )
    {
        try {
            $req = $this->getPDO()->prepare( $statement );
            switch ( $test ) {
                //lors de l'insertion ou update
                case 1:
                    return $req->execute($attribut);

                    break;
                //lors de l'affichage
                case 6:
                    $req->execute();
                    return $req->fetchAll();
                    break;
                //login
                case 2:
                    $req->execute($attribut);
                    return $req->rowCount();
                    break;

                default:
                    $req->execute( $attribut );
                    return ( $req->fetchAll() );
            }
        } catch ( PDOException $exception ) {
            die( $exception->getMessage());
        }
    }

    public function fetchPrepared( $statement )
    {
        $req = $this->getPDO()->prepare( $statement );
        $req->execute();
        return $req->fetchAll();
    }
    public function fetch( $statement )
    {
        $req = $this->getPDO()->query( $statement );
        $data = $req->fetch();
        return $data;
    }

    public function getValues($rqt)
    {
        $querry = $this->getPDO()->prepare($rqt);
        $querry->execute();
        while ($row = $querry->fetch()) {
            return $row["value"];
        }
        return null;
    }
    public function dateconv( $date )
    {
        $dateconv = date("d/m/Y", strtotime($date));
        return $dateconv;
    }

    public function dateconv_complete( $date )
    {
        $dateconv = date("d/m/Y H:i", strtotime($date));
        return $dateconv;
    }

    public function slugify($string, $delimiter = '-') {
        $oldLocale = setlocale(LC_ALL, '0');
        setlocale(LC_ALL, 'en_US.UTF-8');
        $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
        $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
        $clean = strtolower($clean);
        $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
        $clean = trim($clean, $delimiter);
        setlocale(LC_ALL, $oldLocale);
        return $clean;
    }


}

$app=new App('congopedia');
?>
