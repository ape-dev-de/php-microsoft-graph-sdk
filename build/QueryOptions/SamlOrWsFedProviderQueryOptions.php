<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SamlOrWsFedProvider resources
 *
 * Available select fields:
 * - issuerUri
 * - metadataExchangeUri
 * - passiveSignInUri
 * - preferredAuthenticationProtocol
 * - signingCertificate
 */
class SamlOrWsFedProviderQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SamlOrWsFedProvider
     */
    public const FIELD_ISSUER_URI = 'issuerUri';
    public const FIELD_METADATA_EXCHANGE_URI = 'metadataExchangeUri';
    public const FIELD_PASSIVE_SIGN_IN_URI = 'passiveSignInUri';
    public const FIELD_PREFERRED_AUTHENTICATION_PROTOCOL = 'preferredAuthenticationProtocol';
    public const FIELD_SIGNING_CERTIFICATE = 'signingCertificate';

    /**
     * Select specific SamlOrWsFedProvider properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
