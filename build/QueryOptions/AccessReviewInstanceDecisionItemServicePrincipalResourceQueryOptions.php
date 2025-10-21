<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewInstanceDecisionItemServicePrincipalResource resources
 *
 * Available select fields:
 * - appId
 */
class AccessReviewInstanceDecisionItemServicePrincipalResourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewInstanceDecisionItemServicePrincipalResource
     */
    public const FIELD_APP_ID = 'appId';

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
