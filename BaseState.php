<?php

interface BaseState {
    public function pending(): void;
    public function approved(): void;
    public function isPending(): bool;
    public function isApproved(): bool;
}