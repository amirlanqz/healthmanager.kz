<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;
use App\Models\Membership;
use App\Services\PaymentService;

class MembershipController extends Controller
{
    public function choose()
    {
        return view('membership.choose');
    }

    public function showForm(Request $request)
    {
        $type = $request->input('type');

        $membershipTypes = [
            'basic' => ['amount' => 9500, 'label' => 'Ассоциированный член'],
            'full' => ['amount' => 25000, 'label' => 'Полноправный менеджер'],
            'top' => ['amount' => 40000, 'label' => 'ТОП менеджер'],
        ];

        if (!isset($membershipTypes[$type])) {
            abort(404);
        }

        return view('membership.show', [
            'type' => $type,
            'amount' => $membershipTypes[$type]['amount'],
            'label' => $membershipTypes[$type]['label'],
        ]);
    }

    public function submit(Request $request)
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

        if ($request->hasFile('thumb')) {
            $file = $request->file('thumb');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/admin/assets/managers/thumbs'), $filename);
            $validated['thumb'] = 'assets/admin/assets/managers/thumbs/' . $filename;
        }

        if ($request->hasFile('education_file')) {
            $files = [];
            foreach ($request->file('education_file') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/admin/assets/managers/diplomas'), $filename);
                $files[] = 'assets/admin/assets/managers/diplomas/' . $filename;
            }
            $validated['education_file'] = json_encode($files);
        }

        $manager = Manager::query()->create($validated);

        return redirect()->route('membership.success');
        
    }

    public function success()
    {
        return view('membership.success');
    }

}

