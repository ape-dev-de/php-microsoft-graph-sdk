<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CommunicationsApplicationInstanceIdentity
 */
class CommunicationsApplicationInstanceIdentity
{
    public function __construct(
        /** True if the participant shouldn't be shown in other participants' rosters. */
        public ?bool $hidden = null,
        /** The tenant ID of the application. */
        public ?string $tenantId = null
    ) {}
}
