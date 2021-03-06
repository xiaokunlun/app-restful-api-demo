<?php

namespace App\Api\V1\Requests;

use App\Api\BaseRequestPost;


class memberRegisterPost extends BaseRequestPost
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|min:10|max:25',
            'email' => 'required|email',
            'password' => 'required',
        ];
    }

    /**
     * 获取已定义的验证规则的错误消息。
     *
     * @return array
     */
    public function messages()
    {
        return [
            'username.required' => '用户账号不能为空',
            'username.min' => '用户账号长度不小于 :min',
            'username.max' => '用户账号长度不大于 :max',
            'password.required' => '密码不能为空',
            'email.required' => '邮箱不能为空',
            'email.email' => '请输入正确的邮箱',
        ];
    }
}
