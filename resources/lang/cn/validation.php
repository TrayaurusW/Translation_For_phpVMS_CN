<?php

return [
    /*
     * Validation Language Lines
     */

    'accepted'   => ':attribute必须接受。',
    'active_url' => ':attribute不是有效的链接。',
    'after'      => ':attribute必须在:date之后。',
    'alpha'      => ':attribute只能包含字母。',
    'alpha_dash' => ':attribute只能包含字母、数字和短划线。',
    'alpha_num'  => ':attribute只能包含字母和数字。',
    'array'      => ':attribute必须是一个数组。',
    'before'     => ':attribute必须在:date之前。',
    'between'    => [
        'numeric' => ':attribute必须在:min到:max间。',
        'file'    => ':attribute必须在:min到:maxKB以内。',
        'string'  => ':attribute必须在:min到:max字符串数以内。',
        'array'   => ':attribute必须在:min到:max数组数以内。',
    ],
    'boolean'        => ':attribute必须为true或false。',
    'confirmed'      => ':attribute验证不匹配。',
    'date'           => ':attribute不是有效日期。',
    'date_format'    => ':attribute与格式不匹配:format。',
    'different'      => ':attribute和:other必须不同。',
    'digits'         => ':attribute必须是:digits数字。',
    'digits_between' => ':attribute一定要在:min到:max数字之间。',
    'dimensions'     => ':attribute具有无效的图像尺寸。',
    'distinct'       => ':attribute字段具有重复值。',
    'email'          => ':attribute必须是有效的电子邮件地址。',
    'exists'         => '选择的:attribute无效。',
    'file'           => ':attribute必须是一个文件。',
    'filled'         => '":attribute"是必需的。',
    'image'          => ':attribute必须是一个图像。',
    'in'             => '选择的:attribute无效。',
    'in_array'       => ':attribute字段不存在于:other。',
    'integer'        => ':attribute必须是整数。',
    'ip'             => ':attribute必须是有效的IP地址。',
    'json'           => ':attribute必须是有效的JSON。',
    'max'            => [
        'numeric' => ':attribute可能不大于:max。',
        'file'    => ':attribute可能不大于:maxKB数。',
        'string'  => ':attribute可能不大于:max字符串数以内。',
        'array'   => ':attribute可能不多于:max数组数以内。',
    ],
    'mimes' => ':attribute必须是类型为的文件: :values.',
    'min'   => [
        'numeric' => ':attribute必须至少:min.',
        'file'    => ':attribute必须至少:minKB数。',
        'string'  => ':attribute必须至少:min字符串数以内。',
        'array'   => ':attribute必须至少:min数组数。',
    ],
    'not_in'               => '选择的:attribute无效。',
    'numeric'              => ':attribute必须是一个数字。',
    'present'              => ':attribute字段必须存在。',
    'regex'                => ':attribute格式无效。',
    'required'             => '":attribute"字段是必需的。',
    'required_if'          => ':attribute当需要字段时:other是:value.',
    'required_unless'      => ':attribute除非:other是:values.',
    'required_with'        => ':attribute当需要字段时:values存在。',
    'required_with_all'    => ':attribute当需要字段时:values存在。',
    'required_without'     => ':attribute当需要字段时:values不存在。',
    'required_without_all' => ':attribute当需要字段时没有:values都存在。',
    'same'                 => ':attribute和:other必须相匹',
    'size'                 => [
        'numeric' => ':attribute必须是:size。',
        'file'    => ':attribute必须是:sizeKB以内。',
        'string'  => ':attribute必须是:size字符串数以内。',
        'array'   => ':attribute必须包含:size数组数。',
    ],
    'string'   => ':attribute必须是一个字符串',
    'timezone' => ':attribute必须是有效时区。',
    'unique'   => ':attribute已有人使用。',
    'url'      => ':attribute格式无效。',

    /*
     * Custom Validation Language Lines
     */

    'custom' => [
        'airline_id' => [
            'required' => '需要航空公司',
            'exists'   => '航空公司不存在',
        ],
        'aircraft_id' => [
            'required' => '需要机型',
            'exists'   => '机型不存在',
        ],
        'arr_airport_id' => [
            'required' => '需要目的地机场',
        ],
        'dpt_airport_id' => [
            'required' => '需要出发地机场',
        ],
        'flight_time' => [
            'required' => '',
            'integer'  => '需要飞行时间, 用分钟表示。',
        ],
        'planned_flight_time' => [
            'required' => '需要飞行时间, 用分钟表示。',
            'integer'  => '需要飞行时间, 用分钟表示。',
        ],
        'source_name' => [
            'required' => '需要飞行计划',
        ],
        'g-recaptcha-response' => [
            'required' => '请验证您不是机器人。',
            'captcha'  => '验证码错误！稍后再试一次或联系管理员。',
        ],
    ],

    /*
     * Custom Validation Attributes
     */

    'attributes' => [],

];
