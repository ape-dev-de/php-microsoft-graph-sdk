<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityFormattedContent resources
 *
 * Available select fields:
 * - content
 * - format
 */
class SecurityFormattedContentQueryOptions extends QueryOptions
{
    public const FIELD_CONTENT = 'content';
    public const FIELD_FORMAT = 'format';

    /**
     * Select specific SecurityFormattedContent properties
     * 
     * @param array<string> $select Use SecurityFormattedContentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
