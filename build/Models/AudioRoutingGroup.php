<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AudioRoutingGroup
 */
class AudioRoutingGroup
{
    public function __construct(
        /** @var string[] List of receiving participant ids. */
        public array $receivers = [],
        /**  */
        public ?string $routingMode = null,
        /** @var string[] List of source participant ids. */
        public array $sources = []
    ) {}
}
