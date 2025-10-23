<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceComplianceUserOverview
 */
class DeviceComplianceUserOverview
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Version of the policy for that overview */
    public ?float $configurationVersion = null;

    /** Number of error Users */
    public ?float $errorCount = null;

    /** Number of failed Users */
    public ?float $failedCount = null;

    /** Last update time */
    public ?\DateTimeInterface $lastUpdateDateTime = null;

    /** Number of not applicable users */
    public ?float $notApplicableCount = null;

    /** Number of pending Users */
    public ?float $pendingCount = null;

    /** Number of succeeded Users */
    public ?float $successCount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['configurationVersion'])) {
            $this->configurationVersion = $data['configurationVersion'];
        }
        if (isset($data['errorCount'])) {
            $this->errorCount = $data['errorCount'];
        }
        if (isset($data['failedCount'])) {
            $this->failedCount = $data['failedCount'];
        }
        if (isset($data['lastUpdateDateTime'])) {
            $this->lastUpdateDateTime = $data['lastUpdateDateTime'];
        }
        if (isset($data['notApplicableCount'])) {
            $this->notApplicableCount = $data['notApplicableCount'];
        }
        if (isset($data['pendingCount'])) {
            $this->pendingCount = $data['pendingCount'];
        }
        if (isset($data['successCount'])) {
            $this->successCount = $data['successCount'];
        }
    }
}
