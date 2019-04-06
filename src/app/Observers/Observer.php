<?php

namespace LaravelEnso\AddressesManager\app\Observers;

namespace LaravelEnso\AddressesManager\app\Observers;

use LaravelEnso\AddressesManager\app\Models\Address;

class Observer
{
    public function creating(Address $address)
    {
        $address->is_default = $address
            ->addressable_type::find($address->addressable_id)
            ->addresses()
            ->default()
            ->first() === null;
    }
}
