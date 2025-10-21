<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewInstanceDecisionItemServicePrincipalResource resources
 *
 * Available select fields:
 */
class AccessReviewInstanceDecisionItemServicePrincipalResourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewInstanceDecisionItemServicePrincipalResource
     */

    /**
     * Select specific AccessReviewInstanceDecisionItemServicePrincipalResource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
