<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StoragePlanInformation
 */
class StoragePlanInformation
{
    public function __construct(
        /** Indicates whether there are higher storage quota plans available. Read-only. */
        public ?bool $upgradeAvailable = null
    ) {}
}
