<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MediaSource resources
 *
 * Available select fields:
 * - contentCategory
 */
class MediaSourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MediaSource
     */
    public const FIELD_CONTENT_CATEGORY = 'contentCategory';

    /**
     * Select specific MediaSource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
