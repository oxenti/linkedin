<?php
namespace Linkedin\Controller\Component\Vendor;

use Happyr\LinkedIn\LinkedIn;

class LinkedinLib extends LinkedIn
{
    /**
     * Constructor.
     *
     * @param string $appId
     * @param string $appSecret
     * @param string $format    'json', 'xml' or 'simple_xml'
     */
    public function __construct($appId, $appSecret, $format = 'json')
    {
        Parent::__construct($appId, $appSecret, $format = 'json');
    }
    
    /**
     * linkedinget
     * Do a request for linkedin api.
     */
    public function linkedinget($resource, $token)
    {
        $method = 'GET';
        $options = [];

        // Add access token to the headers
        $options['headers']['Authorization'] = sprintf('Bearer %s', $token);
        // Do logic and adjustments to the options
        $this->filterRequestOption($options);

        // Generate an url
        $url = $this->getUrlGenerator()->getUrl('api', $resource, isset($options['query']) ? $options['query'] : []);
        unset($options['query']);
        // $method that url
        $result = $this->getRequest()->send($method, $url, $options);

        return $result;
    }
}
