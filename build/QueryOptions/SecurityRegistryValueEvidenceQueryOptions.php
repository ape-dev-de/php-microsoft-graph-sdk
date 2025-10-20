<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityRegistryValueEvidence resources
 *
 * Available select fields:
 * - mdeDeviceId
 * - registryHive
 * - registryKey
 * - registryValue
 * - registryValueName
 * - registryValueType
 */
class SecurityRegistryValueEvidenceQueryOptions extends QueryOptions
{
    public const FIELD_MDE_DEVICE_ID = 'mdeDeviceId';
    public const FIELD_REGISTRY_HIVE = 'registryHive';
    public const FIELD_REGISTRY_KEY = 'registryKey';
    public const FIELD_REGISTRY_VALUE = 'registryValue';
    public const FIELD_REGISTRY_VALUE_NAME = 'registryValueName';
    public const FIELD_REGISTRY_VALUE_TYPE = 'registryValueType';

    /**
     * Select specific SecurityRegistryValueEvidence properties
     * 
     * @param array<string> $select Use SecurityRegistryValueEvidenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
