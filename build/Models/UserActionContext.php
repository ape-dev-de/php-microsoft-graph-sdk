<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserActionContext
 */
class UserActionContext
{
    /**
     * Represents the user action that the authenticating identity is performing. The possible values are: registerSecurityInformation, registerOrJoinDevices, unknownFutureValue.
     */
    private ?string $userAction;

    public function getUserAction(): ?string
    {
        return $this->userAction;
    }

    public function setUserAction(?string $userAction): self
    {
        $this->userAction = $userAction;
        return $this;
    }

}
