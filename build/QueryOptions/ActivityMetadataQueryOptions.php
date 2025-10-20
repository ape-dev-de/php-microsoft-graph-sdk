<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ActivityMetadata resources
 *
 * Available select fields:
 * - activity
 */
class ActivityMetadataQueryOptions extends QueryOptions
{
    public const FIELD_ACTIVITY = 'activity';

    /**
     * Select specific ActivityMetadata properties
     * 
     * @param array<string> $select Use ActivityMetadataQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
