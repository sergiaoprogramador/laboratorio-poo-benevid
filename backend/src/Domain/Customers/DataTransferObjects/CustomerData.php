<?php

class CustomerData
{
    public function __construct(
        public string $name,
        public string $email,
        protected string $cpf,
        public string $birth_date,
        private string $password
    ) { }
}
