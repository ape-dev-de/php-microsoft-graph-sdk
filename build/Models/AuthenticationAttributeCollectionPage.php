<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationAttributeCollectionPage
 */
class AuthenticationAttributeCollectionPage
{
    public function __construct(
        /** @var string[] A collection of displays of the attribute collection page. */
        public array $views = []
    ) {}
}
