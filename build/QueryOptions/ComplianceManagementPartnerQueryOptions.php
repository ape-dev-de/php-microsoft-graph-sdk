<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ComplianceManagementPartner resources
 *
 * Available select fields:
 * - androidEnrollmentAssignments
 * - androidOnboarded
 * - displayName
 * - iosEnrollmentAssignments
 * - iosOnboarded
 * - lastHeartbeatDateTime
 * - macOsEnrollmentAssignments
 * - macOsOnboarded
 * - partnerState
 */
class ComplianceManagementPartnerQueryOptions extends QueryOptions
{
    public const FIELD_ANDROID_ENROLLMENT_ASSIGNMENTS = 'androidEnrollmentAssignments';
    public const FIELD_ANDROID_ONBOARDED = 'androidOnboarded';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IOS_ENROLLMENT_ASSIGNMENTS = 'iosEnrollmentAssignments';
    public const FIELD_IOS_ONBOARDED = 'iosOnboarded';
    public const FIELD_LAST_HEARTBEAT_DATE_TIME = 'lastHeartbeatDateTime';
    public const FIELD_MAC_OS_ENROLLMENT_ASSIGNMENTS = 'macOsEnrollmentAssignments';
    public const FIELD_MAC_OS_ONBOARDED = 'macOsOnboarded';
    public const FIELD_PARTNER_STATE = 'partnerState';

    /**
     * Select specific ComplianceManagementPartner properties
     * 
     * @param array<string> $select Use ComplianceManagementPartnerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
