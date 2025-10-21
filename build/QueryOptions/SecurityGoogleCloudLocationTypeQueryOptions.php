<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityGoogleCloudLocationType resources
 *
 * Available select fields:
 */
class SecurityGoogleCloudLocationTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityGoogleCloudLocationType
     */

    /**
     * Select specific SecurityGoogleCloudLocationType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
