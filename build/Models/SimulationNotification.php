<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationNotification
 */
class SimulationNotification
{
    public function __construct(
        /** Target user type. Possible values are: unknown, clicked, compromised, allUsers, unknownFutureValue. */
        public ?string $targettedUserType = null
    ) {}
}
