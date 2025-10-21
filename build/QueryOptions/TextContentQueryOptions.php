<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TextContent resources
 *
 * Available select fields:
 */
class TextContentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TextContent
     */

    /**
     * Select specific TextContent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
