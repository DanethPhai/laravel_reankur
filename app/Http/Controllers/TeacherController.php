<?php
namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('teacher.index', compact('teachers'));
    }

    public function create()
    {
        return view('teacher.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'birth' => 'required',
            'tel' => 'required',
            'level' => 'required',
            'major' => 'required',
            'imagep' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2047',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'img/';
            $productImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $productImage);
            $input['image'] = "$productImage";
        }
        if ($imagep = $request->file('imagep')) {
            $destinationPath = 'img/';
            $productImage = date('YmdHis') . "." . $imagep->getClientOriginalExtension();
            $imagep->move($destinationPath, $productImage);
            $input['imagep'] = "$productImage";
        }
        Teacher::create($input);
        return redirect()->route('teacher.index')
            ->with('success','Product created successfully.');
    }

    public function show(Teacher $teacher)
    {
        return view('teacher.show', compact('teacher'));
    }

    public function edit(Teacher $teacher)
    {
        return view('teacher.edit', compact('teacher'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'name' => 'required',
            'birth' => 'required',
            'tel' => 'required',
            'level' => 'required',
            'major' => 'required',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'img/';
            $productImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $productImage);
            $input['image'] = "$productImage";
        } else {
            unset($input['image']);
        }

        $teacher->update($input);
        return redirect()->route('teacher.index')
            ->with('success','Product updated successfully.');
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teacher.index')
            ->with('success','Product deleted successfully');
    }
}
