<?php

namespace App\Repositories;

use App\Models\blogs;
use App\Repositories\BaseRepository;

/**
 * Class blogsRepository
 * @package App\Repositories
 * @version March 2, 2021, 2:47 am UTC
 */

class blogsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'blog_name',
        'category',
        'content',
        'student_id',
        'image'
    ];
    protected $primaryKey = 'blog_id';

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return blogs::class;
    }
}