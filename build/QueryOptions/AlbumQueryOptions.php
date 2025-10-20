<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Album resources
 *
 * Available select fields:
 * - coverImageItemId
 */
class AlbumQueryOptions extends QueryOptions
{
    public const FIELD_COVER_IMAGE_ITEM_ID = 'coverImageItemId';

    /**
     * Select specific Album properties
     * 
     * @param array<string> $select Use AlbumQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
