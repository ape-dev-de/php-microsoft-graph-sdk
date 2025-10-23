<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CertificateBasedAuthConfiguration
 */
class CertificateBasedAuthConfiguration
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Collection of certificate authorities which creates a trusted certificate chain.
     * @var CertificateAuthority[]
     */
    public array $certificateAuthorities = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['certificateAuthorities'])) {
            $this->certificateAuthorities = $data['certificateAuthorities'];
        }
    }
}
