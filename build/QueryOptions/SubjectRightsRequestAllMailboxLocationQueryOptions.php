<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SubjectRightsRequestAllMailboxLocation resources
 *
 * Available select fields:
 */
class SubjectRightsRequestAllMailboxLocationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SubjectRightsRequestAllMailboxLocation
     */

    /**
     * Select specific SubjectRightsRequestAllMailboxLocation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
