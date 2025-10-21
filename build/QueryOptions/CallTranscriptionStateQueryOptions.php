<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallTranscriptionState resources
 *
 * Available select fields:
 */
class CallTranscriptionStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallTranscriptionState
     */

    /**
     * Select specific CallTranscriptionState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
