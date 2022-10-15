<?php

namespace App\Services;

use App\Models\Visi;
use App\Repositories\VisiRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class VisiService
{
    /**
     * @var $visiRepository
     */
    protected $visiRepository;

    /**
     * VisiService constructor.
     *
     * @param VisiRepository $visiRepository
     */
    public function __construct(VisiRepository $visiRepository)
    {
        $this->visiRepository = $visiRepository;
    }

    /**
     * Delete visi by id.
     *
     * @param $id
     * @return String
     */
    public function deleteById($id)
    {
        DB::beginTransaction();

        try {
            $visi = $this->visiRepository->delete($id);
        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());

            throw new InvalidArgumentException('Unable to delete visi data');
        }

        DB::commit();

        return $visi;
    }

    /**
     * Get all visi.
     *
     * @return String
     */
    public function getAll()
    {
        return $this->visiRepository->getAll();
    }

    /**
     * Get visi by id.
     *
     * @param $id
     * @return String
     */
    public function getById($id)
    {
        return $this->visiRepository->getById($id);
    }

    /**
     * Update visi data
     * Store to DB if there are no errors.
     *
     * @param array $data
     * @return String
     */
    public function updateVisi($data, $id)
    {
        $validator = Validator::make($data, [
            'title' => 'bail|min:2',
            'description' => 'bail|max:255'
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        DB::beginTransaction();

        try {
            $visi = $this->visiRepository->update($data, $id);
        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());

            throw new InvalidArgumentException('Unable to update visi data');
        }

        DB::commit();

        return $visi;
    }

    /**
     * Validate post data.
     * Store to DB if there are no errors.
     *
     * @param array $data
     * @return String
     */
    public function savePostData($data)
    {
        $validator = Validator::make($data, [
            'title' => 'required',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        $result = $this->visiRepository->save($data);

        return $result;
    }
}
