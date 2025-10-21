<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsFeedbackTokenSet resources
 *
 * Available select fields:
 */
class CallRecordsFeedbackTokenSetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsFeedbackTokenSet
     */

    /**
     * Select specific CallRecordsFeedbackTokenSet properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
