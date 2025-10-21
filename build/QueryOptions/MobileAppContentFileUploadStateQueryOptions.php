<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileAppContentFileUploadState resources
 *
 * Available select fields:
 */
class MobileAppContentFileUploadStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MobileAppContentFileUploadState
     */

    /**
     * Select specific MobileAppContentFileUploadState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
