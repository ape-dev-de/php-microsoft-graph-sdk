<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySensorSettings
 */
class SecuritySensorSettings
{
    public function __construct(
        /** Description of the sensor. */
        public ?string $description = null,
        /** @var string[] DNS names for the domain controller */
        public array $domainControllerDnsNames = [],
        /** Indicates whether to delay updates for the sensor. */
        public ?bool $isDelayedDeploymentEnabled = null,
        /**  */
        public array $networkAdapters = []
    ) {}
}
