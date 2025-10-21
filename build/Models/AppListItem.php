<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppListItem
 */
class AppListItem
{
    public function __construct(
        /** The application or bundle identifier of the application */
        public ?string $appId = null,
        /** The Store URL of the application */
        public ?string $appStoreUrl = null,
        /** The application name */
        public ?string $name = null,
        /** The publisher of the application */
        public ?string $publisher = null
    ) {}
}
