<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OsVersionCount
 */
class OsVersionCount
{
    /** Count of devices with malware for the OS version */
    public ?float $deviceCount = null;

    /** The Timestamp of the last update for the device count in UTC */
    public ?\DateTimeInterface $lastUpdateDateTime = null;

    /** OS version */
    public ?string $osVersion = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['deviceCount'])) {
            $this->deviceCount = $data['deviceCount'];
        }
        if (isset($data['lastUpdateDateTime'])) {
            $this->lastUpdateDateTime = $data['lastUpdateDateTime'];
        }
        if (isset($data['osVersion'])) {
            $this->osVersion = $data['osVersion'];
        }
    }
}
