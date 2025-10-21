<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityContainerEvidence
 */
class SecurityContainerEvidence
{
    public function __construct(
        /** @var string[] The list of arguments. */
        public array $args = [],
        /** @var string[] The list of commands. */
        public array $command = [],
        /** The container ID. */
        public ?string $containerId = null,
        /** The image used to run the container. */
        public ?string $image = null,
        /** The privileged status. */
        public ?bool $isPrivileged = null,
        /** The container name. */
        public ?string $name = null,
        /** The pod this container belongs to. */
        public ?string $pod = null
    ) {}
}
