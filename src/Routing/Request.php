<?php
namespace PropertyFinder\Routing;

/**
 * @author Davison Mghanga Kimigho <dkimigz@gmail.com>
 * This class is used to store REQUEST_URI
 * Class Request
 * @package PropertyFinder\Routing
 */
class Request
{
    /**
     * Stores REQUEST_URI;
     * @var
     */
    private $url;

    /**
     * Request constructor.
     */
    public function __construct()
    {
        $this->url = $_SERVER["REQUEST_URI"];
    }

    /**
     * Return REQUEST_URI
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }


}
