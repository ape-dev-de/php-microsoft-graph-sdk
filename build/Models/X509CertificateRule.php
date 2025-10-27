<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * X509CertificateRule
 */
class X509CertificateRule
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The identifier of the X.509 certificate. Required. */
    public ?string $identifier = null;

    /**  */
    public ?string $issuerSubjectIdentifier = null;

    /**  */
    public ?string $policyOidIdentifier = null;

    /** 
     * The type of strong authentication mode. The possible values are: x509CertificateSingleFactor, x509CertificateMultiFactor, unknownFutureValue. Required.
     * @var X509CertificateAuthenticationMode|\stdClass|null
     */
    public mixed $x509CertificateAuthenticationMode = null;

    /** 
     * 
     * @var X509CertificateAffinityLevel|\stdClass|null
     */
    public mixed $x509CertificateRequiredAffinityLevel = null;

    /** 
     * The type of the X.509 certificate mode configuration rule. The possible values are: issuerSubject, policyOID, unknownFutureValue. Required.
     * @var X509CertificateRuleType|\stdClass|null
     */
    public mixed $x509CertificateRuleType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['identifier'])) {
            $this->identifier = $data['identifier'];
        }
        if (isset($data['issuerSubjectIdentifier'])) {
            $this->issuerSubjectIdentifier = $data['issuerSubjectIdentifier'];
        }
        if (isset($data['policyOidIdentifier'])) {
            $this->policyOidIdentifier = $data['policyOidIdentifier'];
        }
        if (isset($data['x509CertificateAuthenticationMode'])) {
            $this->x509CertificateAuthenticationMode = is_array($data['x509CertificateAuthenticationMode']) ? new X509CertificateAuthenticationMode($data['x509CertificateAuthenticationMode']) : $data['x509CertificateAuthenticationMode'];
        }
        if (isset($data['x509CertificateRequiredAffinityLevel'])) {
            $this->x509CertificateRequiredAffinityLevel = is_array($data['x509CertificateRequiredAffinityLevel']) ? new X509CertificateAffinityLevel($data['x509CertificateRequiredAffinityLevel']) : $data['x509CertificateRequiredAffinityLevel'];
        }
        if (isset($data['x509CertificateRuleType'])) {
            $this->x509CertificateRuleType = is_array($data['x509CertificateRuleType']) ? new X509CertificateRuleType($data['x509CertificateRuleType']) : $data['x509CertificateRuleType'];
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
