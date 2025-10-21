<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AdminConsentRequestPolicy
 */
class AdminConsentRequestPolicy
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Specifies whether the admin consent request feature is enabled or disabled. Required. */
        public ?bool $isEnabled = null,
        /** Specifies whether reviewers will receive notifications. Required. */
        public ?bool $notifyReviewers = null,
        /** Specifies whether reviewers will receive reminder emails. Required. */
        public ?bool $remindersEnabled = null,
        /** Specifies the duration the request is active before it automatically expires if no decision is applied. */
        public ?float $requestDurationInDays = null,
        /** The list of reviewers for the admin consent. Required. */
        public array $reviewers = [],
        /** Specifies the version of this policy. When the policy is updated, this version is updated. Read-only. */
        public ?float $version = null
    ) {}
}
