<?php

namespace Notch\Core\AvailableBalance;

use Notch\Core\SandboxBalance\AvailableBalance;

trait ReferencedByAvailableBalance
{
    public function balanceReferences()
    {
        return $this->morphMany(AvailableBalance::class, 'ref');
    }
}
