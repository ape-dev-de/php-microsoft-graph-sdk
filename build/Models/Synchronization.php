<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Synchronization
 */
class Synchronization
{
    public function __construct(
        /** Represents a collection of credentials to access provisioned cloud applications. */
        public array $secrets = [],
        /** Performs synchronization by periodically running in the background, polling for changes in one directory, and pushing them to another directory. */
        public array $jobs = [],
        /** @var string[] Preconfigured synchronization settings for a particular application. */
        public array $templates = []
    ) {}
}
