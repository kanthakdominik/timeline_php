<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal to :value.',
        'file' => 'The :attribute must be greater than or equal to :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal to :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal to :value.',
        'file' => 'The :attribute must be less than or equal to :value kilobytes.',
        'string' => 'The :attribute must be less than or equal to :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'accepted' => [
            'accepted' => 'Pole :attribute musi być zaakceptowane.',
        ],
        'active_url' => [
            'active_url' => 'Pole :attribute nie jest prawidłowym adresem URL.',
        ],
        'after' => [
            'after' => 'Pole :attribute musi być datą późniejszą niż :date.',
        ],
        'after_or_equal' => [
            'after_or_equal' => 'Pole :attribute musi być datą nie wcześniejszą niż :date.',
        ],
        'alpha' => [
            'alpha' => 'Pole :attribute może zawierać tylko litery.',
        ],
        'alpha_dash' => [
            'alpha_dash' => 'Pole :attribute może zawierać tylko litery, cyfry, myślniki i podkreślenia.',
        ],
        'alpha_num' => [
            'alpha_num' => 'Pole :attribute może zawierać tylko litery i cyfry.',
        ],
        'array' => [
            'array' => 'Pole :attribute musi być tablicą.',
        ],
        'before' => [
            'before' => 'Pole :attribute musi być datą wcześniejszą niż :date.',
        ],
        'before_or_equal' => [
            'before_or_equal' => 'Pole :attribute musi być datą nie późniejszą niż :date.',
        ],
        'between' => [
            'numeric' => 'Pole :attribute musi zawierać się w przedziale :min - :max.',
            'file' => 'Pole :attribute musi mieć rozmiar od :min do :max kilobajtów.',
            'string' => 'Pole :attribute musi zawierać się w przedziale :min - :max znaków.',
            'array' => 'Pole :attribute musi mieć od :min do :max elementów.',
        ],
        'boolean' => [
            'boolean' => 'Pole :attribute musi mieć wartość prawda lub fałsz.',
        ],
        'confirmed' => [
            'confirmed' => 'Potwierdzenie pola :attribute nie pasuje.',
        ],
        'date' => [
            'date' => 'Pole :attribute nie jest prawidłową datą.',
        ],
        'date_equals' => [
            'date_equals' => 'Pole :attribute musi być datą równą :date.',
        ],
        'date_format' => [
            'date_format' => 'Pole :attribute nie pasuje do formatu :format.',
        ],
        'different' => [
            'different' => 'Pole :attribute i :other muszą się różnić.',
        ],
        'digits' => [
            'digits' => 'Pole :attribute musi składać się z :digits cyfr.',
        ],
        'digits_between' => [
            'digits_between' => 'Pole :attribute musi mieć od :min do :max cyfr.',
        ],
        'dimensions' => [
            'dimensions' => 'Pole :attribute ma nieprawidłowe wymiary obrazu.',
        ],
        'distinct' => [
            'distinct' => 'Pole :attribute ma zduplikowaną wartość.',
        ],
        'email' => [
            'email' => 'Pole :attribute musi być prawidłowym adresem e-mail.',
        ],
        'ends_with' => [
            'ends_with' => 'Pole :attribute musi kończyć się jednym z następujących: :values.',
        ],
        'exists' => [
            'exists' => 'Wybrana wartość pola :attribute jest nieprawidłowa.',
        ],
        'file' => [
            'file' => 'Pole :attribute musi być plikiem.',
        ],
        'filled' => [
            'filled' => 'Pole :attribute musi mieć wartość.',
        ],
        'gt' => [
            'numeric' => 'Pole :attribute musi być większe niż :value.',
            'file' => 'Pole :attribute musi być większe niż :value kilobajtów.',
            'string' => 'Pole :attribute musi mieć więcej niż :value znaków.',
            'array' => 'Pole :attribute musi mieć więcej niż :value elementów.',
        ],
        'gte' => [
            'numeric' => 'Pole :attribute musi być większe lub równe :value.',
            'file' => 'Pole :attribute musi być większe lub równe :value kilobajtów.',
            'string' => 'Pole :attribute musi mieć :value lub więcej znaków.',
            'array' => 'Pole :attribute musi mieć :value lub więcej elementów.',
        ],
        'image' => [
            'image' => 'Plik powinnien posiadać rozszerzenie .jpeg, .png, .jpg, .gif, .svg',
        ],
        'in' => [
            'in' => 'Wybrana wartość pola :attribute jest nieprawidłowa.',
        ],
        'in_array' => [
            'in_array' => 'Pole :attribute nie istnieje w :other.',
        ],
        'integer' => [
            'integer' => 'Pole :attribute musi być liczbą całkowitą.',
        ],
        'ip' => [
            'ip' => 'Pole :attribute musi być prawidłowym adresem IP.',
        ],
        'ipv4' => [
            'ipv4' => 'Pole :attribute musi być prawidłowym adresem IPv4.',
        ],
        'ipv6' => [
            'ipv6' => 'Pole :attribute musi być prawidłowym adresem IPv6.',
        ],
        'json' => [
            'json' => 'Pole :attribute musi być prawidłowym ciągiem JSON.',
        ],
        'lt' => [
            'numeric' => 'Pole :attribute musi być mniejsze niż :value.',
            'file' => 'Pole :attribute musi być mniejsze niż :value kilobajtów.',
            'string' => 'Pole :attribute musi mieć mniej niż :value znaków.',
            'array' => 'Pole :attribute musi mieć mniej niż :value elementów.',
        ],
        'lte' => [
            'numeric' => 'Pole :attribute musi być mniejsze lub równe :value.',
            'file' => 'Pole :attribute musi być mniejsze lub równe :value kilobajtów.',
            'string' => 'Pole :attribute musi mieć :value lub mniej znaków.',
            'array' => 'Pole :attribute nie może mieć więcej niż :value elementów.',
        ],
        'max' => [
            'numeric' => 'Pole :attribute nie może być większe niż :max.',
            'file' => 'Pole :attribute nie może być większe niż :max kilobajtów.',
            'string' => 'Pole :attribute nie może mieć więcej niż :max znaków.',
            'array' => 'Pole :attribute nie może mieć więcej niż :max elementów.',
        ],
        'mimes' => [
            'mimes' => 'Pole :attribute musi być plikiem typu: :values.',
        ],
        'mimetypes' => [
            'mimetypes' => 'Pole :attribute musi być plikiem typu: :values.',
        ],
        'min' => [
            'numeric' => 'Pole :attribute musi być nie mniejsze niż :min.',
            'file' => 'Pole :attribute musi mieć co najmniej :min kilobajtów.',
            'string' => 'Pole :attribute musi mieć co najmniej :min znaków.',
            'array' => 'Pole :attribute musi mieć co najmniej :min elementów.',
        ],
        'not_in' => [
            'not_in' => 'Wybrana wartość pola :attribute jest nieprawidłowa.',
        ],
        'not_regex' => [
            'not_regex' => 'Format pola :attribute jest nieprawidłowy.',
        ],
        'numeric' => [
            'numeric' => 'Pole :attribute musi być liczbą.',
        ],
        'present' => [
            'present' => 'Pole :attribute musi być obecne.',
        ],
        'regex' => [
            'regex' => 'Format pola :attribute jest nieprawidłowy.',
        ],
        'required' => [
            'required' => 'Pole :attribute jest wymagane.',
        ],
        'required_if' => [
            'required_if' => 'Pole :attribute jest wymagane, gdy pole :other ma wartość :value.',
        ],
        'required_unless' => [
            'required_unless' => 'Pole :attribute jest wymagane, chyba że pole :other ma jedną z wartości :values.',
        ],
        'required_with' => [
            'required_with' => 'Pole :attribute jest wymagane, gdy pole :values jest obecne.',
        ],
        'required_with_all' => [
            'required_with_all' => 'Pole :attribute jest wymagane, gdy pola :values są obecne.',
        ],
        'required_without' => [
            'required_without' => 'Pole :attribute jest wymagane, gdy pole :values nie jest obecne.',
        ],
        'required_without_all' => [
            'required_without_all' => 'Pole :attribute jest wymagane, gdy żadne z pól :values nie są obecne.',
        ],
        'same' => [
            'same' => 'Pole :attribute i :other muszą się zgadzać.',
        ],
        'size' => [
            'numeric' => 'Pole :attribute musi mieć :size.',
            'file' => 'Pole :attribute musi mieć :size kilobajtów.',
            'string' => 'Pole :attribute musi mieć :size znaków.',
            'array' => 'Pole :attribute musi zawierać :size elementów.',
        ],
        'starts_with' => [
            'starts_with' => 'Pole :attribute musi zaczynać się od jednego z następujących: :values.',
        ],
        'string' => [
            'string' => 'Pole :attribute musi być ciągiem znaków.',
        ],
        'timezone' => [
            'timezone' => 'Pole :attribute musi być prawidłową strefą czasową.',
        ],
        'unique' => [
            'unique' => 'Pole :attribute jest już zajęte.',
        ],
        'uploaded' => [
            'uploaded' => 'Nie udało się przesłać pliku :attribute.',
        ],
        'url' => [
            'url' => 'Format pola :attribute jest nieprawidłowy.',
        ],
        'uuid' => [
            'uuid' => 'Pole :attribute musi być prawidłowym UUID.',
        ],
        'end_date' => [
            'after_or_equal' => 'Data zakończenia musi być datą późniejszą lub równą dacie rozpoczęcia.',
        ],
        'password' => [
            'min' => 'Hasło musi mieć co najmniej :min znaków.',
            'password' => 'Hasło jest niepoprawne.',
        ],
        'new_password' => [
            'min' => 'Nowe hasło musi mieć co najmniej :min znaków.',
            'confirmed' => 'Potwierdzenie nowego hasła i nowe hasło różnią się.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];