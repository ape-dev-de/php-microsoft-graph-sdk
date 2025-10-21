<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InternalDomainFederation resources
 *
 * Available select fields:
 * - activeSignInUri
 * - federatedIdpMfaBehavior
 * - isSignedAuthenticationRequestRequired
 * - nextSigningCertificate
 * - passwordResetUri
 * - promptLoginBehavior
 * - signingCertificateUpdateStatus
 * - signOutUri
 */
class InternalDomainFederationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for InternalDomainFederation
     */
    public const FIELD_ACTIVE_SIGN_IN_URI = 'activeSignInUri';
    public const FIELD_FEDERATED_IDP_MFA_BEHAVIOR = 'federatedIdpMfaBehavior';
    public const FIELD_IS_SIGNED_AUTHENTICATION_REQUEST_REQUIRED = 'isSignedAuthenticationRequestRequired';
    public const FIELD_NEXT_SIGNING_CERTIFICATE = 'nextSigningCertificate';
    public const FIELD_PASSWORD_RESET_URI = 'passwordResetUri';
    public const FIELD_PROMPT_LOGIN_BEHAVIOR = 'promptLoginBehavior';
    public const FIELD_SIGNING_CERTIFICATE_UPDATE_STATUS = 'signingCertificateUpdateStatus';
    public const FIELD_SIGN_OUT_URI = 'signOutUri';

    /**
     * Select specific InternalDomainFederation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
