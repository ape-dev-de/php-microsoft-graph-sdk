<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResetPasscodeActionResult
 */
class ResetPasscodeActionResult
{
    /** Action name */
    public ?string $actionName = null;

    /**  */
    public ?ActionState $actionState = null;

    /** Time the action state was last updated */
    public ?\DateTimeInterface $lastUpdatedDateTime = null;

    /** Time the action was initiated */
    public ?\DateTimeInterface $startDateTime = null;

    /** RotateBitLockerKeys action error code. Valid values 0 to 2147483647 */
    public ?float $errorCode = null;

    /** Newly generated passcode for the device */
    public ?string $passcode = null;


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
            $this->lastUpdatedDateTime = is_string($data['lastUpdatedDateTime']) ? new \DateTimeImmutable($data['lastUpdatedDateTime']) : $data['lastUpdatedDateTime'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = is_string($data['startDateTime']) ? new \DateTimeImmutable($data['startDateTime']) : $data['startDateTime'];
        }
        if (isset($data['errorCode'])) {
            $this->errorCode = $data['errorCode'];
        }
        if (isset($data['passcode'])) {
            $this->passcode = $data['passcode'];
        }
    }
}
