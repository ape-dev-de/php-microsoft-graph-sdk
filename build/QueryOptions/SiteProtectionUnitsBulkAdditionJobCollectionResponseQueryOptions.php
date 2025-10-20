<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SiteProtectionUnitsBulkAdditionJobCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SiteProtectionUnitsBulkAdditionJobCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SiteProtectionUnitsBulkAdditionJobCollectionResponse properties
     * 
     * @param array<string> $select Use SiteProtectionUnitsBulkAdditionJobCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
