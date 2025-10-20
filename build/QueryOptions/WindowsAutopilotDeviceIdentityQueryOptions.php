<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsAutopilotDeviceIdentity resources
 *
 * Available select fields:
 * - addressableUserName
 * - azureActiveDirectoryDeviceId
 * - displayName
 * - enrollmentState
 * - groupTag
 * - lastContactedDateTime
 * - managedDeviceId
 * - manufacturer
 * - model
 * - productKey
 * - purchaseOrderIdentifier
 * - resourceName
 * - serialNumber
 * - skuNumber
 * - systemFamily
 * - userPrincipalName
 */
class WindowsAutopilotDeviceIdentityQueryOptions extends QueryOptions
{
    public const FIELD_ADDRESSABLE_USER_NAME = 'addressableUserName';
    public const FIELD_AZURE_ACTIVE_DIRECTORY_DEVICE_ID = 'azureActiveDirectoryDeviceId';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_ENROLLMENT_STATE = 'enrollmentState';
    public const FIELD_GROUP_TAG = 'groupTag';
    public const FIELD_LAST_CONTACTED_DATE_TIME = 'lastContactedDateTime';
    public const FIELD_MANAGED_DEVICE_ID = 'managedDeviceId';
    public const FIELD_MANUFACTURER = 'manufacturer';
    public const FIELD_MODEL = 'model';
    public const FIELD_PRODUCT_KEY = 'productKey';
    public const FIELD_PURCHASE_ORDER_IDENTIFIER = 'purchaseOrderIdentifier';
    public const FIELD_RESOURCE_NAME = 'resourceName';
    public const FIELD_SERIAL_NUMBER = 'serialNumber';
    public const FIELD_SKU_NUMBER = 'skuNumber';
    public const FIELD_SYSTEM_FAMILY = 'systemFamily';
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';

    /**
     * Select specific WindowsAutopilotDeviceIdentity properties
     * 
     * @param array<string> $select Use WindowsAutopilotDeviceIdentityQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
