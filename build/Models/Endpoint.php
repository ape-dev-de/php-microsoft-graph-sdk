<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Endpoint
 */
class Endpoint
{
    public function __construct(
        /**  */
        public ?string $capability = null,
        /**  */
        public ?string $providerId = null,
        /**  */
        public ?string $providerName = null,
        /**  */
        public ?string $providerResourceId = null,
        /**  */
        public ?string $uri = null
    ) {}
}
