<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CertificateBasedAuthPki resources
 *
 * Available select fields:
 * - displayName
 * - lastModifiedDateTime
 * - status
 * - statusDetails
 * - certificateAuthorities
 */
class CertificateBasedAuthPkiQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_DETAILS = 'statusDetails';
    public const FIELD_CERTIFICATE_AUTHORITIES = 'certificateAuthorities';

    /**
     * Select specific CertificateBasedAuthPki properties
     * 
     * @param array<string> $select Use CertificateBasedAuthPkiQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
