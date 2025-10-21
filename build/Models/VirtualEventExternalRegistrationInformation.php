<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventExternalRegistrationInformation
 */
class VirtualEventExternalRegistrationInformation
{
    public function __construct(
        /** A URL or string that represents the location from which the registrant registered. Optional. */
        public ?string $referrer = null,
        /** The identifier for a virtualEventExternalRegistrationInformation object. Optional. If set, the maximum supported length is 256 characters. */
        public ?string $registrationId = null
    ) {}
}
