<?php

namespace App;

final class SqlQueryBuilder
{
    private $table;
    private $fields = '*';
    private $conditions;

    public function select($fields)
    {
        if (\is_array($fields)) {
            $this->fields = \implode(', ', $fields);
        } else {
            $this->fields = $fields;
        }

        return $this;
    }

    public function from($table)
    {
        $this->table = $table;

        return $this;
    }

    public function where($conditions)
    {
        $this->conditions = $conditions;

        return $this;
    }

    public function getQuery()
    {
        $sql = \sprintf('SELECT %s', $this->fields);

        if (null === $this->table) {
            throw new \LogicException('You must specify table name');
        }

        $sql .= \sprintf(' FROM %s', $this->table);

        if (null !== $this->conditions) {
            $sql .= \sprintf(' WHERE %s', $this->conditions);
        }

        $sql .= ';';

        return $sql;
    }
}
