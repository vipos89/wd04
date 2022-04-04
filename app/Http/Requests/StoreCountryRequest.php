<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;
    use Illuminate\Validation\Rule;

    class StoreCountryRequest extends FormRequest
    {
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
                'name' => [
                    'required|min:10|max:200',
                    Rule::in(['ololo'])
                    ],
                'content' => 'min:10|max:10000'
            ];
        }

        public function messages()
        {
            return [
                'name.required' => 'Это поле обязательно',
                'name.min' => 'ololo',
                'name.max' => 'ololo',
            ];
        }
    }
