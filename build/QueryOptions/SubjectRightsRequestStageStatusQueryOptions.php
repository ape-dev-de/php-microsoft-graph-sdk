<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SubjectRightsRequestStageStatus resources
 *
 * Available select fields:
 */
class SubjectRightsRequestStageStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SubjectRightsRequestStageStatus
     */

    /**
     * Select specific SubjectRightsRequestStageStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
