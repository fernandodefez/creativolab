<?php

/**
 * @author Fernando Defez <fernandodefez@outlook.com>
 */

namespace Creativolab\App\Repositories\Profession;

use Creativolab\App\Database;
use Creativolab\App\Models\Profession;
use Creativolab\App\Models\User;

class ProfessionRepository implements ProfessionRepositoryInterface {

    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * This method gets the user's profession
     * 
     * @param User $user
     * @return Profession $profession
    */
    public function getProfessionByUser(User $user): Profession
    {
        $sql = "SELECT * FROM professions WHERE id = :id";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(
            [
                'id' => $user->getProfession()
            ]
        );
        $row = $stmt->fetch();

        $profession = new Profession();

        if ($stmt->rowCount() === 1) {
            $profession->setId($row['id']);
            $profession->setProfession($row['profession']);
            $profession->setTemplate($row['template']);
        } else {
            $profession->setId(-1);
        }
        return $profession;
    }

    /**
     * Find all available professions
     * 
     * @return array
     */
    public function findAll(): array
    {
        $sql = "SELECT * FROM professions";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $rows = $stmt->fetchAll();

        $professions = [];

        if ($stmt->rowCount() >= 0) {
            foreach ($rows as $row) {
                $profession = new Profession();
                $profession->setId($row['id']);
                $profession->setProfession($row['profession']);
                $profession->setTemplate($row['template']);
                array_push($professions, $profession);
            }
        }

        return $professions;
    }
}