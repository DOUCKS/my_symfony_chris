<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController{
public function number(): Response
{
    $number = random_int(0,10);

    return new Response("<html><h1>votre nombre est:$number</h1></html>");
}
}

?>