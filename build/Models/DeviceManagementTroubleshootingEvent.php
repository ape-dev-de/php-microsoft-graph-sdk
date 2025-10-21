<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementTroubleshootingEvent
 */
class DeviceManagementTroubleshootingEvent
{
    /**
     * Id used for tracing the failure in the service.
     */
    private ?string $correlationId;

    /**
     * Event representing an general failure.
     */
    private ?\DateTimeInterface $eventDateTime;


    public function getCorrelationId(): ?string
    {
        return $this->correlationId;
    }

    public function setCorrelationId(?string $correlationId): self
    {
        $this->correlationId = $correlationId;
        return $this;
    }

    public function getEventDateTime(): ?\DateTimeInterface
    {
        return $this->eventDateTime;
    }

    public function setEventDateTime(?\DateTimeInterface $eventDateTime): self
    {
        $this->eventDateTime = $eventDateTime;
        return $this;
    }

}
