<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserFlowApiConnectorConfiguration
 */
class UserFlowApiConnectorConfiguration
{
    public function __construct(
        /**  */
        public ?string $postAttributeCollection = null,
        /**  */
        public ?string $postFederationSignup = null
    ) {}
}
