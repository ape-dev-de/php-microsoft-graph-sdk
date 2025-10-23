<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceAndAppManagementData;

/**
 * Request builder for exportDeviceAndAppManagementData()
 */
class ExportDeviceAndAppManagementDataRequestBuilder extends BaseRequestBuilder
{
    /**
     * Invoke function exportDeviceAndAppManagementData
     * @return DeviceAndAppManagementData|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): DeviceAndAppManagementData|\stdClass
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to DeviceAndAppManagementData|\stdClass
     */
    private function deserializeGet(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new DeviceAndAppManagementData($data);
    }
}
