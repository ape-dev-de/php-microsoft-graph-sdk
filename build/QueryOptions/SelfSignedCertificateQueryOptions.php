<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SelfSignedCertificate resources
 *
 * Available select fields:
 * - customKeyIdentifier
 * - displayName
 * - endDateTime
 * - key
 * - keyId
 * - startDateTime
 * - thumbprint
 * - type
 * - usage
 */
class SelfSignedCertificateQueryOptions extends QueryOptions
{
    public const FIELD_CUSTOM_KEY_IDENTIFIER = 'customKeyIdentifier';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_KEY = 'key';
    public const FIELD_KEY_ID = 'keyId';
    public const FIELD_START_DATE_TIME = 'startDateTime';
    public const FIELD_THUMBPRINT = 'thumbprint';
    public const FIELD_TYPE = 'type';
    public const FIELD_USAGE = 'usage';

    /**
     * Select specific SelfSignedCertificate properties
     * 
     * @param array<string> $select Use SelfSignedCertificateQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
