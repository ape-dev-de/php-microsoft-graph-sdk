<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttackSimulationUser resources
 *
 * Available select fields:
 * - displayName
 * - email
 * - userId
 */
class AttackSimulationUserQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AttackSimulationUser
     */
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_EMAIL = 'email';
    public const FIELD_USER_ID = 'userId';

    /**
     * Select specific AttackSimulationUser properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
