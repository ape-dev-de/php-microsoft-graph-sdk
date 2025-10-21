<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityCategoryTemplate
 */
class SecurityCategoryTemplate
{
    public function __construct(
        /** @var string[] Represents all subcategories under a particular category. */
        public array $subcategories = []
    ) {}
}
