<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AddLargeGalleryViewOperation resources
 *
 * Available select fields:
 */
class AddLargeGalleryViewOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AddLargeGalleryViewOperation
     */

    /**
     * Select specific AddLargeGalleryViewOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
