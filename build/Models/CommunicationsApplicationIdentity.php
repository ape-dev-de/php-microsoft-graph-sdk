<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CommunicationsApplicationIdentity
 */
class CommunicationsApplicationIdentity
{
    public function __construct(
        /** First-party Microsoft application that presents this identity. */
        public ?string $applicationType = null,
        /** True if the participant shouldn't be shown in other participants' rosters. */
        public ?string $hidden = null
    ) {}
}
