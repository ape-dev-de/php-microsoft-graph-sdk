<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * X509CertificateUserBinding
 */
class X509CertificateUserBinding
{
    /**
     * The priority of the binding. Microsoft Entra ID uses the binding with the highest priority. This value must be a non-negative integer and unique in the collection of objects in the certificateUserBindings property of an x509CertificateAuthenticationMethodConfiguration object. Required
     */
    private ?float $priority;

    /**
     */
    private ?string $trustAffinityLevel;

    /**
     * Defines the Microsoft Entra user property of the user object to use for the binding. The possible values are: userPrincipalName, onPremisesUserPrincipalName, certificateUserIds. Required.
     */
    private ?string $userProperty;

    /**
     * The field on the X.509 certificate to use for the binding. The possible values are: PrincipalName, RFC822Name, SubjectKeyIdentifier, SHA1PublicKey.
     */
    private ?string $x509CertificateField;


    public function getPriority(): ?float
    {
        return $this->priority;
    }

    public function setPriority(?float $priority): self
    {
        $this->priority = $priority;
        return $this;
    }

    public function getTrustAffinityLevel(): ?string
    {
        return $this->trustAffinityLevel;
    }

    public function setTrustAffinityLevel(?string $trustAffinityLevel): self
    {
        $this->trustAffinityLevel = $trustAffinityLevel;
        return $this;
    }

    public function getUserProperty(): ?string
    {
        return $this->userProperty;
    }

    public function setUserProperty(?string $userProperty): self
    {
        $this->userProperty = $userProperty;
        return $this;
    }

    public function getX509CertificateField(): ?string
    {
        return $this->x509CertificateField;
    }

    public function setX509CertificateField(?string $x509CertificateField): self
    {
        $this->x509CertificateField = $x509CertificateField;
        return $this;
    }

}
