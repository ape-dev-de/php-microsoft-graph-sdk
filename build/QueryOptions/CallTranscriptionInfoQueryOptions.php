<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallTranscriptionInfo resources
 *
 * Available select fields:
 * - lastModifiedDateTime
 * - state
 */
class CallTranscriptionInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallTranscriptionInfo
     */
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_STATE = 'state';

    /**
     * Select specific CallTranscriptionInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
