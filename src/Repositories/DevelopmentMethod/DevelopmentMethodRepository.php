<?php namespace TimeForTalent\Repositories\DevelopmentMethod;

use TimeForTalent\Requests\DevelopmentMethod\StoreRequest;
use TimeForTalent\Requests\DevelopmentMethod\UpdateRequest;
use TimeForTalent\Models\DevelopmentMethod;
use Auth;

class DevelopmentMethodRepository implements DevelopmentMethodInterface
{

  public function index()
  {
    $development_methods = DevelopmentMethod::all();
    return view('vendor.TimeForTalent.DevelopmentMethod.index')->with('development_methods',$development_methods);
  }

  public function create()
  {
    return view('vendor.TimeForTalent.DevelopmentMethod.create');
  }

  public function store(StoreRequest $request)
  {
    $input = $request->all();
    $development_method = DevelopmentMethod::create($input);
    return redirect('timefortalent/development-method');
  }

  public function view($id)
  {
    $development_method = DevelopmentMethod::findOrFail($id);
    return view('vendor.TimeForTalent.DevelopmentMethod.details')->with('development_method',$development_method);
  }

  public function edit($id)
  {
    $development_method = DevelopmentMethod::findOrFail($id);
    return view('vendor.TimeForTalent.DevelopmentMethod.edit')->with('development_method',$development_method);
  }

  public function update(UpdateRequest $request,$id)
  {
    $input = $request->all();
    $development_method = DevelopmentMethod::findOrFail($id);
    $development_method->name = $input['name'];
    $development_method->description = $input['description'];
    $development_method->save();
    return redirect('timefortalent/development-method');
  }

  public function delete($id)
  {
    $development_method = DevelopmentMethod::findOrFail($id);
    $development_method->delete();
    return redirect()->back();
  }

}
