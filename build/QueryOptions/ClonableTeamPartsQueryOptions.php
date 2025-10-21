<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ClonableTeamParts resources
 *
 * Available select fields:
 */
class ClonableTeamPartsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ClonableTeamParts
     */

    /**
     * Select specific ClonableTeamParts properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
