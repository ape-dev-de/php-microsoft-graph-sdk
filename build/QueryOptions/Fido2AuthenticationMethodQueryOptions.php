<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Fido2AuthenticationMethod resources
 *
 * Available select fields:
 * - aaGuid
 * - attestationCertificates
 * - attestationLevel
 * - createdDateTime
 * - displayName
 * - model
 */
class Fido2AuthenticationMethodQueryOptions extends QueryOptions
{
    public const FIELD_AA_GUID = 'aaGuid';
    public const FIELD_ATTESTATION_CERTIFICATES = 'attestationCertificates';
    public const FIELD_ATTESTATION_LEVEL = 'attestationLevel';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_MODEL = 'model';

    /**
     * Select specific Fido2AuthenticationMethod properties
     * 
     * @param array<string> $select Use Fido2AuthenticationMethodQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
