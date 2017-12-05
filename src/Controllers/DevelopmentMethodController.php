<?php namespace TimeForTalent\Controllers;

use App\Http\Controllers\Controller;

use TimeForTalent\Repositories\DevelopmentMethod\DevelopmentMethodInterface;
use TimeForTalent\Requests\DevelopmentMethod;

class DevelopmentMethodController extends Controller
{

  function __construct(DevelopmentMethodInterface $development_method)
  {
    $this->development_method = $development_method;
  }

  public function index()
  {
    return $this->development_method->index();
  }

  public function create()
  {
    return $this->development_method->create();
  }

  public function store(DevelopmentMethod\StoreRequest $request)
  {
    return $this->development_method->store($request);
  }

  public function view($id)
  {
    return $this->development_method->view($id);
  }

  public function edit($id)
  {
    return $this->development_method->edit($id);
  }

  public function update(DevelopmentMethod\UpdateRequest $request,$id)
  {
    return $this->development_method->update($request,$id);
  }

  public function delete($id)
  {
    return $this->development_method->delete($id);
  }

}
