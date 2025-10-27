<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceWorkflowsInsightsByCategory
 */
class IdentityGovernanceWorkflowsInsightsByCategory
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Failed 'Joiner' workflows processed in a tenant. */
    public ?float $failedJoinerRuns = null;

    /** Failed 'Leaver' workflows processed in a tenant. */
    public ?float $failedLeaverRuns = null;

    /** Failed 'Mover' workflows processed in a tenant. */
    public ?float $failedMoverRuns = null;

    /** Successful 'Joiner' workflows processed in a tenant. */
    public ?float $successfulJoinerRuns = null;

    /** Successful 'Leaver' workflows processed in a tenant. */
    public ?float $successfulLeaverRuns = null;

    /** Successful 'Mover' workflows processed in a tenant. */
    public ?float $successfulMoverRuns = null;

    /** Total 'Joiner' workflows processed in a tenant. */
    public ?float $totalJoinerRuns = null;

    /** Total 'Leaver' workflows processed in a tenant. */
    public ?float $totalLeaverRuns = null;

    /** Total 'Mover' workflows processed in a tenant. */
    public ?float $totalMoverRuns = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['failedJoinerRuns'])) {
            $this->failedJoinerRuns = is_numeric($data['failedJoinerRuns']) ? (float)$data['failedJoinerRuns'] : $data['failedJoinerRuns'];
        }
        if (isset($data['failedLeaverRuns'])) {
            $this->failedLeaverRuns = is_numeric($data['failedLeaverRuns']) ? (float)$data['failedLeaverRuns'] : $data['failedLeaverRuns'];
        }
        if (isset($data['failedMoverRuns'])) {
            $this->failedMoverRuns = is_numeric($data['failedMoverRuns']) ? (float)$data['failedMoverRuns'] : $data['failedMoverRuns'];
        }
        if (isset($data['successfulJoinerRuns'])) {
            $this->successfulJoinerRuns = is_numeric($data['successfulJoinerRuns']) ? (float)$data['successfulJoinerRuns'] : $data['successfulJoinerRuns'];
        }
        if (isset($data['successfulLeaverRuns'])) {
            $this->successfulLeaverRuns = is_numeric($data['successfulLeaverRuns']) ? (float)$data['successfulLeaverRuns'] : $data['successfulLeaverRuns'];
        }
        if (isset($data['successfulMoverRuns'])) {
            $this->successfulMoverRuns = is_numeric($data['successfulMoverRuns']) ? (float)$data['successfulMoverRuns'] : $data['successfulMoverRuns'];
        }
        if (isset($data['totalJoinerRuns'])) {
            $this->totalJoinerRuns = is_numeric($data['totalJoinerRuns']) ? (float)$data['totalJoinerRuns'] : $data['totalJoinerRuns'];
        }
        if (isset($data['totalLeaverRuns'])) {
            $this->totalLeaverRuns = is_numeric($data['totalLeaverRuns']) ? (float)$data['totalLeaverRuns'] : $data['totalLeaverRuns'];
        }
        if (isset($data['totalMoverRuns'])) {
            $this->totalMoverRuns = is_numeric($data['totalMoverRuns']) ? (float)$data['totalMoverRuns'] : $data['totalMoverRuns'];
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
