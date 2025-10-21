<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MobileAppAssignment
 */
class MobileAppAssignment
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?string $intent = null,
        /** The settings for target assignment defined by the admin. */
        public ?string $settings = null,
        /** A class containing the properties used for Group Assignment of a Mobile App. */
        public ?string $target = null
    ) {}
}
