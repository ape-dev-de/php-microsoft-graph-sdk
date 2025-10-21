<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceProvisioningXmlError
 */
class ServiceProvisioningXmlError
{
    public function __construct(
        /** Error Information published by the Federated Service as an xml string. */
        public ?string $errorDetail = null
    ) {}
}
