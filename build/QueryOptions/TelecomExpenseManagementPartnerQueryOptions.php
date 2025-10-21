<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TelecomExpenseManagementPartner resources
 *
 * Available select fields:
 */
class TelecomExpenseManagementPartnerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TelecomExpenseManagementPartner
     */

    /**
     * Select specific TelecomExpenseManagementPartner properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
