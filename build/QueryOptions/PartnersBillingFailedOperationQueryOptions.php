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
    public const FIELD_ERROR = 'error';

    /**
     * Select specific PartnersBillingFailedOperation properties
     * 
     * @param array<string> $select Use PartnersBillingFailedOperationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
