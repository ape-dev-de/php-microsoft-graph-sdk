<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AudioRoutingGroup
 */
class AudioRoutingGroup
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** @var string[] List of receiving participant ids. */
        public array $receivers = [],
        /**  */
        public ?RoutingMode $routingMode = null,
        /** @var string[] List of source participant ids. */
        public array $sources = []
    ) {}
}
