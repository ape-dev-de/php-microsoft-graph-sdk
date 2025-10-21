<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EnumeratedDeviceRegistrationMembership
 */
class EnumeratedDeviceRegistrationMembership
{
    public function __construct(
        /** @var string[]  */
        public array $groups = [],
        /** @var string[]  */
        public array $users = []
    ) {}
}
