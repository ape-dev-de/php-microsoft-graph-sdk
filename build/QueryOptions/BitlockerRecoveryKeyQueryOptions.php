<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BitlockerRecoveryKey resources
 *
 * Available select fields:
 * - createdDateTime
 * - deviceId
 * - key
 * - volumeType
 */
class BitlockerRecoveryKeyQueryOptions extends QueryOptions
{
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DEVICE_ID = 'deviceId';
    public const FIELD_KEY = 'key';
    public const FIELD_VOLUME_TYPE = 'volumeType';

    /**
     * Select specific BitlockerRecoveryKey properties
     * 
     * @param array<string> $select Use BitlockerRecoveryKeyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
