
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductModel extends Model
{
    protected $table = 'tblproducts';  # Database table name

    /**
     * Get all blog posts
     *
     * @return array
     */
    public function getAll()
    {
        return $this->db->table($this->table)->get_all();
    }

    /**
     * Get a single blog post by ID
     *
     * @param int $id
     * @return object|false
     */
    public function getById($id)
    {
        return $this->db->table($this->table)->where('id', $id)->get();
    }

    /**
     * Insert a new blog post
     *
     * @param array $data
     * @return int Inserted ID
     */
    public function create($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    /**
     * Update a blog post
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function updateProduct($id, $data)
    {
        return $this->db->table($this->table)->where('id', $id)->update($data);
    }

    /**
     * Delete a blog post
     *
     * @param int $id
     * @return bool
     */
    public function deleteProduct($id)
    {
        return $this->db->table($this->table)->where('id', $id)->delete();
    }
}
?>