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
    /**
     * Available select fields for SecurityFormattedContent
     */
    public const FIELD_CONTENT = 'content';
    public const FIELD_FORMAT = 'format';

    /**
     * Select specific SecurityFormattedContent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
