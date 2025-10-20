<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RecycleBin resources
 *
 * Available select fields:
 * - settings
 * - items
 */
class RecycleBinQueryOptions extends QueryOptions
{
    public const FIELD_SETTINGS = 'settings';
    public const FIELD_ITEMS = 'items';

    /**
     * Select specific RecycleBin properties
     * 
     * @param array<string> $select Use RecycleBinQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
