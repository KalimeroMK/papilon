<?php

namespace App\Http\Controllers;

use App\Category as Category;
use App\Country as Country;
use App\Slider as Slider;
use App\User as User;
use App\Workflow as Workflow;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Session;
use Validator;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $sliders = Slider::all();
        $data = ['sliders' => $sliders, "users" => $users];
        return view('admin.sliders')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $countries = Country::orderBy('name', 'asc')->get();
        $workflows = Workflow::orderBy('id', 'desc')->get();
        $data = ['countries' => $countries, 'users' => $users, 'workflows' => $workflows];
        return view('admin.createslider')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'required',
        ]);

        if ($errors->fails()) {
            return redirect()->back()
                ->withErrors($errors)
                ->withInput();
        }

        $request['title'] = strip_tags($request['title']);
        $request['slug'] = str_slug($request['title']);

        $slug = Slider::where('title', $request['title'])->get();
        (int)$count = count($slug);

        if ($count > 0) {
            $request['slug'] = $request['slug'] . '-' . $count;
        }

        $input = $request->all();

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $path = public_path() . '/assets/img/slider';
            $pathThumb = public_path() . '/assets/img/slider/thumbnails/';
            $pathMedium = public_path() . '/assets/img/slider/medium/';
            $ext = $image->getClientOriginalExtension();

            if ($count > 0) {
                $imageName = str_slug($input['title']) . '-' . $count . '.' . $ext;
            } else {
                $imageName = str_slug($input['title']) . '.' . $ext;
            }

            $image->move($path, $imageName);

            $findimage = public_path() . '/assets/img/slider/' . $imageName;
            $imagethumb = Image::make($findimage)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $imagemedium = Image::make($findimage)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $imagethumb->save($pathThumb . $imageName);
            $imagemedium->save($pathMedium . $imageName);

            $image = $request->imagethumb = $imageName;
            $imagethumb = $request->image = $imageName;
            $imagemedium = $request->image = $imageName;

        }

        $input['image'] = $image;
        $input['imagemedium'] = $imagemedium;
        $input['imagethumb'] = $imagethumb;

        $slider = Slider::create($input);

        Session::flash('flash_message', 'Slider image successfully created!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::FindOrFail($id);
        $categories = Category::get();
        $users = User::get();
        $workflows = Workflow::orderBy('id', 'desc')->get();
        $data = ['slider' => $slider, 'categories' => $categories, 'users' => $users, 'workflows' => $workflows];
        return view('admin.editslider')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $errors = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        if ($errors->fails()) {
            return redirect()->back()
                ->withErrors($errors)
                ->withInput();
        }

        $request['title'] = strip_tags($request['title']);

        $slugname = str_slug($request['title']);

        $input = $request->all();
        $slider = Slider::FindOrFail($id);

        $slider->fill($input)->save();

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $path = public_path() . '/assets/img/slider';
            $pathThumb = public_path() . '/assets/img/slider/thumbnails/';
            $pathMedium = public_path() . '/assets/img/slider/medium/';
            $ext = $image->getClientOriginalExtension();

            $imageName = $slugname . '.' . $ext;

            $image->move($path, $imageName);

            $findimage = public_path() . '/assets/img/slider/' . $imageName;
            $imagethumb = Image::make($findimage)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $imagemedium = Image::make($findimage)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $imagethumb->save($pathThumb . $imageName);
            $imagemedium->save($pathMedium . $imageName);

            $image = $request->imagethumb = $imageName;
            $imagethumb = $request->image = $imageName;
            $imagemedium = $request->image = $imageName;

            $input['image'] = $image;
            $input['imagemedium'] = $imagemedium;
            $input['imagethumb'] = $imagethumb;

        }

        $slider->fill($input)->save();

        Session::flash('flash_message', 'Slider successfully edited!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::FindOrFail($id);

        // Delete blog images
        $image = public_path() . '/assets/img/slider/' . $slider->image;
        $imagemedium = public_path() . '/assets/img/slider/medium/' . $slider->image;
        $imagethumb = public_path() . '/assets/img/slider/thumbnails/' . $slider->image;

        unlink($image);
        unlink($imagemedium);
        unlink($imagethumb);

        $slider->delete();
        return redirect('/admin/slider');
    }
}
