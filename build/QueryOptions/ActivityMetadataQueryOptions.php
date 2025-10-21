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
    /**
     * Available select fields for ActivityMetadata
     */
    public const FIELD_ACTIVITY = 'activity';

    /**
     * Select specific ActivityMetadata properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
