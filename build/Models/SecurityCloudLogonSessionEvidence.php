<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityCloudLogonSessionEvidence
 */
class SecurityCloudLogonSessionEvidence
{
    public function __construct(
        /** The account associated with the sign-in session. */
        public ?string $account = null,
        /** The browser that is used for the sign-in, if known. */
        public ?string $browser = null,
        /** The friendly name of the device, if known. */
        public ?string $deviceName = null,
        /** The operating system that the device is running, if known. */
        public ?string $operatingSystem = null,
        /** The previous sign-in time for this account, if known. */
        public ?\DateTimeInterface $previousLogonDateTime = null,
        /** The authentication protocol that is used in this session, if known. */
        public ?string $protocol = null,
        /** The session ID for the account reported in the alert. */
        public ?string $sessionId = null,
        /** The session start time, if known. */
        public ?\DateTimeInterface $startUtcDateTime = null,
        /** The user agent that is used for the sign-in, if known. */
        public ?string $userAgent = null
    ) {}
}
