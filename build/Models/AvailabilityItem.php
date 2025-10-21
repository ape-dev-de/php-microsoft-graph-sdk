<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AvailabilityItem
 */
class AvailabilityItem
{
    /**
     */
    private ?string $endDateTime;

    /**
     * Indicates the service ID for 1:n appointments. If the appointment is of type 1:n, this field is present, otherwise, null.
     */
    private ?string $serviceId;

    /**
     */
    private ?string $startDateTime;

    /**
     * The status of the staff member. Possible values are: available, busy, slotsAvailable, outOfOffice, unknownFutureValue.
     */
    private ?string $status;


    public function getEndDateTime(): ?string
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(?string $endDateTime): self
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }

    public function getServiceId(): ?string
    {
        return $this->serviceId;
    }

    public function setServiceId(?string $serviceId): self
    {
        $this->serviceId = $serviceId;
        return $this;
    }

    public function getStartDateTime(): ?string
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?string $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

}
