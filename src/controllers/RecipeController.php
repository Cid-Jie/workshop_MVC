<?php

require_once __DIR__ . '/../models/RecipeModel.php';

class RecipeController
{
    public RecipeModel $model;

    public function __construct()
    {
        $this->model = new RecipeModel();
    }

    public function browse() 
    {
        $recipes = $this->model->getAll();
        require __DIR__ . '/../views/index.php';
    }

    public function show(int $id)
    {
        $recipe = $this->model->getById($id);

        // Database result check
        if (!isset($recipe['title']) || !isset($recipe['description'])) {
            header("Location: /");
            exit("Recipe not found");
        }

        // Generate the web page
        require __DIR__.'/../views/show.php';
    }

    public function add()
    {
        if ($_SERVER["REQUEST_METHOD"] === 'POST') {
            $recipe = array_map('trim', $_POST);
        
            if (empty($errors)) {
                $this->model->save($recipe);
                header('Location: /');
                die();
            }
        }
        
        require __DIR__ . '/../views/form.php';
    }

    public function edit(int $id)
    {
        if ($_SERVER["REQUEST_METHOD"] === 'POST') {
            $recipe = array_map('trim', $_POST);
        
            if (empty($errors)) {
                $this->model->update($recipe);
                header('Location: /');
                die();
            }
        }

        $recipe = $this->model->getById($id);
        
        require __DIR__ . '/../views/edit.php';
    }
}