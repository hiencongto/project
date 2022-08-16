<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Repositories\RepositoryInterface\CategoryRepositoryInterface;

class CategoryController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository) //dependency injection: giam thieu su phu thuoc
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function viewAdd()
    {
        return view('voxo_backends.add_new_category');
    }

    public function create(Request $request)
    {
        $data = [
          'name' => $request->name,
          'description' => $request->description,
          'status' => $request->status
        ];

        if(! $this->categoryRepository->create($data)){
            return view('voxo_backends.add_new_category')->with('msg', 'fail');
        }

        return view('voxo_backends.add_new_category')->with('msg', 'success');
    }

    public function list()
    {
        $categories = $this->categoryRepository->getAll();

        return view('voxo_backends.all_categories', [
            'categories' => $categories,
            'msg' => Session::get('msg')
        ]);
    }

    public function destroy(int $id)
    {
        $category = $this->categoryRepository->find($id);

        if (! $category) {
            return redirect()->route('all_categories')->with('msg', 'fail');
        }

        if (! $this->categoryRepository->delete($id)) {
            return redirect()->route('all_categories')->with('msg', 'fail');
        }

        return redirect()->route('all_categories')->with('msg', 'success');
    }

    public function show(int $id)
    {
        $category = $this->categoryRepository->find($id);

        if (! $category) {
            return view('voxo_backends.all_categories', [
                'msg' => 'fail'
            ]);
        }

        return view('voxo_backends.edit_category', [
            'category' => $category
        ]);
    }

    public function update(int $id, Request $request)
    {
        $category = $this->categoryRepository->find($id);

        if (! $category) {
            return view('voxo_backends.show_category', [
                'msg' => 'fail'
            ]);
        }

        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status
        ];
        $this->categoryRepository->update($id,$data);

        return redirect()->route('all_categories')->with('msg', 'success');
    }
}
