<?php namespace TimeForTalent\Controllers;

use App\Http\Controllers\Controller;

use TimeForTalent\Repositories\Skill\SkillInterface;
use TimeForTalent\Requests\Skill;

class SkillController extends Controller
{

  function __construct(SkillInterface $skill)
  {
    $this->skill = $skill;
  }

  public function index()
  {
    return $this->skill->index();
  }

  public function create()
  {
    return $this->skill->create();
  }

  public function store(Skill\StoreRequest $request)
  {
    return $this->skill->store($request);
  }

  public function view($id)
  {
    return $this->skill->view($id);
  }

  public function edit($id)
  {
    return $this->skill->edit($id);
  }

  public function update(Skill\UpdateRequest $request,$id)
  {
    return $this->skill->update($request,$id);
  }

  public function delete($id)
  {
    return $this->skill->delete($id);
  }

}
