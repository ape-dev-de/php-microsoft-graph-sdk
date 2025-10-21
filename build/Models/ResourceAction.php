<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResourceAction
 */
class ResourceAction
{
    public function __construct(
        /** @var string[] Allowed Actions */
        public array $allowedResourceActions = [],
        /** @var string[] Set of allowed and not allowed actions for a resource. */
        public array $notAllowedResourceActions = []
    ) {}
}
