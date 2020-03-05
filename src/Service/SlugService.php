<?php
namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;

class SlugService
{
    private $em;

    public function __construct(EntityManagerInterface $em=null)
    {
        $this->em = $em;
    }

    public function slugify($str) {
        $oldLocale = setlocale(LC_ALL, '0');
        setlocale(LC_ALL, 'en_US.UTF-8');
        $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
        $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
        $clean = strtolower($clean);
        $clean = preg_replace("/[\/_|+ -]+/", "-", $clean);
        $clean = trim($clean, "-");
        setlocale(LC_ALL, $oldLocale);
        return $clean;
    }
}