<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharepointSettings resources
 *
 * Available select fields:
 */
class SharepointSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SharepointSettings
     */

    /**
     * Select specific SharepointSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
