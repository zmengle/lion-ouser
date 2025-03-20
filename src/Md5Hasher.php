<?php

namespace Lion\Ouser;

class Md5Hasher
{
    public function make($password)
    {
        return md5($password);
    }
}