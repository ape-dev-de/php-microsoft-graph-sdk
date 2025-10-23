<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RemoteLockActionResult
 */
class RemoteLockActionResult
{
    /** Action name */
    public ?string $actionName = null;

    /**  */
    public ?ActionState $actionState = null;

    /** Time the action state was last updated */
    public ?\DateTimeInterface $lastUpdatedDateTime = null;

    /** Time the action was initiated */
    public ?\DateTimeInterface $startDateTime = null;

    /** Pin to unlock the client */
    public ?string $unlockPin = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['actionName'])) {
            $this->actionName = $data['actionName'];
        }
        if (isset($data['actionState'])) {
            $this->actionState = $data['actionState'];
        }
        if (isset($data['lastUpdatedDateTime'])) {
            $this->lastUpdatedDateTime = $data['lastUpdatedDateTime'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = $data['startDateTime'];
        }
        if (isset($data['unlockPin'])) {
            $this->unlockPin = $data['unlockPin'];
        }
    }
}
