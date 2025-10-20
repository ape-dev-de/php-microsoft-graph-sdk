<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserInstallStateSummaryCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserInstallStateSummaryCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserInstallStateSummaryCollectionResponse properties
     * 
     * @param array<string> $select Use UserInstallStateSummaryCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
