<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationOnPremisesInfo
 */
class EducationOnPremisesInfo
{
    public function __construct(
        /** Unique identifier for the user object in Active Directory. */
        public ?string $immutableId = null
    ) {}
}
