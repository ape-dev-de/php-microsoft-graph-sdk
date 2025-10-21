<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewInactiveUsersQueryScope resources
 *
 * Available select fields:
 * - inactiveDuration
 */
class AccessReviewInactiveUsersQueryScopeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewInactiveUsersQueryScope
     */
    public const FIELD_INACTIVE_DURATION = 'inactiveDuration';

    /**
     * Select specific AccessReviewInactiveUsersQueryScope properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
