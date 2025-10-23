<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Pkcs12CertificateInformation
 */
class Pkcs12CertificateInformation
{
    /** Represents whether the certificate is the active certificate to be used for calling the API connector. The active certificate is the most recently uploaded certificate that isn't yet expired but whose notBefore time is in the past. */
    public ?bool $isActive = null;

    /** The certificate's expiry. This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.) */
    public ?float $notAfter = null;

    /** The certificate's issue time (not before). This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.) */
    public ?float $notBefore = null;

    /** The certificate thumbprint. */
    public ?string $thumbprint = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['isActive'])) {
            $this->isActive = $data['isActive'];
        }
        if (isset($data['notAfter'])) {
            $this->notAfter = $data['notAfter'];
        }
        if (isset($data['notBefore'])) {
            $this->notBefore = $data['notBefore'];
        }
        if (isset($data['thumbprint'])) {
            $this->thumbprint = $data['thumbprint'];
        }
    }
}
