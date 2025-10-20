<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsFailureInfo resources
 *
 * Available select fields:
 * - reason
 * - stage
 */
class CallRecordsFailureInfoQueryOptions extends QueryOptions
{
    public const FIELD_REASON = 'reason';
    public const FIELD_STAGE = 'stage';

    /**
     * Select specific CallRecordsFailureInfo properties
     * 
     * @param array<string> $select Use CallRecordsFailureInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
