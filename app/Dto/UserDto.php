<?php

namespace App\DTO;

class UserDto
{
    // here create public properties same name with database column.
    public readonly string $first_name;
    public readonly string $last_name;
    public readonly string $email;
    public readonly string $password;

    /**
     * Create a new controller instance.
     *
     * @return $reauest, $modal
     */
    public function __construct($request)
    {
        $this->first_name = $request['first_name'];
        $this->last_name = $request['last_name'];
        $this->email = $request['email'];
        $this->password = isset($request['password']) ? $request['password'] : '';
    }

    public static function fromRequest($request)
    {
        return new self($request);
    }

    public function toArray()
    {
        $return = [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
        ];

        if ($this->password != '') {
            $return['password'] = $this->password;
        }

        return $return;
    }
}
