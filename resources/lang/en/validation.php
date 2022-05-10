<?php

return [

/**
* Project F2I / AtypikHouse 
* Vasylyshyn Roman
* Dienaba Camara
* Issa Barry
* Cedric HIHEGLO HODEWA
 */

    'accepted' => __('The :attribute must be accepted.'),
    'active_url' => __('The :attribute is not a valid URL.'),
    'accepted_if' => 'The :attribute must be accepted when :other is :value.',
    'after' => __('The :attribute must be a date after :date.'),
    'after_or_equal' => __('The :attribute must be a date after or equal to :date.'),
    'alpha' => 'The :attribute must only contain letters.',
    'alpha_dash' => 'The :attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute must only contain letters and numbers.',
    'array' => __('The :attribute must be an array.'),
    'before' => __('The :attribute must be a date before :date.'),
    'before_or_equal' => __('The :attribute must be a date before or equal to :date.'),
    'between' => [
        'numeric' => __('The :attribute must be between :min and :max.'),
        'file' => __('The :attribute must be between :min and :max kilobytes.'),
        'string' => __('The :attribute must be between :min and :max characters.'),
        'array' => __('The :attribute must have between :min and :max items.'),
    ],
    'boolean' => __('The :attribute field must be true or false.'),
    'confirmed' => __('The :attribute confirmation does not match.'),
    'current_password' => 'The password is incorrect.',
    'date' => __('The :attribute is not a valid date.'),
    'date_equals' => __('The :attribute must be a date equal to :date.'),
    'date_format' => __('The :attribute does not match the format :format.'),
    'different' => __('The :attribute and :other must be different.'),
    'digits' => __('The :attribute must be :digits digits.'),
    'digits_between' => __('The :attribute must be between :min and :max digits.'),
    'dimensions' => __('The :attribute has invalid image dimensions.'),
    'distinct' => __('The :attribute field has a duplicate value.'),
    'email' => __('The :attribute must be a valid email address.'),
    'exists' => __('The selected :attribute is invalid.'),
    'file' => __('The :attribute must be a file.'),
    'filled' => __('The :attribute field must have a value.'),
    'gt' => [
        'numeric' => 'The :attribute must be greater than or equal to :value.',
        'file' => 'The :attribute must be greater than or equal to :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal to :value characters.',
        'array' => __('The :attribute must have more than :value items.'),
    ],
    'gte' => [
        'numeric' => __('The :attribute must be greater than or equal :value.'),
        'file' => __('The :attribute must be greater than or equal :value kilobytes.'),
        'string' => __('The :attribute must be greater than or equal :value characters.'),
        'array' => __('The :attribute must have :value items or more.'),
    ],
    'image' => __('The :attribute must be an image.'),
    'in' => __('The selected :attribute is invalid.'),
    'in_array' => __('The :attribute field does not exist in :other.'),
    'integer' => __('The :attribute must be an integer.'),
    'ip' => __('The :attribute must be a valid IP address.'),
    'ipv4' => __('The :attribute must be a valid IPv4 address.'),
    'ipv6' => __('The :attribute must be a valid IPv6 address.'),
    'json' => __('The :attribute must be a valid JSON string.'),
    'lt' => [
        'numeric' => __('The :attribute must be less than :value.'),
        'file' => __('The :attribute must be less than :value kilobytes.'),
        'string' => __('The :attribute must be less than :value characters.'),
        'array' => __('The :attribute must have less than :value items.'),
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal to :value.',
        'file' => 'The :attribute must be less than or equal to :value kilobytes.',
        'string' => 'The :attribute must be less than or equal to :value characters.',
        'array' => __('The :attribute must not have more than :value items.'),
    ],
    'max' => [
        'numeric' => 'The :attribute must not be greater than :max.',
        'file' => 'The :attribute must not be greater than :max kilobytes.',
        'string' => 'The :attribute must not be greater than :max characters.',
        'array' => 'The :attribute must not have more than :max items.',
    ],
    'mimes' => __('The :attribute must be a file of type: :values.'),
    'mimetypes' => __('The :attribute must be a file of type: :values.'),
    'min' => [
        'numeric' => __('The :attribute must be at least :min.'),
        'file' => __('The :attribute must be at least :min kilobytes.'),
        'string' => __('The :attribute must be at least :min characters.'),
        'array' => __('The :attribute must have at least :min items.'),
    ],
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => __('The selected :attribute is invalid.'),
    'not_regex' => __('The :attribute format is invalid.'),
    'numeric' => __('The :attribute must be a number.'),
    'present' => __('The :attribute field must be present.'),
    'regex' => __('The :attribute format is invalid.'),
    'required' => __('The :attribute field is required.'),
    'required_if' => __('The :attribute field is required when :other is :value.'),
    'required_unless' => __('The :attribute field is required unless :other is in :values.'),
    'required_with' => __('The :attribute field is required when :values is present.'),
    'required_with_all' => __('The :attribute field is required when :values are present.'),
    'required_without' => __('The :attribute field is required when :values is not present.'),
    'required_without_all' => __('The :attribute field is required when none of :values are present.'),
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'same' => __('The :attribute and :other must match.'),
    'size' => [
        'numeric' => __('The :attribute must be :size.'),
        'file' => __('The :attribute must be :size kilobytes.'),
        'string' => __('The :attribute must be :size characters.'),
        'array' => __('The :attribute must contain :size items.'),
    ],
    'starts_with' => __('The :attribute must start with one of the following: :values'),
    'string' => __('The :attribute must be a string.'),
    'timezone' => __('The :attribute must be a valid timezone.'),
    'unique' => __('The :attribute has already been taken.'),
    'uploaded' => __('The :attribute failed to upload.'),
    'url' => 'The :attribute must be a valid URL.',
    'uuid' => __('The :attribute must be a valid UUID.'),



    'custom' => [
        'attribute-name' => [
            'rule-name' => __('custom-message'),
        ],
    ],



    'attributes' => [],

];
