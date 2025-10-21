<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamClassSettings
 */
class TeamClassSettings
{
    /**
     * If set to true, enables sending of weekly assignments digest emails to parents/guardians, provided the tenant admin has enabled the setting globally.
     */
    private ?string $notifyGuardiansAboutAssignments;


    public function getNotifyGuardiansAboutAssignments(): ?string
    {
        return $this->notifyGuardiansAboutAssignments;
    }

    public function setNotifyGuardiansAboutAssignments(?string $notifyGuardiansAboutAssignments): self
    {
        $this->notifyGuardiansAboutAssignments = $notifyGuardiansAboutAssignments;
        return $this;
    }

}
