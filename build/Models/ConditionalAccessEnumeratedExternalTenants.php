<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessEnumeratedExternalTenants
 */
class ConditionalAccessEnumeratedExternalTenants
{
    public function __construct(
        /** @var string[] A collection of tenant IDs that define the scope of a policy targeting conditional access for guests and external users. */
        public array $members = []
    ) {}
}
