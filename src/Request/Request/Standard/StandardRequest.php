<?php

namespace MaxBeckers\AmazonAlexa\Request\Request\Standard;

use MaxBeckers\AmazonAlexa\Request\Request\AbstractRequest;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
abstract class StandardRequest extends AbstractRequest
{
    /**
     * @var string|null
     */
    public $token;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $locale;

    /**
     * @param array $amazonRequest
     */
    protected function setRequestData(array $amazonRequest)
    {
        $this->requestId = $amazonRequest['requestId'];
        $this->timestamp = new \DateTime($amazonRequest['timestamp']);
        $this->locale    = $amazonRequest['locale'];
    }
}