<?php

namespace App\Repositories;

use App\Models\Visi;

class VisiRepository
{
    /**
     * @var Visi
     */
    protected $visi;

    /**
     * PostRepository constructor.
     *
     * @param Post $post
     */
    public function __construct(Visi $visi)
    {
        $this->visi = $visi;
    }

    /**
     * Get all posts.
     *
     * @return Visi $visi
     */
    public function getAll()
    {
        return $this->visi
            ->get();
    }

    /**
     * Get visi by id
     *
     * @param $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->visi
            ->where('id', $id)
            ->get();
    }

    /**
     * Save Visi
     *
     * @param $data
     * @return Visi
     */
    public function save($data)
    {
        $visi = new $this->visi;

        $visi->title = $data['title'];
        $visi->description = $data['description'];

        $visi->save();

        return $visi->fresh();
    }

    /**
     * Update Visi
     *
     * @param $data
     * @return Visi
     */
    public function update($data, $id)
    {

        $visi = $this->visi->find($id);

        $visi->title = $data['title'];
        $visi->description = $data['description'];

        $visi->update();

        return $visi;
    }

    /**
     * Update Visi
     *
     * @param $data
     * @return Visi
     */
    public function delete($id)
    {

        $visi = $this->visi->find($id);
        $visi->delete();

        return $visi;
    }
}
