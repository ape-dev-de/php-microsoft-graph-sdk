<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcAuditResource
 */
class CloudPcAuditResource
{
    public function __construct(
        /** The display name of the modified resource entity. */
        public ?string $displayName = null,
        /** The list of modified properties. */
        public array $modifiedProperties = [],
        /** The unique identifier of the modified resource entity. */
        public ?string $resourceId = null
    ) {}
}
