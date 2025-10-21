<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppLogUploadState resources
 *
 * Available select fields:
 */
class AppLogUploadStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AppLogUploadState
     */

    /**
     * Select specific AppLogUploadState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
