<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdleSessionSignOut
 */
class IdleSessionSignOut
{
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
        if (isset($data['isEnabled'])) {
            $this->isEnabled = $data['isEnabled'];
        }
        if (isset($data['signOutAfterInSeconds'])) {
            $this->signOutAfterInSeconds = $data['signOutAfterInSeconds'];
        }
        if (isset($data['warnAfterInSeconds'])) {
            $this->warnAfterInSeconds = $data['warnAfterInSeconds'];
        }
    }
}
