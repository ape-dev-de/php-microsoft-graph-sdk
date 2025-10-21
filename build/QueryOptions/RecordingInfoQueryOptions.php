<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RecordingInfo resources
 *
 * Available select fields:
 * - initiator
 * - recordingStatus
 */
class RecordingInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RecordingInfo
     */
    public const FIELD_INITIATOR = 'initiator';
    public const FIELD_RECORDING_STATUS = 'recordingStatus';

    /**
     * Select specific RecordingInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
