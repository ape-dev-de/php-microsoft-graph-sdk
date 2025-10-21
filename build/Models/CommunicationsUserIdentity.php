<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CommunicationsUserIdentity
 */
class CommunicationsUserIdentity
{
    public function __construct(
        /** The user's tenant ID. */
        public ?string $tenantId = null
    ) {}
}
