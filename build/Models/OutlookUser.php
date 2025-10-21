<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OutlookUser
 */
class OutlookUser
{
    public function __construct(
        /** @var string[] A list of categories defined for the user. */
        public array $masterCategories = []
    ) {}
}
