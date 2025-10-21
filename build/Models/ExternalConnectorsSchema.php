<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsSchema
 */
class ExternalConnectorsSchema
{
    public function __construct(
        /** Must be set to microsoft.graph.externalConnector.externalItem. Required. */
        public array $baseType = [],
        /** The properties defined for the items in the connection. The minimum number of properties is one, the maximum is 128. */
        public ?string $items = null
    ) {}
}
