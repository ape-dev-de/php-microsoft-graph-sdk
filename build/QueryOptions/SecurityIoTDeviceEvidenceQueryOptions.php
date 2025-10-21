<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityIoTDeviceEvidence resources
 *
 * Available select fields:
 * - deviceId
 * - deviceName
 * - devicePageLink
 * - deviceSubType
 * - deviceType
 * - importance
 * - ioTHub
 * - ioTSecurityAgentId
 * - ipAddress
 * - isAuthorized
 * - isProgramming
 * - isScanner
 * - macAddress
 * - manufacturer
 * - model
 * - nics
 * - operatingSystem
 * - owners
 * - protocols
 * - purdueLayer
 * - sensor
 * - serialNumber
 * - site
 * - source
 * - sourceRef
 * - zone
 */
class SecurityIoTDeviceEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityIoTDeviceEvidence
     */
    public const FIELD_DEVICE_ID = 'deviceId';
    public const FIELD_DEVICE_NAME = 'deviceName';
    public const FIELD_DEVICE_PAGE_LINK = 'devicePageLink';
    public const FIELD_DEVICE_SUB_TYPE = 'deviceSubType';
    public const FIELD_DEVICE_TYPE = 'deviceType';
    public const FIELD_IMPORTANCE = 'importance';
    public const FIELD_IO_THUB = 'ioTHub';
    public const FIELD_IO_TSECURITY_AGENT_ID = 'ioTSecurityAgentId';
    public const FIELD_IP_ADDRESS = 'ipAddress';
    public const FIELD_IS_AUTHORIZED = 'isAuthorized';
    public const FIELD_IS_PROGRAMMING = 'isProgramming';
    public const FIELD_IS_SCANNER = 'isScanner';
    public const FIELD_MAC_ADDRESS = 'macAddress';
    public const FIELD_MANUFACTURER = 'manufacturer';
    public const FIELD_MODEL = 'model';
    public const FIELD_NICS = 'nics';
    public const FIELD_OPERATING_SYSTEM = 'operatingSystem';
    public const FIELD_OWNERS = 'owners';
    public const FIELD_PROTOCOLS = 'protocols';
    public const FIELD_PURDUE_LAYER = 'purdueLayer';
    public const FIELD_SENSOR = 'sensor';
    public const FIELD_SERIAL_NUMBER = 'serialNumber';
    public const FIELD_SITE = 'site';
    public const FIELD_SOURCE = 'source';
    public const FIELD_SOURCE_REF = 'sourceRef';
    public const FIELD_ZONE = 'zone';

    /**
     * Select specific SecurityIoTDeviceEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
