<?php

namespace App\Repositories;

use App\DTO\UserDto;
use App\Models\User;
use App\Helper\BaseQuery;
use Illuminate\Support\Facades\Hash;

class UserRepository
{
    use BaseQuery;

    private $_model = null;

    /**
     * Create a new service instance.
     *
     * @return $reauest, $modal
     */
    public function __construct()
    {
        $this->_model = new User();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->get_all($this->_model);
    }

    public function get_all_users()
    {
        return $this->_model->whereHas('roles', function ($q) {
            $q->where('name', '!=', 'admin');
        })->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($data)
    {
        $dataArray = $data->toArray();

        if (isset($dataArray['password'])) {

            $dataArray['password'] = Hash::make($dataArray['password']);
        }

        $user = $this->add($this->_model, $dataArray);
        $user->assignRole('user');

        return $user;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return $this->get_by_id($this->_model, $id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, UserDto $data)
    {
        $dataArray = $data->toArray();
        unset($dataArray['email']);

        if (isset($dataArray['password'])) {
            $dataArray['password'] = Hash::make($dataArray['password']);
        }

        return $this->get_by_id($this->_model, $id)->update($dataArray);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        return $this->delete($this->_model, $id);
    }

    private function validateEmail($email)
    {
        $this->get_by_column_single($this->_model, ['email' => $email]);

        if ($email != null) {
            return false;
        } else {
            return true;
        }
    }
}
