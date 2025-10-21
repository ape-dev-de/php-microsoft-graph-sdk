<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PartnersBillingFailedOperation resources
 *
 * Available select fields:
 * - error
 */
class PartnersBillingFailedOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PartnersBillingFailedOperation
     */
    public const FIELD_ERROR = 'error';

    /**
     * Select specific PartnersBillingFailedOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
