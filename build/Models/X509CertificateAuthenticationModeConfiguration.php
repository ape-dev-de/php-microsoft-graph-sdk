<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * X509CertificateAuthenticationModeConfiguration
 */
class X509CertificateAuthenticationModeConfiguration
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Rules are configured in addition to the authentication mode to bind a specific x509CertificateRuleType to an x509CertificateAuthenticationMode. For example, bind the policyOID with identifier 1.32.132.343 to x509CertificateMultiFactor authentication mode.
     * @var X509CertificateRule[]
     */
    public array $rules = [];

    /** 
     * The type of strong authentication mode. The possible values are: x509CertificateSingleFactor, x509CertificateMultiFactor, unknownFutureValue.
     * @var X509CertificateAuthenticationMode|\stdClass|null
     */
    public X509CertificateAuthenticationMode|\stdClass|null $x509CertificateAuthenticationDefaultMode = null;

    /** 
     * 
     * @var X509CertificateAffinityLevel|\stdClass|null
     */
    public X509CertificateAffinityLevel|\stdClass|null $x509CertificateDefaultRequiredAffinityLevel = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['rules'])) {
            $this->rules = $data['rules'];
        }
        if (isset($data['x509CertificateAuthenticationDefaultMode'])) {
            $this->x509CertificateAuthenticationDefaultMode = is_array($data['x509CertificateAuthenticationDefaultMode']) ? new X509CertificateAuthenticationMode($data['x509CertificateAuthenticationDefaultMode']) : $data['x509CertificateAuthenticationDefaultMode'];
        }
        if (isset($data['x509CertificateDefaultRequiredAffinityLevel'])) {
            $this->x509CertificateDefaultRequiredAffinityLevel = is_array($data['x509CertificateDefaultRequiredAffinityLevel']) ? new X509CertificateAffinityLevel($data['x509CertificateDefaultRequiredAffinityLevel']) : $data['x509CertificateDefaultRequiredAffinityLevel'];
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
