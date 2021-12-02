<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        if(! session()->get('logged_in')){
            // echo "string";
            $session->setFlashdata('pesan', 'Anda harus login terlebih dahulu');
            return redirect()->to('/login'); 
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
        $session = session();
        if($session->get('logged_in') == TRUE) {
            return redirect()->to('/buku/index');
        }
    }
}