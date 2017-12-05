<?php namespace TimeForTalent\Requests\Resource;

use App\Http\Requests\Request;

class UpdateRequest extends Request {

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
			'name' => 'required|max:255|unique:skills,name,'.$this->id,
      'description' => 'required',
		];
	}

	public function messages()
	{
		return [

		];
	}

}
