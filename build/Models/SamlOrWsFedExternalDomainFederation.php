<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SamlOrWsFedExternalDomainFederation
 */
class SamlOrWsFedExternalDomainFederation
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The display name of the identity provider. */
        public ?string $displayName = null,
        /** Issuer URI of the federation server. */
        public ?string $issuerUri = null,
        /** URI of the metadata exchange endpoint used for authentication from rich client applications. */
        public ?string $metadataExchangeUri = null,
        /** URI that web-based clients are directed to when signing in to Microsoft Entra services. */
        public ?string $passiveSignInUri = null,
        /** Preferred authentication protocol. The possible values are: wsFed, saml, unknownFutureValue. */
        public ?AuthenticationProtocol $preferredAuthenticationProtocol = null,
        /** Current certificate used to sign tokens passed to the Microsoft identity platform. The certificate is formatted as a Base64 encoded string of the public portion of the federated IdP's token signing certificate and must be compatible with the X509Certificate2 class.   This property is used in the following scenarios:  if a rollover is required outside of the autorollover update a new federation service is being set up  if the new token signing certificate isn't present in the federation properties after the federation service certificate has been updated.   Microsoft Entra ID updates certificates via an autorollover process in which it attempts to retrieve a new certificate from the federation service metadata, 30 days before expiry of the current certificate. If a new certificate isn't available, Microsoft Entra ID monitors the metadata daily and will update the federation settings for the domain when a new certificate is available. */
        public ?string $signingCertificate = null,
        /** Collection of domain names of the external organizations that the tenant is federating with. Supports $filter (eq). */
        public array $domains = []
    ) {}
}
