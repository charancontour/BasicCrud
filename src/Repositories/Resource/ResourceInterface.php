<?php namespace TimeForTalent\Repositories\Resource;

use TimeForTalent\Requests\Resource;

interface ResourceInterface
{
  public function index();
  public function create();
  public function store(Resource\StoreRequest $request);
  public function view($id);
  public function edit($id);
  public function update(Resource\UpdateRequest $request,$id);
  public function delete($id);

}
