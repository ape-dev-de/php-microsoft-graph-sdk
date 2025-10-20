<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PermissionGrantConditionSet resources
 *
 * Available select fields:
 * - clientApplicationIds
 * - clientApplicationPublisherIds
 * - clientApplicationsFromVerifiedPublisherOnly
 * - clientApplicationTenantIds
 * - permissionClassification
 * - permissions
 * - permissionType
 * - resourceApplication
 */
class PermissionGrantConditionSetQueryOptions extends QueryOptions
{
    public const FIELD_CLIENT_APPLICATION_IDS = 'clientApplicationIds';
    public const FIELD_CLIENT_APPLICATION_PUBLISHER_IDS = 'clientApplicationPublisherIds';
    public const FIELD_CLIENT_APPLICATIONS_FROM_VERIFIED_PUBLISHER_ONLY = 'clientApplicationsFromVerifiedPublisherOnly';
    public const FIELD_CLIENT_APPLICATION_TENANT_IDS = 'clientApplicationTenantIds';
    public const FIELD_PERMISSION_CLASSIFICATION = 'permissionClassification';
    public const FIELD_PERMISSIONS = 'permissions';
    public const FIELD_PERMISSION_TYPE = 'permissionType';
    public const FIELD_RESOURCE_APPLICATION = 'resourceApplication';

    /**
     * Select specific PermissionGrantConditionSet properties
     * 
     * @param array<string> $select Use PermissionGrantConditionSetQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
