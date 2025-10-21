<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ItemBody resources
 *
 * Available select fields:
 * - content
 * - contentType
 */
class ItemBodyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ItemBody
     */
    public const FIELD_CONTENT = 'content';
    public const FIELD_CONTENT_TYPE = 'contentType';

    /**
     * Select specific ItemBody properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
