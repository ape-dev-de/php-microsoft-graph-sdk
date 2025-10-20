<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcProvisioningPolicy resources
 *
 * Available select fields:
 * - alternateResourceUrl
 * - autopatch
 * - cloudPcGroupDisplayName
 * - cloudPcNamingTemplate
 * - description
 * - displayName
 * - domainJoinConfigurations
 * - enableSingleSignOn
 * - gracePeriodInHours
 * - imageDisplayName
 * - imageId
 * - imageType
 * - localAdminEnabled
 * - microsoftManagedDesktop
 * - provisioningType
 * - windowsSetting
 * - assignments
 */
class CloudPcProvisioningPolicyQueryOptions extends QueryOptions
{
    public const FIELD_ALTERNATE_RESOURCE_URL = 'alternateResourceUrl';
    public const FIELD_AUTOPATCH = 'autopatch';
    public const FIELD_CLOUD_PC_GROUP_DISPLAY_NAME = 'cloudPcGroupDisplayName';
    public const FIELD_CLOUD_PC_NAMING_TEMPLATE = 'cloudPcNamingTemplate';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_DOMAIN_JOIN_CONFIGURATIONS = 'domainJoinConfigurations';
    public const FIELD_ENABLE_SINGLE_SIGN_ON = 'enableSingleSignOn';
    public const FIELD_GRACE_PERIOD_IN_HOURS = 'gracePeriodInHours';
    public const FIELD_IMAGE_DISPLAY_NAME = 'imageDisplayName';
    public const FIELD_IMAGE_ID = 'imageId';
    public const FIELD_IMAGE_TYPE = 'imageType';
    public const FIELD_LOCAL_ADMIN_ENABLED = 'localAdminEnabled';
    public const FIELD_MICROSOFT_MANAGED_DESKTOP = 'microsoftManagedDesktop';
    public const FIELD_PROVISIONING_TYPE = 'provisioningType';
    public const FIELD_WINDOWS_SETTING = 'windowsSetting';
    public const FIELD_ASSIGNMENTS = 'assignments';

    /**
     * Select specific CloudPcProvisioningPolicy properties
     * 
     * @param array<string> $select Use CloudPcProvisioningPolicyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
