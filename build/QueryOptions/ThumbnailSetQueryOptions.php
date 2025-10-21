<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ThumbnailSet resources
 *
 * Available select fields:
 * - large
 * - medium
 * - small
 * - source
 */
class ThumbnailSetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ThumbnailSet
     */
    public const FIELD_LARGE = 'large';
    public const FIELD_MEDIUM = 'medium';
    public const FIELD_SMALL = 'small';
    public const FIELD_SOURCE = 'source';

    /**
     * Select specific ThumbnailSet properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
