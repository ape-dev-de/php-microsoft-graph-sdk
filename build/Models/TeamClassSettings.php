<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamClassSettings
 */
class TeamClassSettings
{
    /** If set to true, enables sending of weekly assignments digest emails to parents/guardians, provided the tenant admin has enabled the setting globally. */
    public ?bool $notifyGuardiansAboutAssignments = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['notifyGuardiansAboutAssignments'])) {
            $this->notifyGuardiansAboutAssignments = $data['notifyGuardiansAboutAssignments'];
        }
    }
}
