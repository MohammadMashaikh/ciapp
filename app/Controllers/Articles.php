<?php

namespace App\Controllers;

use App\Models\ArticleModel;
use Config\View;

class Articles extends BaseController
{

    public function index(): string
    {
        $model = new ArticleModel();
        $data = $model->findAll();

        return view("Articles/index", [
            "articles" => $data
        ]);
    }

    public function show($id)
    {
        $model = new ArticleModel();
        $article = $model->find($id);

        return View("Articles/show", [
            "article" => $article
        ]);
    }

    public function new()
    {
        return view("Articles/new");
    }

    public function create()
    {
        $model = new ArticleModel();

        $id = $model->insert($this->request->getPost());
        if ($id === false) {
            return redirect()->back()->with("errors", $model->errors())->withInput();
        }
        return redirect()->to("articles/$id")->with("message", "Article Saved.");
    }

    public function edit($id)
    {
        $model = new ArticleModel();
        $article = $model->find($id);

        return View("Articles/edit", [
            "article" => $article
        ]);
    }

    public function update($id)
    {
        $model = new ArticleModel();
        $data = $this->request->getPost();
        $article = $model->update($id, $data);

        if ($article) {
            return redirect()->to("articles/$id")->with("message", "Article updated.");
        }
        return redirect()->back()->with("errors", $model->errors())->withInput();
    }
}
