<?php namespace TimeForTalent\Repositories\Resource;

use TimeForTalent\Requests\Resource\StoreRequest;
use TimeForTalent\Requests\Resource\UpdateRequest;
use TimeForTalent\Models\Resource;
use Auth;

class ResourceRepository implements ResourceInterface
{

  public function index()
  {
    $resources = Resource::all();
    return view('vendor.TimeForTalent.Resource.index')->with('resources',$resources);
  }

  public function create()
  {
    return view('vendor.TimeForTalent.Resource.create');
  }

  public function store(StoreRequest $request)
  {
    $input = $request->all();
    $resource = Resource::create($input);
    return redirect('timefortalent/resource');
  }

  public function view($id)
  {
    $resource = Resource::findOrFail($id);
    return view('vendor.TimeForTalent.Resource.details')->with('resource',$resource);
  }

  public function edit($id)
  {
    $resource = Resource::findOrFail($id);
    return view('vendor.TimeForTalent.Resource.edit')->with('resource',$resource);
  }

  public function update(UpdateRequest $request,$id)
  {
    $input = $request->all();
    $resource = Resource::findOrFail($id);
    $resource->name = $input['name'];
    $resource->description = $input['description'];
    $resource->save();
    return redirect('timefortalent/resource');
  }

  public function delete($id)
  {
    $resource = Resource::findOrFail($id);
    $resource->delete();
    return redirect()->back();
  }

}
