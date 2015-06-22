<?php
namespace App\Domain\Interfaces;

/**
 * Interface RepositoryInterface
 * @package App\Domain\Interfaces
 */
interface RepositoryInterface
{
    /**
     * @return mixed
     */
    public function getAll();
}
