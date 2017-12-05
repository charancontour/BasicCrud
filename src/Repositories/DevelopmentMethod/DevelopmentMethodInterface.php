<?php namespace TimeForTalent\Repositories\DevelopmentMethod;

use TimeForTalent\Requests\DevelopmentMethod;

interface DevelopmentMethodInterface
{
  public function index();
  public function create();
  public function store(DevelopmentMethod\StoreRequest $request);
  public function view($id);
  public function edit($id);
  public function update(DevelopmentMethod\UpdateRequest $request,$id);
  public function delete($id);

}
