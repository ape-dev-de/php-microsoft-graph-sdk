<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AdminReportSettings
 */
class AdminReportSettings
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** If set to true, all reports conceal user information such as usernames, groups, and sites. If false, all reports show identifiable information. This property represents a setting in the Microsoft 365 admin center. Required. */
        public ?bool $displayConcealedNames = null
    ) {}
}
