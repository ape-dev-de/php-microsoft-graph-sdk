<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TelecomExpenseManagementPartnerCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TelecomExpenseManagementPartnerCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TelecomExpenseManagementPartnerCollectionResponse properties
     * 
     * @param array<string> $select Use TelecomExpenseManagementPartnerCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
