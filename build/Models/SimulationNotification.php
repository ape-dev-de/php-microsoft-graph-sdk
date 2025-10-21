<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationNotification
 */
class SimulationNotification
{
    public function __construct(
        /** The default language for the end user notification. */
        public ?string $defaultLanguage = null,
        /**  */
        public ?EndUserNotification $endUserNotification = null,
        /** Target user type. Possible values are: unknown, clicked, compromised, allUsers, unknownFutureValue. */
        public ?TargettedUserType $targettedUserType = null
    ) {}
}
