<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PeopleAdminSettings
 */
class PeopleAdminSettings
{
    public function __construct(
        /** Represents administrator settings that manage the support for item insights in an organization. */
        public ?string $itemInsights = null,
        /** Contains a collection of the properties an administrator has defined as visible on the Microsoft 365 profile card. */
        public array $profileCardProperties = [],
        /** Represents administrator settings that manage the support of pronouns in an organization. */
        public ?string $pronouns = null
    ) {}
}
