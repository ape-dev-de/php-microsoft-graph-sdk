<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamClassSettings
 */
class TeamClassSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** If set to true, enables sending of weekly assignments digest emails to parents/guardians, provided the tenant admin has enabled the setting globally. */
    public ?bool $notifyGuardiansAboutAssignments = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['notifyGuardiansAboutAssignments'])) {
            $this->notifyGuardiansAboutAssignments = is_bool($data['notifyGuardiansAboutAssignments']) ? $data['notifyGuardiansAboutAssignments'] : (bool)$data['notifyGuardiansAboutAssignments'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
