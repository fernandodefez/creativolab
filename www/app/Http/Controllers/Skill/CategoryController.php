<?php

namespace Creativolab\App\Http\Controllers\Skill;

use Creativolab\App\Auth;
use Creativolab\App\Http\Controllers\Controller;
use Creativolab\App\Models\Skill\Category;
use Creativolab\App\Models\User;
use Creativolab\App\Repositories\Skill\CategoryRepository;

class CategoryController extends Controller
{
    const SKILL_MAX_LENGTH = 150;

    public function __construct()
    {
        parent::__construct();
    }

    public function show()
    {
        $data = [];

        if (Auth::user()) {
            $user = new User();
            $user->setId($_SESSION['user_id']);
            $categories = (new CategoryRepository())->findAll($user);
            $data['categories'] = $categories;
            $data['success'] = true;
        } else {
            $data['success'] = false;
            $data['unauthorized'] = "No tienes permitido realizar esta operación";
            http_response_code(401);
        }
        echo json_encode($data);
    }

    public function store()
    {
        if (Auth::user()) {

            $errors = [];
            $data = [];
            $values = [];

            $category = (isset($_POST['category'])) ? htmlspecialchars(trim($_POST['category'])) : '';

            if (empty($category)) {
                $errors['category'] = 'Este campo es obligatorio';
            } else if (strlen($category) > self::SKILL_MAX_LENGTH) {
                $errors['category'] = 'Este campo solo admite hasta ' . self::SKILL_MAX_LENGTH;
            } else {
                $values['category'] = $category;
            }

            if (!empty($errors)) {
                $data['success'] = false;
                $data['errors'] = $errors;
            } else {

                $categoryRepository = new CategoryRepository();
                $categoryRepository->create(new Category(-1, $category, $_SESSION['user_id']));

                $data['success'] = true;
                $data['values'] = $values;
            }

        } else {
            $data['success'] = false;
            $data['unauthorized'] = "No tienes permitido realizar esta operación";
            http_response_code(401);
        }
        echo json_encode($data);
    }
}