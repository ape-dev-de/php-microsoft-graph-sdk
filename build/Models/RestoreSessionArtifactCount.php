<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RestoreSessionArtifactCount
 */
class RestoreSessionArtifactCount
{
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
        if (isset($data['completed'])) {
            $this->completed = $data['completed'];
        }
        if (isset($data['failed'])) {
            $this->failed = $data['failed'];
        }
        if (isset($data['inProgress'])) {
            $this->inProgress = $data['inProgress'];
        }
        if (isset($data['total'])) {
            $this->total = $data['total'];
        }
    }
}
