<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceWorkflowsInsightsByCategory
 */
class IdentityGovernanceWorkflowsInsightsByCategory
{
    /**
     * Failed 'Joiner' workflows processed in a tenant.
     */
    private ?float $failedJoinerRuns;

    /**
     * Failed 'Leaver' workflows processed in a tenant.
     */
    private ?float $failedLeaverRuns;

    /**
     * Failed 'Mover' workflows processed in a tenant.
     */
    private ?float $failedMoverRuns;

    /**
     * Successful 'Joiner' workflows processed in a tenant.
     */
    private ?float $successfulJoinerRuns;

    /**
     * Successful 'Leaver' workflows processed in a tenant.
     */
    private ?float $successfulLeaverRuns;

    /**
     * Successful 'Mover' workflows processed in a tenant.
     */
    private ?float $successfulMoverRuns;

    /**
     * Total 'Joiner' workflows processed in a tenant.
     */
    private ?float $totalJoinerRuns;

    /**
     * Total 'Leaver' workflows processed in a tenant.
     */
    private ?float $totalLeaverRuns;

    /**
     * Total 'Mover' workflows processed in a tenant.
     */
    private ?string $totalMoverRuns;


    public function getFailedJoinerRuns(): ?float
    {
        return $this->failedJoinerRuns;
    }

    public function setFailedJoinerRuns(?float $failedJoinerRuns): self
    {
        $this->failedJoinerRuns = $failedJoinerRuns;
        return $this;
    }

    public function getFailedLeaverRuns(): ?float
    {
        return $this->failedLeaverRuns;
    }

    public function setFailedLeaverRuns(?float $failedLeaverRuns): self
    {
        $this->failedLeaverRuns = $failedLeaverRuns;
        return $this;
    }

    public function getFailedMoverRuns(): ?float
    {
        return $this->failedMoverRuns;
    }

    public function setFailedMoverRuns(?float $failedMoverRuns): self
    {
        $this->failedMoverRuns = $failedMoverRuns;
        return $this;
    }

    public function getSuccessfulJoinerRuns(): ?float
    {
        return $this->successfulJoinerRuns;
    }

    public function setSuccessfulJoinerRuns(?float $successfulJoinerRuns): self
    {
        $this->successfulJoinerRuns = $successfulJoinerRuns;
        return $this;
    }

    public function getSuccessfulLeaverRuns(): ?float
    {
        return $this->successfulLeaverRuns;
    }

    public function setSuccessfulLeaverRuns(?float $successfulLeaverRuns): self
    {
        $this->successfulLeaverRuns = $successfulLeaverRuns;
        return $this;
    }

    public function getSuccessfulMoverRuns(): ?float
    {
        return $this->successfulMoverRuns;
    }

    public function setSuccessfulMoverRuns(?float $successfulMoverRuns): self
    {
        $this->successfulMoverRuns = $successfulMoverRuns;
        return $this;
    }

    public function getTotalJoinerRuns(): ?float
    {
        return $this->totalJoinerRuns;
    }

    public function setTotalJoinerRuns(?float $totalJoinerRuns): self
    {
        $this->totalJoinerRuns = $totalJoinerRuns;
        return $this;
    }

    public function getTotalLeaverRuns(): ?float
    {
        return $this->totalLeaverRuns;
    }

    public function setTotalLeaverRuns(?float $totalLeaverRuns): self
    {
        $this->totalLeaverRuns = $totalLeaverRuns;
        return $this;
    }

    public function getTotalMoverRuns(): ?string
    {
        return $this->totalMoverRuns;
    }

    public function setTotalMoverRuns(?string $totalMoverRuns): self
    {
        $this->totalMoverRuns = $totalMoverRuns;
        return $this;
    }

}
