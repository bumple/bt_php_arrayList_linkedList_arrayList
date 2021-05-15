<?php

class MyList
{
    public int $size;
    public array $elements;
    public array $originElements;

    public function __construct(int $size, $arr = [])
    {
        if (is_array($arr)) {
            $this->elements = $arr;
            $this->originElements = $arr;
            $this->size = $size;
        } else {
            echo "Input type is not supported";
            die();
        }
    }

    public function insert($index, $obj): void
    {
        $this->elements[$index] = $obj;
    }

    public function add($obj): void
    {
        if ($this->size() > count($this->elements)) {
            array_push($this->elements, $obj);
        } else {
            echo "Array limited ";
        }
    }

    public function remove($index): void
    {
        unset($this->elements[$index]);
    }

    public function get($index): object
    {
        return $this->elements[$index];
    }

    public function clear(): void
    {
        $this->elements = [];
    }

    public function addAll($arr): array
    {
        if ($this->size() >= ($this->getCount() + count($arr))) {
            $this->elements = array_merge($this->elements, $arr);
        } else {
            echo "Array limited ";
        }
        return $this->elements;
    }

    public function indexOf($obj): int
    {
        return array_search($obj, $this->elements);
    }

    public function isEmpty(): bool
    {
        return empty($this->elements);
    }

    public function sort(): array
    {
        sort($this->elements);
        return $this->elements;
    }

    public function size(): int
    {
        return $this->size;
    }

    public function reset(): void
    {
        $this->elements = $this->originElements;
    }

    public function getCount(): int
    {
        return count($this->elements);
    }
}
