<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RelatedContact resources
 *
 * Available select fields:
 * - accessConsent
 * - displayName
 * - emailAddress
 * - mobilePhone
 * - relationship
 */
class RelatedContactQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RelatedContact
     */
    public const FIELD_ACCESS_CONSENT = 'accessConsent';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_EMAIL_ADDRESS = 'emailAddress';
    public const FIELD_MOBILE_PHONE = 'mobilePhone';
    public const FIELD_RELATIONSHIP = 'relationship';

    /**
     * Select specific RelatedContact properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
