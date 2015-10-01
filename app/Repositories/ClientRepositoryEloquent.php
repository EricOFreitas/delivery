<?php

namespace Delivery\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Delivery\Models\Client;

/**
 * Class ClientRepositoryEloquent
 * @package namespace Delivery\Repositories;
 */
class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Client::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
