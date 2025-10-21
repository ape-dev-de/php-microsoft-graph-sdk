<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEmailSender resources
 *
 * Available select fields:
 * - displayName
 * - domainName
 * - emailAddress
 */
class SecurityEmailSenderQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityEmailSender
     */
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_DOMAIN_NAME = 'domainName';
    public const FIELD_EMAIL_ADDRESS = 'emailAddress';

    /**
     * Select specific SecurityEmailSender properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
