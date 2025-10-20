<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TermStoreSet resources
 *
 * Available select fields:
 * - createdDateTime
 * - description
 * - localizedNames
 * - items
 */
class TermStoreSetQueryOptions extends QueryOptions
{
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_LOCALIZED_NAMES = 'localizedNames';
    public const FIELD_ITEMS = 'items';

    /**
     * Select specific TermStoreSet properties
     * 
     * @param array<string> $select Use TermStoreSetQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
