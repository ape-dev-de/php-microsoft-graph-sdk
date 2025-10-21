<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttackSimulationUser
 */
class AttackSimulationUser
{
    public function __construct(
        /** Display name of the user. */
        public ?string $displayName = null,
        /** Email address of the user. */
        public ?string $email = null,
        /** This is the id property value of the user resource that represents the user in the Microsoft Entra tenant. */
        public ?string $userId = null
    ) {}
}
