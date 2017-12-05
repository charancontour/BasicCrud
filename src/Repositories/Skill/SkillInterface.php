<?php namespace TimeForTalent\Repositories\Skill;

use TimeForTalent\Requests\Skill;

interface SkillInterface
{
  public function index();
  public function create();
  public function store(Skill\StoreRequest $request);
  public function view($id);
  public function edit($id);
  public function update(Skill\UpdateRequest $request,$id);
  public function delete($id);

}
