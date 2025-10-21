<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * HttpRequestEndpoint
 */
class HttpRequestEndpoint
{
    public function __construct(
        /** The HTTP endpoint that a custom extension calls. */
        public ?string $targetUrl = null
    ) {}
}
