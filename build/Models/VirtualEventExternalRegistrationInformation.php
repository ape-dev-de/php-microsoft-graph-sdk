<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventExternalRegistrationInformation
 */
class VirtualEventExternalRegistrationInformation
{
    /**
     * A URL or string that represents the location from which the registrant registered. Optional.
     */
    private ?string $referrer;

    /**
     * The identifier for a virtualEventExternalRegistrationInformation object. Optional. If set, the maximum supported length is 256 characters.
     */
    private ?string $registrationId;

    public function getReferrer(): ?string
    {
        return $this->referrer;
    }

    public function setReferrer(?string $referrer): self
    {
        $this->referrer = $referrer;
        return $this;
    }

    public function getRegistrationId(): ?string
    {
        return $this->registrationId;
    }

    public function setRegistrationId(?string $registrationId): self
    {
        $this->registrationId = $registrationId;
        return $this;
    }

}
