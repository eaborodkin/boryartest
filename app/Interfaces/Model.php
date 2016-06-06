<?php
namespace BorYar\Interfaces;

interface Model
{
    /**
     * Find item by id
     * @param int $id
     * @return mixed
     */
    public function find($id);

    /**
     * Get items list
     * @param $limit - max count of items
     * @param $offset - offset in result
     * @return mixed
     */
    public function all($limit = null, $offset = 0);

    /**
     * Get items list by conditions
     * @param array $conditions - array with filters
     * @param null $limit - max count of filtered items
     * @param int $offset - offset in result
     * @return mixed
     */
    public function filter(array $conditions, $limit = null, $offset = 0);
}