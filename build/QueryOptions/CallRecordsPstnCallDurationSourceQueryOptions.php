<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsPstnCallDurationSource resources
 *
 * Available select fields:
 */
class CallRecordsPstnCallDurationSourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsPstnCallDurationSource
     */

    /**
     * Select specific CallRecordsPstnCallDurationSource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
