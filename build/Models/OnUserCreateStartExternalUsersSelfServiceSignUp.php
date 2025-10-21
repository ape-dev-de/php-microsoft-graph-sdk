<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnUserCreateStartExternalUsersSelfServiceSignUp
 */
class OnUserCreateStartExternalUsersSelfServiceSignUp
{
    /**
     * The type of user to create. Maps to userType property of user object. The possible values are: member, guest, unknownFutureValue.
     */
    private ?string $userTypeToCreate;


    public function getUserTypeToCreate(): ?string
    {
        return $this->userTypeToCreate;
    }

    public function setUserTypeToCreate(?string $userTypeToCreate): self
    {
        $this->userTypeToCreate = $userTypeToCreate;
        return $this;
    }

}
