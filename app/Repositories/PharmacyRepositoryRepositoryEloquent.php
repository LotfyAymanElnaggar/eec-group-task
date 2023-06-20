<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\PharmacyRepositoryRepository;
use App\Entities\PharmacyRepository;
use App\Validators\PharmacyRepositoryValidator;

/**
 * Class PharmacyRepositoryRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class PharmacyRepositoryRepositoryEloquent extends BaseRepository implements PharmacyRepositoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return PharmacyRepository::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
