<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MacOSMicrosoftEdgeApp resources
 *
 * Available select fields:
 * - channel
 */
class MacOSMicrosoftEdgeAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MacOSMicrosoftEdgeApp
     */
    public const FIELD_CHANNEL = 'channel';

    /**
     * Select specific MacOSMicrosoftEdgeApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
