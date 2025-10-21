<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Website
 */
class Website
{
    public function __construct(
        /** The URL of the website. */
        public ?string $address = null,
        /** The display name of the web site. */
        public ?string $displayName = null,
        /** The possible values are: other, home, work, blog, profile. */
        public ?WebsiteType $type = null
    ) {}
}
