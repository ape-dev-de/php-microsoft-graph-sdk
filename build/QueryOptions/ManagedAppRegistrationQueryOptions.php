<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAppRegistration resources
 *
 * Available select fields:
 * - appIdentifier
 * - applicationVersion
 * - createdDateTime
 * - deviceName
 * - deviceTag
 * - deviceType
 * - flaggedReasons
 * - lastSyncDateTime
 * - managementSdkVersion
 * - platformVersion
 * - userId
 * - version
 * - appliedPolicies
 * - intendedPolicies
 * - operations
 */
class ManagedAppRegistrationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedAppRegistration
     */
    public const FIELD_APP_IDENTIFIER = 'appIdentifier';
    public const FIELD_APPLICATION_VERSION = 'applicationVersion';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DEVICE_NAME = 'deviceName';
    public const FIELD_DEVICE_TAG = 'deviceTag';
    public const FIELD_DEVICE_TYPE = 'deviceType';
    public const FIELD_FLAGGED_REASONS = 'flaggedReasons';
    public const FIELD_LAST_SYNC_DATE_TIME = 'lastSyncDateTime';
    public const FIELD_MANAGEMENT_SDK_VERSION = 'managementSdkVersion';
    public const FIELD_PLATFORM_VERSION = 'platformVersion';
    public const FIELD_USER_ID = 'userId';
    public const FIELD_VERSION = 'version';
    public const FIELD_APPLIED_POLICIES = 'appliedPolicies';
    public const FIELD_INTENDED_POLICIES = 'intendedPolicies';
    public const FIELD_OPERATIONS = 'operations';

    /**
     * Select specific ManagedAppRegistration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
