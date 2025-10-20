<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceDetail resources
 *
 * Available select fields:
 * - browser
 * - deviceId
 * - displayName
 * - isCompliant
 * - isManaged
 * - operatingSystem
 * - trustType
 */
class DeviceDetailQueryOptions extends QueryOptions
{
    public const FIELD_BROWSER = 'browser';
    public const FIELD_DEVICE_ID = 'deviceId';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IS_COMPLIANT = 'isCompliant';
    public const FIELD_IS_MANAGED = 'isManaged';
    public const FIELD_OPERATING_SYSTEM = 'operatingSystem';
    public const FIELD_TRUST_TYPE = 'trustType';

    /**
     * Select specific DeviceDetail properties
     * 
     * @param array<string> $select Use DeviceDetailQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
