<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Sharepoint resources
 *
 * Available select fields:
 * - settings
 */
class SharepointQueryOptions extends QueryOptions
{
    public const FIELD_SETTINGS = 'settings';

    /**
     * Select specific Sharepoint properties
     * 
     * @param array<string> $select Use SharepointQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
