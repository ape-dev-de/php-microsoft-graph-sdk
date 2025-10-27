<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InternalDomainFederation
 */
class InternalDomainFederation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The display name of the identity provider. */
    public ?string $displayName = null;

    /** Issuer URI of the federation server. */
    public ?string $issuerUri = null;

    /** URI of the metadata exchange endpoint used for authentication from rich client applications. */
    public ?string $metadataExchangeUri = null;

    /** URI that web-based clients are directed to when signing in to Microsoft Entra services. */
    public ?string $passiveSignInUri = null;

    /** 
     * Preferred authentication protocol. The possible values are: wsFed, saml, unknownFutureValue.
     * @var AuthenticationProtocol|\stdClass|null
     */
    public AuthenticationProtocol|\stdClass|null $preferredAuthenticationProtocol = null;

    /** Current certificate used to sign tokens passed to the Microsoft identity platform. The certificate is formatted as a Base64 encoded string of the public portion of the federated IdP's token signing certificate and must be compatible with the X509Certificate2 class.   This property is used in the following scenarios:  if a rollover is required outside of the autorollover update a new federation service is being set up  if the new token signing certificate isn't present in the federation properties after the federation service certificate has been updated.   Microsoft Entra ID updates certificates via an autorollover process in which it attempts to retrieve a new certificate from the federation service metadata, 30 days before expiry of the current certificate. If a new certificate isn't available, Microsoft Entra ID monitors the metadata daily and will update the federation settings for the domain when a new certificate is available. */
    public ?string $signingCertificate = null;

    /** URL of the endpoint used by active clients when authenticating with federated domains set up for single sign-on in Microsoft Entra ID. Corresponds to the ActiveLogOnUri property of the Set-EntraDomainFederationSettings PowerShell cmdlet. */
    public ?string $activeSignInUri = null;

    /** 
     * Determines whether Microsoft Entra ID accepts the MFA performed by the federated IdP when a federated user accesses an application that is governed by a conditional access policy that requires MFA. The possible values are: acceptIfMfaDoneByFederatedIdp, enforceMfaByFederatedIdp, rejectMfaByFederatedIdp, unknownFutureValue. For more information, see federatedIdpMfaBehavior values.
     * @var FederatedIdpMfaBehavior|\stdClass|null
     */
    public FederatedIdpMfaBehavior|\stdClass|null $federatedIdpMfaBehavior = null;

    /** If true, when SAML authentication requests are sent to the federated SAML IdP, Microsoft Entra ID will sign those requests using the OrgID signing key. If false (default), the SAML authentication requests sent to the federated IdP aren't signed. */
    public ?bool $isSignedAuthenticationRequestRequired = null;

    /** Fallback token signing certificate that can also be used to sign tokens, for example when the primary signing certificate expires. Formatted as Base64 encoded strings of the public portion of the federated IdP's token signing certificate. Needs to be compatible with the X509Certificate2 class. Much like the signingCertificate, the nextSigningCertificate property is used if a rollover is required outside of the auto-rollover update, a new federation service is being set up, or if the new token signing certificate isn't present in the federation properties after the federation service certificate has been updated. */
    public ?string $nextSigningCertificate = null;

    /**  */
    public ?string $passwordResetUri = null;

    /** 
     * Sets the preferred behavior for the sign-in prompt. The possible values are: translateToFreshPasswordAuthentication, nativeSupport, disabled, unknownFutureValue.
     * @var PromptLoginBehavior|\stdClass|null
     */
    public PromptLoginBehavior|\stdClass|null $promptLoginBehavior = null;

    /** 
     * Provides status and timestamp of the last update of the signing certificate.
     * @var SigningCertificateUpdateStatus|\stdClass|null
     */
    public SigningCertificateUpdateStatus|\stdClass|null $signingCertificateUpdateStatus = null;

    /** URI that clients are redirected to when they sign out of Microsoft Entra services. Corresponds to the LogOffUri property of the Set-EntraDomainFederationSettings PowerShell cmdlet. */
    public ?string $signOutUri = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['issuerUri'])) {
            $this->issuerUri = $data['issuerUri'];
        }
        if (isset($data['metadataExchangeUri'])) {
            $this->metadataExchangeUri = $data['metadataExchangeUri'];
        }
        if (isset($data['passiveSignInUri'])) {
            $this->passiveSignInUri = $data['passiveSignInUri'];
        }
        if (isset($data['preferredAuthenticationProtocol'])) {
            $this->preferredAuthenticationProtocol = is_array($data['preferredAuthenticationProtocol']) ? new AuthenticationProtocol($data['preferredAuthenticationProtocol']) : $data['preferredAuthenticationProtocol'];
        }
        if (isset($data['signingCertificate'])) {
            $this->signingCertificate = $data['signingCertificate'];
        }
        if (isset($data['activeSignInUri'])) {
            $this->activeSignInUri = $data['activeSignInUri'];
        }
        if (isset($data['federatedIdpMfaBehavior'])) {
            $this->federatedIdpMfaBehavior = is_array($data['federatedIdpMfaBehavior']) ? new FederatedIdpMfaBehavior($data['federatedIdpMfaBehavior']) : $data['federatedIdpMfaBehavior'];
        }
        if (isset($data['isSignedAuthenticationRequestRequired'])) {
            $this->isSignedAuthenticationRequestRequired = is_bool($data['isSignedAuthenticationRequestRequired']) ? $data['isSignedAuthenticationRequestRequired'] : (bool)$data['isSignedAuthenticationRequestRequired'];
        }
        if (isset($data['nextSigningCertificate'])) {
            $this->nextSigningCertificate = $data['nextSigningCertificate'];
        }
        if (isset($data['passwordResetUri'])) {
            $this->passwordResetUri = $data['passwordResetUri'];
        }
        if (isset($data['promptLoginBehavior'])) {
            $this->promptLoginBehavior = is_array($data['promptLoginBehavior']) ? new PromptLoginBehavior($data['promptLoginBehavior']) : $data['promptLoginBehavior'];
        }
        if (isset($data['signingCertificateUpdateStatus'])) {
            $this->signingCertificateUpdateStatus = is_array($data['signingCertificateUpdateStatus']) ? new SigningCertificateUpdateStatus($data['signingCertificateUpdateStatus']) : $data['signingCertificateUpdateStatus'];
        }
        if (isset($data['signOutUri'])) {
            $this->signOutUri = $data['signOutUri'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
