<?php

namespace Notch\Core\SandboxBalance;

trait ReferencedBySandboxBalance
{
    public function balanceReferences()
    {
        return $this->morphMany(AvailableBalance::class, 'ref');
    }
}
