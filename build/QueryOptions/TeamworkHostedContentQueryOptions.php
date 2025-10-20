<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamworkHostedContent resources
 *
 * Available select fields:
 * - contentBytes
 * - contentType
 */
class TeamworkHostedContentQueryOptions extends QueryOptions
{
    public const FIELD_CONTENT_BYTES = 'contentBytes';
    public const FIELD_CONTENT_TYPE = 'contentType';

    /**
     * Select specific TeamworkHostedContent properties
     * 
     * @param array<string> $select Use TeamworkHostedContentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
