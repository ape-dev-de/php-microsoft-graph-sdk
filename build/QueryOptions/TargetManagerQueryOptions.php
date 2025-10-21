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
    /**
     * Available select fields for TargetManager
     */
    public const FIELD_MANAGER_LEVEL = 'managerLevel';

    /**
     * Select specific TargetManager properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
