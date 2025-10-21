<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementPartner
 */
class DeviceManagementPartner
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Partner display name */
        public ?string $displayName = null,
        /** User groups that specifies whether enrollment is through partner. */
        public array $groupsRequiringPartnerEnrollment = [],
        /** Whether device management partner is configured or not */
        public ?bool $isConfigured = null,
        /** Timestamp of last heartbeat after admin enabled option Connect to Device management Partner */
        public ?\DateTimeInterface $lastHeartbeatDateTime = null,
        /**  */
        public ?DeviceManagementPartnerAppType $partnerAppType = null,
        /**  */
        public ?DeviceManagementPartnerTenantState $partnerState = null,
        /** Partner Single tenant App id */
        public ?string $singleTenantAppId = null,
        /** DateTime in UTC when PartnerDevices will be marked as NonCompliant */
        public ?\DateTimeInterface $whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime = null,
        /** DateTime in UTC when PartnerDevices will be removed */
        public ?\DateTimeInterface $whenPartnerDevicesWillBeRemovedDateTime = null
    ) {}
}
