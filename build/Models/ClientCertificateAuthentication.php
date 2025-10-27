<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ClientCertificateAuthentication
 */
class ClientCertificateAuthentication
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['certificateList'])) {
            $this->certificateList = $data['certificateList'];
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
