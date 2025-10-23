<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * X509CertificateAuthenticationModeConfiguration
 */
class X509CertificateAuthenticationModeConfiguration
{
    /** 
     * Rules are configured in addition to the authentication mode to bind a specific x509CertificateRuleType to an x509CertificateAuthenticationMode. For example, bind the policyOID with identifier 1.32.132.343 to x509CertificateMultiFactor authentication mode.
     * @var X509CertificateRule[]
     */
    public array $rules = [];

    /** 
     * The type of strong authentication mode. The possible values are: x509CertificateSingleFactor, x509CertificateMultiFactor, unknownFutureValue.
     * @var X509CertificateAuthenticationMode|\stdClass|null
     */
    public mixed $x509CertificateAuthenticationDefaultMode = null;

    /** 
     * 
     * @var X509CertificateAffinityLevel|\stdClass|null
     */
    public mixed $x509CertificateDefaultRequiredAffinityLevel = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['rules'])) {
            $this->rules = $data['rules'];
        }
        if (isset($data['x509CertificateAuthenticationDefaultMode'])) {
            $this->x509CertificateAuthenticationDefaultMode = $data['x509CertificateAuthenticationDefaultMode'];
        }
        if (isset($data['x509CertificateDefaultRequiredAffinityLevel'])) {
            $this->x509CertificateDefaultRequiredAffinityLevel = $data['x509CertificateDefaultRequiredAffinityLevel'];
        }
    }
}
