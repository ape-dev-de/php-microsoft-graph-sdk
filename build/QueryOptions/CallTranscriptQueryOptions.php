<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallTranscript resources
 *
 * Available select fields:
 */
class CallTranscriptQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallTranscript
     */

    /**
     * Select specific CallTranscript properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
