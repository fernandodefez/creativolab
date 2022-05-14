<?php

namespace Creativolab\App\Repositories\Code;


use Creativolab\App\Database;

class CodeRepository implements CodeRepositoryInterface
{

    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    /**
     * Find all available codes
     * @return array
     */
    public function findAll(): array
    {
        $sql = "SELECT * FROM codes";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $rows = $stmt->fetchAll();

        $codes = [];

        if ($stmt->rowCount() >= 0) {
            foreach ($rows as $row) {
                $code = array(
                    'id'        =>      $row['id'],
                    'country'   =>      $row['country'],
                    'short'     =>      $row['short'],
                    'code'      =>      $row['code']
                );
                array_push($codes, $code);
            }
        }

        return $codes;
    }
}