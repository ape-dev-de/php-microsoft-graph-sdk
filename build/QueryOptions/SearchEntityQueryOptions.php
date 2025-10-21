<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchEntity resources
 *
 * Available select fields:
 * - acronyms
 * - bookmarks
 * - qnas
 */
class SearchEntityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SearchEntity
     */
    public const FIELD_ACRONYMS = 'acronyms';
    public const FIELD_BOOKMARKS = 'bookmarks';
    public const FIELD_QNAS = 'qnas';

    /**
     * Select specific SearchEntity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
