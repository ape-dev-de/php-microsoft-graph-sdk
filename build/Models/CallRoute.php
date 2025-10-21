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
        public ?IdentitySet $final = null,
        /**  */
        public ?IdentitySet $original = null,
        /**  */
        public ?RoutingType $routingType = null
    ) {}
}
