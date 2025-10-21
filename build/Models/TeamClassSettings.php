<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamClassSettings
 */
class TeamClassSettings
{
    public function __construct(
        /** If set to true, enables sending of weekly assignments digest emails to parents/guardians, provided the tenant admin has enabled the setting globally. */
        public ?string $notifyGuardiansAboutAssignments = null
    ) {}
}
