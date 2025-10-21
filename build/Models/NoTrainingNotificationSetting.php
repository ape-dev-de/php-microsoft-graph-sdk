<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * NoTrainingNotificationSetting
 */
class NoTrainingNotificationSetting
{
    /**
     * The notification for the user who is part of the simulation.
     */
    private ?string $simulationNotification;


    public function getSimulationNotification(): ?string
    {
        return $this->simulationNotification;
    }

    public function setSimulationNotification(?string $simulationNotification): self
    {
        $this->simulationNotification = $simulationNotification;
        return $this;
    }

}
