<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SubjectRightsRequestStage resources
 *
 * Available select fields:
 */
class SubjectRightsRequestStageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SubjectRightsRequestStage
     */

    /**
     * Select specific SubjectRightsRequestStage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
