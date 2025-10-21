<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RecordOperation resources
 *
 * Available select fields:
 * - recordingAccessToken
 * - recordingLocation
 */
class RecordOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RecordOperation
     */
    public const FIELD_RECORDING_ACCESS_TOKEN = 'recordingAccessToken';
    public const FIELD_RECORDING_LOCATION = 'recordingLocation';

    /**
     * Select specific RecordOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
