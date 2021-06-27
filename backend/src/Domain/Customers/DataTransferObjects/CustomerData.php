<?php

class CustomerData
{
    public function __construct(
        public string $name,
        public string $email,
        private string $password,
        public bool $isAdmin
    ) { }
}
