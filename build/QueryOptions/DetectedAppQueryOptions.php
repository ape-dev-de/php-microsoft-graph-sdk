<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DetectedApp resources
 *
 * Available select fields:
 * - deviceCount
 * - displayName
 * - platform
 * - publisher
 * - sizeInByte
 * - version
 * - managedDevices
 */
class DetectedAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DetectedApp
     */
    public const FIELD_DEVICE_COUNT = 'deviceCount';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_PLATFORM = 'platform';
    public const FIELD_PUBLISHER = 'publisher';
    public const FIELD_SIZE_IN_BYTE = 'sizeInByte';
    public const FIELD_VERSION = 'version';
    public const FIELD_MANAGED_DEVICES = 'managedDevices';

    /**
     * Select specific DetectedApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
