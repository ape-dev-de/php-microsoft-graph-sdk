<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsLicensingDetails
 */
class TeamsLicensingDetails
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Indicates whether the user has a valid license to use Microsoft Teams. */
        public ?string $hasTeamsLicense = null
    ) {}
}
