<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallTranscriptEventMessageDetail resources
 *
 * Available select fields:
 */
class CallTranscriptEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallTranscriptEventMessageDetail
     */

    /**
     * Select specific CallTranscriptEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
