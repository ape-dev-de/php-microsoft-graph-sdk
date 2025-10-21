<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityGoogleCloudResourceEvidence
 */
class SecurityGoogleCloudResourceEvidence
{
    /**
     */
    private ?string $fullResourceName;

    /**
     * The zone or region where the resource is located.
     */
    private ?string $location;

    /**
     * The type of location. Possible values are: unknown, regional, zonal, global, unknownFutureValue.
     */
    private ?string $locationType;

    /**
     * The Google project ID as defined by the user.
     */
    private ?string $projectId;

    /**
     * The project number assigned by Google.
     */
    private ?float $projectNumber;

    /**
     * The name of the resource.
     */
    private ?string $resourceName;

    /**
     * The type of the resource.
     */
    private ?string $resourceType;


    public function getFullResourceName(): ?string
    {
        return $this->fullResourceName;
    }

    public function setFullResourceName(?string $fullResourceName): self
    {
        $this->fullResourceName = $fullResourceName;
        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;
        return $this;
    }

    public function getLocationType(): ?string
    {
        return $this->locationType;
    }

    public function setLocationType(?string $locationType): self
    {
        $this->locationType = $locationType;
        return $this;
    }

    public function getProjectId(): ?string
    {
        return $this->projectId;
    }

    public function setProjectId(?string $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    public function getProjectNumber(): ?float
    {
        return $this->projectNumber;
    }

    public function setProjectNumber(?float $projectNumber): self
    {
        $this->projectNumber = $projectNumber;
        return $this;
    }

    public function getResourceName(): ?string
    {
        return $this->resourceName;
    }

    public function setResourceName(?string $resourceName): self
    {
        $this->resourceName = $resourceName;
        return $this;
    }

    public function getResourceType(): ?string
    {
        return $this->resourceType;
    }

    public function setResourceType(?string $resourceType): self
    {
        $this->resourceType = $resourceType;
        return $this;
    }

}
