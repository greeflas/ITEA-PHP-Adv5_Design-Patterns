<?php

namespace App;

use App\Mapper\User;

final class UserCollection implements \IteratorAggregate
{
    private $users = [];

    public function __construct(User ...$users)
    {
        $this->users = $users;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->users);
    }
}
