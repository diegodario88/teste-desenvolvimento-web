<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Authenticated implements FilterInterface
{
    public function before(RequestInterface $request)
    {
        $session = \Config\Services::session();

        if (!$session->get('email')) return redirect()->back();
        
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response)
    {
        // Do something here
    }
}
