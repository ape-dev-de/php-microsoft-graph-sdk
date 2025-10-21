<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ApplicationContext
 */
class ApplicationContext
{
    public function __construct(
        /** @var string[] Collection of appId values for the applications. */
        public array $includeApplications = []
    ) {}
}
