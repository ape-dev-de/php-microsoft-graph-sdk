<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsIdentity
 */
class ExternalConnectorsIdentity
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The type of identity. Possible values are: user or group for Microsoft Entra identities and externalgroup for groups in an external system. */
        public ?ExternalConnectorsIdentityType $type = null
    ) {}
}
