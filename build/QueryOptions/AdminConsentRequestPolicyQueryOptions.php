<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AdminConsentRequestPolicy resources
 *
 * Available select fields:
 * - isEnabled
 * - notifyReviewers
 * - remindersEnabled
 * - requestDurationInDays
 * - reviewers
 * - version
 */
class AdminConsentRequestPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AdminConsentRequestPolicy
     */
    public const FIELD_IS_ENABLED = 'isEnabled';
    public const FIELD_NOTIFY_REVIEWERS = 'notifyReviewers';
    public const FIELD_REMINDERS_ENABLED = 'remindersEnabled';
    public const FIELD_REQUEST_DURATION_IN_DAYS = 'requestDurationInDays';
    public const FIELD_REVIEWERS = 'reviewers';
    public const FIELD_VERSION = 'version';

    /**
     * Select specific AdminConsentRequestPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
