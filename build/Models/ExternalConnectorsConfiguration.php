<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsConfiguration
 */
class ExternalConnectorsConfiguration
{
    public function __construct(
        /** @var string[] A collection of application IDs for registered Microsoft Entra apps that are allowed to manage the externalConnection and to index content in the externalConnection. */
        public array $authorizedAppIds = []
    ) {}
}
