<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagementPartner resources
 *
 * Available select fields:
 * - displayName
 * - groupsRequiringPartnerEnrollment
 * - isConfigured
 * - lastHeartbeatDateTime
 * - partnerAppType
 * - partnerState
 * - singleTenantAppId
 * - whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime
 * - whenPartnerDevicesWillBeRemovedDateTime
 */
class DeviceManagementPartnerQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_GROUPS_REQUIRING_PARTNER_ENROLLMENT = 'groupsRequiringPartnerEnrollment';
    public const FIELD_IS_CONFIGURED = 'isConfigured';
    public const FIELD_LAST_HEARTBEAT_DATE_TIME = 'lastHeartbeatDateTime';
    public const FIELD_PARTNER_APP_TYPE = 'partnerAppType';
    public const FIELD_PARTNER_STATE = 'partnerState';
    public const FIELD_SINGLE_TENANT_APP_ID = 'singleTenantAppId';
    public const FIELD_WHEN_PARTNER_DEVICES_WILL_BE_MARKED_AS_NON_COMPLIANT_DATE_TIME = 'whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime';
    public const FIELD_WHEN_PARTNER_DEVICES_WILL_BE_REMOVED_DATE_TIME = 'whenPartnerDevicesWillBeRemovedDateTime';

    /**
     * Select specific DeviceManagementPartner properties
     * 
     * @param array<string> $select Use DeviceManagementPartnerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
