<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEndpoint
 */
class VirtualEndpoint
{
    /**
     * A collection of Cloud PC audit events.
     */
    private array $auditEvents = [];

    /**
     * A collection of cloud-managed virtual desktops.
     */
    private array $cloudPCs = [];

    /**
     * A collection of device image resources on Cloud PC.
     */
    private array $deviceImages = [];

    /**
     * A collection of gallery image resources on Cloud PC.
     */
    private array $galleryImages = [];

    /**
     * A defined collection of Azure resource information that can be used to establish Azure network connections for Cloud PCs.
     */
    private array $onPremisesConnections = [];

    /**
     * A collection of Cloud PC provisioning policies.
     */
    private array $provisioningPolicies = [];

    /**
     * A collection of Cloud PC user settings.
     */
    private ?string $userSettings;

    public function getAuditEvents(): array
    {
        return $this->auditEvents;
    }

    public function setAuditEvents(array $auditEvents): self
    {
        $this->auditEvents = $auditEvents;
        return $this;
    }

    public function getCloudPCs(): array
    {
        return $this->cloudPCs;
    }

    public function setCloudPCs(array $cloudPCs): self
    {
        $this->cloudPCs = $cloudPCs;
        return $this;
    }

    public function getDeviceImages(): array
    {
        return $this->deviceImages;
    }

    public function setDeviceImages(array $deviceImages): self
    {
        $this->deviceImages = $deviceImages;
        return $this;
    }

    public function getGalleryImages(): array
    {
        return $this->galleryImages;
    }

    public function setGalleryImages(array $galleryImages): self
    {
        $this->galleryImages = $galleryImages;
        return $this;
    }

    public function getOnPremisesConnections(): array
    {
        return $this->onPremisesConnections;
    }

    public function setOnPremisesConnections(array $onPremisesConnections): self
    {
        $this->onPremisesConnections = $onPremisesConnections;
        return $this;
    }

    public function getProvisioningPolicies(): array
    {
        return $this->provisioningPolicies;
    }

    public function setProvisioningPolicies(array $provisioningPolicies): self
    {
        $this->provisioningPolicies = $provisioningPolicies;
        return $this;
    }

    public function getUserSettings(): ?string
    {
        return $this->userSettings;
    }

    public function setUserSettings(?string $userSettings): self
    {
        $this->userSettings = $userSettings;
        return $this;
    }

}
