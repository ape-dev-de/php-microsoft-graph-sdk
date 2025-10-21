<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RequestorManager resources
 *
 * Available select fields:
 * - managerLevel
 */
class RequestorManagerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RequestorManager
     */
    public const FIELD_MANAGER_LEVEL = 'managerLevel';

    /**
     * Select specific RequestorManager properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
