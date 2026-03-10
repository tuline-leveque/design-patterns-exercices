<?php

namespace App;

class MyLitteralQueryBuilder extends MySQLQueryBuilder {

    public function build(): string
    {
        $query = "Je sélectionne le(s) champ(s) " . implode(', ', $this->fields) . " provenant de la table " . $this->table;
        if (!empty($this->conditions)) {
            $query .= " dans laquelle " . implode(' et ', $this->conditions);
        }
        return $query;
    }
}