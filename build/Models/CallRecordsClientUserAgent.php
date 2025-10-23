<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsClientUserAgent
 */
class CallRecordsClientUserAgent
{
    /** Identifies the version of application software used by this endpoint. */
    public ?string $applicationVersion = null;

    /** User-agent header value reported by this endpoint. */
    public ?string $headerValue = null;

    /** The unique identifier of the Microsoft Entra application used by this endpoint. */
    public ?string $azureADAppId = null;

    /** Immutable resource identifier of the Azure Communication Service associated with this endpoint based on Communication Services APIs. */
    public ?string $communicationServiceId = null;

    /**  */
    public ?CallRecordsClientPlatform $platform = null;

    /**  */
    public ?CallRecordsProductFamily $productFamily = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['applicationVersion'])) {
            $this->applicationVersion = $data['applicationVersion'];
        }
        if (isset($data['headerValue'])) {
            $this->headerValue = $data['headerValue'];
        }
        if (isset($data['azureADAppId'])) {
            $this->azureADAppId = $data['azureADAppId'];
        }
        if (isset($data['communicationServiceId'])) {
            $this->communicationServiceId = $data['communicationServiceId'];
        }
        if (isset($data['platform'])) {
            $this->platform = is_array($data['platform']) ? new CallRecordsClientPlatform($data['platform']) : $data['platform'];
        }
        if (isset($data['productFamily'])) {
            $this->productFamily = is_array($data['productFamily']) ? new CallRecordsProductFamily($data['productFamily']) : $data['productFamily'];
        }
    }
}
