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
    /**
     * Available select fields for SendDtmfTonesOperation
     */
    public const FIELD_COMPLETION_REASON = 'completionReason';

    /**
     * Select specific SendDtmfTonesOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
