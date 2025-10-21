<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationAttributeCollectionPageViewConfiguration
 */
class AuthenticationAttributeCollectionPageViewConfiguration
{
    public function __construct(
        /** The description of the page. */
        public ?string $description = null,
        /** The display configuration of attributes being collected on the attribute collection page. You must specify all attributes that you want to retain, otherwise they're removed from the user flow. */
        public array $inputs = [],
        /** The title of the attribute collection page. */
        public ?string $title = null
    ) {}
}
