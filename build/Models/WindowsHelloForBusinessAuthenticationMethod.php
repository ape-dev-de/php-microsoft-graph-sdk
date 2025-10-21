<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsHelloForBusinessAuthenticationMethod
 */
class WindowsHelloForBusinessAuthenticationMethod
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The date and time that this Windows Hello for Business key was registered. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The name of the device on which Windows Hello for Business is registered */
        public ?string $displayName = null,
        /** Key strength of this Windows Hello for Business key. Possible values are: normal, weak, unknown. */
        public ?string $keyStrength = null,
        /** The registered device on which this Windows Hello for Business key resides. Supports $expand. When you get a user's Windows Hello for Business registration information, this property is returned only on a single GET and when you specify ?$expand. For example, GET /users/admin@contoso.com/authentication/windowsHelloForBusinessMethods/_jpuR-TGZtk6aQCLF3BQjA2?$expand=device. */
        public ?string $device = null
    ) {}
}
