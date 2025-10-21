<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TermsAndConditionsAcceptanceStatus resources
 *
 * Available select fields:
 * - acceptedDateTime
 * - acceptedVersion
 * - userDisplayName
 * - userPrincipalName
 * - termsAndConditions
 */
class TermsAndConditionsAcceptanceStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TermsAndConditionsAcceptanceStatus
     */
    public const FIELD_ACCEPTED_DATE_TIME = 'acceptedDateTime';
    public const FIELD_ACCEPTED_VERSION = 'acceptedVersion';
    public const FIELD_USER_DISPLAY_NAME = 'userDisplayName';
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';
    public const FIELD_TERMS_AND_CONDITIONS = 'termsAndConditions';

    /**
     * Select specific TermsAndConditionsAcceptanceStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
