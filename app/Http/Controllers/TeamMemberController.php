<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;
use Storage;
class TeamMemberController extends Controller
{
    public function index()
    {
        $teamMembers = TeamMember::all();
        return view('admin.team.index', compact('teamMembers'));
    }
    public function showTeamMembers()
    {
        // Fetch all team members for the frontend
        $teamMembers = TeamMember::all();

        // Return the frontend view with team members
        return view('frontend.team', compact('teamMembers'));
    }

    public function create()
    {
        return view('admin.team.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'position' => 'required',
            'email' => 'required|email|unique:team_members',
            'phone_number' => 'nullable',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'instagram' => 'nullable|url',
            'business_growth' => 'required|integer|min:0|max:100',
            'money_management' => 'required|integer|min:0|max:100',
            'business_consulting' => 'required|integer|min:0|max:100',
            'team_work' => 'required|integer|min:0|max:100',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'personal_details' => 'nullable|string', // Validation for personal details
        ]);

        // Handle the image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('team_images', 'public');
        }

        // Create the team member
        TeamMember::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->iput('last_name'),
            'position' => $request->input('position'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'facebook' => $request->input('facebook'),
            'twitter' => $request->input('twitter'),
            'linkedin' => $request->input('linkedin'),
            'instagram' => $request->input('instagram'),
            'business_growth' => $request->input('business_growth'),
            'money_management' => $request->input('money_management'),
            'business_consulting' => $request->input('business_consulting'),
            'team_work' => $request->input('team_work'),
            'image' => $imagePath,
            'personal_details' => $request->input('personal_details'), // Storing personal details
        ]);

        return redirect()->route('team.index')->with('success', 'Team member added successfully');
    }



    public function edit($id)
    {
        $teamMember = TeamMember::findOrFail($id);
        return view('admin.team.edit', compact('teamMember'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'position' => 'required',
            'email' => 'required|email|unique:team_members,email,' . $id, // Exclude the current member from the unique check
            'phone_number' => 'nullable',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'instagram' => 'nullable|url',
            'business_growth' => 'required|integer|min:0|max:100',
            'money_management' => 'required|integer|min:0|max:100',
            'business_consulting' => 'required|integer|min:0|max:100',
            'team_work' => 'required|integer|min:0|max:100',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'personal_details' => 'nullable|string', // Validation for personal details
        ]);

        $teamMember = TeamMember::findOrFail($id);

        // Handle the image upload
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($teamMember->image) {
                Storage::delete('public/' . $teamMember->image);
            }
            $teamMember->image = $request->file('image')->store('team_images', 'public');
        }

        // Update the team member's information
        $teamMember->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'position' => $request->input('position'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'facebook' => $request->input('facebook'),
            'twitter' => $request->input('twitter'),
            'linkedin' => $request->input('linkedin'),
            'instagram' => $request->input('instagram'),
            'business_growth' => $request->input('business_growth'),
            'money_management' => $request->input('money_management'),
            'business_consulting' => $request->input('business_consulting'),
            'team_work' => $request->input('team_work'),
            'personal_details' => $request->input('personal_details'), // Updating personal details
        ]);

        return redirect()->route('team.index')->with('success', 'Team member updated successfully');
    }

    public function destroy($id)
    {
        TeamMember::destroy($id);
        return redirect()->route('team-members.index')->with('success', 'Team member deleted successfully');
    }
    public function showAboutPage()
    {
        // Fetch all team members from the database
        $teamMembers = TeamMember::all();

        // Return the about view and pass the team members data to it
        return view('frontend.about', compact('teamMembers'));
    }

    public function show($id)
    {
        $teamMember = TeamMember::findOrFail($id);
        return view('frontend.team-details', compact('teamMember'));
    }
}

