<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CommunicationsApplicationIdentity
 */
class CommunicationsApplicationIdentity
{
    /**
     * First-party Microsoft application that presents this identity.
     */
    private ?string $applicationType;

    /**
     * True if the participant shouldn't be shown in other participants' rosters.
     */
    private ?string $hidden;


    public function getApplicationType(): ?string
    {
        return $this->applicationType;
    }

    public function setApplicationType(?string $applicationType): self
    {
        $this->applicationType = $applicationType;
        return $this;
    }

    public function getHidden(): ?string
    {
        return $this->hidden;
    }

    public function setHidden(?string $hidden): self
    {
        $this->hidden = $hidden;
        return $this;
    }

}
