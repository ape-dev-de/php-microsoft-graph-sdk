<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationNotification
 */
class SimulationNotification
{
    /**
     * Target user type. Possible values are: unknown, clicked, compromised, allUsers, unknownFutureValue.
     */
    private ?string $targettedUserType;


    public function getTargettedUserType(): ?string
    {
        return $this->targettedUserType;
    }

    public function setTargettedUserType(?string $targettedUserType): self
    {
        $this->targettedUserType = $targettedUserType;
        return $this;
    }

}
