<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index()
    {
        $managers = Manager::query()->paginate(4);
        return view('admin.manager.index', compact('managers'));
    }

    public function create()
    {
        return view('admin.manager.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'thumb' => 'nullable|image|max:2048',
            'full_name' => 'required|string|max:255',
            'membership_status' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'workplace' => 'nullable|string|max:255',
            'education' => 'nullable|string',
            'education_file.*' => 'nullable|file|mimes:pdf,jpg,png|max:2048',
            'phone' => 'nullable|string|max:20',
            'social_links' => 'nullable|string|max:255',
            'birth_date' => 'nullable|date',
            'healthcare_experience' => 'nullable|string|max:255',
            'accepted_rules' => 'required|accepted',
        ]);

        // Обработка изображения
        if ($request->hasFile('thumb')) {
            $file = $request->file('thumb');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/admin/assets/managers/thumbs'), $filename);
            $validated['thumb'] = 'assets/admin/assets/managers/thumbs/' . $filename;
        }

        // Обработка файлов дипломов
        if ($request->hasFile('education_file')) {
            $files = [];
            foreach ($request->file('education_file') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/admin/assets/managers/diplomas'), $filename);
                $files[] = 'assets/admin/assets/managers/diplomas/' . $filename;
            }
            $validated['education_file'] = json_encode($files);
        }

        Manager::query()->create($validated);
        return redirect()->route('manager.index')->with('success', 'Менеджер успешно создан.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $manager = Manager::query()->findOrFail($id);
        return view('admin.manager.edit', compact('manager'));
    }

    public function update(Request $request, string $id)
    {
        $manager = Manager::query()->findOrFail($id);

        $validated = $request->validate([
            'thumb' => 'nullable|image|max:2048',
            'full_name' => 'required|string|max:255',
            'membership_status' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'workplace' => 'nullable|string|max:255',
            'education' => 'nullable|string',
            'education_file.*' => 'nullable|file|mimes:pdf,jpg,png|max:2048',
            'phone' => 'nullable|string|max:20',
            'social_links' => 'nullable|string|max:255',
            'birth_date' => 'nullable|date',
            'healthcare_experience' => 'nullable|string|max:255',
            'accepted_rules' => 'required|accepted',
        ]);

        // Обработка изображения
        if ($request->hasFile('thumb')) {
            $file = $request->file('thumb');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('managers/thumbs'), $filename);
            $validated['thumb'] = 'managers/thumbs/' . $filename;
        }

        // Обработка файлов дипломов
        $currentFiles = $manager->education_file ? json_decode($manager->education_file, true) : [];
        if ($request->hasFile('education_file')) {
            foreach ($request->file('education_file') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('managers/diplomas'), $filename);
                $currentFiles[] = 'managers/diplomas/' . $filename;
            }
            $validated['education_file'] = json_encode($currentFiles);
        }

        $manager->update($validated);
        return redirect()->route('manager.index')->with('success', 'Менеджер успешно обновлён.');
    }

    public function destroy(string $id)
    {
        $manager = Manager::query()->findOrFail($id);
        $manager->delete();
        return redirect()->route('manager.index')->with('success', 'Менеджер успешно удалён.');
    }
}
