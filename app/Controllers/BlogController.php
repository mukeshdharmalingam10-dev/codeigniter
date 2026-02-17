<?php

namespace App\Controllers;

use App\Models\BlogModel;

class BlogController extends BaseController
{
    public function index()
    {
        $model = new BlogModel();
        $data['blogs'] = $model->orderBy('id', 'DESC')->paginate(5);
        $data['pager'] = $model->pager;

        return view('blogs', $data);
    }

    public function create()
    {
        $model = new BlogModel();

        $model->save([
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description')
        ]);

        return redirect()->to('/blogs');
    }

    public function update($id)
    {
        $model = new BlogModel();

        $model->update($id, [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description')
        ]);

        return redirect()->to('/blogs');
    }

    public function delete($id)
    {
        $model = new BlogModel();
        $model->delete($id);

        return redirect()->to('/blogs');
    }
}
