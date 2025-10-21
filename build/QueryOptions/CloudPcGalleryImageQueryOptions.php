<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcGalleryImage resources
 *
 * Available select fields:
 */
class CloudPcGalleryImageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudPcGalleryImage
     */

    /**
     * Select specific CloudPcGalleryImage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
