<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdleSessionSignOut
 */
class IdleSessionSignOut
{
    public function __construct(
        /** Indicates whether the idle session sign-out policy is enabled. */
        public ?bool $isEnabled = null,
        /** Number of seconds of inactivity after which a user is signed out. */
        public ?float $signOutAfterInSeconds = null,
        /** Number of seconds of inactivity after which a user is notified that they'll be signed out. */
        public ?string $warnAfterInSeconds = null
    ) {}
}
