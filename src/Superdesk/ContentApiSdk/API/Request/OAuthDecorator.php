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

namespace Superdesk\ContentApiSdk\API\Request;

/**
 * OAuth decorator for API request.
 */
class OAuthDecorator extends RequestDecorator
{
    /**
     * OAuth access token.
     *
     * @var string
     */
    protected $access_token;

    /**
     * OAuth refresh token.
     *
     * @var string
     */
    protected $refresh_token;

    /**
     * Get access token.
     *
     * @return string
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * Set access token.
     *
     * @param string $access_token
     *
     * @return self
     */
    public function setAccessToken($access_token)
    {
        $this->access_token = $access_token;

        return self;
    }

    /**
     * Sets Authentication header on decorated request.
     *
     * @return self
     */
    public function addAuthentication()
    {
        // TODO: Throw Exception if access_token is not set yet
        $headers = $this->decoratedRequest->getHeaders();

        if (!is_array($headers)) {
            $headers = array();
        }

        $headers['Authorization'] = sprintf('%s %s', 'OAuth2', $this->access_token);
        $this->decoratedRequest->setHeaders($headers);

        return self;
    }
}
