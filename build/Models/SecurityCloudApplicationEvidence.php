<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityCloudApplicationEvidence
 */
class SecurityCloudApplicationEvidence
{
    public function __construct(
        /** Unique identifier of the application. */
        public ?float $appId = null,
        /** Name of the application. */
        public ?string $displayName = null,
        /** Identifier of the instance of the Software as a Service (SaaS) application. */
        public ?float $instanceId = null,
        /** Name of the instance of the SaaS application. */
        public ?string $instanceName = null,
        /** The identifier of the SaaS application. */
        public ?float $saasAppId = null,
        /**  */
        public ?string $stream = null
    ) {}
}
