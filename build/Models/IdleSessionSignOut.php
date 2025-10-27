<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdleSessionSignOut
 */
class IdleSessionSignOut
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Indicates whether the idle session sign-out policy is enabled. */
    public ?bool $isEnabled = null;

    /** Number of seconds of inactivity after which a user is signed out. */
    public ?float $signOutAfterInSeconds = null;

    /** Number of seconds of inactivity after which a user is notified that they'll be signed out. */
    public ?float $warnAfterInSeconds = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['isEnabled'])) {
            $this->isEnabled = is_bool($data['isEnabled']) ? $data['isEnabled'] : (bool)$data['isEnabled'];
        }
        if (isset($data['signOutAfterInSeconds'])) {
            $this->signOutAfterInSeconds = is_numeric($data['signOutAfterInSeconds']) ? (float)$data['signOutAfterInSeconds'] : $data['signOutAfterInSeconds'];
        }
        if (isset($data['warnAfterInSeconds'])) {
            $this->warnAfterInSeconds = is_numeric($data['warnAfterInSeconds']) ? (float)$data['warnAfterInSeconds'] : $data['warnAfterInSeconds'];
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
