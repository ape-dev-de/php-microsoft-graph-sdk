<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlatformCredentialAuthenticationMethod
 */
class PlatformCredentialAuthenticationMethod
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The date and time that this Platform Credential Key was registered. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The name of the device on which Platform Credential is registered. */
        public ?string $displayName = null,
        /** Key strength of this Platform Credential key. Possible values are: normal, weak, unknown. */
        public ?string $keyStrength = null,
        /** Platform on which this Platform Credential key is present. Possible values are: unknown, windows, macOS,iOS, android, linux. */
        public ?string $platform = null,
        /** The registered device on which this Platform Credential resides. Supports $expand. When you get a user's Platform Credential registration information, this property is returned only on a single GET and when you specify ?$expand. For example, GET /users/admin@contoso.com/authentication/platformCredentialAuthenticationMethod/_jpuR-TGZtk6aQCLF3BQjA2?$expand=device. */
        public ?string $device = null
    ) {}
}
