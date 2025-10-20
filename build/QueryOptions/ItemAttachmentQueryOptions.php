<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ItemAttachment resources
 *
 * Available select fields:
 * - item
 */
class ItemAttachmentQueryOptions extends QueryOptions
{
    public const FIELD_ITEM = 'item';

    /**
     * Select specific ItemAttachment properties
     * 
     * @param array<string> $select Use ItemAttachmentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
