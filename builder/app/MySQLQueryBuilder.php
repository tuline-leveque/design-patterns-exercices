<?php

namespace App;

class MySQLQueryBuilder implements QueryBuilderInterface {
    protected string $table;
    protected array $fields = ['*'];
    protected array $conditions = [];

    public function select(array $fields): QueryBuilderInterface
    {
        $this->fields = $fields;
        return $this;
    }

    public function where(string $field, string $operator, $value): QueryBuilderInterface
    {
        $this->conditions[] = "$field $operator '$value'";
        return $this;
    }

    public function from(string $table): QueryBuilderInterface
    {
        $this->table = $table;
        return $this;
    }

    public function build(): string
    {
        $query = "SELECT " . implode(', ', $this->fields) . " FROM " . $this->table;
        if (!empty($this->conditions)) {
            $query .= " WHERE " . implode(' AND ', $this->conditions);
        }
        return $query;
    }
}