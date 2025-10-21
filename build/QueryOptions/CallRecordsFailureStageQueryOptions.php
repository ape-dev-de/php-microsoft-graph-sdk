<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsFailureStage resources
 *
 * Available select fields:
 */
class CallRecordsFailureStageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsFailureStage
     */

    /**
     * Select specific CallRecordsFailureStage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
