<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TermStoreTerm resources
 *
 * Available select fields:
 * - createdDateTime
 * - descriptions
 * - labels
 * - lastModifiedDateTime
 * - items
 */
class TermStoreTermQueryOptions extends QueryOptions
{
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTIONS = 'descriptions';
    public const FIELD_LABELS = 'labels';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_ITEMS = 'items';

    /**
     * Select specific TermStoreTerm properties
     * 
     * @param array<string> $select Use TermStoreTermQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
