<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PartnersBillingOperation resources
 *
 * Available select fields:
 * - createdDateTime
 * - lastActionDateTime
 * - status
 */
class PartnersBillingOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PartnersBillingOperation
     */
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_LAST_ACTION_DATE_TIME = 'lastActionDateTime';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific PartnersBillingOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
