<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CopilotAdmin resources
 *
 * Available select fields:
 * - settings
 */
class CopilotAdminQueryOptions extends QueryOptions
{
    public const FIELD_SETTINGS = 'settings';

    /**
     * Select specific CopilotAdmin properties
     * 
     * @param array<string> $select Use CopilotAdminQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
