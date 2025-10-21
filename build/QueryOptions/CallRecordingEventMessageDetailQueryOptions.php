<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordingEventMessageDetail resources
 *
 * Available select fields:
 */
class CallRecordingEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordingEventMessageDetail
     */

    /**
     * Select specific CallRecordingEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
