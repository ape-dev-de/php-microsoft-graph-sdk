<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DetectedAppPlatformType resources
 *
 * Available select fields:
 */
class DetectedAppPlatformTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DetectedAppPlatformType
     */

    /**
     * Select specific DetectedAppPlatformType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
