<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SendDtmfTonesOperation resources
 *
 * Available select fields:
 * - completionReason
 */
class SendDtmfTonesOperationQueryOptions extends QueryOptions
{
    public const FIELD_COMPLETION_REASON = 'completionReason';

    /**
     * Select specific SendDtmfTonesOperation properties
     * 
     * @param array<string> $select Use SendDtmfTonesOperationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
