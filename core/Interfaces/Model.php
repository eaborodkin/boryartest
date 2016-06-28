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
     * @param string $order_by - sort param for items
     * @param int $limit - max count of items
     * @param int $offset - offset in result
     * @return mixed
     */
    public function all($order_by = null, $limit = null, $offset = 0);

    /**
     * Get items list by conditions
     * @param array $conditions - array with filters
     * @param string $order_by - sort param for items
     * @param int $limit - max count of filtered items
     * @param int $offset - offset in result
     * @return mixed
     */
    public function filter(array $conditions, $order_by = null, $limit = null, $offset = 0);
}