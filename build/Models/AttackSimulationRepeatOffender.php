<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttackSimulationRepeatOffender
 */
class AttackSimulationRepeatOffender
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The user in an attack simulation and training campaign.
     * @var AttackSimulationUser|\stdClass|null
     */
    public AttackSimulationUser|\stdClass|null $attackSimulationUser = null;

    /** Number of repeat offences of the user in attack simulation and training campaigns. */
    public ?float $repeatOffenceCount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['attackSimulationUser'])) {
            $this->attackSimulationUser = is_array($data['attackSimulationUser']) ? new AttackSimulationUser($data['attackSimulationUser']) : $data['attackSimulationUser'];
        }
        if (isset($data['repeatOffenceCount'])) {
            $this->repeatOffenceCount = is_numeric($data['repeatOffenceCount']) ? (float)$data['repeatOffenceCount'] : $data['repeatOffenceCount'];
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
