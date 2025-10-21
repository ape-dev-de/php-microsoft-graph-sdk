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
    /**
     * Available select fields for ItemAttachment
     */
    public const FIELD_ITEM = 'item';

    /**
     * Select specific ItemAttachment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
