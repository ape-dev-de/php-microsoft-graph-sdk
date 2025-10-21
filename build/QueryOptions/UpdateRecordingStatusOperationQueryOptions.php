<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UpdateRecordingStatusOperation resources
 *
 * Available select fields:
 */
class UpdateRecordingStatusOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UpdateRecordingStatusOperation
     */

    /**
     * Select specific UpdateRecordingStatusOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
