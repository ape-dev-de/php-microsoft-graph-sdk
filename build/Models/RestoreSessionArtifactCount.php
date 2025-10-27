<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RestoreSessionArtifactCount
 */
class RestoreSessionArtifactCount
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The number of artifacts whose restoration completed. */
    public ?float $completed = null;

    /** The number of artifacts whose restoration failed. */
    public ?float $failed = null;

    /** The number of artifacts whose restoration is in progress. */
    public ?float $inProgress = null;

    /** The number of artifacts present in the restore session. */
    public ?float $total = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['completed'])) {
            $this->completed = is_numeric($data['completed']) ? (float)$data['completed'] : $data['completed'];
        }
        if (isset($data['failed'])) {
            $this->failed = is_numeric($data['failed']) ? (float)$data['failed'] : $data['failed'];
        }
        if (isset($data['inProgress'])) {
            $this->inProgress = is_numeric($data['inProgress']) ? (float)$data['inProgress'] : $data['inProgress'];
        }
        if (isset($data['total'])) {
            $this->total = is_numeric($data['total']) ? (float)$data['total'] : $data['total'];
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
