<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuditLogRoot
 */
class AuditLogRoot
{
    public function __construct(
        /**  */
        public array $directoryAudits = [],
        /**  */
        public array $provisioning = [],
        /** @var string[]  */
        public array $signIns = []
    ) {}
}
