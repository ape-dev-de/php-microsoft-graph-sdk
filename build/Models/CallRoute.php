<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRoute
 */
class CallRoute
{
    public function __construct(
        /**  */
        public ?string $final = null,
        /**  */
        public ?string $original = null,
        /**  */
        public ?string $routingType = null
    ) {}
}
