<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceProvisioningError
 */
class ServiceProvisioningError
{
    /**
     * The date and time at which the error occurred.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Indicates whether the error has been attended to.
     */
    private ?bool $isResolved;

    /**
     * Qualified service instance (for example, ''SharePoint/Dublin'') that published the service error information.
     */
    private ?string $serviceInstance;


    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getIsResolved(): ?bool
    {
        return $this->isResolved;
    }

    public function setIsResolved(?bool $isResolved): self
    {
        $this->isResolved = $isResolved;
        return $this;
    }

    public function getServiceInstance(): ?string
    {
        return $this->serviceInstance;
    }

    public function setServiceInstance(?string $serviceInstance): self
    {
        $this->serviceInstance = $serviceInstance;
        return $this;
    }

}
