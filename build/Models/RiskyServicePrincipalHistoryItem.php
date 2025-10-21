<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RiskyServicePrincipalHistoryItem
 */
class RiskyServicePrincipalHistoryItem
{
    public function __construct(
        /** The activity related to service principal risk level change. */
        public ?string $activity = null,
        /** The identifier of the actor of the operation. */
        public ?string $initiatedBy = null
    ) {}
}
