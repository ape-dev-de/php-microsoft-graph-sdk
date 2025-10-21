<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEventPropagationResult
 */
class SecurityEventPropagationResult
{
    /**
     * The name of the specific location in the workload associated with the event.
     */
    private ?string $location;

    /**
     * The name of the workload associated with the event.
     */
    private ?string $serviceName;

    /**
     * Indicates the status of the event creation request. The possible values are: none, inProcessing, failed, success, unknownFutureValue.
     */
    private ?string $status;

    /**
     * Additional information about the status of the event creation request.
     */
    private ?string $statusInformation;


    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;
        return $this;
    }

    public function getServiceName(): ?string
    {
        return $this->serviceName;
    }

    public function setServiceName(?string $serviceName): self
    {
        $this->serviceName = $serviceName;
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

    public function getStatusInformation(): ?string
    {
        return $this->statusInformation;
    }

    public function setStatusInformation(?string $statusInformation): self
    {
        $this->statusInformation = $statusInformation;
        return $this;
    }

}
