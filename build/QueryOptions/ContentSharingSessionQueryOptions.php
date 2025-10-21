<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ContentSharingSession resources
 *
 * Available select fields:
 */
class ContentSharingSessionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ContentSharingSession
     */

    /**
     * Select specific ContentSharingSession properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
