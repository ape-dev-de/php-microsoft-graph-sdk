<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsExternalGroup
 */
class ExternalConnectorsExternalGroup
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The description of the external group. Optional. */
        public ?string $description = null,
        /** The friendly name of the external group. Optional. */
        public ?string $displayName = null,
        /** @var string[] A member added to an externalGroup. You can add Microsoft Entra users, Microsoft Entra groups, or an externalGroup as members. */
        public array $members = []
    ) {}
}
