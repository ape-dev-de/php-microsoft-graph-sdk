<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuditLogRoot
 */
class AuditLogRoot
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public array $directoryAudits = [],
        /**  */
        public array $provisioning = [],
        /** @var string[]  */
        public array $signIns = []
    ) {}
}
