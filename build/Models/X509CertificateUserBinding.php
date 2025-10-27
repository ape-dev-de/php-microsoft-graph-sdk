<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * X509CertificateUserBinding
 */
class X509CertificateUserBinding
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The priority of the binding. Microsoft Entra ID uses the binding with the highest priority. This value must be a non-negative integer and unique in the collection of objects in the certificateUserBindings property of an x509CertificateAuthenticationMethodConfiguration object. Required */
    public ?float $priority = null;

    /** 
     * 
     * @var X509CertificateAffinityLevel|\stdClass|null
     */
    public X509CertificateAffinityLevel|\stdClass|null $trustAffinityLevel = null;

    /** Defines the Microsoft Entra user property of the user object to use for the binding. The possible values are: userPrincipalName, onPremisesUserPrincipalName, certificateUserIds. Required. */
    public ?string $userProperty = null;

    /** The field on the X.509 certificate to use for the binding. The possible values are: PrincipalName, RFC822Name, SubjectKeyIdentifier, SHA1PublicKey. */
    public ?string $x509CertificateField = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['priority'])) {
            $this->priority = is_numeric($data['priority']) ? (float)$data['priority'] : $data['priority'];
        }
        if (isset($data['trustAffinityLevel'])) {
            $this->trustAffinityLevel = is_array($data['trustAffinityLevel']) ? new X509CertificateAffinityLevel($data['trustAffinityLevel']) : $data['trustAffinityLevel'];
        }
        if (isset($data['userProperty'])) {
            $this->userProperty = $data['userProperty'];
        }
        if (isset($data['x509CertificateField'])) {
            $this->x509CertificateField = $data['x509CertificateField'];
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
