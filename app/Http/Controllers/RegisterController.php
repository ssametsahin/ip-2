<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Models\ClassModel;
use App\Models\ClassStudent;
use App\Models\ClassTeacher;
use App\Models\Subject;
use App\Models\SubjectStudent;
use App\Models\SubjectTeacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        $roles = Role::all();
        $classes = ClassModel::all();

        return view('register', compact('roles', 'classes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'role_id' => 'required|exists:roles,id',
            'class_id' => 'required|exists:classes,id',
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
            'class_id' => $request->class_id,
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $user->id,
            'role_id' => $request->role_id,
        ]);


        $subjects = Subject::where('class_id', $request->class_id)->get();


        switch ($request->role_id) {
            case 2:

                ClassStudent::create([
                    'class_id' => $request->class_id,
                    'student_id' => $user->id,
                ]);


                foreach ($subjects as $subject) {
                    SubjectStudent::create([
                        'subject_id' => $subject->id,
                        'student_id' => $user->id,
                    ]);
                }

                return redirect()->route('classes.index');

            case 1:

                ClassTeacher::create([
                    'class_id' => $request->class_id,
                    'teacher_id' => $user->id,
                ]);

                foreach ($subjects as $subject) {
                    SubjectTeacher::create([
                        'subject_id' => $subject->id,
                        'teacher_id' => $user->id,
                    ]);
                }

                return redirect()->route('dashboard');
        }

        return redirect()->route('login')->with('status', 'Kayıt işleminiz başarıyla tamamlandı, giriş yapabilirsiniz.');

    }
}
