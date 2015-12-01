<?php

/**
 * This file is part of the PHP SDK library for the Superdesk Content API.
 *
 * Copyright 2015 Sourcefabric z.u. and contributors.
 *
 * For the full copyright and license information, please see the
 * AUTHORS and LICENSE files distributed with this source code.
 *
 * @copyright 2015 Sourcefabric z.ú.
 * @license http://www.superdesk.org/license
 */

namespace Superdesk\ContentApiSdk\API;

class RequestDecorator implements RequestInterface
{
    /**
     * @var RequestInterface
     */
    protected $decoratedRequest;

    /**
     * Intialize object.
     *
     * @param RequestInterface $wrappable
     */
    public function __construct(RequestInterface $requestInterface)
    {
        $this->decoratedRequest = $requestInterface;
    }

    /**
     * Get host.
     *
     * @return string
     */
    public function getHost()
    {
        return $this->decoratedRequest->getHost();
    }

    /**
     * Set hostname.
     *
     * @param string $host
     *
     * @return self
     */
    public function setHost($host)
    {
        $this->decoratedRequest->setHost($host);

        return $this;
    }

    /**
     * Get port.
     *
     * @return int
     */
    public function getPort()
    {
        return $this->decoratedRequest->getPort();
    }

    /**
     * Set port.
     *
     * @param int $port
     *
     * @return self
     */
    public function setPort($port)
    {
        $this->decoratedRequest->setPort($port);

        return $this;
    }

    /**
     * Get uri.
     *
     * @return string
     */
    public function getUri()
    {
        return $this->decoratedRequest->getUri();
    }

    /**
     * Set uri.
     *
     * @param string $uri
     *
     * @return self
     */
    public function setUri($uri)
    {
        $this->decoratedRequest->setUri($uri);

        return $this;
    }

    /**
     * Get query parameters.
     *
     * @return array
     */
    public function getParameters()
    {
        return $this->decoratedRequest->getParameters();
    }

    /**
     * Set query parameters.
     *
     * @param string[] $parameters
     *
     * @return self
     *
     * @throws RequestException If parameters data types are invalid
     */
    public function setParameters(array $parameters)
    {
        $this->decoratedRequest->setParameters(ContentApiSdk::processParameters($parameters, $this->parameterValidation));

        return $this;
    }

    /**
     * Enables parameter validation
     *
     * @return self
     */
    public function enableParameterValidation()
    {
        $this->decoratedRequest->enableParameterValidation();

        return $this;
    }

    /**
     * Disables parameter validation
     *
     * @return self
     */
    public function disableParameterValidation()
    {
        $this->decoratedRequest->disableParameterValidation();
    }

    /**
     * Gets the value of headers.
     *
     * @return string[]
     */
    public function getHeaders()
    {
        return $this->decoratedRequest->getHeaders();
    }

    /**
     * Sets the value of headers.
     *
     * @param string[] $headers Value to set
     *
     * @return self
     */
    public function setHeaders(array $headers)
    {
        $this->decoratedRequest->setHeaders($headers);

        return $this;
    }

    /**
     * Gets the value of options.
     *
     * @return mixed[]
     */
    public function getOptions()
    {
        return $this->decoratedRequest->getOptions();
    }

    /**
     * Sets the value of options.
     *
     * @param mixed[] $options Value to set
     *
     * @return self
     */
    public function setOptions(array $options)
    {
        $this->decoratedRequest->setOptions($options);

        return $this;
    }

    /**
     * Get base url.
     *
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->decoratedRequest->getBaseUrl();
    }

    /**
     * Get full url.
     *
     * @return string
     */
    public function getFullUrl()
    {
        return $this->decoratedRequest->getFullUrl();
    }
}
