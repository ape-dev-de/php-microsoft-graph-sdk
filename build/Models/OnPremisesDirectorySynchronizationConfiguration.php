<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnPremisesDirectorySynchronizationConfiguration
 */
class OnPremisesDirectorySynchronizationConfiguration
{
    public function __construct(
        /** Contains the accidental deletion prevention configuration for a tenant. */
        public ?string $accidentalDeletionPrevention = null
    ) {}
}
