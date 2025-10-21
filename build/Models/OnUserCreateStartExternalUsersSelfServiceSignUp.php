<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnUserCreateStartExternalUsersSelfServiceSignUp
 */
class OnUserCreateStartExternalUsersSelfServiceSignUp
{
    public function __construct(
        /** The type of user to create. Maps to userType property of user object. The possible values are: member, guest, unknownFutureValue. */
        public ?string $userTypeToCreate = null
    ) {}
}
