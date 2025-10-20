<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TargetManager resources
 *
 * Available select fields:
 * - managerLevel
 */
class TargetManagerQueryOptions extends QueryOptions
{
    public const FIELD_MANAGER_LEVEL = 'managerLevel';

    /**
     * Select specific TargetManager properties
     * 
     * @param array<string> $select Use TargetManagerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
