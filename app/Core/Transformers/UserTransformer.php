<?php

namespace App\Core\Transformers;



use App\Core\Models\User;

class UserTransformer extends ATransformer
{
    protected $user;

    public function __construct(User $user, array $guard = [])
    {
        $this->user = $user;
        $this->guard  = $guard;
    }//__construct


    public function toArray()
    {
        $user = [
            'id'           => (int)$this->user->id,
            'token'        => $this->user->api_token,
        ];

        return array_except($user, $this->guard);

    }//toArray

}//ClientTransformer