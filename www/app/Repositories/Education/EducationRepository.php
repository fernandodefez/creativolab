<?php

namespace Creativolab\App\Repositories\Education;

use Creativolab\App\Database;
use Creativolab\App\Models\Education;
use Creativolab\App\Models\User;

class EducationRepository implements EducationRepositoryInterface {

    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * @param Education $degree
     * @return bool
     */
    public function create(Education $degree): bool
    {
        $sql ="
        INSERT INTO users_education 
        ( 
            level,
            degree, 
            institute, 
            started_at, 
            ended_at, 
            details, 
            user_id_fk
        )  
        VALUES (?,?,?,?,?,?,?) ";

        $this->db->connect()->prepare($sql)->execute(
            [
                $education->getLevel(),
                $education->getDegree(),
                $education->getInstitute(),
                $education->getStartedAt(),
                $education->getEndedAt(),
                $education->getDetails(),
                $education->getUser()
            ]
        );
        return true;
    }

    /**
     * @param User $user
     * @return array $degrees
     */
    public function findAll(User $user) : array
    {
        $sql = "SELECT * FROM users_education WHERE user_id_fk = :user_id_fk";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(
            [
                'user_id_fk' => $user->getId()
            ]
        );

        $rows = $stmt->fetchAll();

        $degrees = array();
        if ($stmt->rowCount() >= 1) {
            foreach ($rows as $row) {
                $degree = new Education();
                $degree->setId($row['id']);
                $degree->setLevel($row['level']);
                $degree->setDegree($row['degree']);
                $degree->setInstitute($row['institute']);
                $degree->setStartedAt($row['started_at']);
                $degree->setEndedAt($row['ended_at']);
                $degree->setDetails($row['details']);
                $degree->setUser($user->getId());

                array_push($degrees, $degree);
            }
        }
        return $degrees;
    }

    /**
     * @param Education $degree
     * @return Education $degree
     */
    public function get(Education $degree): Education
    {
        $sql = "SELECT * FROM users_education WHERE id = :id AND user_id_fk =:user_id_fk ";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(
            [
                'id'            =>      $degree->getId(),
                'user_id_fk'    =>      $degree->getUser()
            ]
        );
        $row = $stmt->fetch();

        if ($stmt->rowCount() >= 1) {
            $degree->setId($row['id']);
            $degree->setLevel($row['level']);
            $degree->setDegree($row['degree']);
            $degree->setInstitute($row['institute']);
            $degree->setStartedAt($row['started_at']);
            $degree->setEndedAt($row['ended_at']);
            $degree->setDetails($row['details']);
            $degree->setUser($row['user_id_fk']);
        } else {
            $degree->setId(-1);
        }
        return $degree;
    }


    /**
     * @param Education $degree
     * @return bool
     */
    public function delete(Education $degree): bool
    {
        $sql = "DELETE FROM users_education WHERE id = :id";
        $stmt = $this->db->connect()->prepare($sql);
        if ($stmt->execute(
            [
                "id" => $degree->getId()
            ]
        ))
        {
            return true;
        }
        return false;
    }
}