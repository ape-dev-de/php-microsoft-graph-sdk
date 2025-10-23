<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RotateBitLockerKeysDeviceActionResult
 */
class RotateBitLockerKeysDeviceActionResult
{
    /** Action name */
    public ?string $actionName = null;

    /**  */
    public ?ActionState $actionState = null;

    /** Time the action state was last updated */
    public ?\DateTimeInterface $lastUpdatedDateTime = null;

    /** Time the action was initiated */
    public ?\DateTimeInterface $startDateTime = null;

    /** RotateBitLockerKeys action error code */
    public ?float $errorCode = null;


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
        if (isset($data['errorCode'])) {
            $this->errorCode = $data['errorCode'];
        }
    }
}
