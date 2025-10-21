<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Admin
 */
class Admin
{
    /**
     * A container for Microsoft Edge resources. Read-only.
     */
    private ?string $edge;

    /**
     * A container for the Microsoft 365 apps admin functionality.
     */
    private ?string $microsoft365Apps;

    /**
     * Represents a setting to control people-related admin settings in the tenant.
     */
    private ?string $people;

    /**
     * A container for administrative resources to manage reports.
     */
    private ?string $reportSettings;

    /**
     * A container for service communications resources. Read-only.
     */
    private ?string $serviceAnnouncement;

    /**
     */
    private ?string $sharepoint;


    public function getEdge(): ?string
    {
        return $this->edge;
    }

    public function setEdge(?string $edge): self
    {
        $this->edge = $edge;
        return $this;
    }

    public function getMicrosoft365Apps(): ?string
    {
        return $this->microsoft365Apps;
    }

    public function setMicrosoft365Apps(?string $microsoft365Apps): self
    {
        $this->microsoft365Apps = $microsoft365Apps;
        return $this;
    }

    public function getPeople(): ?string
    {
        return $this->people;
    }

    public function setPeople(?string $people): self
    {
        $this->people = $people;
        return $this;
    }

    public function getReportSettings(): ?string
    {
        return $this->reportSettings;
    }

    public function setReportSettings(?string $reportSettings): self
    {
        $this->reportSettings = $reportSettings;
        return $this;
    }

    public function getServiceAnnouncement(): ?string
    {
        return $this->serviceAnnouncement;
    }

    public function setServiceAnnouncement(?string $serviceAnnouncement): self
    {
        $this->serviceAnnouncement = $serviceAnnouncement;
        return $this;
    }

    public function getSharepoint(): ?string
    {
        return $this->sharepoint;
    }

    public function setSharepoint(?string $sharepoint): self
    {
        $this->sharepoint = $sharepoint;
        return $this;
    }

}
