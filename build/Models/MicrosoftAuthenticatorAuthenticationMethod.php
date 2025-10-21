<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftAuthenticatorAuthenticationMethod
 */
class MicrosoftAuthenticatorAuthenticationMethod
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The date and time that this app was registered. This property is null if the device isn't registered for passwordless Phone Sign-In. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Tags containing app metadata. */
        public ?string $deviceTag = null,
        /** The name of the device on which this app is registered. */
        public ?string $displayName = null,
        /** Numerical version of this instance of the Authenticator app. */
        public ?string $phoneAppVersion = null,
        /** The registered device on which Microsoft Authenticator resides. This property is null if the device isn't registered for passwordless Phone Sign-In. */
        public ?Device $device = null
    ) {}
}
