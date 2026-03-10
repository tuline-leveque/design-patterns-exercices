<?php

namespace App;

interface QueryBuilderInterface {
    public function select(array $fields): self;
    public function where(string $field, string $operator, $value): self;
    public function from(string $table): self;
    public function build(): string;
}