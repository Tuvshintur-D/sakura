<?php

namespace Modules\Enroll\Repositories\Cache;

use Modules\Enroll\Repositories\EnrollRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheEnrollDecorator extends BaseCacheDecorator implements EnrollRepository
{
    public function __construct(EnrollRepository $enroll)
    {
        parent::__construct();
        $this->entityName = 'enroll.enrolls';
        $this->repository = $enroll;
    }
}
