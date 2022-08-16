<?php

namespace App\Http\Controllers;

use App\Repositories\RepositoryInterface\BrandRepositoryInterface;
use Illuminate\Http\Request;
use Session;

class BrandController extends Controller
{
    protected $brandRepository ;

    public function __construct(BrandRepositoryInterface $brandRepository)
    {
        $this->brandRepository=$brandRepository;
    }

    public  function viewAdd()
    {
        return view('voxo_backends.add_new_brand');
    }

    public function create(Request $request)
    {
        if (! $request -> hasFile('image')){
            return view('voxo_backends.add_new_brand')->with('msg', 'Chọn file ảnh đê');
        }

        $image = $request -> file('image');
        $image_name =$image -> getClientoriginalName();
        $storedPath = $image->move('images', $image_name);

        $data = [
            'name' => $request['name'],
            'image' => $image -> getClientoriginalName(),
            'status' => $request['status']
        ];

        if (! $this->brandRepository->create($data)){
            return view('voxo_backends.add_new_brand')->with('msg', 'fail');
        }

        return view('voxo_backends.add_new_brand')->with('msg', 'success');
    }

    public function list()
    {
        $brands = $this->brandRepository->getAll();

        return view('voxo_backends.all_brands', [
            'brands' => $brands,
            'msg' => Session::get('msg')
            ]);
    }

    public  function destroy(int $id)
    {
        $brand = $this->brandRepository->find($id);
        if (! $brand){
            return redirect()->route('all_brands')->with('msg', 'fail');
        }

        if (! $this->brandRepository->delete($id)){
            return redirect()->route('all_brands')->with('msg', 'fail');
        }

        return redirect()->route('all_brands')->with('msg', 'fail');
    }

    public function show(int $id)
    {
        $brand = $this->brandRepository->find($id);
        if (! $brand){
            redirect()->route('all_brands')->with('msg', 'fail');
        }

        return view('voxo_backends.edit_brand',[
            'brand' => $brand
        ]);
    }

    public function update(int $id, Request $request)
    {
        $brand = $this->brandRepository->find($id);
        $image_edit = $request -> file('image');
        $image_name =$image_edit -> getClientoriginalName();
        $storedPath = $image_edit->move('images', $image_name);

        if (! $brand){
            redirect()->route()->with('msg', 'fail');
        }

        $data = [
            'name' => $request['name'],
            'image' => $image_edit -> getClientoriginalName(),
            'status' => $request['status']
        ];

        if (! $this->brandRepository->update($id, $data)){
            return view('voxo_backends.edit_brand',[
                'brand' => $brand
            ]);
        }

        return redirect()->route('all_brands')->with('msg', 'success');
    }
}
