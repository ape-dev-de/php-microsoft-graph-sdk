<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsActivitySettings
 */
class ExternalConnectorsActivitySettings
{
    public function __construct(
        /** @var string[] Specifies configurations to identify an externalItem based on a shared URL. */
        public array $urlToItemResolvers = []
    ) {}
}
