<?php
namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;

class SlugService
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function slugify($str) {
        return mb_strtolower($str);
    }
}