<?php namespace TimeForTalent\Requests\DevelopmentMethod;

use App\Http\Requests\Request;

class StoreRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' => 'required|max:255|unique:development_methods,name',
      'description' => 'required',
		];
	}

	public function messages()
	{
		return [

		];
	}

}
