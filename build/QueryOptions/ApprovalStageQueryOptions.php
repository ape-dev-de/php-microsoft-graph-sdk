<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ApprovalStage resources
 *
 * Available select fields:
 */
class ApprovalStageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ApprovalStage
     */

    /**
     * Select specific ApprovalStage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
