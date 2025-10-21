<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamworkUserIdentity
 */
class TeamworkUserIdentity
{
    public function __construct(
        /** Type of user. Possible values are: aadUser, onPremiseAadUser, anonymousGuest, federatedUser, personalMicrosoftAccountUser, skypeUser, phoneUser, unknownFutureValue and emailUser. */
        public ?string $userIdentityType = null
    ) {}
}
