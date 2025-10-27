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
            $this->failedJoinerRuns = $data['failedJoinerRuns'];
        }
        if (isset($data['failedLeaverRuns'])) {
            $this->failedLeaverRuns = $data['failedLeaverRuns'];
        }
        if (isset($data['failedMoverRuns'])) {
            $this->failedMoverRuns = $data['failedMoverRuns'];
        }
        if (isset($data['successfulJoinerRuns'])) {
            $this->successfulJoinerRuns = $data['successfulJoinerRuns'];
        }
        if (isset($data['successfulLeaverRuns'])) {
            $this->successfulLeaverRuns = $data['successfulLeaverRuns'];
        }
        if (isset($data['successfulMoverRuns'])) {
            $this->successfulMoverRuns = $data['successfulMoverRuns'];
        }
        if (isset($data['totalJoinerRuns'])) {
            $this->totalJoinerRuns = $data['totalJoinerRuns'];
        }
        if (isset($data['totalLeaverRuns'])) {
            $this->totalLeaverRuns = $data['totalLeaverRuns'];
        }
        if (isset($data['totalMoverRuns'])) {
            $this->totalMoverRuns = $data['totalMoverRuns'];
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
