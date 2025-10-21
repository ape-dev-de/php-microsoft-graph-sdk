<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecuritySslCertificateEntity resources
 *
 * Available select fields:
 * - address
 * - alternateNames
 * - commonName
 * - email
 * - givenName
 * - organizationName
 * - organizationUnitName
 * - serialNumber
 * - surname
 */
class SecuritySslCertificateEntityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecuritySslCertificateEntity
     */
    public const FIELD_ADDRESS = 'address';
    public const FIELD_ALTERNATE_NAMES = 'alternateNames';
    public const FIELD_COMMON_NAME = 'commonName';
    public const FIELD_EMAIL = 'email';
    public const FIELD_GIVEN_NAME = 'givenName';
    public const FIELD_ORGANIZATION_NAME = 'organizationName';
    public const FIELD_ORGANIZATION_UNIT_NAME = 'organizationUnitName';
    public const FIELD_SERIAL_NUMBER = 'serialNumber';
    public const FIELD_SURNAME = 'surname';

    /**
     * Select specific SecuritySslCertificateEntity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
