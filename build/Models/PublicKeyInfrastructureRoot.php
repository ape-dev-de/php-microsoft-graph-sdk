<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PublicKeyInfrastructureRoot
 */
class PublicKeyInfrastructureRoot
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The collection of public key infrastructure instances for the certificate-based authentication feature for users.
     * @var CertificateBasedAuthPki[]
     */
    public array $certificateBasedAuthConfigurations = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['certificateBasedAuthConfigurations'])) {
            $this->certificateBasedAuthConfigurations = $data['certificateBasedAuthConfigurations'];
        }
    }
}
