<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttackSimulationRepeatOffender
 */
class AttackSimulationRepeatOffender
{
    /**
     * The user in an attack simulation and training campaign.
     */
    private ?string $attackSimulationUser;

    /**
     * Number of repeat offences of the user in attack simulation and training campaigns.
     */
    private ?string $repeatOffenceCount;

    public function getAttackSimulationUser(): ?string
    {
        return $this->attackSimulationUser;
    }

    public function setAttackSimulationUser(?string $attackSimulationUser): self
    {
        $this->attackSimulationUser = $attackSimulationUser;
        return $this;
    }

    public function getRepeatOffenceCount(): ?string
    {
        return $this->repeatOffenceCount;
    }

    public function setRepeatOffenceCount(?string $repeatOffenceCount): self
    {
        $this->repeatOffenceCount = $repeatOffenceCount;
        return $this;
    }

}
