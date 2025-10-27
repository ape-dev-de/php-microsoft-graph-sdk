<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementPartner
 */
class DeviceManagementPartner
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Partner display name */
    public ?string $displayName = null;

    /** 
     * User groups that specifies whether enrollment is through partner.
     * @var DeviceManagementPartnerAssignment[]
     */
    public array $groupsRequiringPartnerEnrollment = [];

    /** Whether device management partner is configured or not */
    public ?bool $isConfigured = null;

    /** Timestamp of last heartbeat after admin enabled option Connect to Device management Partner */
    public ?\DateTimeInterface $lastHeartbeatDateTime = null;

    /**  */
    public ?DeviceManagementPartnerAppType $partnerAppType = null;

    /**  */
    public ?DeviceManagementPartnerTenantState $partnerState = null;

    /** Partner Single tenant App id */
    public ?string $singleTenantAppId = null;

    /** DateTime in UTC when PartnerDevices will be marked as NonCompliant */
    public ?\DateTimeInterface $whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime = null;

    /** DateTime in UTC when PartnerDevices will be removed */
    public ?\DateTimeInterface $whenPartnerDevicesWillBeRemovedDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['groupsRequiringPartnerEnrollment'])) {
            $this->groupsRequiringPartnerEnrollment = $data['groupsRequiringPartnerEnrollment'];
        }
        if (isset($data['isConfigured'])) {
            $this->isConfigured = is_bool($data['isConfigured']) ? $data['isConfigured'] : (bool)$data['isConfigured'];
        }
        if (isset($data['lastHeartbeatDateTime'])) {
            $this->lastHeartbeatDateTime = is_string($data['lastHeartbeatDateTime']) ? new \DateTimeImmutable($data['lastHeartbeatDateTime']) : $data['lastHeartbeatDateTime'];
        }
        if (isset($data['partnerAppType'])) {
            $this->partnerAppType = is_string($data['partnerAppType']) ? DeviceManagementPartnerAppType::tryFrom($data['partnerAppType']) : $data['partnerAppType'];
        }
        if (isset($data['partnerState'])) {
            $this->partnerState = is_string($data['partnerState']) ? DeviceManagementPartnerTenantState::tryFrom($data['partnerState']) : $data['partnerState'];
        }
        if (isset($data['singleTenantAppId'])) {
            $this->singleTenantAppId = $data['singleTenantAppId'];
        }
        if (isset($data['whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime'])) {
            $this->whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime = is_string($data['whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime']) ? new \DateTimeImmutable($data['whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime']) : $data['whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime'];
        }
        if (isset($data['whenPartnerDevicesWillBeRemovedDateTime'])) {
            $this->whenPartnerDevicesWillBeRemovedDateTime = is_string($data['whenPartnerDevicesWillBeRemovedDateTime']) ? new \DateTimeImmutable($data['whenPartnerDevicesWillBeRemovedDateTime']) : $data['whenPartnerDevicesWillBeRemovedDateTime'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
