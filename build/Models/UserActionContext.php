<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserActionContext
 */
class UserActionContext
{
    public function __construct(
        /** Represents the user action that the authenticating identity is performing. The possible values are: registerSecurityInformation, registerOrJoinDevices, unknownFutureValue. */
        public ?UserAction $userAction = null
    ) {}
}
