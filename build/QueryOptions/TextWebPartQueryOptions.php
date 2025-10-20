<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TextWebPart resources
 *
 * Available select fields:
 * - innerHtml
 */
class TextWebPartQueryOptions extends QueryOptions
{
    public const FIELD_INNER_HTML = 'innerHtml';

    /**
     * Select specific TextWebPart properties
     * 
     * @param array<string> $select Use TextWebPartQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
