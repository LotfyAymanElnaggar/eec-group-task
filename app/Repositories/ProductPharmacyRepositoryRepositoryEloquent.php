<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ProductPharmacyRepositoryRepository;
use App\Entities\ProductPharmacyRepository;
use App\Validators\ProductPharmacyRepositoryValidator;

/**
 * Class ProductPharmacyRepositoryRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ProductPharmacyRepositoryRepositoryEloquent extends BaseRepository implements ProductPharmacyRepositoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ProductPharmacyRepository::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
