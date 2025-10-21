<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordingStatus resources
 *
 * Available select fields:
 */
class CallRecordingStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordingStatus
     */

    /**
     * Select specific CallRecordingStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
