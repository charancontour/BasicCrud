<?php namespace TimeForTalent\Repositories\Skill;

use TimeForTalent\Requests\Skill\StoreRequest;
use TimeForTalent\Requests\Skill\UpdateRequest;
use TimeForTalent\Models\Skill;
use Auth;

class SkillRepository implements SkillInterface
{

  public function index()
  {
    $skills = Skill::all();
    return view('vendor.TimeForTalent.Skill.index')->with('skills',$skills);
  }

  public function create()
  {
    return view('vendor.TimeForTalent.Skill.create');
  }

  public function store(StoreRequest $request)
  {
    $input = $request->all();
    $skill = Skill::create($input);
    return redirect('timefortalent/skill');
  }

  public function view($id)
  {
    $skill = Skill::findOrFail($id);
    return view('vendor.TimeForTalent.Skill.details')->with('skill',$skill);
  }

  public function edit($id)
  {
    $skill = Skill::findOrFail($id);
    return view('vendor.TimeForTalent.Skill.edit')->with('skill',$skill);
  }

  public function update(UpdateRequest $request,$id)
  {
    $input = $request->all();
    $skill = Skill::findOrFail($id);
    $skill->name = $input['name'];
    $skill->description = $input['description'];
    $skill->save();
    return redirect('timefortalent/skill');
  }

  public function delete($id)
  {
    $skill = Skill::findOrFail($id);
    $skill->delete();
    return redirect()->back();
  }

}
