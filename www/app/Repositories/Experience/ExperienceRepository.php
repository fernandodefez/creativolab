<?php

/**
 * @author Fernando Defez <fernandodefez@outlook.com>
 */

namespace Creativolab\App\Repositories\Experience;

use Creativolab\App\Database;
use Creativolab\App\Models\Experience;
use Creativolab\App\Models\User;

class ExperienceRepository implements ExperienceRepositoryInterface {

    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * This method performs the users experiences creation
     * 
     * @param Experience $experience
     * @return bool
     */
    public function create(Experience $experience) : bool
    {
        $sql = "INSERT INTO users_experiences 
        (position, company, started_at, ended_at, details, user_id_fk) 
        VALUES (?,?,?,?,?,?)";

        $this->db->connect()->prepare($sql)->execute(
            [
                $experience->getPosition(),
                $experience->getCompany(),
                $experience->getStartedAt(),
                $experience->getEndedAt(),
                $experience->getDetails(),
                $experience->getUser()
            ]
        );
        return true;
    }

    /**
     * This method retrieves a user's experience information based on it's id
     * 
     * @param Experience $experience
     * @return array
     */
    public function get(Experience $experience) : array
    {
        $sql = "SELECT * FROM users_experiences WHERE id = :id AND user_id_fk =:user_id_fk ";

        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(
            [
                'id' => $experience->getId(),
                'user_id_fk' => $experience->getUser()
            ]
        );
        $row = $stmt->fetch();

        $experience = [];

        if ($stmt->rowCount() == 1) {
            $experience['id']           =   $row['id'];
            $experience['position']     =   $row['position'];
            $experience['company']      =   $row['company'];
            $experience['started_at']   =   $row['started_at'];
            $experience['ended_at']     =   $row['ended_at'];
            $experience['details']      =   $row['details'];
            $experience['user_id_fk']   =   $row['user_id_fk'];
        }
        return $experience;
    }

    /**
     * Find all user's experiences
     * 
     * @param User $user
     * @return array
     */
    public function findAll(User $user) : array
    {
        $sql = "SELECT * FROM users_experiences WHERE user_id_fk = :user_id_fk";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(
            [
                'user_id_fk' => $user->getId()
            ]
        );
        $rows = $stmt->fetchAll();

        $experiences = [];
        if ($stmt->rowCount() >= 1) {
            foreach ($rows as $row) {
                $experience = new Experience();
                $experience->setId($row['id']);
                $experience->setPosition($row['position']);
                $experience->setCompany($row['company']);
                $experience->setStartedAt($row['started_at']);
                $experience->setEndedAt($row['ended_at']);
                $experience->setDetails($row['details']);
                $experience->setUser($user->getId());

                array_push($experiences, $experience);
            }
        }
        return $experiences;
    }

    /**
     * Updates a specified user's experience
     * and return true or false whether it was updated
     * 
     * @param Experience $experience
     * @return bool
     */
    public function update(Experience $experience) : bool
    {
        $sql = "
        UPDATE users_experiences 
        SET position = :position, company =:company, started_at = :started_at, ended_at = :ended_at, details =:details  
        WHERE id = :id AND user_id_fk = :user_id_fk";

        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(
            [
                "position"      =>  $experience->getPosition(),
                "company"       =>  $experience->getCompany(),
                "started_at"    =>  $experience->getStartedAt(),
                "ended_at"      =>  $experience->getEndedAt(),
                "details"       =>  $experience->getDetails(),
                "id"            =>  $experience->getId(),
                "user_id_fk"    =>  $experience->getUser()
            ]
        );
        $row = $stmt->rowCount();
        return $row == 1;
    }

    /**
     * Deletes a specified user's experience
     * and return true or false whether it was deleted
     * 
     * @param Experience $experience
     * @return bool
     */
    public function delete(Experience $experience) : bool
    {
        $sql = "DELETE FROM users_experiences WHERE id = :id AND user_id_fk = :user_id_fk";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(["id" => $experience->getId(), "user_id_fk" => $experience->getUser()]);
        $row = $stmt->rowCount();

        return $row == 1;
    }
}
