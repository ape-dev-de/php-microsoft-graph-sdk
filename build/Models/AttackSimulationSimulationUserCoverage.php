<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttackSimulationSimulationUserCoverage
 */
class AttackSimulationSimulationUserCoverage
{
    /** 
     * User in an attack simulation and training campaign.
     * @var AttackSimulationUser|\stdClass|null
     */
    public mixed $attackSimulationUser = null;

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
        if (isset($data['attackSimulationUser'])) {
            $this->attackSimulationUser = $data['attackSimulationUser'];
        }
        if (isset($data['clickCount'])) {
            $this->clickCount = $data['clickCount'];
        }
        if (isset($data['compromisedCount'])) {
            $this->compromisedCount = $data['compromisedCount'];
        }
        if (isset($data['latestSimulationDateTime'])) {
            $this->latestSimulationDateTime = $data['latestSimulationDateTime'];
        }
        if (isset($data['simulationCount'])) {
            $this->simulationCount = $data['simulationCount'];
        }
    }
}
