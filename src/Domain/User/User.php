<?php
declare(strict_types=1);

namespace App\Domain\User;

use JsonSerializable;

class User implements JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $adresse;
    
    /**
     * @var int
     */
    private $code_postal;

    /**
     * @var string
     */
    private $ville;

    /**
     * @var int
     */
    private $id_client;


    /**
     * 
     * @param integer|null $id
     * @param string $nom
     * @param string $email
     * @param string $adresse
     * @param integer $code_postal
     * @param string $ville
     * @param integer $id_client
     */
    public function __construct(?int $id, string $nom,string $email, string $adresse, int $code_postal, string $ville, int $id_client)
    {
        $this->id = $id;
        $this->nom = strtolower($nom);      
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     *
     *
     * @return string
     */
    public function getEmail(): string {
        return $this->email;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getAdresse():string {
        return $this->adresse;
    }

    /**
     * Undocumented function
     *
     * @return integer
     */
    public function getCodePostal():int {
        return $this->code_postal;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getVille():string {
        return $this->ville;
    }

    /**
     * Undocumented function
     *
     * @return integer
     */
    public function getIdClient():int {
        return $this->id_client;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'nom' => $this->nom,
            'email' => $this->email,
            'adresse' => $this->adresse,
            'code_postal' => $this->code_postal,
            'ville' => $this->ville,
            'id_client' => $this->id_client,
        ];
    }
}
