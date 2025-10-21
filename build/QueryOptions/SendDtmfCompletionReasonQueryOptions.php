<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SendDtmfCompletionReason resources
 *
 * Available select fields:
 */
class SendDtmfCompletionReasonQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SendDtmfCompletionReason
     */

    /**
     * Select specific SendDtmfCompletionReason properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
