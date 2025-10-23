<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ClientCertificateAuthentication
 */
class ClientCertificateAuthentication
{
    /** 
     * The list of certificates uploaded for this API connector.
     * @var Pkcs12CertificateInformation[]
     */
    public array $certificateList = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['certificateList'])) {
            $this->certificateList = $data['certificateList'];
        }
    }
}
