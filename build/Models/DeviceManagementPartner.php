<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementPartner
 */
class DeviceManagementPartner
{
    /**
     * Partner display name
     */
    private ?string $displayName;

    /**
     * User groups that specifies whether enrollment is through partner.
     */
    private array $groupsRequiringPartnerEnrollment = [];

    /**
     * Whether device management partner is configured or not
     */
    private ?bool $isConfigured;

    /**
     * Timestamp of last heartbeat after admin enabled option Connect to Device management Partner
     */
    private ?\DateTimeInterface $lastHeartbeatDateTime;

    /**
     */
    private ?string $partnerAppType;

    /**
     */
    private ?string $partnerState;

    /**
     * Partner Single tenant App id
     */
    private ?string $singleTenantAppId;

    /**
     * DateTime in UTC when PartnerDevices will be marked as NonCompliant
     */
    private ?\DateTimeInterface $whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime;

    /**
     * Entity which represents a connection to device management partner.
     */
    private ?\DateTimeInterface $whenPartnerDevicesWillBeRemovedDateTime;


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getGroupsRequiringPartnerEnrollment(): array
    {
        return $this->groupsRequiringPartnerEnrollment;
    }

    public function setGroupsRequiringPartnerEnrollment(array $groupsRequiringPartnerEnrollment): self
    {
        $this->groupsRequiringPartnerEnrollment = $groupsRequiringPartnerEnrollment;
        return $this;
    }

    public function getIsConfigured(): ?bool
    {
        return $this->isConfigured;
    }

    public function setIsConfigured(?bool $isConfigured): self
    {
        $this->isConfigured = $isConfigured;
        return $this;
    }

    public function getLastHeartbeatDateTime(): ?\DateTimeInterface
    {
        return $this->lastHeartbeatDateTime;
    }

    public function setLastHeartbeatDateTime(?\DateTimeInterface $lastHeartbeatDateTime): self
    {
        $this->lastHeartbeatDateTime = $lastHeartbeatDateTime;
        return $this;
    }

    public function getPartnerAppType(): ?string
    {
        return $this->partnerAppType;
    }

    public function setPartnerAppType(?string $partnerAppType): self
    {
        $this->partnerAppType = $partnerAppType;
        return $this;
    }

    public function getPartnerState(): ?string
    {
        return $this->partnerState;
    }

    public function setPartnerState(?string $partnerState): self
    {
        $this->partnerState = $partnerState;
        return $this;
    }

    public function getSingleTenantAppId(): ?string
    {
        return $this->singleTenantAppId;
    }

    public function setSingleTenantAppId(?string $singleTenantAppId): self
    {
        $this->singleTenantAppId = $singleTenantAppId;
        return $this;
    }

    public function getWhenPartnerDevicesWillBeMarkedAsNonCompliantDateTime(): ?\DateTimeInterface
    {
        return $this->whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime;
    }

    public function setWhenPartnerDevicesWillBeMarkedAsNonCompliantDateTime(?\DateTimeInterface $whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime): self
    {
        $this->whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime = $whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime;
        return $this;
    }

    public function getWhenPartnerDevicesWillBeRemovedDateTime(): ?\DateTimeInterface
    {
        return $this->whenPartnerDevicesWillBeRemovedDateTime;
    }

    public function setWhenPartnerDevicesWillBeRemovedDateTime(?\DateTimeInterface $whenPartnerDevicesWillBeRemovedDateTime): self
    {
        $this->whenPartnerDevicesWillBeRemovedDateTime = $whenPartnerDevicesWillBeRemovedDateTime;
        return $this;
    }

}
