<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * X509CertificateUserBinding
 */
class X509CertificateUserBinding
{
    public function __construct(
        /** The priority of the binding. Microsoft Entra ID uses the binding with the highest priority. This value must be a non-negative integer and unique in the collection of objects in the certificateUserBindings property of an x509CertificateAuthenticationMethodConfiguration object. Required */
        public ?float $priority = null,
        /**  */
        public ?X509CertificateAffinityLevel $trustAffinityLevel = null,
        /** Defines the Microsoft Entra user property of the user object to use for the binding. The possible values are: userPrincipalName, onPremisesUserPrincipalName, certificateUserIds. Required. */
        public ?string $userProperty = null,
        /** The field on the X.509 certificate to use for the binding. The possible values are: PrincipalName, RFC822Name, SubjectKeyIdentifier, SHA1PublicKey. */
        public ?string $x509CertificateField = null
    ) {}
}
