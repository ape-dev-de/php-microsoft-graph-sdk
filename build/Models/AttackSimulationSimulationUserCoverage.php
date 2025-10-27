<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttackSimulationSimulationUserCoverage
 */
class AttackSimulationSimulationUserCoverage
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * User in an attack simulation and training campaign.
     * @var AttackSimulationUser|\stdClass|null
     */
    public AttackSimulationUser|\stdClass|null $attackSimulationUser = null;

    /** Number of link clicks in the received payloads by the user in attack simulation and training campaigns. */
    public ?float $clickCount = null;

    /** Number of compromising actions by the user in attack simulation and training campaigns. */
    public ?float $compromisedCount = null;

    /** Date and time of the latest attack simulation and training campaign that the user was included in. */
    public ?\DateTimeInterface $latestSimulationDateTime = null;

    /** Number of attack simulation and training campaigns that the user was included in. */
    public ?float $simulationCount = null;


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
        if (isset($data['clickCount'])) {
            $this->clickCount = is_numeric($data['clickCount']) ? (float)$data['clickCount'] : $data['clickCount'];
        }
        if (isset($data['compromisedCount'])) {
            $this->compromisedCount = is_numeric($data['compromisedCount']) ? (float)$data['compromisedCount'] : $data['compromisedCount'];
        }
        if (isset($data['latestSimulationDateTime'])) {
            $this->latestSimulationDateTime = is_string($data['latestSimulationDateTime']) ? new \DateTimeImmutable($data['latestSimulationDateTime']) : $data['latestSimulationDateTime'];
        }
        if (isset($data['simulationCount'])) {
            $this->simulationCount = is_numeric($data['simulationCount']) ? (float)$data['simulationCount'] : $data['simulationCount'];
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
