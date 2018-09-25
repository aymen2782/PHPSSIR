<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 25/09/2018
 * Time: 13:34
 */

class Personne
{

    private $id;
    private $nom;
    private $cin;
    private $prenom;
    private $age;
    private $bdd;
    /**
     * Personne constructor.
     * @param $id
     * @param $nom
     * @param $cin
     * @param $prenom
     * @param $age
     */
    public function __construct($id =null, $nom =null, $cin=null, $prenom=null, $age=null)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->cin = $cin;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->bdd = ConnexionBD::getInstance();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param mixed $cin
     */
    public function setCin($cin): void
    {
        $this->cin = $cin;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    public function finAll() {

        $req="select * From personne";
        $reponse = $this->bdd->query($req);
        $personnes = $reponse->fetchAll(PDO::FETCH_OBJ);
        return $personnes;
    }

    public function deletePersonne($id) {

        $req = $this->bdd->prepare("delete from personne where id = :id") ;
        $req->execute(
            array(
                'id'=>$id
            )
        );
    }


}