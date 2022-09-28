<?php

include('AgreementState.php');

class Agreement
{
    private AgreementState $state;

    public function __construct(AgreementState $state)
    {
        $this->state = $state;
    }

    public function draft()
    {
        $this->state->pending();
    }

    public function approve()
    {
        $this->state->approved();
    }

    public function status()
    {
        return $this->state->value();
    }
}

$agreement = new Agreement(new AgreementState());

var_dump('Current Agreement Status: ' . $agreement->status());

$agreement->approve();

var_dump('Make Changes');
var_dump('Current Agreement Status: ' . $agreement->status());