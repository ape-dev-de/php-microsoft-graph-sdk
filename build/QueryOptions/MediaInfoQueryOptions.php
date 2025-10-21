<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MediaInfo resources
 *
 * Available select fields:
 * - resourceId
 * - uri
 */
class MediaInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MediaInfo
     */
    public const FIELD_RESOURCE_ID = 'resourceId';
    public const FIELD_URI = 'uri';

    /**
     * Select specific MediaInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
