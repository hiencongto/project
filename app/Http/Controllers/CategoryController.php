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
        return view('categories.add');
    }

    public function create(Request $request)
    {
        $data = [
          'name' => $request->name,
          'description' => $request->description,
          'status' => $request->status
        ];
        if(! $this->categoryRepository->create($data)){
            return view('categories.add')->with('msg', 'fail');
        }
        return view('categories.add')->with('msg', 'success');
    }

    public function list()
    {
        $categories = $this->categoryRepository->getAll();

        return view('categories.list', [
            'categories' => $categories,
            'msg' => Session::get('msg')
        ]);
    }

    public function destroy(int $id)
    {
        $category = $this->categoryRepository->find($id);
        if (! $category) {
            return redirect()->route('list')->with('msg', 'fail');
        }
        if (! $this->categoryRepository->delete($id)) {
            return redirect()->route('list')->with('msg', 'fail');
        }

        return redirect()->route('list')->with('msg', 'success');
    }

    public function show(int $id)
    {
        $category = $this->categoryRepository->find($id);
        if (! $category) {
            return view('categories.edit', [
                'msg' => 'fail'
            ]);
        }

        return view('categories.edit', [
            'category' => $category
        ]);
    }

    public function update(int $id, Request $request)
    {
//        $category = Category::find($id);
//        if (! $category) {
//            return view('categories.edit', [
//                'msg' => 'fail'
//            ]);
//        }
//        $category->name = $request->name;
//        $category->description = $request->description;
//        $category->status = $request->status;
//        if (! $category->save()) {
//            return redirect()->route('list')->with('msg', 'fail');
//        }
//
//        return redirect()->route('list')->with('msg', 'success');

        //Cach 2

        $category = $this->categoryRepository->find($id);
        if (! $category) {
            return view('categories.edit', [
                'msg' => 'fail'
            ]);
        }

        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status
        ];
        $this->categoryRepository->update($id,$data);

        return redirect()->route('list')->with('msg', 'success');
    }
}
