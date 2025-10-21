<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PersonType
 */
class PersonType
{
    public function __construct(
        /** The type of data source, such as Person. */
        public ?string $class = null,
        /** The secondary type of data source, such as OrganizationUser. */
        public ?string $subclass = null
    ) {}
}
