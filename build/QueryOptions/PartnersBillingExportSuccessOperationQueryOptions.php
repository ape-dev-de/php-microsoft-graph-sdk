<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PartnersBillingExportSuccessOperation resources
 *
 * Available select fields:
 */
class PartnersBillingExportSuccessOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PartnersBillingExportSuccessOperation
     */

    /**
     * Select specific PartnersBillingExportSuccessOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
