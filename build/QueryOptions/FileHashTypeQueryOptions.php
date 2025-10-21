<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FileHashType resources
 *
 * Available select fields:
 */
class FileHashTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FileHashType
     */

    /**
     * Select specific FileHashType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
