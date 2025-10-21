<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuditResource
 */
class AuditResource
{
    public function __construct(
        /** Audit resource's type. */
        public ?string $auditResourceType = null,
        /** Display name. */
        public ?string $displayName = null,
        /** List of modified properties. */
        public array $modifiedProperties = [],
        /** A class containing the properties for Audit Resource. */
        public ?string $resourceId = null
    ) {}
}
