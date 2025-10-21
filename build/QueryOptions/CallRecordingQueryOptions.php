<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecording resources
 *
 * Available select fields:
 */
class CallRecordingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecording
     */

    /**
     * Select specific CallRecording properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
