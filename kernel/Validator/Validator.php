<?php

namespace App\Kernel\Validator;

class Validator
{
    private array $errors = [];
    private array $data = [];

    public function validate(array $data, array $rules): bool
    {
        $this->errors = [];
        $this->data = $data;

        foreach ($rules as $key => $rule) {
            $rules = $rule;

            foreach ($rules as $rule) {
                $rule = explode(':', $rule);

                $ruleName = $rule[0];
                $ruleValue = $rule[1] ?? null;

                $error = $this->validateRule($key, $ruleName, $ruleValue);
                if ($error) {
                    $this->errors[$key][] = $error;
                }
            }
        }
        return false;
    }

    private function validateRule(int|string $key, string $ruleName, ?string $ruleValue): string|bool
    {
        $value = $this->data[$key];

        switch ($ruleName) {
            case 'required':
                if (empty($value)) {
                    $this->errors[$key][] = 'Поле обязательно для заполнения';
                }
                break;
            case 'min':
                if (strlen($value) < $ruleValue) {
                    $this->errors[$key][] = "Поле должно содержать минимум {$ruleValue} символов";
                }
                break;
            case 'max':
                if (strlen($value) > $ruleValue) {
                    $this->errors[$key][] = "Поле должно содержать максимум {$ruleValue} символов";
                }
                break;
            case 'email':
                if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    $this->errors[$key][] = "Поле должно содержать корректный email адрес";
                }
                break;
            case 'confirm':
                if ($value !== $this->data[$ruleValue]) {
                    $this->errors[$key][] = "Поле должно совпадать с {$ruleValue}";
                }
                break;
        }
            return false;
    }

}