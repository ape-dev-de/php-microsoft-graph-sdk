<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SubjectRightsRequestMailboxLocation resources
 *
 * Available select fields:
 */
class SubjectRightsRequestMailboxLocationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SubjectRightsRequestMailboxLocation
     */

    /**
     * Select specific SubjectRightsRequestMailboxLocation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
