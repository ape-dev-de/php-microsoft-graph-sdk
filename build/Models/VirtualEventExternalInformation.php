<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventExternalInformation
 */
class VirtualEventExternalInformation
{
    /**
     * Identifier of the application that hosts the externalEventId. Read-only.
     */
    private ?string $applicationId;

    /**
     * The identifier for a virtualEventExternalInformation object that associates the virtual event with an event ID in an external application. This association bundles all the information (both supported and not supported in virtualEvent) into one virtual event object. Optional. If set, the maximum supported length is 256 characters.
     */
    private ?string $externalEventId;


    public function getApplicationId(): ?string
    {
        return $this->applicationId;
    }

    public function setApplicationId(?string $applicationId): self
    {
        $this->applicationId = $applicationId;
        return $this;
    }

    public function getExternalEventId(): ?string
    {
        return $this->externalEventId;
    }

    public function setExternalEventId(?string $externalEventId): self
    {
        $this->externalEventId = $externalEventId;
        return $this;
    }

}
