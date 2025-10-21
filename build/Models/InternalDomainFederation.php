<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InternalDomainFederation
 */
class InternalDomainFederation
{
    public function __construct(
        /** URL of the endpoint used by active clients when authenticating with federated domains set up for single sign-on in Microsoft Entra ID. Corresponds to the ActiveLogOnUri property of the Set-EntraDomainFederationSettings PowerShell cmdlet. */
        public ?string $activeSignInUri = null,
        /** Determines whether Microsoft Entra ID accepts the MFA performed by the federated IdP when a federated user accesses an application that is governed by a conditional access policy that requires MFA. The possible values are: acceptIfMfaDoneByFederatedIdp, enforceMfaByFederatedIdp, rejectMfaByFederatedIdp, unknownFutureValue. For more information, see federatedIdpMfaBehavior values. */
        public ?string $federatedIdpMfaBehavior = null,
        /** If true, when SAML authentication requests are sent to the federated SAML IdP, Microsoft Entra ID will sign those requests using the OrgID signing key. If false (default), the SAML authentication requests sent to the federated IdP aren''t signed. */
        public ?bool $isSignedAuthenticationRequestRequired = null,
        /** Fallback token signing certificate that can also be used to sign tokens, for example when the primary signing certificate expires. Formatted as Base64 encoded strings of the public portion of the federated IdP''s token signing certificate. Needs to be compatible with the X509Certificate2 class. Much like the signingCertificate, the nextSigningCertificate property is used if a rollover is required outside of the auto-rollover update, a new federation service is being set up, or if the new token signing certificate isn''t present in the federation properties after the federation service certificate has been updated. */
        public ?string $nextSigningCertificate = null,
        /**  */
        public ?string $passwordResetUri = null,
        /** Sets the preferred behavior for the sign-in prompt. The possible values are: translateToFreshPasswordAuthentication, nativeSupport, disabled, unknownFutureValue. */
        public ?string $promptLoginBehavior = null,
        /** Provides status and timestamp of the last update of the signing certificate. */
        public ?string $signingCertificateUpdateStatus = null,
        /** URI that clients are redirected to when they sign out of Microsoft Entra services. Corresponds to the LogOffUri property of the Set-EntraDomainFederationSettings PowerShell cmdlet. */
        public ?string $signOutUri = null
    ) {}
}
