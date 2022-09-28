<?php

include('BaseState.php');

class AgreementState implements BaseState
{
    const PENDING = 'pending';

    const APPROVED = 'approved';

    private string $state;

    public function __construct()
    {
        $this->state = self::PENDING;
    }

    public function pending(): void
    {
        $this->state = self::PENDING;
    }

    public function approved(): void
    {
        $this->state = self::APPROVED;
    }

    public function isPending(): bool
    {
        return $this->state === self::PENDING;
    }
    public function isApproved(): bool
    {
        return $this->state === self::APPROVED;
    }

    public function value()
    {
        return $this->state;
    }
}