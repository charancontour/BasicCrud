<?php namespace TimeForTalent\Controllers;

use App\Http\Controllers\Controller;

use TimeForTalent\Repositories\Resource\ResourceInterface;
use TimeForTalent\Requests\Resource;

class ResourceController extends Controller
{

  function __construct(ResourceInterface $resource)
  {
    $this->resource = $resource;
  }

  public function index()
  {
    return $this->resource->index();
  }

  public function create()
  {
    return $this->resource->create();
  }

  public function store(Resource\StoreRequest $request)
  {
    return $this->resource->store($request);
  }

  public function view($id)
  {
    return $this->resource->view($id);
  }

  public function edit($id)
  {
    return $this->resource->edit($id);
  }

  public function update(Resource\UpdateRequest $request,$id)
  {
    return $this->resource->update($request,$id);
  }

  public function delete($id)
  {
    return $this->resource->delete($id);
  }

}
