<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityAutonomousSystem
 */
class SecurityAutonomousSystem
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The name of the autonomous system. */
    public ?string $name = null;

    /** The autonomous system number, assigned by IANA. */
    public ?float $number = null;

    /** The name of the autonomous system organization. */
    public ?string $organization = null;

    /** A displayable value for these autonomous system details. */
    public ?string $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['number'])) {
            $this->number = is_numeric($data['number']) ? (float)$data['number'] : $data['number'];
        }
        if (isset($data['organization'])) {
            $this->organization = $data['organization'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
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
