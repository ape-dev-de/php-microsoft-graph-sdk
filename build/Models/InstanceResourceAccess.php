<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InstanceResourceAccess
 */
class InstanceResourceAccess
{
    public function __construct(
        /**  */
        public array $permissions = [],
        /**  */
        public ?string $resourceAppId = null
    ) {}
}
