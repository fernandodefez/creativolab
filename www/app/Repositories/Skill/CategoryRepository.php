<?php

namespace Creativolab\App\Repositories\Skill;

use Creativolab\App\Database;
use Creativolab\App\Models\Skill\Category;
use Creativolab\App\Models\User;

class CategoryRepository implements CategoryRepositoryInterface
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * This method performs the users skill's category creation
     *
     * @param Category $category
     * @return bool
     */
    public function create(Category $category): bool
    {
        $sql = "INSERT INTO skills_categories (category, user_id_fk)  VALUES (?,?)";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(
            [
                $category->getCategory(),
                $category->getUser()
            ]
        );
        return $stmt->rowCount() == 1;
    }

    public function get(Category $category): array
    {
        // TODO: Implement get() method.
        return [];
    }

    public function findAll(User $user): array
    {
        $sql = "SELECT * FROM skills_categories WHERE user_id_fk = :user_id_fk";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute([ 'user_id_fk' => $user->getId() ]);
        $rows = $stmt->fetchAll();

        $categories = [];
        if ($stmt->rowCount() >= 1) {
            foreach ($rows as $row) {
                $categories[] = [
                    'id' => $row['id'],
                    'category' => $row['category'],
                    'user_id_fk' => $row['user_id_fk'],
                ];
            }
        }
        return $categories;
    }

    public function delete(Category $category): bool
    {
        // TODO: Implement delete() method.
        return false;
    }
}