<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsAutopilotDeploymentProfile resources
 *
 * Available select fields:
 * - createdDateTime
 * - description
 * - deviceNameTemplate
 * - deviceType
 * - displayName
 * - hardwareHashExtractionEnabled
 * - lastModifiedDateTime
 * - locale
 * - managementServiceAppId
 * - outOfBoxExperienceSetting
 * - preprovisioningAllowed
 * - roleScopeTagIds
 * - assignedDevices
 */
class WindowsAutopilotDeploymentProfileQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsAutopilotDeploymentProfile
     */
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DEVICE_NAME_TEMPLATE = 'deviceNameTemplate';
    public const FIELD_DEVICE_TYPE = 'deviceType';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_HARDWARE_HASH_EXTRACTION_ENABLED = 'hardwareHashExtractionEnabled';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_LOCALE = 'locale';
    public const FIELD_MANAGEMENT_SERVICE_APP_ID = 'managementServiceAppId';
    public const FIELD_OUT_OF_BOX_EXPERIENCE_SETTING = 'outOfBoxExperienceSetting';
    public const FIELD_PREPROVISIONING_ALLOWED = 'preprovisioningAllowed';
    public const FIELD_ROLE_SCOPE_TAG_IDS = 'roleScopeTagIds';
    public const FIELD_ASSIGNED_DEVICES = 'assignedDevices';

    /**
     * Select specific WindowsAutopilotDeploymentProfile properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
