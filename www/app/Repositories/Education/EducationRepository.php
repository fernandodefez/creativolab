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
     * This method performs the user's degree creation
     *
     * @param Education $degree
     * @return bool
     */
    public function create(Education $degree) : bool
    {
        $sql ="
        INSERT INTO users_education 
        (level, degree, institute, started_at, ended_at, details, user_id_fk)  
        VALUES (?,?,?,?,?,?,?) ";

        $this->db->connect()->prepare($sql)->execute(
            [
                $degree->getLevel(),
                $degree->getDegree(),
                $degree->getInstitute(),
                $degree->getStartedAt(),
                $degree->getEndedAt(),
                $degree->getDetails(),
                $degree->getUser()
            ]
        );
        return true;
    }

    /**
     * This method retrieves a user's degree information based on it's id
     *
     * @param Education $degree
     * @return array
     */
    public function get(Education $degree) : array
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

        $degree = [];

        if ($stmt->rowCount() >= 1) {
            $degree['id']           =   $row['id'];
            $degree['level']        =   $row['level'];
            $degree['degree']       =   $row['degree'];
            $degree['institute']    =   $row['institute'];
            $degree['started_at']   =   $row['started_at'];
            $degree['ended_at']     =   $row['ended_at'];
            $degree['details']      =   $row['details'];
            $degree['user_id_fk']   =   $row['user_id_fk'];
        }
        return $degree;
    }

    /**
     * Find all user's degrees
     *
     * @param User $user
     * @return array
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

        $degrees = [];

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
     * Updates a specified user's experience
     * and return true or false whether it was updated
     *
     * @param Education $degree
     * @return bool
     */
    public function update(Education $degree) : bool
    {
        $sql = "
        UPDATE users_education 
        SET level = :level, degree =:degree, institute =:institute, started_at = :started_at, ended_at = :ended_at, details =:details  
        WHERE id = :id AND user_id_fk = :user_id_fk";

        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(
            [
                "level"         =>  $degree->getLevel(),
                "degree"        =>  $degree->getDegree(),
                "institute"     =>  $degree->getInstitute(),
                "started_at"    =>  $degree->getStartedAt(),
                "ended_at"      =>  $degree->getEndedAt(),
                "details"       =>  $degree->getDetails(),
                "id"            =>  $degree->getId(),
                "user_id_fk"    =>  $degree->getUser()
            ]
        );
        $row = $stmt->rowCount();
        return $row == 1;
    }

    /**
     * Deletes a specified user's experience
     * and return true or false whether it was deleted
     *
     * @param Education $degree
     * @return bool
     */
    public function delete(Education $degree) : bool
    {
        $sql = "DELETE FROM users_education WHERE id = :id AND user_id_fk = :user_id_fk";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(["id" => $degree->getId(), "user_id_fk" => $degree->getUser()]);

        $row = $stmt->rowCount();
        return $row == 1;
    }
}