<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RecordingStatus resources
 *
 * Available select fields:
 */
class RecordingStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RecordingStatus
     */

    /**
     * Select specific RecordingStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
