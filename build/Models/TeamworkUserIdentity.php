<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamworkUserIdentity
 */
class TeamworkUserIdentity
{
    /**
     * Type of user. Possible values are: aadUser, onPremiseAadUser, anonymousGuest, federatedUser, personalMicrosoftAccountUser, skypeUser, phoneUser, unknownFutureValue and emailUser.
     */
    private ?string $userIdentityType;


    public function getUserIdentityType(): ?string
    {
        return $this->userIdentityType;
    }

    public function setUserIdentityType(?string $userIdentityType): self
    {
        $this->userIdentityType = $userIdentityType;
        return $this;
    }

}
