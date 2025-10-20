<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnenoteResource resources
 *
 * Available select fields:
 * - content
 * - contentUrl
 */
class OnenoteResourceQueryOptions extends QueryOptions
{
    public const FIELD_CONTENT = 'content';
    public const FIELD_CONTENT_URL = 'contentUrl';

    /**
     * Select specific OnenoteResource properties
     * 
     * @param array<string> $select Use OnenoteResourceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
