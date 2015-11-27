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

namespace Superdesk\ContentApiSdk\Api\Request;

interface RequestInterface
{
    public function getHost();

    public function setHost($host);

    public function getPort();

    public function setPort($port);

    public function getUri();

    public function setUri($uri);

    public function getParameters();

    public function setParameters(array $parameters);

    public function getHeaders();

    public function setHeaders(array $headers);

    public function getOptions();

    public function setOptions(array $options);

    public function getBaseUrl();

    public function getFullUrl();
}
