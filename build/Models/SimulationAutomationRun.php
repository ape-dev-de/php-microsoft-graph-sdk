<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationAutomationRun
 */
class SimulationAutomationRun
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Date and time when the run ends in an attack simulation automation. */
    public ?\DateTimeInterface $endDateTime = null;

    /** Unique identifier for the attack simulation campaign initiated in the attack simulation automation run. */
    public ?string $simulationId = null;

    /** Date and time when the run starts in an attack simulation automation. */
    public ?\DateTimeInterface $startDateTime = null;

    /** 
     * Status of the attack simulation automation run. The possible values are: unknown, running, succeeded, failed, skipped, unknownFutureValue.
     * @var SimulationAutomationRunStatus|\stdClass|null
     */
    public SimulationAutomationRunStatus|\stdClass|null $status = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['endDateTime'])) {
            $this->endDateTime = is_string($data['endDateTime']) ? new \DateTimeImmutable($data['endDateTime']) : $data['endDateTime'];
        }
        if (isset($data['simulationId'])) {
            $this->simulationId = $data['simulationId'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = is_string($data['startDateTime']) ? new \DateTimeImmutable($data['startDateTime']) : $data['startDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new SimulationAutomationRunStatus($data['status']) : $data['status'];
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
